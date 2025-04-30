<?php 

$hero_fields = get_field('hero');
$about_fields = get_field('sobre_nosotros');

get_header(); ?>

<!-- Hero -->
<section class="py-[80px] px-4">
	<div class="max-w-[1140px] mx-auto">
		<div class="flex flex-col items-center">
			<h1 class="text-[40px] text-center font-bold"><?php echo $hero_fields['titulo'] ?></h1>
			<p class="mt-[10px] mb-[20px] text-center"><?php echo $hero_fields['bajada'] ?></p>
			<div class="max-w-full w-[800px] aspect-video bg-[#111] rounded-[10px] overflow-hidden mb-[20px]">
				<iframe class="w-full h-full" src="<?php echo $hero_fields['iframe_url'] ?>" frameborder="0"></iframe>
			</div>
			<a class="block text-white bg-[#111] text-center py-4 w-[400px] max-w-full rounded-[6px]" href="<?php echo $hero_fields['boton']['url'] ?>"><?php echo $hero_fields['boton']['title'] ?></a>
		</div>
	</div>
</section>
<section class="pb-[80px] px-4">
	<div class="max-w-[1140px] mx-auto">
		<h2 class="text-[30px] text-center font-semibold mb-[30px]"><?php echo $about_fields['titulo'] ?></h2>
		<div class="gap-[10px] lg:gap-0 flex flex-wrap w-full justify-between">
			<p class="text-start lg:max-w-[45%]">
			<?php echo $about_fields['texto'] ?>
			</p>
			<img class="lg:h-[350px] lg:w-[40%] bg-[#111] block" src="<?php echo $about_fields['imagen']['url'] ?>" alt="<?php echo $about_fields['imagen']['alt'] ?>">
		</div>
	</div>
</section>

<!-- Sobre nosotros -->

<?php get_footer(); ?>