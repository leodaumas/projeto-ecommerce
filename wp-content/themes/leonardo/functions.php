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