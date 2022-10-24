<?php get_header(); ?>
<div class="container">
    <section id="contact" class="my-4 mg-t-50 mg-b-25 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mg-t-25 mg-b-50 d-sm-block d-md-none">
                    <h3>Contato</h3>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mg-b-25">


                    <ul class="fa-ul d-md-flex gap-3 d-grid align-items-center justify-content-center">
                        <li><a href="mailto:contato@radiobrsuriname.com.br"><i class="fa fa-envelope-o mr-2 contact-icons"></i><?php echo get_field('email', getPageIDBySlug('contato')); ?></a></li>
                        <?php while (have_rows('redes_sociais', getPageIDBySlug('contato'))) {
                            the_row(); ?>
                            <li><a href="<?php echo get_sub_field('link'); ?>"><i class="fa oi: <?php echo get_sub_field('icone'); ?> mr-2 contact-icons"></i></a></li>
                        <?php } ?>
                    </ul>
                    <div role="form" class="wpcf7" id="wpcf7-f30-p11-o1" lang="pt-BR" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form action="/contato/#wpcf7-f30-p11-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="30">
                                <input type="hidden" name="_wpcf7_version" value="5.6.4">
                                <input type="hidden" name="_wpcf7_locale" value="pt_BR">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f30-p11-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="11">
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                            </div>
                            <div class="contact-form d-flex flex-column align-items-center">
                                <div class="my-2 form-group w-75">
                                    <span class="wpcf7-form-control-wrap" data-name="nome"><input type="text" name="nome" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Nome"></span>
                                </div>
                                <div class="my-2 form-group w-75">
                                    <span class="wpcf7-form-control-wrap" data-name="email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="E-mail"></span>
                                </div>
                                <div class="my-2 form-group w-75">
                                    <span class="wpcf7-form-control-wrap" data-name="telefone"><input type="tel" name="telefone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" aria-required="true" aria-invalid="false" placeholder="Telefone"></span>
                                </div>
                                <div class="my-2 form-group w-75">
                                    <span class="wpcf7-form-control-wrap" data-name="mensagem"><textarea name="mensagem" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Digite sua mensagem"></textarea></span>
                                </div>
                                <p><button type="submit" class="btn btn-submit btn-secondary w-100">Enviar</button>
                                </p>
                            </div>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </section>

</div>
<?php get_footer(); ?>