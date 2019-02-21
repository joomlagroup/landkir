<?php
// Register Custom Post Type

// Creating a Deals Custom Post Type
function create_custom_post_type_project() {
    $labels = array(
        'name'                => __( 'Projects' ),
        'singular_name'       => __( 'Project'),
        'menu_name'           => __( 'Projects'),
        'parent_item_colon'   => __( 'Parent Projects'),
        'all_items'           => __( 'Tất Cả Projects'),
        'view_item'           => __( 'View Projects'),
        'add_new_item'        => __( 'Thêm Mới Projects'),
        'add_new'             => __( 'Thêm Mới'),
        'edit_item'           => __( 'Chỉnh Sửa Projects'),
        'update_item'         => __( 'Cập Nhật Projects'),
        'search_items'        => __( 'Tìm Projects'),
        'not_found'           => __( 'Không Tìm Thấy'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );
    $args = array(
        'label'               => __( 'Projects'),
        'description'         => __( 'Projects'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
        'public'              => true,
        'hierarchical'        => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'has_archive'         => true,
        'can_export'          => true,
        'exclude_from_search' => false,
        'yarpp_support'       => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'create_custom_post_type_project', 0 );

function create_custom_post_type_service() {
    $labels = array(
        'name'                => __( 'Services' ),
        'singular_name'       => __( 'Service'),
        'menu_name'           => __( 'Services'),
        'parent_item_colon'   => __( 'Parent Services'),
        'all_items'           => __( 'Tất Cả Services'),
        'view_item'           => __( 'View Services'),
        'add_new_item'        => __( 'Thêm Mới Services'),
        'add_new'             => __( 'Thêm Mới'),
        'edit_item'           => __( 'Chỉnh Sửa Services'),
        'update_item'         => __( 'Cập Nhật Services'),
        'search_items'        => __( 'Tìm Services'),
        'not_found'           => __( 'Không Tìm Thấy'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );
    $args = array(
        'label'               => __( 'Services'),
        'description'         => __( 'Services'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
        'public'              => true,
        'hierarchical'        => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'has_archive'         => true,
        'can_export'          => true,
        'exclude_from_search' => false,
        'yarpp_support'       => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );
    register_post_type( 'service', $args );
}
add_action( 'init', 'create_custom_post_type_service', 0 );
