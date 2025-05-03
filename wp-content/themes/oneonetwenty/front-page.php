<?php 

$hero_fields = get_field('hero');
$banners_fields = get_field('banners');
$call_to_action_fields = get_field('call_to_action');
$historia_fields = get_field('historia');
$radio_fields = get_field('radio');
$grilla_fields = get_field('grilla_fotos');

get_header(); ?>

<!-- Carrusel -->
<section class="ky-hero">
	<div class="swiper w-full h-[500px] relative">
		<div class="swiper-wrapper max-h-full">
			<!-- Slide 1 -->
			<?php foreach ($hero_fields['slides'] as $slide) : ?>
				<div class="swiper-slide bg-cover bg-[url('<?php echo $slide['imagen']['url'] ?>')] pt-[90px] pb-[66px] flex items-center justify-center bg-gray-500">
					<div class="tcp-container h-full">
						<div class="flex items-end justify-center h-full">
							<div class="bg-white py-4 px-8 rounded-[15px] h-fit relative">
								<img class="hidden md:block absolute -left-[40px] -bottom-[25px] -rotate-25"
									src="/wp-content/themes/oneonetwenty/assets/images/koychi-element-1.png" alt="Koychi K">
								<img class="absolute size-[50px] md:size-[115px] -top-[20px] md:-right-[57.5px] -right-[10px] md:-top-[57.5px]"
									src="/wp-content/themes/oneonetwenty/assets/images/koychi-element-2.png" alt="Koychi K">
								<h2 class="ky-hero__title font-bold uppercase text-[32px] md:text-[60px] leading-[79%] text-center">
									<?php echo $slide['titulo'] ?>
								</h2>
								<p class="text-[20px] mt-2 md:text-[25px] leading-[110%] text-center uppercase">
								<?php echo strip_tags($slide['bajada'], '<strong>') ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>

		<!-- Paginación y flechas -->
		<div class="swiper-pagination"></div>
		<!-- <div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div> -->
	</div>
</section>

<!-- Banners -->
<section class="ky-banners">
	<div class="grid md:grid-cols-2">
		<a href="<?php echo $banners_fields['enlace_banner_1'] ?>">
			<img class="h-[280px] w-full bg-gray-300 object-cover md:rounded-br-[20px] md:rounded-bl-[20px]" src="<?php echo $banners_fields['imagen_banner_1']['url'] ?>" alt="">
		</a>
		<a href="<?php echo $banners_fields['enlace_banner_2'] ?>">
			<img class="h-[280px] w-full bg-gray-300 object-cover md:rounded-br-[20px] md:rounded-bl-[20px]" src="<?php echo $banners_fields['imagen_banner_2']['url'] ?>" alt="">
		</a>
	</div>
</section>

<!-- call_to_action? -->
<section class="py-[60px]">
	<div class="tcp-container">
		<h1 class="cta-title leading-[100%] text-center text-[60px] font-bold uppercase">
			<?php echo $call_to_action_fields['titulo'] ?>
		</h1>
		<img class="w-[800px] h-auto object-contain mx-auto mt-8 max-w-full" src="<?php echo $call_to_action_fields['imagen']['url'] ?>" alt="">
		<p class="uppercase text-center font-semibold leading-[110%] text-[38px] mt-8"><?php echo strip_tags($call_to_action_fields['bajada']) ?></p>
		<a class="ky-btn mt-6" href="<?php echo $call_to_action_fields['boton']['url'] ?>"><?php echo $call_to_action_fields['boton']['title'] ?></a>
	</div>
</section>

<!-- Historia -->
<section class="ky-historia bg-[#FF0000] rounded-tr-[20px] pt-[40px] rounded-[20px]">
	<div class="tcp-container">
		<img class="w-[940px] mx-auto object-contain" src="<?php echo $historia_fields['imagen']['url'] ?>" alt="<?php echo $historia_fields['imagen']['alt'] ?>">
		<p class="text-white text-[22px] md:text-[36px] leading-[110%] text-center">
			<?php echo strip_tags($historia_fields['texto'], '<br>') ?>
		</p>
		<a class="ky-btn --secondary mt-6" href="#">¡Lee nuestra historia!</a>
	</div>
	<!-- Spotify -->
	<div class="bg-[#111] rounded-[20px] p-4 mt-[90px]">
		<div class="tcp-container">
			<div class="flex items-center justify-between gap-2 md:gap-8">
				<img class="flex-1/3 max-w-[30%]" src="<?php echo $radio_fields['imagen_1']['url'] ?>" alt="<?php echo $radio_fields['imagen_1']['alt'] ?>">
				<img class="flex-1/3 max-w-[30%]" src="<?php echo $radio_fields['imagen_2']['url'] ?>" alt="<?php echo $radio_fields['imagen_2']['alt'] ?>">
				<img class="flex-1/3 max-w-[30%]" src="<?php echo $radio_fields['imagen_3']['url'] ?>" alt="<?php echo $radio_fields['imagen_3']['alt'] ?>">
			</div>
		</div>
	</div>
</section>

<section class="ky-grilla py-[65px]">
	<div class="tcp-container">
		<div class="grid md:grid-cols-3 md:grid-rows-4 gap-4">
			<div class="md:col-span-3">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px] object-cover" src="<?php echo $grilla_fields['foto_1']['url'] ?>" alt="<?php echo $grilla_fields['foto_1']['alt'] ?>">
			</div>
			<div class="md:row-start-2">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px] object-cover" src="<?php echo $grilla_fields['foto_2']['url'] ?>" alt="<?php echo $grilla_fields['foto_2']['alt'] ?>">
			</div>
			<div class="md:row-start-2">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px] object-cover" src="<?php echo $grilla_fields['foto_3']['url'] ?>" alt="<?php echo $grilla_fields['foto_3']['alt'] ?>">
			</div>
			<div class="md:row-start-2">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px] object-cover" src="<?php echo $grilla_fields['foto_4']['url'] ?>" alt="<?php echo $grilla_fields['foto_4']['alt'] ?>">
			</div>
			<div class="md:col-span-2 md:row-span-2">
				<img class="bg-gray-300 h-full w-full rounded-[20px] object-cover" src="<?php echo $grilla_fields['foto_5']['url'] ?>" alt="<?php echo $grilla_fields['foto_5']['alt'] ?>">
			</div>
			<div class="md:col-start-3 md:row-start-3">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px] object-cover" src="<?php echo $grilla_fields['foto_6']['url'] ?>" alt="<?php echo $grilla_fields['foto_6']['alt'] ?>">
			</div>
			<div class="md:col-start-3 md:row-start-4">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px] object-cover" src="<?php echo $grilla_fields['foto_7']['url'] ?>" alt="<?php echo $grilla_fields['foto_7']['alt'] ?>">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>