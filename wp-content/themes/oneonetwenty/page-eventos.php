<?php 
$hero_fields = get_field('hero');
$info_fields = get_field('info');
$creencias_fields = get_field('creencias');
$propuestas_fields = get_field('propuestas');
$contacto_fields = get_field('contacto');
$formulario_fields = get_field('formulario');

get_header(); ?>

<!-- Hero -->
<section class="relative md:min-h-[740px] px-4 md:px-0">
	<div class="bg-cover bg-[url('/wp-content/themes/oneonetwenty/assets/images/eventos-fondo-hero.webp')] w-full h-[350px] md:h-[740px] absolute top-0 left-0"></div>
	<div class="relative z-40s pt-[170px]">
		<h1 class="text-center max-w-[800px] mx-auto uppercase leading-[80%] text-[56px] md:text-[170px] font-black text-white">
			más
			cerca de
			<span class="text-transparent hidden md:inline">.</span>  ti.
		</h1>
		<img class="md:-mt-[180px] hover:scale-[105%] transition-all -mt-4 mx-auto max-w-[1300px] w-full md:pe-[100px]" src="<?php echo $hero_fields['imagen']['url'] ?>" alt="Koychi Eventos Carrito">
	</div>
</section>

<!-- Info -->
<section>
	<div class="tcp-container">
		<h2 class="uppercase text-center font-black text-[50px] leading-[90%] md:text-[96px] md:leading-[106px] mb-4"><?php echo $info_fields['titulo'] ?></h2>
		<p class="py-4 text-[24px] hover:rotate-1 transition-all leading-[100%] md:text-[32px] md:leading-[34px] max-w-[940px] mx-auto text-black px-8 md:px-[100px] bg-[#FEC600]">
			<?php echo strip_tags($info_fields['bajada'], '<strong>') ?>
		</p>
		<div class="bg-black hover:-rotate-1 transition-all max-w-[940px] mx-auto mt-[57px] p-8 md:px-[90px] relative">
			<img class="absolute -left-[55px] top-[62px] hidden md:block" src="/wp-content/themes/oneonetwenty/assets/images/eventos-estampillas.png" alt="Estampillas Koychi">
			<h3 class="text-white text-center font-black uppercase text-[32px] leading-[90%] md:text-[48px] md:leading-[64px] mb-8">
				<?php echo $info_fields['titulo_2'] ?>
			</h3>
			<p class="text-[24px] leading-[100%] md:text-[32px] md:leading-[40px] text-white">
				<?php echo strip_tags($info_fields['bajada_2'], '<strong>') ?>
			</p>
		</div>
	</div>
	<img class="w-full h-auto md:h-[1030px]" src="<?php echo $info_fields['imagen']['url'] ?>" alt="Koychi Eventos">
</section>

<!-- Creemos que... -->
<section class="py-[80px] md:px-0 px-4"> 
	<div class="relative">
		<img class="absolute -top-4 md:-top-[60px] md:left-[calc(50%-620px)] w-full max-w-[1240px] mx-auto" src="/wp-content/themes/oneonetwenty/assets/images/eventos-creemos-fondo.webp" alt="Fondo">
		<h2 class="text-center pt-6 pb-10 mb-4 bg-no-repeat bg-contain bg-[url('/wp-content/themes/oneonetwenty/assets/images/papel-fondo-titulo-creemos.webp')] font-black -rotate-2 hover:rotate-0 transition-all uppercase max-w-[300px] md:max-w-[880px] mx-auto text-[32px] leading-[90%] md:text-[110px] md:leading-[113px]">
			<?php echo $creencias_fields['titulo_principal'] ?>
		</h2>
	</div>
	<?php 
	$i = 0;
	foreach ($creencias_fields['lista_de_creencias'] as $creencia) : 
		$i++;
	?>		
		<div class="relative z-50 max-w-[860px] mb-8 <?php echo $i % 2 !== 0 ? 'rotate-[1.6deg]' : 'rotate-[0.24deg]' ?> mx-auto hover:rotate-0 transition-all py-8 md:py-4 bg-black px-4">
			<h3 class="text-[#FF0000] font-bold text-center text-[28px] md:text-[48px] leading-[100%] md:leading-[40px]"><?php echo $creencia['titulo']; ?></h3>
			<p class="text-white text-center md:text-[32px] leading-[40px] text-[22px] leading-[110%]"><?php echo strip_tags($creencia['bajada']); ?></p>
		</div>
	<?php endforeach; ?>
</section>

