<?php

//function getPageIDBySlug($slug) {
//    $page = get_page_by_path($slug);
//    if ($page) {
//        return $page->ID;
//    } else {
//        return null;
//    }
//}

function getPageIDBySlug($slug) {
    switch($slug) {
        case 'configuracoes-gerais':
            return 2;
        case 'pagina-inicial':
            return 3;
        case 'contato':
            return 37;
        default:
            return null;
    }
}

// Product Custom Post Type
function product_init() {
    // set up product labels
    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'add_new' => 'Add New Product',
        'add_new_item' => 'Add New Product',
        'edit_item' => 'Edit Product',
        'new_item' => 'New Product',
        'all_items' => 'All Products',
        'view_item' => 'View Product',
        'search_items' => 'Search Products',
        'not_found' =>  'No Products Found',
        'not_found_in_trash' => 'No Products found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Products',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'product'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'product', $args );
    
    // register taxonomy
    register_taxonomy('product_category', 'product', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'product-category' )));
}
add_action( 'init', 'product_init' );