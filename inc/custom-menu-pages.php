<?php

function register_custom_menu_pages() {
    $custom_menu_pages = get_custom_menu_pages();
    foreach($custom_menu_pages as $custom_menu_page) {
        add_custom_menu_page($custom_menu_page);
    }
}

function get_custom_menu_pages() {

    $custom_menu_pages = array(
        array(
            'page_title' => __( 'Groups', 'coderdojo' ),
            'menu_title' => __( 'Groups', 'coderdojo' ),
            'capability' => 'read',
            'menu_slug' => 'groups',
            'function' => '',
            'icon_url' => 'dashicons-groups',
            'position' => 21
        )
    );

    return $custom_menu_pages;
}

function add_custom_menu_page($custom_menu_page) {
    add_menu_page( 
        $custom_menu_page['page_title'],
        $custom_menu_page['menu_title'],
        $custom_menu_page['capability'],
        $custom_menu_page['menu_slug'],
        $custom_menu_page['function'],
        $custom_menu_page['icon_url'],
        $custom_menu_page['position']
    );
}

?>