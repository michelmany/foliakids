<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="footer-content">
				<div class="col-md-6">
					<div class="face hidden-xs">
						<h3>Mais de 4000 fãs no facebook!</h3>
						<div class="fb-like" data-href="https://facebook.com/foliakidsfestas" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="footer-menu text-right hidden-xs">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav navbar-right',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
						?>
					</div>
					<div class="clearfix"></div>
					<p class="pull-right">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> - Desenvolvido pela <a href="http://nitdesign.com.br"><img src="http://foliakids.com/site/wp-content/themes/foliakids/imagens/logo_nitdesign_footer.png"></a> </p>
				</div>
			</div>
		</div><!-- .container -->
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
