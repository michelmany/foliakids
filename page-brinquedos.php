<?php get_header(); ?>

	<main id="content" tabindex="-1" role="main">

		<div class="quadro">
    

			<?php 					// Include the page content template.
            get_template_part( 'content', 'page' );
            ?>
            <div class="row">
                <div class="col-md-5">
                    <li>Roda Gigante</li>
                    <li>Basquete</li>
                    <li>Campo de Futebol</li>
                    <li>Tombo Legal</li>
                    <li>Perdidos no Espaço (único em Niterói)</li>
                    <li>Cama Elástica</li>
                    <li>Super Brinquedão</li>
                    <li>Tobogã</li>
                    <li>Completa Área Baby</li>
                    <li>Arena Laser Shot</li>
                    <li>Air Game</li>
                    <li>Totó</li>
                    <li>Virtual</li>
                    <li>Chute a Gol</li>
                    <li>Simuladores</li>
                </div>   

                <div class="col-md-7">
                    <div class="slider-casa">
                        <?php echo do_shortcode("[metaslider id=63]"); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part( 'stars', 'page' ); #stars on the sides ?>

	</main><!-- #main -->

<?php
get_footer();
