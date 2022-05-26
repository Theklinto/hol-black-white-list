<?php

add_action("admin_menu", "hol_bwlist_admin_menu", 99);
function hol_bwlist_admin_menu()
{
    $menu_slug = "hol-bwlist";
    $hidden_menu_slug = "hol-bwlist-hidden";

    add_menu_page(
        'HOL B/W List',//page_title
        'HOL B/W List',//menu_title
        'manage_options',//capability
        $menu_slug . '-home',//menu_slug,
        'hol_bwlist_home'// $function
    );
    /*
    add_submenu_page(
        "$hidden_menu_slug",//parent page slug
        'API key edit',//page_title
        'API key edit',//menu_title
        'manage_options',//capability
        'wp-order-collector-controlpanel-api-keys-edit',//menu_slug,
        'wp_order_collector_controlpanel_api_keys_edit'// $function
    );*/
}

function hol_bwlist_home()
{
    echo 'Hej';
}
