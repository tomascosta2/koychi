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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fff50d7907.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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

</body>
</html>
