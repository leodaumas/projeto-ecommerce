<!--Footer-->
<footer class="bg-secondary py-3 text-white">
    <div class="container">
        <div class="row">

            <?php while (have_rows('grupo_rodape', getPageIDBySlug('configuracoes-gerais'))) {
                the_row(); ?>
                <div class="col-md-6 col-lg-2 mb-3 mb-lg-0">
                    <?php while (have_rows('primeira_coluna')) {
                        the_row(); ?>
                        <div class="mb-1"><span class="fs-5"><?php echo get_sub_field('titulo'); ?><br></span></div>
                        <?php while (have_rows('lista_de_links')) {
                            the_row(); ?>
                            <nav class="d-grid">
                                <a href="<?php echo get_sub_field('link'); ?>" class="text-decoration-none text-light"><?php echo get_sub_field('titulo'); ?></a>
                            </nav>
                        <?php }
                    } ?>
                </div>

                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                <?php while (have_rows('segunda_coluna')) {
                    the_row(); ?>

                    <div class="mb-1"><span class="fs-5"><?php echo get_sub_field('titulo'); ?></span></div>
                    <?php while (have_rows('subtitulos')) {
                        the_row(); ?>
                        <nav class="d-grid">
                            <a href="<?php echo get_sub_field('link'); ?>" class="text-decoration-none text-light"><?php echo get_sub_field('titulo'); ?></a>
                        </nav>
                    <?php } ?>
                    </div>
                <?php } ?>

                <?php while (have_rows('terceira_coluna')) {
                    the_row(); ?>
                    <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                        <div class="mb-1"><span class="fs-5"><?php echo get_sub_field('titulo'); ?></span></div>
                        <div class="d-grid">
                            <span><b>E-mail:</b> <a class="text-white text-decoration-none fw-bold" href="mailto:<?php echo get_field('email', getPageIDBySlug('contato')); ?>"><?php echo get_field('email', getPageIDBySlug('contato')); ?></a></span>
                            <span><b>Telefone:</b> <a class="text-white text-decoration-none fw-bold" href="tel:<?php echo preg_replace('/[^0-9]/', '', get_field('telefone', getPageIDBySlug('contato'))); ?>"><?php echo get_field('telefone', getPageIDBySlug('contato')); ?></a></span>
                            <span><b>WhatsApp:</b> <a class="text-white text-decoration-none fw-bold" target="_blank" href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', get_field('whatsapp', getPageIDBySlug('contato'))); ?>"><?php echo get_field('whatsapp', getPageIDBySlug('contato')); ?></a></span>
                        </div>
                    </div>
                <?php } ?>

                <?php // while (have_rows('quarta_coluna')) { the_row(); ?>
                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="mb-1 d-block d-lg-none"><span class="fs-5">Redes sociais</span></div>
                        <div class="mb-2">
                            <div class="fb-page" data-href="<?php echo get_field('redes_sociais', getPageIDBySlug('contato'))[0]['link']; ?>" data-tabs="" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true"
                                 data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="<?php echo get_field('redes_sociais', getPageIDBySlug('contato'))[0]['link']; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo get_field('redes_sociais', getPageIDBySlug('contato'))[0]['link']; ?>">Facebook</a></blockquote>
                            </div>
                        </div>
                        <nav>
                            <?php while (have_rows('redes_sociais', getPageIDBySlug('contato'))) {
                                the_row(); ?>
                                <a href="<?php echo get_sub_field('link'); ?>" class="text-decoration-none text-light fs-5"><i class="fa <?php echo get_sub_field('icone'); ?>"></i></a>
                            <?php } ?>
                        </nav>
                    </div>
                <?php // } ?>
            <?php } ?>

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