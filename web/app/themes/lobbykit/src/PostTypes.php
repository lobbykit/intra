<?php

namespace LobbyKit\Intra;

class PostTypes
{
    public static function register()
    {
        register_extended_post_type('module', [
            'has_archive'  => false,
            'show_ui'      => true,
            'show_in_menu' => 'edit.php?post_type=page',
            'show_in_feed' => false,
            'supports'     => ['title', 'thumbnail'],
            'labels'       => [
                'name'                  => __('Modules', 'intra'),
                'singular_name'         => __('Module', 'intra'),
                'menu_name'             => __('Modules', 'intra'),
                'name_admin_bar'        => __('Module', 'intra'),
                'add_new'               => __('Create new', 'intra'),
                'add_new_item'          => __('Create new Module', 'intra'),
                'edit_item'             => __('Edit Module', 'intra'),
                'new_item'              => __('New Module', 'intra'),
                'view_item'             => __('Show Module', 'intra'),
                'search_items'          => __('Search Module', 'intra'),
                'not_found'             => __('No Modules found', 'intra'),
                'not_found_in_trash'    => __('No Modules in trash', 'intra'),
                'parent_item_colon'     => __('Module parent:', 'intra'),
                'all_items'             => __('All Modules', 'intra'),
                'archives'              => __('Module Archive', 'intra'),
                'insert_into_item'      => __('Add in Module', 'intra'),
                'uploaded_to_this_item' => __('Uploaded to Module', 'intra'),
                'filter_items_list'     => __('Filter Module list', 'intra'),
                'items_list_navigation' => __('Navigate list', 'intra'),
                'items_list'            => __('Module list', 'intra'),
                ],
            ], [
            'singular' => __('Module', 'intra'),
            'plural'   => __('Modules', 'intra'),
        ]);
    }
}
