<?php 

$hero_fields = get_field('hero');
$lista_de_sucursales_fields = get_field('lista_de_sucursales');

get_header(); ?>

<section class="ky-hero">
	<div class="swiper w-full h-[500px] relative">
		<div class="swiper-wrapper max-h-full">
			<?php foreach ($hero_fields['portadas'] as $portada) : ?>
			<div class="swiper-slide rounded-bl-[20px] rounded-br-[20px] bg-[url('<?php echo $portada['imagen']['url'] ?>')] pt-[90px] pb-[66px] flex items-center justify-center bg-gray-500">
			</div>
			<?php endforeach; ?>
		</div>

		<!-- Paginación y flechas -->
		<div class="swiper-pagination"></div>
	</div>
	<h1 class="font-bold text-[32px] md:text-[60px] leading-[110%] text-center mt-12 uppercase">
		<?php echo $lista_de_sucursales_fields['titulo'] ?>
	</h1>
</section>
<section class="pt-12 pb-[80px]">
	<div class="tcp-container">
		<?php foreach ($lista_de_sucursales_fields['lista'] as $sucursal) : ?>
			<div class="ky-sucursal not-last:pb-8">
				<div>
					<div class="relative -mb-[15px] md:-mb-[25px] z-50 bg-white flex items-center justify-center mx-auto border-4 border-[#FF0000] size-[75px] rounded-full">
						<img src="/wp-content/themes/oneonetwenty/assets/images/store.svg" alt="">
					</div>
					<h2 class="py-2 mb-12 px-18 mx-auto bg-[#FF0000] text-white font-black text-[30px] md:text-[50px] text-center w-fit rounded-[10px]"><?php echo $sucursal['nombre'] ?></h2>
				</div>
				<div class="flex flex-col md:flex-row gap-6 md:gap-12">
					<img class="h-[350px] object-cover md:h-[600px] w-full rounded-[20px] md:flex-2/3 bg-gray-300" src="<?php echo $sucursal['foto']['url'] ?>" alt="<?php echo $sucursal['foto']['url'] ?>">
					<div class="h-[400px] md:h-[600px] md:flex-1/3 bg-gray-400 overflow-hidden rounded-[20px]">
						<iframe class="w-full h-full" src="<?php echo $sucursal['mapa'] ?>" frameborder="0"></iframe>
					</div>
				</div>
				<p class="bg-[#111] rounded-[15px] py-2 px-4 text-[24px] md:text-[38px] text-white text-center mt-10">
					<strong>Ubicacion</strong> <?php echo $sucursal['ubicacion'] ?>
				</p>
				<p class="text-[24px] md:text-[38px] text-center mt-10">
					<strong>Horario</strong> <?php echo $sucursal['horarios'] ?>
				</p>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<?php get_footer(); ?>