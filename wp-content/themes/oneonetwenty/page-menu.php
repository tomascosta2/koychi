<?php

$hero_fields = get_field('hero');
$entradas_fields = get_field('entradas');
$pollo_frito_coreano_fields = get_field('pollo_frito_coreano');

get_header(); ?>

<section class="menu-hero">
	<img class="rounded-bl-[20px] rounded-br-[20px]" src="<?php echo $hero_fields['portada']['url'] ?>" alt="Koychi">
	<div class="mt-[50px]">
		<p class="text-center font-black text-[60px] text-[#FF0000] uppercase leading-[110%]"><?php echo $hero_fields['arriba_del_titulo'] ?></p>
		<h1 class="text-center font-semibold leading-[110%] text-[60px] uppercase"><?php echo $hero_fields['titulo'] ?></h1>
	</div>
</section>

<!-- Entradas -->
<section class="mt-[50px]">
	<div class="tcp-container">
		<img src="<?php echo $entradas_fields['portada']['url'] ?>" alt="<?php echo $entradas_fields['portada']['alt'] ?>">
		<div class="platos-grid grid grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($entradas_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px]" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
						</div>
					</div>
				</div>
				<?php 
				if ($index === 3 && !empty($entradas_fields['imagen_intermedia'])): ?>
					<div class="my-8 text-center col-span-full">
						<img 
							src="<?php echo $entradas_fields['imagen_intermedia']['url'] ?>" 
							alt="<?php echo $entradas_fields['imagen_intermedia']['url'] ?>">
					</div>
				<?php 
				endif; 
			endforeach; ?>
		</div>
	</div>
</section>

<!-- Pollo frito coreano -->
<section class="mt-[50px]">
	<div class="tcp-container">
		<img src="<?php echo $pollo_frito_coreano_fields['portada']['url'] ?>" alt="<?php echo $pollo_frito_coreano_fields['portada']['alt'] ?>">
		<div class="platos-grid grid grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($pollo_frito_coreano_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px]" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
						</div>
					</div>
				</div>
				<?php 
				if ($index === 3 && !empty($pollo_frito_coreano_fields['imagen_intermedia'])): ?>
					<div class="my-8 text-center col-span-full">
						<img 
							src="<?php echo $pollo_frito_coreano_fields['imagen_intermedia']['url'] ?>" 
							alt="<?php echo $pollo_frito_coreano_fields['imagen_intermedia']['url'] ?>">
					</div>
				<?php 
				endif; 
			endforeach; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>