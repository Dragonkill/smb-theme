<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Shared Memory Blog
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
<!--
			<?php do_action( 'shared_memory_blog_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'shared-memory-blog' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'shared-memory-blog' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
-->
			<p class="theme-footer">
				<?php printf( __( 'Theme: %1$s based on %2$s.', 'shared-memory-blog' ), 'Shared Memory Blog', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</p>
			<a class="licence" rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.fr"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
