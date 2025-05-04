<?php get_header(); ?>

<section class="pt-[90px] pb-[100px] bg-[#FF0000]">
	<div class="max-w-[1100px] mx-auto px-4">
		<h1>
			<img class="mx-auto h-[800px] w-auto" src="<?php echo get_field('banner_principal')['url'] ?>" alt="<?php echo get_field('banner_principal')['alt'] ?>">
		</h1>
		<p class="text-white text-justify text-[20px] leading-[120%] md:text-[30px] md:leading-[41px]">
			<?php echo strip_tags(get_field('texto_1')) ?>
		</p>

		<div class="relative">
			<img class="absolute -right-[20px] rotate-5" src="/wp-content/themes/oneonetwenty/assets/images/koychi-historia-deco-1.png" alt="Deco">
			<h2 class="font-black text-white text-center my-8 text-[40px] md:text-[90px] uppercase leading-[90%]"><?php echo get_field('titulo_2') ?></h2>
		</div>
		<p class="text-white text-justify text-[20px] leading-[120%] md:text-[30px] md:leading-[41px]">
			<?php echo strip_tags(get_field('texto_2')) ?>
		</p>

		<div class="relative">
			<img class="absolute -left-[20px] rotate-5 bottom-2" src="/wp-content/themes/oneonetwenty/assets/images/koychi-historia-deco-2.png" alt="Deco">
			<h2 class="font-black text-white text-center my-8 text-[40px] md:text-[90px] uppercase leading-[90%]"><?php echo get_field('titulo_3') ?></h2>
		</div>
		<p class="text-white text-justify text-[20px] leading-[120%] md:text-[30px] md:leading-[41px]">
			<?php echo strip_tags(get_field('texto_3')) ?>
		</p>

		<div class="relative">
			<img class="mx-auto" src="/wp-content/themes/oneonetwenty/assets/images/koychi-historia-deco-2.png" alt="Deco">
			<h2 class="font-black text-white text-center my-8 text-[40px] md:text-[90px] uppercase leading-[90%]"><?php echo get_field('titulo_4') ?></h2>
		</div>
		<p class="text-white text-justify text-[20px] leading-[120%] md:text-[30px] md:leading-[41px]">
			<?php echo strip_tags(get_field('texto_4')) ?>
		</p>
		<img class="mx-auto mt-8" src="<?php echo get_field('banner_final')['url'] ?>" alt="<?php echo get_field('banner_final')['alt'] ?>">
	</div>
</section>

<?php get_footer(); ?>