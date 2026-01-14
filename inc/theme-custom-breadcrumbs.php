<?php
/**
 * Fix Yoast breadcrumbs for custom hierarchy
 */
add_filter('wpseo_breadcrumb_links', 'acf_cpt_breadcrumbs_fixed_translated');

function acf_cpt_breadcrumbs_fixed_translated($links) {
    global $post;
    
    // 1. Handle SINGLE posts (Zimmer or Suiten)
    if (is_singular('zimmer') || is_singular('suiten')) {
        
        // Remove Yoast's auto archive
        $filtered_links = array();
        foreach ($links as $link) {
            if (isset($link['ptarchive'])) {
                continue;
            }
            $filtered_links[] = $link;
        }
        
        // GET THE TRANSLATED PARENT PAGE FOR CURRENT LANGUAGE
        $parent_page = null;
        
        if (function_exists('icl_object_id')) {
            // WPML method: Get page ID in current language
            $german_page = get_page_by_path('zimmer-suiten');
            
            if ($german_page) {
                $current_lang = apply_filters('wpml_current_language', NULL);
                $parent_page_id = icl_object_id($german_page->ID, 'page', true, $current_lang);
                
                if ($parent_page_id) {
                    $parent_page = get_post($parent_page_id);
                }
            }
        }
        
        // Fallback if WPML not working
        if (!$parent_page) {
            $parent_page = get_page_by_path('zimmer-suiten');
        }
        
        // Add parent page to breadcrumbs
        if ($parent_page) {
            $parent_crumb = array(
                'url' => get_permalink($parent_page),
                'text' => get_the_title($parent_page) // This should now be translated
            );
        }
        
        // Get translated post type label
        $post_type_obj = get_post_type_object($post->post_type);
        $archive_label = $post_type_obj->labels->name;
        
        $archive_crumb = array(
            'url' => get_post_type_archive_link($post->post_type),
            'text' => $archive_label
        );
        
        // Insert our custom structure
        if (isset($parent_crumb)) {
            array_splice($filtered_links, 1, 0, array($parent_crumb, $archive_crumb));
        }
        
        return $filtered_links;
    }
    
    // 2. Handle ARCHIVE pages (Zimmer or Suiten overview)
    if (is_post_type_archive('zimmer') || is_post_type_archive('suiten')) {
        $parent_page = null;
        
        // Get translated parent page for current language
        if (function_exists('icl_object_id')) {
            $german_page = get_page_by_path('zimmer-suiten');
            
            if ($german_page) {
                $current_lang = apply_filters('wpml_current_language', NULL);
                $parent_page_id = icl_object_id($german_page->ID, 'page', true, $current_lang);
                
                if ($parent_page_id) {
                    $parent_page = get_post($parent_page_id);
                }
            }
        }
        
        // Fallback
        if (!$parent_page) {
            $parent_page = get_page_by_path('zimmer-suiten');
        }
        
        // Add parent page before the archive in breadcrumbs
        if ($parent_page) {
            $parent_crumb = array(
                'url' => get_permalink($parent_page),
                'text' => get_the_title($parent_page)
            );
            
            // Insert after Home (position 1)
            array_splice($links, 1, 0, array($parent_crumb));
        }
    }
    
    return $links;
}