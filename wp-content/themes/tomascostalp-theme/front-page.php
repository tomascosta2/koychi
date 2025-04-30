<?php 

$primary_color = get_field('color_principal');
$secondary_color = get_field('color_secundario');
$bg_color = get_field('color_de_fondo');

$hero_fields = get_field('hero');
$testimonios_fields = get_field('testimonios');
$preguntas_fields = get_field('preguntas_frecuentes');

get_header(); ?>

<header class="tcp-header">
	<div class="max-w-[1140px] mx-auto px-4 xl:px-0">
		<div class="tcp-header__logo flex justify-center">
			<?php 
			if (the_custom_logo()) :
				the_custom_logo();
			else : 
				echo '<h2 class="text-[20px] font-semibold text-[' . $primary_color . ']">' . get_bloginfo( 'name' ) . '</h2>';
			endif;
			?>
		</div>
	</div>
</header>

<!-- Hero -->
<article class="bg-[<?php echo $bg_color ?>] -mt-[60px]">
	<section class="pt-[90px] pb-[80px] px-4">
		<div class="max-w-[1140px] mx-auto">
			<div class="flex flex-col items-center">
				<h1 class="text-[44px] text-center font-bold text-[<?php echo $primary_color ?>]"><?php echo $hero_fields['titulo'] ?></h1>
				<p class="mt-[10px] mb-[20px] text-[16px] text-center text-[<?php echo $primary_color ?>]/90"><?php echo $hero_fields['bajada'] ?></p>
				<div class="max-w-full w-[800px] aspect-video bg-[#111] rounded-[10px] overflow-hidden mb-[20px]">
					<iframe class="w-full h-full" src="<?php echo $hero_fields['iframe_url'] ?>" frameborder="0"></iframe>
				</div>
				<a class="block text-[<?php echo $primary_color ?>] bg-[<?php echo $secondary_color ?>] text-center py-4 w-[500px] font-semibold max-w-full rounded-[6px]" href="<?php echo $hero_fields['boton']['url'] ?>"><?php echo $hero_fields['boton']['title'] ?></a>
			</div>
		</div>
	</section>
	<section class="py-[80px] px-4 bg-[<?php echo $secondary_color ?>]">
		<div class="max-w-[1140px] mx-auto">
			<h2 class="text-[40px] text-center font-bold text-[<?php echo $primary_color ?>]"><?php echo $testimonios_fields['titulo'] ?></h2>
			<p class="mt-[10px] mb-[40px] text-[16px] text-center text-[<?php echo $primary_color ?>]/90"><?php echo $testimonios_fields['subtitulo'] ?></p>
			<div class="grid md:grid-cols-4 gap-[10px]">
				<img class="bg-[#111] rounded-[10px] w-full aspect-[9/16] object-contain object-center" src="<?php echo $testimonios_fields['testimonio_1']['url'] ?>" alt="<?php echo $testimonios_fields['testimonio_1']['alt'] ?>">
				<img class="bg-[#111] rounded-[10px] w-full aspect-[9/16] object-contain object-center" src="<?php echo $testimonios_fields['testimonio_2']['url'] ?>" alt="<?php echo $testimonios_fields['testimonio_2']['alt'] ?>">
				<img class="bg-[#111] rounded-[10px] w-full aspect-[9/16] object-contain object-center" src="<?php echo $testimonios_fields['testimonio_3']['url'] ?>" alt="<?php echo $testimonios_fields['testimonio_3']['alt'] ?>">
				<img class="bg-[#111] rounded-[10px] w-full aspect-[9/16] object-contain object-center" src="<?php echo $testimonios_fields['testimonio_4']['url'] ?>" alt="<?php echo $testimonios_fields['testimonio_4']['alt'] ?>">
				<img class="bg-[#111] rounded-[10px] w-full aspect-[9/16] object-contain object-center" src="<?php echo $testimonios_fields['testimonio_5']['url'] ?>" alt="<?php echo $testimonios_fields['testimonio_5']['alt'] ?>">
				<img class="bg-[#111] rounded-[10px] w-full aspect-[9/16] object-contain object-center" src="<?php echo $testimonios_fields['testimonio_6']['url'] ?>" alt="<?php echo $testimonios_fields['testimonio_6']['alt'] ?>">
				<img class="bg-[#111] rounded-[10px] w-full aspect-[9/16] object-contain object-center" src="<?php echo $testimonios_fields['testimonio_7']['url'] ?>" alt="<?php echo $testimonios_fields['testimonio_7']['alt'] ?>">
				<img class="bg-[#111] rounded-[10px] w-full aspect-[9/16] object-contain object-center" src="<?php echo $testimonios_fields['testimonio_8']['url'] ?>" alt="<?php echo $testimonios_fields['testimonio_8']['alt'] ?>">
			</div>
			<a class="mt-[20px] mx-auto block text-[<?php echo $primary_color ?>] bg-[<?php echo $bg_color ?>] text-center py-4 w-[500px] font-semibold max-w-full rounded-[6px]" href="<?php echo $testimonios_fields['boton']['url'] ?>"><?php echo $testimonios_fields['boton']['title'] ?></a>
		</div>
	</section>
	<section class="py-[80px] px-4 bg-[<?php echo $bg_color ?>]">
		<div class="max-w-[1140px] mx-auto">
			<h2 class="text-[40px] text-center font-bold text-[<?php echo $primary_color ?>]"><?php echo $preguntas_fields['titulo'] ?></h2>
			<p class="mt-[10px] mb-[40px] text-[16px] text-center text-[<?php echo $primary_color ?>]/90"><?php echo $preguntas_fields['subtitulo'] ?></p>
			<div class="tc-accordion max-w-[800px] mx-auto">
				<?php for ($i=1; $i < 6; $i++) { ?>
					<div class="tc-accordion-item w-full cursor-pointer bg-[<?php echo $bg_color ?>] p-[20px] rounded-[6px] border border-[<?php echo $primary_color ?>]/50 mb-[10px]">
						<h3 class="--sora text-[16px] md:text-[18px] text-[<?php echo $primary_color ?>] lg:text-[20px] flex justify-between items-center"><?php echo $preguntas_fields['pregunta_' . $i] ?><svg class="size-[22px] min-w-[22px] transition-all" fill="<?php echo $primary_color ?>" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></h3>
						<div class="tc-accordion-item-content max-h-0 overflow-hidden transition-all">
							<p class="text-[<?php echo $primary_color ?>]/80 text-[16px] pt-[10px]"><?php echo $preguntas_fields['respuesta_'. $i] ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</article>

<!-- Sobre nosotros -->

<?php get_footer(); ?>