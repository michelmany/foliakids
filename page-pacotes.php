<?php get_header(); ?>

    <main id="content" tabindex="-1" role="main">

        <div class="quadro">
    
    		<?php 					// Include the page content template.
            get_template_part( 'content', 'page' );
            ?>

            <div class="row">
                <div class="col-md-12">

                    <div class="content-bg">

                        <h4 class="green-title">Selecione o pacote abaixo:</h4>
     
                        <!-- Tab nav -->
                        <ul class="nav nav-pills">
                          <li class="active" id="nome-agito"><a href="#agito" data-toggle="tab">Agito da Semana</a></li>
                          <li id="nome-folia"><a href="#folia" data-toggle="tab">Pacote Folia</a></li>
                          <li id="nome-mega"><a href="#vip" data-toggle="tab">Pacote Folia VIP</a></li>
                          <li id="nome-vip"><a href="#mega" data-toggle="tab">Pacote Folia Mega</a></li>
                          <li id="nome-escolar"><a href="#escolar" data-toggle="tab">Pacote Escolar</a></li>
                        </ul>

                        <hr>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div class="tab-pane fade in active" id="agito">
                                <?php get_template_part('inc/pacotes', 'agito'); ?>
                            </div>

                            <div class="tab-pane fade" id="folia">
                                <?php get_template_part('inc/pacotes', 'folia'); ?>
                            </div>

                            <div class="tab-pane fade" id="vip">
                                <?php get_template_part('inc/pacotes', 'vip'); ?>
                            </div>

                            <div class="tab-pane fade" id="mega">
                                <?php get_template_part('inc/pacotes', 'mega'); ?>
                            </div>

                            <div class="tab-pane fade" id="escolar">
                                <?php get_template_part('inc/pacotes', 'escolar'); ?>
                            </div>                                                                                    

                            <div class="separator"></div>

                        </div>

                    </div>
                
                </div>
            </div>

        <?php get_template_part( 'stars', 'page' ); #stars on the sides ?>

	</main><!-- #main -->

<?php
get_footer();
