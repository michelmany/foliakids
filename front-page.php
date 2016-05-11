<?php get_header(); ?>

    <main id="content" class="" tabindex="-1" role="main">

        <div class="quadro">

            <div class="slider">
                <?php echo do_shortcode("[metaslider id=34]");?>
            </div>

            <div class="under-slide">
                <div class="col-md-6 sobre">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/folia_title.png"/>
                    <p>É uma casa de festas comprometida com você, que nasceu da união de 2 empresas tradicionais com mais de 12 anos no mercado. Buscamos a confiança pelos serviços prestados através da seriedade, sem deixar de lado a alegria que a sua festa merece. Conseguimos unir em um mesmo espaço: modernidade, conforto e qualidade. Aliados a uma decoração interativa e inovadora.
                        <a href="<?php bloginfo('home'); ?>/a-casa/">Saiba mais..</a></p>
                </div>
                <div class="col-md-6 bonecos">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bonecos.png" class="img-responsive"/>
                </div>

            </div>

            <div class="clearfix"></div>

        </div><!-- #quadro -->

        <?php get_template_part( 'stars', 'page' ); ?>

    </main><!-- #content -->

<?php

get_footer();