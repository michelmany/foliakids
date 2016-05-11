<?php get_header(); ?>

	<main id="content" tabindex="-1" role="main">

		<div class="quadro contato">
    
			<?php 					// Include the page content template.
            get_template_part( 'content', 'page' );
            ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-horizontal">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Solicite um orçamento</legend>

                    <?php echo do_shortcode('[contact-form-7 id="79" title="Formulário de contato 1"]' ); ?>


                    </fieldset>
                    </div>
                    
                </div>   

                <div class="col-md-4">
                    <!-- Form Name -->
                    <legend>Fale conosco</legend>
                    <p class="tel">(21) 3701-2937<br>(21) 2609-8517</p>
                    <p>Estrada Francisco da Cruz Nunes, 10229<br>Itaipu - Niterói/RJ</p>
                    <a href="https://goo.gl/maps/Vsy3v2u71yT2" target="_blank" class="btn btn-primary btn-block">Ver Mapa Google</a>

                </div>
            </div>
        </div>

        <?php get_template_part( 'stars', 'page' ); #stars on the sides ?>

	</main><!-- #main -->

<?php
get_footer();