<!-- Para quien es -->
<section>
	<div class="tcp-container">
		<h2 class="text-center pt-6 pb-10 bg-no-repeat bg-contain bg-[url('/wp-content/themes/oneonetwenty/assets/images/papel-fondo-titulo-paraquien.webp')] font-black rotate-2 hover:rotate-0 transition-all uppercase max-w-[1030px] mx-auto text-white text-[28px] md:text-[110px] leading-[80%]">
			<?php echo $propuestas_fields['titulo']; ?>
		</h2>
		<div class="grid md:grid-cols-3 gap-x-[40px] gap-y-[30px]">
			<?php foreach ($propuestas_fields['lista_de_propuestas'] as $propuesta) :  ?>
				<div class="bg-[#FF0000] hover:scale-[105%] transition-all p-8 rounded-[20px]">
					<img class="h-[60px] w-auto mx-auto" src="<?php echo $propuesta['icono']['url']; ?>" alt="<?php echo $propuesta['icono']['alt']; ?>">
					<p class="text-white text-center text-[32px] leading-[29px] mt-4">
						<?php echo strip_tags($propuesta['texto']); ?>
					</p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Pepe -->
<section class="pt-[80px]">
	<div class="tcp-container">
		<img 
			class="md:w-[1040px] hover:scale-[105%] transition-all object-cover relative z-40 h-[300px] md:h-[690px] mx-auto -rotate-[3.5deg] border border-[17px] border-white" 
			src="<?php echo $propuestas_fields['imagen_1']['url']; ?>" 
			alt="<?php echo $propuestas_fields['imagen_1']['alt']; ?>"
		/>
		<img 
			class="md:w-[1040px] hover:scale-[105%] transition-all object-cover relative z-10 h-[300px] md:h-[690px] mx-auto rotate-[3.12deg] border border-[17px] border-white" 
			src="<?php echo $propuestas_fields['imagen_2']['url']; ?>" 
			alt="<?php echo $propuestas_fields['imagen_2']['alt']; ?>"
		/>
		<img 
			class="-mt-8 md:-mt-[180px] hover:scale-[105%] transition-all relative z-40 mx-auto w-full max-w-[700px] md:pe-[100px]" 
			src="<?php echo $propuestas_fields['imagen_3']['url']; ?>" 
			alt="<?php echo $propuestas_fields['imagen_3']['alt']; ?>"
		/>
		<div class="max-w-[1000px] mx-auto md:-mt-8 group">
			<h2 class="text-[32px] md:text-[100px] text-center leading-[90%] md:leading-[107px] uppercase font-bold">
				<?php echo $contacto_fields['titulo'] ?>
			</h2>
			<a 
				class="text-[26px] group-hover:scale-[105%] transition-all md:text-[48px] leading-[69%] mt-8 bg-[#FF0000] py-[22px] px-8 rounded-full text-white uppercase block w-fit mx-auto font-bold" 
				href="<?php echo $contacto_fields['boton']['url'] ?>"
			>
				<?php echo $contacto_fields['boton']['title'] ?>
			</a>
		</div>
	</div>
</section>

<!-- Gallery -->
<section class="py-[100px]">
	<div class="tcp-container">
		<div class="grid md:grid-cols-3 gap-[20px]">
			<div class="md:col-span-2 rounded-[20px] overflow-clip h-[343px]">
				<img class="w-full hover:scale-[105%] transition-all h-full object-cover" src="<?php echo $contacto_fields['imagen_1']['url'] ?>" alt="<?php echo $contacto_fields['imagen_1']['alt'] ?>">
			</div>
			<div class="rounded-[20px] h-[343px] overflow-clip">
				<img class="w-full hover:scale-[105%] transition-all h-full object-cover" src="<?php echo $contacto_fields['imagen_2']['url'] ?>" alt="<?php echo $contacto_fields['imagen_2']['alt'] ?>">
			</div>
			<div class="rounded-[20px] h-[343px] overflow-clip">
				<img class="w-full hover:scale-[105%] transition-all h-full object-cover" src="<?php echo $contacto_fields['imagen_3']['url'] ?>" alt="<?php echo $contacto_fields['imagen_3']['alt'] ?>">
			</div>
			<div class="md:col-span-2 rounded-[20px] overflow-clip h-[343px]">
				<img class="w-full hover:scale-[105%] transition-all h-full object-cover" src="<?php echo $contacto_fields['imagen_4']['url'] ?>" alt="<?php echo $contacto_fields['imagen_4']['alt'] ?>">
			</div>
		</div>
	</div>
</section>

<section class="pt-[80px] bg-cover bg-[url('/wp-content/themes/oneonetwenty/assets/images/eventos-fondo-contacto.webp')]">
	<div class="tcp-container">
		<h2 class="max-w-[1100px] text-center mx-auto font-black text-[32px] md:text-[80px] text-white leading-[90%] md:leading-[73px]">
			<?php echo $formulario_fields['titulo'] ?>
		</h2>
		<div class="grid md:grid-cols-2 mt-8 md:mt-0">
			<img class="w-full md:w-[644px] h-auto md:h-[577px] object-cover" src="<?php echo $formulario_fields['imagen']['url'] ?>" alt="<?php echo $formulario_fields['imagen']['alt'] ?>">
			<div class="md:order-none -order-1 ky-eventos-form pt-6">
				<?php echo do_shortcode('[contact-form-7 id="cba1be0" title="Contact form 1"]') ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>