<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h3>Título da página</h3>
                <code>
                    <?php // the_field('texto_de_exemplo'); ?>
                    <?php echo get_field('logo', getPageIDBySlug('configuracoes-gerais')); ?>

                    <hr/>

                    <?php echo get_field('texto_de_exemplo', getPageIDBySlug('contato')); ?>

                    <hr/>

                    <div>

                        <?php while (have_rows('menus_do_cliente', getPageIDBySlug('configuracoes-gerais'))){ the_row(); ?>
                            Ícone: <?php echo get_sub_field('icone'); ?><br>
                            Título: <?php echo get_sub_field('titulo'); ?><br>
                            Link: <?php echo get_sub_field('link'); ?>
                            <br><br>
                        <?php } ?>
                    </div>

                    <div>
                    <?php while (have_rows('grupo_rodape', getPageIDBySlug('configuracoes-gerais'))) { the_row(); ?>
                    <?php while (have_rows('primeira_coluna', getPageIDBySlug('configuracoes-gerais'))) { the_row(); ?>
                        <div class="mb-1"><span class="fs-5"><?php echo get_sub_field('titulo'); ?><br></span></div>
                        <nav class="d-grid">
                        <?php while (have_rows('lista_de_links', getPageIDBySlug('configuracoes-gerais'))) { the_row(); ?>
                            <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('titulo'); ?></a>
                        </nav>
                <?php }}}?>

                     </div>

                </code>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
