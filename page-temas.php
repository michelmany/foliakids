<?php get_header(); ?>

	<main id="content" tabindex="-1" role="main">

		<div class="quadro">
    
			<?php 					// Include the page content template.
            get_template_part( 'content', 'page' );
            ?>
            <div class="row">

            <div class="col-md-10 temas-title">

                    <?php 
                        $loop = new WP_Query(
                            array(
                                'post_type' => 'tema',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC'
                                )); 
                    ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#<?php the_ID(); ?>" title="Clique para Visualizar o tema <?php the_title(); ?>">
                                      <?php the_title(); ?>
                                    </a>
                                  </h4>
                                </div>
                                <div id="<?php the_ID(); ?>" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <div class="gallery">
                                        <?php
                                        $images = get_field('galeria');
                                        if( $images ) { ?>
                                            <ul>
                                                <?php foreach( $images as $image ): ?>
                                                    <li>
                                                        <a href="<?php echo $image['url']; ?>" data-lightbox-gallery="<?php the_ID(); ?>" title="<?php the_title(); ?>">
                                                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <?php } else echo '<p> Ainda não temos imagens deste tema </p>'; ?>
                                    </div><!-- /GALLERY -->
                                  </div>
                                </div>
                            </div>
                        </div> <!-- FECHA PANEL ACORDION  -->
                    <?php endwhile; ?>



            </div>
            

            </div>
        </div>

        <?php get_template_part( 'stars', 'page' ); #stars on the sides ?>

	</main><!-- #main -->

<?php
get_footer();
