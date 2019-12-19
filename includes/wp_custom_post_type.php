<?php

function streann_sdk_cpt() {

    $labels = array(
        'name'                  => _x( 'Articles', 'Post Type General Name', 'streann_sdk' ),
        'singular_name'         => _x( 'Article', 'Post Type Singular Name', 'streann_sdk' ),
        'menu_name'             => __( 'Articles', 'streann_sdk' ),
        'name_admin_bar'        => __( 'Articles', 'streann_sdk' ),
        'archives'              => __( 'Article Archives', 'streann_sdk' ),
        'attributes'            => __( 'Article Attributes', 'streann_sdk' ),
        'parent_item_colon'     => __( 'Parent Article:', 'streann_sdk' ),
        'all_items'             => __( 'All Articles', 'streann_sdk' ),
        'add_new_item'          => __( 'Add New Article', 'streann_sdk' ),
        'add_new'               => __( 'Add New', 'streann_sdk' ),
        'new_item'              => __( 'New Article', 'streann_sdk' ),
        'edit_item'             => __( 'Edit Article', 'streann_sdk' ),
        'update_item'           => __( 'Update Article', 'streann_sdk' ),
        'view_item'             => __( 'View Article', 'streann_sdk' ),
        'view_items'            => __( 'View Articles', 'streann_sdk' ),
        'search_items'          => __( 'Search Article', 'streann_sdk' ),
        'not_found'             => __( 'Not found', 'streann_sdk' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'streann_sdk' ),
        'featured_image'        => __( 'Featured Image', 'streann_sdk' ),
        'set_featured_image'    => __( 'Set featured image', 'streann_sdk' ),
        'remove_featured_image' => __( 'Remove featured image', 'streann_sdk' ),
        'use_featured_image'    => __( 'Use as featured image', 'streann_sdk' ),
        'insert_into_item'      => __( 'Insert into Article', 'streann_sdk' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Article', 'streann_sdk' ),
        'items_list'            => __( 'Articles list', 'streann_sdk' ),
        'items_list_navigation' => __( 'Articles list navigation', 'streann_sdk' ),
        'filter_items_list'     => __( 'Filter Articles list', 'streann_sdk' ),
    );
    $args = array(
        'label'                 => __( 'Article', 'streann_sdk' ),
        'description'           => __( 'Articles from SDK', 'streann_sdk' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'topics' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'articles', $args );

    $labels = array(
        'name'                       => _x( 'Topics', 'Taxonomy General Name', 'streann_sdk' ),
        'singular_name'              => _x( 'Topic', 'Taxonomy Singular Name', 'streann_sdk' ),
        'menu_name'                  => __( 'Topics', 'streann_sdk' ),
        'all_items'                  => __( 'All Topics', 'streann_sdk' ),
        'parent_item'                => __( 'Parent Topic', 'streann_sdk' ),
        'parent_item_colon'          => __( 'Parent Topic:', 'streann_sdk' ),
        'new_item_name'              => __( 'New Topic Name', 'streann_sdk' ),
        'add_new_item'               => __( 'Add New Topic', 'streann_sdk' ),
        'edit_item'                  => __( 'Edit Topic', 'streann_sdk' ),
        'update_item'                => __( 'Update Topic', 'streann_sdk' ),
        'view_item'                  => __( 'View Topic', 'streann_sdk' ),
        'separate_items_with_commas' => __( 'Separate Topics with commas', 'streann_sdk' ),
        'add_or_remove_items'        => __( 'Add or remove Topics', 'streann_sdk' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'streann_sdk' ),
        'popular_items'              => __( 'Popular Topics', 'streann_sdk' ),
        'search_items'               => __( 'Search Topics', 'streann_sdk' ),
        'not_found'                  => __( 'Not Found', 'streann_sdk' ),
        'no_terms'                   => __( 'No Topics', 'streann_sdk' ),
        'items_list'                 => __( 'Topics list', 'streann_sdk' ),
        'items_list_navigation'      => __( 'Topics list navigation', 'streann_sdk' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'topics', array( 'articles' ), $args );

}
add_action( 'init', 'streann_sdk_cpt', 0 );
