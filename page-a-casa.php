<?php get_header(); ?>

	<main id="content" tabindex="-1" role="main">

		<div class="quadro">
    
			<?php 					// Include the page content template.
            get_template_part( 'content', 'page' );
            ?>

            <div class="row">
                <div class="col-md-5">
                    <p>Nossa proposta é oferecer sempre serviços de qualidade e atendimento personalizado, transformando sua festa em única com momentos inesquecíveis e encantadores, realizando o seu sonho. Nossa equipe de profissionais é treinada e especializada para atuar na sua festa, trabalhando com alegria e responsabilidade para sua e nossa satisfação. Resultando numa amizade prazerosa e gratificante.
                    Realize sua festa na Casa de Festas que hoje é ícone em Niterói, graças as pessoas que sempre acreditam em nosso trabalho.</p>
                </div>
                <div class="col-md-7">
                    <div class="slider-casa">
                        <?php echo do_shortcode("[metaslider id=36]"); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part( 'stars', 'page' ); #stars on the sides ?>

	</main><!-- #main -->

<?php
get_footer();
