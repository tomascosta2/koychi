<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
?>

<!-- Header -->
<header class="py-4 md:py-[24px] fixed top-0 bg-black/30 w-full z-50">
	<div class="tcp-container">
		<!-- Logo + menú -->
		<div class="flex items-center justify-between">
			<h1>
				<a href="/">
					<img class="0 h-[73px] w-[140px] md:w-[200px] object-contain" src="<?php echo $logo_url ?>" alt="Koychi">
				</a>
			</h1>

			<!-- Botón hamburguesa (solo visible en mobile) -->
			<button id="menu-btn" class="md:hidden text-[#FF0000] focus:outline-none" aria-label="Abrir menú">
				<svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
				</svg>
			</button>

			<!-- Menú de navegación -->
			<nav id="menu"
				class="header-menu hidden z-50 flex-col bg-[#111] w-full md:bg-transparent absolute top-[105px] left-0 w-full md:static md:top-0 flex md:flex md:flex-row md:items-center md:gap-4 md:w-auto">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'flex flex-col md:flex-row items-center md:gap-4',
					'link_before' => '<span class="uppercase text-white hover:text-[#FF0000] font-semibold">',
					'link_after' => '</span>',
					'fallback_cb' => false,
				));
				?>
			</nav>
		</div>
	</div>
</header>