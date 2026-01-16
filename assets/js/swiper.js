import Swiper from 'swiper/bundle';
import { Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";

window.addEventListener("load", () => {
  if (document.querySelector(".single-zimmer") || document.querySelector(".single-suiten")) {

    const thumbs = new Swiper('.gallery-thumbs-swiper', {
      slidesPerView: 'auto',
      spaceBetween: 14,
      watchSlidesProgress: true,
    });

    new Swiper('.gallery-images-swiper', {
      slidesPerView: 1,
      loop: true,
      speed: 900,
      effect: 'slide',
      navigation: {
        nextEl: '.zimmer-suiten-nav-arrows .swiper-button-next',
        prevEl: '.zimmer-suiten-nav-arrows .swiper-button-prev',
      },
      thumbs: {
        swiper: thumbs,
      },
    });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const el = document.querySelector("#testimonials-section .testimonials-swiper");
  if (!el) return;

  new Swiper(el, {
    modules: [Pagination],
    slidesPerView: 1,
    spaceBetween: 20,
    grabCursor: true,

    breakpoints: {
        768: {
        slidesPerView: 1.5,
        },
        1280: {
        slidesPerView: 2.2,
        spaceBetween: 28,
        },
    },
    navigation: {
    nextEl: "#testimonials-section .testimonials-next",
    prevEl: "#testimonials-section .testimonials-prev",
  },
  });
});