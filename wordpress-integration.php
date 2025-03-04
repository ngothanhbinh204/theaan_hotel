<?php

/**
 * WordPress Header with Menu and Submenu Integration
 * 
 * This file shows how to integrate the HTML/CSS/JS menu into a WordPress theme
 * with support for multi-level menus (nested submenus)
 */

/**
 * Enqueue scripts and styles
 */
function custom_menu_scripts()
{
    // Enqueue Tailwind CSS from CDN
    wp_enqueue_style('tailwind-css', 'https://cdn.tailwindcss.com', array(), null);

    // Enqueue custom menu script
    wp_enqueue_script('custom-menu-js', get_template_directory_uri() . '/js/custom-menu.js', array('jquery'), '1.0', true);

    // Enqueue custom menu styles
    wp_enqueue_style('custom-menu-css', get_template_directory_uri() . '/css/custom-menu.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'custom_menu_scripts');

/**
 * Custom Walker Class for the Menu with multi-level support
 */
class Custom_Multilevel_Menu_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $submenu_class = "submenu absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10 py-1";

        // For nested submenus (depth > 0), position to the right of parent
        if ($depth > 0) {
            $submenu_class = "submenu absolute left-full top-0 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10 py-1";
        }

        $output .= "\n$indent<ul class=\"$submenu_class\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Check if item has children
        $has_children = in_array('menu-item-has-children', $classes);

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="relative ' . esc_attr($class_names) . '"' : ' class="relative"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';

        // If item has children, add toggle class
        if ($has_children) {
            $atts['class'] = 'menu-toggle px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 hover:text-white flex items-center justify-between';
        } else {
            $atts['class'] = 'px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 hover:text-white';
        }

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;

        // Add chevron icon for items with children
        if ($has_children) {
            // Use down-pointing chevron for top level, and right-pointing for submenus
            if ($depth === 0) {
                $item_output .= '<svg xmlns="http://www.w3.org/2000/svg" class="chevron-icon h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>';
            } else {
                $item_output .= '<svg xmlns="http://www.w3.org/2000/svg" class="chevron-icon-right h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>';
            }
        }

        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Custom Mobile Menu Walker with multi-level support
 */
class Custom_Mobile_Multilevel_Menu_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        // Don't output submenu here, we'll handle it separately
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        // Don't output submenu here, we'll handle it separately
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        if ($depth === 0) { // Only process top-level items
            $indent = ($depth) ? str_repeat("\t", $depth) : '';

            $classes = empty($item->classes) ? array() : (array) $item->classes;
            $has_children = in_array('menu-item-has-children', $classes);

            $output .= $indent . '<li>';

            if ($has_children) {
                $output .= '<button data-submenu="submenu-' . $item->ID . '" class="mobile-submenu-toggle block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 w-full text-left flex justify-between items-center">';
                $output .= apply_filters('the_title', $item->title, $item->ID);
                $output .= '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>';
                $output .= '</button>';
            } else {
                $output .= '<a href="' . esc_url($item->url) . '" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700">';
                $output .= apply_filters('the_title', $item->title, $item->ID);
                $output .= '</a>';
            }

            $output .= '</li>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        // No closing needed for our implementation
    }
}

/**
 * Function to generate mobile submenus with multi-level support
 */
function generate_mobile_submenus($menu_name)
{
    $locations = get_nav_menu_locations();
    if (!isset($locations[$menu_name])) return;

    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $submenus = '';

    // Process top-level items first
    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == 0) { // Only process top-level items
            $submenus .= generate_submenu_html($item, $menu_items, 0);
        }
    }

    return $submenus;
}

/**
 * Helper function to recursively generate submenu HTML
 */
function generate_submenu_html($parent_item, $all_items, $depth)
{
    $children = get_nav_menu_item_children($parent_item->ID, $all_items);

    if (empty($children)) {
        return '';
    }

    $output = '<ul id="submenu-' . $parent_item->ID . '" class="mobile-submenu" data-parent="' . ($parent_item->menu_item_parent ? 'submenu-' . $parent_item->menu_item_parent : 'main') . '">';

    // Add back button
    if ($depth === 0) {
        // Back to main menu
        $output .= '<li>
            <button class="back-to-main-menu block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 w-full text-left flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Menu
            </button>
        </li>';
    } else {
        // Back to parent submenu
        $parent_title = get_menu_item_title_by_id($parent_item->menu_item_parent, $all_items);
        $output .= '<li>
            <button class="back-to-parent-menu block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 w-full text-left flex items-center" data-parent="' . ($parent_item->menu_item_parent ? 'submenu-' . $parent_item->menu_item_parent : 'main') . '">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to ' . $parent_title . '
            </button>
        </li>';
    }

    // Add submenu items
    foreach ($children as $child) {
        $has_children = has_children($child->ID, $all_items);

        $output .= '<li>';

        if ($has_children) {
            $output .= '<button data-submenu="submenu-' . $child->ID . '" class="mobile-submenu-toggle block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 w-full text-left flex justify-between items-center ml-' . ($depth * 4) . '">
                ' . esc_html($child->title) . '
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>';
        } else {
            $output .= '<a href="' . esc_url($child->url) . '" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 ml-' . ($depth * 4) . '">
                ' . esc_html($child->title) . '
            </a>';
        }

        $output .= '</li>';

        // Recursively add child submenus
        if ($has_children) {
            $output .= generate_submenu_html($child, $all_items, $depth + 1);
        }
    }

    $output .= '</ul>';

    return $output;
}

/**
 * Helper function to get menu item children
 */
function get_nav_menu_item_children($parent_id, $nav_menu_items)
{
    $children = array();

    foreach ((array) $nav_menu_items as $nav_menu_item) {
        if ($nav_menu_item->menu_item_parent == $parent_id) {
            $children[] = $nav_menu_item;
        }
    }

    return $children;
}

/**
 * Helper function to check if a menu item has children
 */
function has_children($parent_id, $nav_menu_items)
{
    foreach ((array) $nav_menu_items as $nav_menu_item) {
        if ($nav_menu_item->menu_item_parent == $parent_id) {
            return true;
        }
    }

    return false;
}

/**
 * Helper function to get menu item title by ID
 */
function get_menu_item_title_by_id($item_id, $nav_menu_items)
{
    foreach ((array) $nav_menu_items as $nav_menu_item) {
        if ($nav_menu_item->ID == $item_id) {
            return $nav_menu_item->title;
        }
    }

    return 'Menu';
}