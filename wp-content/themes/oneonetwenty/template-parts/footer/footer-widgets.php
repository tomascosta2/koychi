<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<footer class="tcp-footer mt-[16px]">
		<div class="max-w-[1140px] mx-auto px-4 xl:px-0">
			<div class="tcp-footer__wrapper grid md:grid-cols-3">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
			<p class="text-[14px] text-white/80 text-center mt-8">© 2025 KOYCHI. Todos los derechos reservados. Sitio Web desarrollado por ABLA Factoría Creativa</p>
		</div>
	</footer>

	<?php
endif;
