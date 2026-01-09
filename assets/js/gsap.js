import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from "lenis";


//SMOOTH SCROLL SETUP
gsap.registerPlugin(ScrollTrigger);

const gheEaseExpoOut = (t) => (t === 1 ? 1 : 1 - Math.pow(2, -10 * t));

let gheLenis;
let tickerCallback;

export function gheInitLenisCinematic() {
  // Prevent double-init
  if (gheLenis) return gheLenis;

  const reduceMotion =
    window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  gheLenis = new Lenis({
    duration: reduceMotion ? 0 : 1.35,
    easing: reduceMotion ? (t) => t : gheEaseExpoOut,
    smoothWheel: !reduceMotion,
    wheelMultiplier: 0.85,
    touchMultiplier: 1,
  });

  // Keep ScrollTrigger updated on Lenis scroll
  gheLenis.on("scroll", ScrollTrigger.update);

  // Drive Lenis with GSAP ticker (single RAF source)
  tickerCallback = (time) => gheLenis.raf(time * 1000);
  gsap.ticker.add(tickerCallback);
  gsap.ticker.lagSmoothing(0);

  // Keep things in sync on refresh
  ScrollTrigger.addEventListener("refresh", () => gheLenis.resize());
  ScrollTrigger.refresh();

  return gheLenis;
}

export function gheDestroyLenis() {
  if (!gheLenis) return;

  gheLenis.destroy();
  gheLenis = null;

  if (tickerCallback) {
    gsap.ticker.remove(tickerCallback);
    tickerCallback = null;
  }
}

// init once (if you want auto-init in this module)
gheInitLenisCinematic();
