<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/owl-carousel/assets/owl.theme.default.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v15.0" nonce="GyusPHdt"></script>
    <title><?php if (is_single()) {
            single_post_title();
            print ' | ';
            bloginfo('name');
        } elseif (is_home() || is_front_page()) {
            bloginfo('name');
            print ' | ';
            bloginfo('description');
        } elseif (is_page()) {
            single_post_title('');
            print ' | ';
            bloginfo('name');
        } elseif (is_search()) {
            bloginfo('name');
            print ' | Resultados para ' . $_GET['s'];
        } elseif (is_404()) {
            bloginfo('name');
            print ' | Nada Encontrado';
        } else {
            bloginfo('name');
            wp_title('|');
        } ?></title>
    <?php wp_head(); ?>
</head>
<body class="bg-black">

<nav class="d-block d-md-none navbar navbar-expand-lg navbar-dark bg-dark mb-3 position-fixed w-100 top-0 z-index2">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img alt="Logotipo" class="w-auto img-fluid" src="<?php echo get_field('logo', getPageIDBySlug('configuracoes-gerais')); ?>"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Início</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Link #1</a></li>
                        <li><a class="dropdown-item" href="#">Link #2</a></li>
                        <li><a class="dropdown-item" href="#">Link #3</a></li>
                        <li><a class="dropdown-item" href="#">Link #4</a></li>
                        <li><a class="dropdown-item" href="#">Link #5</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-white mt-5 pt-5 mt-md-0 pt-md-0">
    <div class="area-header my-md-3">
        <div class="container">
            <div class="row">
                <div class="d-none d-md-block col-3">
                    <div class="logo">
                        <img alt="Logotipo" class="w-auto img-fluid" src="https://via.placeholder.com/400x100"/>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6 order-1 order-md-0">
                    <div class="align-content-center d-grid h-100">
                        <div class="busca  my-3 my-md-0">
                            <div class="d-flex border border-2 rounded-3">
                                <input class="form-control border-0" type="text">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 order-0 order-md-1">
                    <div class="d-flex align-content-center d-grid h-100 justify-content-center">
                        <div class="botoes-topo d-flex gap-3">
                        <?php while (have_rows('menus_do_cliente', getPageIDBySlug('configuracoes-gerais'))){ the_row(); ?>                   
                        <div class="align-content-around d-grid gap-1 text-center">
                                <a class="text-uppercase small text-dark d-grid gap-1 text-decoration-none" href="<?php echo get_sub_field('link'); ?>">
                                    <i class="fa <?php echo get_sub_field('icone'); ?>"></i>
                                    <?php echo get_sub_field('titulo'); ?>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-especial bg-light d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="owl-carousel owl-theme menu-links list-inline mb-0">
                        <?php while (have_rows('menus_do_topo', getPageIDBySlug('configuracoes-gerais'))){ the_row(); ?>
                            <li class="nav-item">
                            <a class="nav-link d-grid gap-1 align-items-center justify-content-center text-center" href="<?php echo get_sub_field('link'); ?>">
                                <img class="rounded-circle" src="<?php echo get_sub_field('imagem'); ?>"/>
                                <span><?php echo get_sub_field('titulo'); ?></span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>