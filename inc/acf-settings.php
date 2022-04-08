<?php

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return true;
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

// Options pages

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
    if( function_exists('acf_add_options_sub_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Themen Einstellungen'),
            'menu_title'  => __('Themen Einstellungen'),
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Stile'),
            'menu_title'  => __('Stile'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}


// UNIQUE ID FIELD FOR ACF
function create_unique_id_acf_field($field){
    if (empty($field['value'])) {
        $uniqueid_length = 8;
        $uniqueid = crypt(uniqid(rand(), 1));
        $uniqueid = strip_tags(stripslashes($uniqueid));
        $uniqueid = str_replace(".", "", $uniqueid);
        $uniqueid = strrev(str_replace("/", "", $uniqueid));
        $uniqueid = substr($uniqueid, 0, $uniqueid_length);
        $title = 'section-' . $uniqueid;
        $field['value'] = $title;
        return $field;
    } else {
        return $field;
    }

}
add_filter('acf/prepare_field/name=unique_id', 'create_unique_id_acf_field', 10, 3);

