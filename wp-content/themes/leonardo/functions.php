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

// Produto Custom Post Type
function produto_cpt() {
    // set up product labels
    $labels = array(
        'name' => 'Produtos',
        'singular_name' => 'Produto',
        'add_new' => 'Adicionar novo produto',
        'add_new_item' => 'Adicionar novo produto',
        'edit_item' => 'Editar produto',
        'new_item' => 'Novo produto',
        'all_items' => 'Todos produtos',
        'view_item' => 'Visualizar produto',
        'search_items' => 'Buscar produtos',
        'not_found' =>  'Nenhum produto encontrado',
        'not_found_in_trash' => 'Nenhum produto encontrado na lixeira',
        'parent_item_colon' => '',
        'menu_name' => 'Produtos',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'query_var' => true,
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array(
            'title',
            'editor'
        )
    );
    register_post_type( 'produtos', $args );
    
    // register taxonomy
    register_taxonomy(
        'categoria-produtos',
        'produtos',
        array('hierarchical' => true, 'label' => 'Categorias'
        ));
}
add_action( 'init', 'produto_cpt' );