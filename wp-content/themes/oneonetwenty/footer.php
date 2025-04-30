<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

</div>

<?php wp_footer(); ?>

<script>
	const menuOpener = document.getElementById('menuOpener');
	const menuCloser = document.getElementById('menuCloser');
	const menuNav = document.getElementById('menuNav');

	menuOpener.addEventListener('click', () => {
		menuNav.classList.add('--opened');
	})
	menuCloser.addEventListener('click', () => {
		menuNav.classList.remove('--opened');
	})
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
	new Swiper('.swiper', {
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true
		},
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		speed: 800
	});
</script>

</body>
</html>
