<!--Footer-->
<footer class="bg-secondary py-3 text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                <?php while (have_rows('grupo_rodape', getPageIDBySlug('configuracoes-gerais'))) {
                    the_row(); ?>
                    <?php while (have_rows('primeira_coluna', getPageIDBySlug('configuracoes-gerais'))) {
                        the_row(); ?>
                        <div class="mb-1"><span class="fs-5"><?php echo get_sub_field('titulo'); ?><br></span></div>
                        <?php while (have_rows('lista_de_links', getPageIDBySlug('configuracoes-gerais'))) {
                            the_row(); ?>
                            <nav class="d-grid">
                                <a href="<?php echo get_sub_field('link'); ?>" class="text-decoration-none text-light"><?php echo get_sub_field('titulo'); ?></a>
                            </nav>
                <?php }
                    }
                } ?>
            </div>

            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                <?php while (have_rows('grupo_rodape', getPageIDBySlug('configuracoes-gerais'))) {
                    the_row(); ?>
                    <?php while (have_rows('segunda_coluna', getPageIDBySlug('configuracoes-gerais'))) {
                        the_row(); ?>

                        <div class="mb-1"><span class="fs-5"><?php echo get_sub_field('titulo'); ?></span></div>
                        <?php while (have_rows('subtitulos', getPageIDBySlug('configuracoes-gerais'))) {
                            the_row(); ?>
                            <nav class="d-grid">
                                <a href="<?php echo get_sub_field('link'); ?>" class="text-decoration-none text-light"><?php echo get_sub_field('titulo'); ?></a>
                            </nav>
                <?php }
                    }
                } ?>
            </div>

            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                <?php while (have_rows('grupo_rodape', getPageIDBySlug('configuracoes-gerais'))) {
                    the_row(); ?>
                    <?php while (have_rows('terceira_coluna', getPageIDBySlug('configuracoes-gerais'))) {
                        the_row(); ?>
                        <div class="mb-1"><span class="fs-5"><?php echo get_sub_field('titulo'); ?></span></div>
                        <div class="d-grid">
                            <span><b>E-mail:</b> <?php echo get_sub_field('e-mail'); ?></span>
                            <span><b>Telefone:</b> <?php echo get_sub_field('telefone'); ?></span>
                            <span><b>WhatsApp:</b> <?php echo get_sub_field('whatsapp'); ?></span>
                        </div>
                <?php }
                } ?>
            </div>

            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                <?php while (have_rows('grupo_rodape', getPageIDBySlug('configuracoes-gerais'))) {
                    the_row(); ?>
                    <?php while (have_rows('quarta_coluna', getPageIDBySlug('configuracoes-gerais'))) {
                        the_row(); ?>

                        <div class="mb-1 d-block d-lg-none"><span class="fs-5">Redes sociais</span></div>
                        <div class="mb-2">
                            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="<?php echo get_sub_field('link_facebook'); ?>">Facebook</a></blockquote>
                            </div>
                        </div>
                        <?php while (have_rows('link_rede_social', getPageIDBySlug('configuracoes-gerais'))) {
                            the_row(); ?>
                            <nav>
                                <a href="<?php echo get_sub_field('link'); ?>" class="text-decoration-none text-light fs-5"><i class="fa <?php echo get_sub_field('icone'); ?>"></i></a>
                            </nav>
                <?php }
                    }
                } ?>
            </div>

            <div class="text-center mt-3">
                <span>Desenvolvido por Loe</span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.0.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/owl-carousel/owl.carousel.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
</body>

</html>