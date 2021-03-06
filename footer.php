<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the main and #page div elements.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
?>
	</main><!-- main -->

	<footer id="footer" role="contentinfo">
		<div id="footer-content" class="container">
		<div class="row">
			<a class="footer-img-link" href="http://votetom.in/flappy-tom">
				<img src=" <?php echo esc_url( home_url() ); ?>/wp-content/themes/vote-tom/img/play-flappy-tom.png" alt="Play Flappy Tom!">
			</a>
			<a href="http://imperialcollegeunion.org/elections" class="footer-img-link">
				<img src=" <?php echo esc_url( home_url() ); ?>/wp-content/themes/vote-tom/img/election-colour-footer.png" alt="Vote ICU">
			</a>
		</div>
			<div class="row">
				<div class="copyright col-lg-12">
					<span class="pull-left"><?php printf( __( 'Copyright &copy; %s %s. All Rights Reserved.', 'arcade' ), date( 'Y' ), ' <a href="' . home_url() . '">' . get_bloginfo( 'name' ) .'</a>' ); ?></span>
					<span class="credit-link pull-right"><i class="fa fa-leaf"></i><?php printf( __( 'Designed by %s.', 'arcade' ), '<a href="https://themes.bavotasan.com/">bavotasan.com</a>' ); ?></span>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</div><!-- #footer-content.container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
	var videoTitle = 'Learn more about Tom';
	$('.home .page-header h1').html(videoTitle).css('text-align', 'center');
</script>
</body>
</html>