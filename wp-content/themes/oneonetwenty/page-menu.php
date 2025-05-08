<?php

$hero_fields = get_field('hero');
$entradas_fields = get_field('entradas');
$pollo_frito_coreano_fields = get_field('pollo_frito_coreano');
$mariscos_fields = get_field('mariscos');
$fideos_fields = get_field('fideos_y_arroces');
$sopas_fields = get_field('sopas');
$acompañamientos_fields = get_field('acompanamientos');
$extras_fields = get_field('extras');
$bebidas_fields = get_field('bebidas');
$postres_fields = get_field('postres');

get_header(); ?>

<section class="menu-hero">
	<img class="rounded-bl-[20px] rounded-br-[20px] w-full max-h-[500px] object-cover" src="<?php echo $hero_fields['portada']['url'] ?>" alt="Koychi">
	<div class="mt-[50px]">
		<p class="text-center font-black text-[32px] md:text-[60px] text-[#FF0000] uppercase leading-[110%]"><?php echo $hero_fields['arriba_del_titulo'] ?></p>
		<h1 class="text-center font-semibold leading-[110%]  text-[32px] md:text-[60px] uppercase"><?php echo $hero_fields['titulo'] ?></h1>
	</div>
</section>

<!-- Entradas -->
<section class="mt-[50px]">
	<div class="tcp-container">
		<img class="w-full" src="<?php echo $entradas_fields['portada']['url'] ?>" alt="<?php echo $entradas_fields['portada']['alt'] ?>">
		<div class="grid md:grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($entradas_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card hover:scale-[105%] group transition-all rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px] group-hover:scale-[115%] transition-all" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center md:flex-row flex-col gap-2 md:gap-0">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white md:w-fit w-full text-[16px] md:text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[32px] md:text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
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
		<?php if ($entradas_fields['tiene_cta']) : ?>
			<div class="mt-10 flex gap-4">
				<a href="#!" class="group uppercase flex md:flex-row flex-col gap-4 justify-center items-center mx-auto">
					<span class="group-hover:scale-[105%] transition-all font-[30px] text-white font-black bg-[#FF0000] text-[30px] flex justify-center gap-2 px-6 w-full md:w-fit mx-auto rounded-[10px] py-2">
						<img src="/wp-content/themes/oneonetwenty/assets/images/moto-btn.svg" alt="Koychi Delivery">
						¡pide online!
					</span>
					<img class="object-contain" src="/wp-content/themes/oneonetwenty/assets/images/app-pedidos.png" alt="Koychi Delivery">
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- Pollo frito coreano -->
<section class="mt-[50px]">
	<div class="tcp-container">
		<img class="w-full" src="<?php echo $pollo_frito_coreano_fields['portada']['url'] ?>" alt="<?php echo $pollo_frito_coreano_fields['portada']['alt'] ?>">
		<div class="grid md:grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($pollo_frito_coreano_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card hover:scale-[105%] group transition-all rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px] group-hover:scale-[115%] transition-all" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center md:flex-row flex-col gap-2 md:gap-0">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white md:w-fit w-full text-[16px] md:text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
						</div>
					</div>
				</div>
				<?php 
				if ($index === 5 && !empty($pollo_frito_coreano_fields['imagen_intermedia'])): ?>
					<div class="my-8 text-center col-span-full">
						<img 
							src="<?php echo $pollo_frito_coreano_fields['imagen_intermedia']['url'] ?>" 
							alt="<?php echo $pollo_frito_coreano_fields['imagen_intermedia']['url'] ?>">
					</div>
				<?php 
				elseif ($index == 10 && !empty($pollo_frito_coreano_fields['imagen_entrelinea'])) : ?>
					<div class="row-span-2">
						<img class="w-full" src="<?php echo $pollo_frito_coreano_fields['imagen_entrelinea']['url'] ?>" alt="">
					</div>
				<?php endif;
			endforeach; ?>
		</div>
		<?php if ($entradas_fields['tiene_cta']) : ?>
			<div class="mt-10 flex gap-4">
				<a href="#!" class="group uppercase flex md:flex-row flex-col gap-4 justify-center items-center mx-auto">
					<span class="group-hover:scale-[105%] transition-all font-[30px] text-white font-black bg-[#FF0000] text-[30px] flex justify-center gap-2 px-6 w-full md:w-fit mx-auto rounded-[10px] py-2">
						<img src="/wp-content/themes/oneonetwenty/assets/images/moto-btn.svg" alt="Koychi Delivery">
						¡pide online!
					</span>
					<img class="object-contain" src="/wp-content/themes/oneonetwenty/assets/images/app-pedidos.png" alt="Koychi Delivery">
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- Mariscos -->
<section class="mt-[50px]">
	<div class="tcp-container">
		<img class="w-full" src="<?php echo $mariscos_fields['portada']['url'] ?>" alt="<?php echo $mariscos_fields['portada']['alt'] ?>">
		<div class="grid md:grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($mariscos_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card hover:scale-[105%] group transition-all rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px] group-hover:scale-[115%] transition-all" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center md:flex-row flex-col gap-2 md:gap-0">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white md:w-fit w-full text-[16px] md:text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
						</div>
					</div>
				</div>
				<?php 
				if ($index === 6 && !empty($mariscos_fields['imagen_intermedia'])): ?>
					<div class="my-8 text-center col-span-full">
						<img 
							src="<?php echo $mariscos_fields['imagen_intermedia']['url'] ?>" 
							alt="<?php echo $mariscos_fields['imagen_intermedia']['url'] ?>"
						/>
					</div>
				<?php endif;
			endforeach; ?>
		</div>
		<?php if ($entradas_fields['tiene_cta']) : ?>
			<div class="mt-10 flex gap-4">
				<a href="#!" class="group uppercase flex md:flex-row flex-col gap-4 justify-center items-center mx-auto">
					<span class="group-hover:scale-[105%] transition-all font-[30px] text-white font-black bg-[#FF0000] text-[30px] flex justify-center gap-2 px-6 w-full md:w-fit mx-auto rounded-[10px] py-2">
						<img src="/wp-content/themes/oneonetwenty/assets/images/moto-btn.svg" alt="Koychi Delivery">
						¡pide online!
					</span>
					<img class="object-contain" src="/wp-content/themes/oneonetwenty/assets/images/app-pedidos.png" alt="Koychi Delivery">
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- Fideos -->
<section class="mt-[50px]">
	<div class="tcp-container">
		<img class="w-full" src="<?php echo $fideos_fields['portada']['url'] ?>" alt="<?php echo $fideos_fields['portada']['alt'] ?>">
		<div class="grid md:grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($fideos_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card hover:scale-[105%] group transition-all rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px] group-hover:scale-[115%] transition-all" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center md:flex-row flex-col gap-2 md:gap-0">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white md:w-fit w-full text-[16px] md:text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
						</div>
					</div>
				</div>
				<?php 
				if ($index === 3 && !empty($fideos_fields['imagen_intermedia'])): ?>
					<div class="my-8 text-center col-span-full">
						<img 
							src="<?php echo $fideos_fields['imagen_intermedia']['url'] ?>" 
							alt="<?php echo $fideos_fields['imagen_intermedia']['url'] ?>"
						/>
					</div>
				<?php elseif ($index === 9 && !empty($fideos_fields['imagen_entrelinea'])): ?>
					<div class="text-center">
						<img 
							src="<?php echo $fideos_fields['imagen_entrelinea']['url'] ?>" 
							alt="<?php echo $fideos_fields['imagen_entrelinea']['url'] ?>"
						/>
					</div>
				<?php endif;
			endforeach; ?>
		</div>
		<?php if ($entradas_fields['tiene_cta']) : ?>
			<div class="mt-10 flex gap-4">
				<a href="#!" class="group uppercase flex md:flex-row flex-col gap-4 justify-center items-center mx-auto">
					<span class="group-hover:scale-[105%] transition-all font-[30px] text-white font-black bg-[#FF0000] text-[30px] flex justify-center gap-2 px-6 w-full md:w-fit mx-auto rounded-[10px] py-2">
						<img src="/wp-content/themes/oneonetwenty/assets/images/moto-btn.svg" alt="Koychi Delivery">
						¡pide online!
					</span>
					<img class="object-contain" src="/wp-content/themes/oneonetwenty/assets/images/app-pedidos.png" alt="Koychi Delivery">
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- Sopas -->
<section class="mt-[50px]">
	<div class="tcp-container">
		<img class="w-full" src="<?php echo $sopas_fields['portada']['url'] ?>" alt="<?php echo $sopas_fields['portada']['alt'] ?>">
		<div class="grid md:grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($sopas_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card hover:scale-[105%] group transition-all rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px] group-hover:scale-[115%] transition-all" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center md:flex-row flex-col gap-2 md:gap-0">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white md:w-fit w-full text-[16px] md:text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
						</div>
					</div>
				</div>
				<?php 
				if ($index === 3 && !empty($sopas_fields['imagen_intermedia'])): ?>
					<div class="my-8 text-center col-span-full">
						<img 
							src="<?php echo $sopas_fields['imagen_intermedia']['url'] ?>" 
							alt="<?php echo $sopas_fields['imagen_intermedia']['url'] ?>"
						/>
					</div>
				<?php elseif ($index === 9 && !empty($sopas_fields['imagen_entrelinea'])): ?>
					<div class="text-center">
						<img 
							src="<?php echo $sopas_fields['imagen_entrelinea']['url'] ?>" 
							alt="<?php echo $sopas_fields['imagen_entrelinea']['url'] ?>"
						/>
					</div>
				<?php endif;
			endforeach; ?>
		</div>
		<?php if ($entradas_fields['tiene_cta']) : ?>
			<div class="mt-10 flex gap-4">
				<a href="#!" class="group uppercase flex md:flex-row flex-col gap-4 justify-center items-center mx-auto">
					<span class="group-hover:scale-[105%] transition-all font-[30px] text-white font-black bg-[#FF0000] text-[30px] flex justify-center gap-2 px-6 w-full md:w-fit mx-auto rounded-[10px] py-2">
						<img src="/wp-content/themes/oneonetwenty/assets/images/moto-btn.svg" alt="Koychi Delivery">
						¡pide online!
					</span>
					<img class="object-contain" src="/wp-content/themes/oneonetwenty/assets/images/app-pedidos.png" alt="Koychi Delivery">
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- Acompañamientos -->
<section class="mt-[50px]">
	<div class="tcp-container">
		<img class="w-full" src="<?php echo $acompañamientos_fields['portada']['url'] ?>" alt="<?php echo $acompañamientos_fields['portada']['alt'] ?>">
		<div class="grid md:grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($acompañamientos_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card hover:scale-[105%] group transition-all rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px] group-hover:scale-[115%] transition-all" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center md:flex-row flex-col gap-2 md:gap-0">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white md:w-fit w-full text-[16px] md:text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
						</div>
					</div>
				</div>
				<?php 
				if ($index === 3 && !empty($acompañamientos_fields['imagen_intermedia'])): ?>
					<div class="my-8 text-center col-span-full">
						<img 
							src="<?php echo $acompañamientos_fields['imagen_intermedia']['url'] ?>" 
							alt="<?php echo $acompañamientos_fields['imagen_intermedia']['url'] ?>"
						/>
					</div>
				<?php elseif ($index === 9 && !empty($acompañamientos_fields['imagen_entrelinea'])): ?>
					<div class="text-center">
						<img 
							src="<?php echo $acompañamientos_fields['imagen_entrelinea']['url'] ?>" 
							alt="<?php echo $acompañamientos_fields['imagen_entrelinea']['url'] ?>"
						/>
					</div>
				<?php endif;
			endforeach; ?>
		</div>
		<?php if ($entradas_fields['tiene_cta']) : ?>
			<div class="mt-10 flex gap-4">
				<a href="#!" class="group uppercase flex md:flex-row flex-col gap-4 justify-center items-center mx-auto">
					<span class="group-hover:scale-[105%] transition-all font-[30px] text-white font-black bg-[#FF0000] text-[30px] flex justify-center gap-2 px-6 w-full md:w-fit mx-auto rounded-[10px] py-2">
						<img src="/wp-content/themes/oneonetwenty/assets/images/moto-btn.svg" alt="Koychi Delivery">
						¡pide online!
					</span>
					<img class="object-contain" src="/wp-content/themes/oneonetwenty/assets/images/app-pedidos.png" alt="Koychi Delivery">
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- Extras -->
<section class="mt-[50px]">
	<div class="tcp-container">
		<img class="w-full" src="<?php echo $extras_fields['portada']['url'] ?>" alt="<?php echo $extras_fields['portada']['alt'] ?>">
		<div class="grid md:grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($extras_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card hover:scale-[105%] group transition-all rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px] group-hover:scale-[115%] transition-all" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center md:flex-row flex-col gap-2 md:gap-0">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white md:w-fit w-full text-[16px] md:text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
						</div>
					</div>
				</div>
				<?php 
			endforeach; ?>
		</div>
		<?php if ($entradas_fields['tiene_cta']) : ?>
			<div class="mt-10 flex gap-4">
				<a href="#!" class="group uppercase flex md:flex-row flex-col gap-4 justify-center items-center mx-auto">
					<span class="group-hover:scale-[105%] transition-all font-[30px] text-white font-black bg-[#FF0000] text-[30px] flex justify-center gap-2 px-6 w-full md:w-fit mx-auto rounded-[10px] py-2">
						<img src="/wp-content/themes/oneonetwenty/assets/images/moto-btn.svg" alt="Koychi Delivery">
						¡pide online!
					</span>
					<img class="object-contain" src="/wp-content/themes/oneonetwenty/assets/images/app-pedidos.png" alt="Koychi Delivery">
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- Bebidas -->
<section class="mt-[50px]">
	<div class="tcp-container">
		<img class="w-full" src="<?php echo $bebidas_fields['portada']['url'] ?>" alt="<?php echo $bebidas_fields['portada']['alt'] ?>">
		<div class="grid md:grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($bebidas_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card hover:scale-[105%] group transition-all rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px] group-hover:scale-[115%] transition-all" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center md:flex-row flex-col gap-2 md:gap-0">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white md:w-fit w-full text-[16px] md:text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
						</div>
					</div>
				</div>
				<?php 
				if ($index === 3 && !empty($bebidas_fields['imagen_intermedia'])): ?>
					<div class="my-8 text-center col-span-full">
						<img 
							src="<?php echo $bebidas_fields['imagen_intermedia']['url'] ?>" 
							alt="<?php echo $bebidas_fields['imagen_intermedia']['url'] ?>"
						/>
					</div>
				<?php elseif ($index === 18 && !empty($bebidas_fields['imagen_entrelinea'])): ?>
					<div class="text-center row-span-2">
						<img 
							src="<?php echo $bebidas_fields['imagen_entrelinea']['url'] ?>" 
							alt="<?php echo $bebidas_fields['imagen_entrelinea']['url'] ?>"
						/>
					</div>
				<?php endif;
			endforeach; ?>
		</div>
		<?php if ($entradas_fields['tiene_cta']) : ?>
			<div class="mt-10 flex gap-4">
				<a href="#!" class="group uppercase flex md:flex-row flex-col gap-4 justify-center items-center mx-auto">
					<span class="group-hover:scale-[105%] transition-all font-[30px] text-white font-black bg-[#FF0000] text-[30px] flex justify-center gap-2 px-6 w-full md:w-fit mx-auto rounded-[10px] py-2">
						<img src="/wp-content/themes/oneonetwenty/assets/images/moto-btn.svg" alt="Koychi Delivery">
						¡pide online!
					</span>
					<img class="object-contain" src="/wp-content/themes/oneonetwenty/assets/images/app-pedidos.png" alt="Koychi Delivery">
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- Postres -->
<section class="mt-[50px] pb-[60px]">
	<div class="tcp-container">
		<img class="w-full" src="<?php echo $postres_fields['portada']['url'] ?>" alt="<?php echo $postres_fields['portada']['alt'] ?>">
		<div class="grid md:grid-cols-2 gap-[45px] mt-[50px]">
			<?php foreach ($postres_fields['platos'] as $index => $plato) : ?>
				<div class="plato-card hover:scale-[105%] group transition-all rounded-[20px] border border-dashed p-[22px] relative">
					<img class="absolute h-[50px] -top-[25px] right-[20px] group-hover:scale-[115%] transition-all" src="/wp-content/themes/oneonetwenty/assets/images/koychi-<?php echo $plato['hot'] ?>-tag.png" alt="">
					<div class="flex flex-col justify-between h-full gap-6">
						<div>
							<h3 class="font-black leading-[95%] text-[40px] uppercase"><?php echo $plato['nombre'] ?></h3>
							<p class="leading-[95%] text-[25px] mt-2"><?php echo $plato['descripcion'] ?></p>
						</div>
						<div class="flex <?php echo $plato['aclaracion'] ? 'justify-between' : 'justify-end' ?> items-center md:flex-row flex-col gap-2 md:gap-0">
							<?php if ($plato['aclaracion']) : ?>
								<p class="p-2 rounded-[5px] bg-black text-white md:w-fit w-full text-[16px] md:text-[20px]"><?php echo $plato['aclaracion'] ?></p>
							<?php endif; ?>
							<p class="font-black text-[40px] text-[#FF0000]"><?php echo $plato['precio'] ?></p>
						</div>
					</div>
				</div>
				<?php 
				if ($index === 3 && !empty($bebidas_fields['imagen_intermedia'])): ?>
					<div class="my-8 text-center col-span-full">
						<img 
							src="<?php echo $bebidas_fields['imagen_intermedia']['url'] ?>" 
							alt="<?php echo $bebidas_fields['imagen_intermedia']['url'] ?>"
						/>
					</div>
				<?php elseif ($index === 18 && !empty($bebidas_fields['imagen_entrelinea'])): ?>
					<div class="text-center row-span-2">
						<img 
							src="<?php echo $bebidas_fields['imagen_entrelinea']['url'] ?>" 
							alt="<?php echo $bebidas_fields['imagen_entrelinea']['url'] ?>"
						/>
					</div>
				<?php endif;
			endforeach; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>