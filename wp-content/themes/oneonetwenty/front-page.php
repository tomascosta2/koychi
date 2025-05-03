<?php 

$hero_fields = get_field('hero');
$banners_fields = get_field('banners');

get_header(); ?>

<!-- Carrusel -->
<section class="ky-hero">
	<div class="swiper w-full h-[500px] relative">
		<div class="swiper-wrapper max-h-full">
			<!-- Slide 1 -->
			<?php foreach ($hero_fields['slides'] as $slide) : ?>
				<div class="swiper-slide bg-[url('<?php echo $slide['imagen']['url'] ?>')] pt-[90px] pb-[66px] flex items-center justify-center bg-gray-500">
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
			<img class="h-[280px] w-full bg-gray-300 md:rounded-br-[20px] md:rounded-bl-[20px]" src="<?php echo $banners_fields['imagen_banner_1']['url'] ?>" alt="">
		</a>
		<a href="<?php echo $banners_fields['enlace_banner_2'] ?>">
			<img class="h-[280px] w-full bg-gray-300 md:rounded-br-[20px] md:rounded-bl-[20px]" src="<?php echo $banners_fields['imagen_banner_2']['url'] ?>" alt="">
		</a>
	</div>
</section>

<!-- Hambre? -->
<section class="py-[60px]">
	<div class="tcp-container">
		<h1 class="leading-[100%] text-center text-[60px] font-bold uppercase">
			<strong>¿Hambre?</strong>
			<br>
			Te tenemos la solución
		</h1>
		<img class="w-[800px] h-[690px] mx-auto mt-8 max-w-full bg-gray-300" src="" alt="">
		<p class="uppercase text-center font-semibold text-[38px] mt-8">¡come rico y olvídate del resto!</p>
		<a class="ky-btn mt-6" href="#">¡A lo que vine!</a>
	</div>
</section>

<!-- Historia -->
<section class="ky-historia bg-[#FF0000] rounded-tr-[20px] pt-[40px] rounded-[20px]">
	<div class="tcp-container">
		<img class="w-[940px] h-[500px] mx-auto bg-gray-300" src="" alt="">
		<p class="text-white text-[22px] md:text-[36px] leading-[110%] text-center">
			¿Comida coreana en Chile? Había. Pero no como la que ofrecemos.
			<br class="md:hidden"><br class="md:hidden">
			Alguien tenía que hacerlo con actitud, y aprovechamos la oportunidad.
			Teníamos el fuego encendido, la pasión y un balcón.
			<br class="md:hidden"><br class="md:hidden">
			Necesitábamos poner verdadero orden al rubro.
			Así comenzamos esta historia, y aquí la puedes conocer.
			<br class="md:hidden"><br class="md:hidden">
			Spoiler: ¡somos un éxito!
		</p>
		<a class="ky-btn --secondary mt-6" href="#">¡Lee nuestra historia!</a>
	</div>
	<!-- Spotify -->
	<div class="bg-[#111] rounded-[20px] p-4 mt-[90px]">
		<img src="" alt="">
		<img src="" alt="">
		<img src="" alt="">
	</div>
</section>

<section class="ky-grilla py-[65px]">
	<div class="tcp-container">
		<div class="grid md:grid-cols-3 md:grid-rows-4 gap-4">
			<div class="md:col-span-3">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px]" src="" alt="">
			</div>
			<div class="md:row-start-2">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px]" src="" alt="">
			</div>
			<div class="md:row-start-2">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px]" src="" alt="">
			</div>
			<div class="md:row-start-2">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px]" src="" alt="">
			</div>
			<div class="md:col-span-2 md:row-span-2">
				<img class="bg-gray-300 h-full w-full rounded-[20px]" src="" alt="">
			</div>
			<div class="md:col-start-3 md:row-start-3">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px]" src="" alt="">
			</div>
			<div class="md:col-start-3 md:row-start-4">
				<img class="bg-gray-300 h-[380px] w-full rounded-[20px]" src="" alt="">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>