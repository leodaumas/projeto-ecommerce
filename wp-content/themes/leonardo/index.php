<?php get_header(); ?>

<section>
    <div class="owl-carousel owl-theme banners">
        <?php while (have_rows('banners', getPageIDBySlug('pagina-inicial'))) {
            the_row(); ?>
            <a href="<?php echo get_sub_field('link'); ?>">
                <img alt="banner" class="w-auto img-fluid" src="<?php echo get_sub_field('banner_imagem'); ?>" />
            </a>
        <?php } ?>
    </div>
</section>

<section class="my-4">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme vantagens">

                <?php while (have_rows('vantagens', getPageIDBySlug('pagina-inicial'))) {
                    the_row(); ?>
                    <?php while (have_rows('vantagem')) {
                        the_row(); ?>
                        <a class="text-decoration-none" href="<?php echo get_sub_field('link'); ?>">
                            <div class="bg-dark pb-3 text-center text-light h-100">
                                <img alt="<?php echo get_sub_field('titulo'); ?>" class="img-fluid" src="<?php echo get_sub_field('imagem'); ?>" />
                                <div class="mt-2">
                                    <span class="fw-bold text-uppercase text-center small"><?php echo get_sub_field('titulo'); ?></span>
                                </div>
                            </div>
                        </a>
                <?php }
                } ?>

            </div>
        </div>
    </div>
</section>

<!--Destaques de vendas-->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="mb-1"><span class="fs-3 text-uppercase fw-bold">Destaques de vendas</span></div>
            <div class="owl-carousel owl-theme destaque-venda">

                <div class="bg-light pb-4">
                    <img alt="#." class="img-fluid" src="https://via.placeholder.com/300x250" />
                    <div class="px-3">
                        <div class="mb-3"><span class="fw-bold small lh-sm">Freezer Horizontal D/a Ghbs-50 Bn 532 Litros 2 Tampas Cega 127V - Gelopar</span></div>
                        <div class="text-decoration-line-through small"><span>R$ 5.027,54</span></div>
                        <div class="mb-3"><span class="fw-bold text-primary">R$ 4.524,79</span></div>
                        <div><small class="fw-bold small">À vista no PIX</small></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Categorias em destaque -->
<section class="my-5">
    <div class="container">
        <div class="row">



            <div class="col-4">
                <div>
                    <?php while (have_rows('categorias', getPageIDBySlug('pagina-inicial'))) {
                        the_row(); ?>
                        <?php while (have_rows('categoria_em_destaque')) {
                            the_row(); ?>
                            <a href="<?php echo get_sub_field('link'); ?>">
                                <img alt="<?php echo get_sub_field('titulo'); ?>" class="w-auto img-fluid" src="<?php echo get_sub_field('imagem'); ?>" />
                            </a>
                    <?php }
                    } ?>
                </div>
            </div>

            <div class="col-8">
                <div class="row">


                    <?php while (have_rows('categorias', getPageIDBySlug('pagina-inicial'))) {
                        the_row(); ?>
                        <?php while (have_rows('mais_categorias')) {
                            the_row(); ?>
                            <div class="col-6 mb-3">
                                <a href="<?php echo get_sub_field('link'); ?>">
                                    <img alt="<?php echo get_sub_field('titulo'); ?>" class="img-fluid w-100" src="<?php echo get_sub_field('imagem'); ?>" />
                                </a>
                            </div>
                    <?php }
                    } ?>

                </div>
            </div>

        </div>
    </div>
</section>

<!--Destaques de vendas-->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="mb-1"><span class="fs-3 text-uppercase fw-bold">Destaques de vendas</span></div>
            <div class="owl-carousel owl-theme destaque-venda">

                <div class="bg-light pb-4">
                    <img alt="#." class="img-fluid" src="https://via.placeholder.com/300x250" />
                    <div class="px-3">
                        <div class="mb-3"><span class="fw-bold small lh-sm">Freezer Horizontal D/a Ghbs-50 Bn 532 Litros 2 Tampas Cega 127V - Gelopar</span></div>
                        <div class="text-decoration-line-through small"><span>R$ 5.027,54</span></div>
                        <div class="mb-3"><span class="fw-bold text-primary">R$ 4.524,79</span></div>
                        <div><small class="fw-bold small">À vista no PIX</small></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Banner rodapé -->
<section>
    <div class="owl-carousel owl-theme banners">
        <?php while (have_rows('banners', getPageIDBySlug('pagina-inicial'))) {
            the_row(); ?>
            <a href="<?php echo get_sub_field('link'); ?>">
                <img alt="banner" class="w-auto img-fluid" src="<?php echo get_sub_field('banner_imagem'); ?>" />
            </a>
        <?php } ?>
    </div>
</section>

<!--Parceiros-->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme parceiros">
                <?php while (have_rows('parceiros', getPageIDBySlug('pagina-inicial'))) {
                    the_row(); ?>
                    <?php while (have_rows('parceiro')) {
                        the_row(); ?>
                        <a class="text-decoration-none" href="<?php echo get_sub_field('link'); ?>">
                            <div class="bg-dark text-center text-light h-100">
                                <img alt="<?php echo get_sub_field('titulo'); ?>" class="img-fluid" src="<?php echo get_sub_field('imagem'); ?>" />
                            </div>
                        </a>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>