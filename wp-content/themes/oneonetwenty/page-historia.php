<?php get_header(); ?>

<section class="pt-[90px] pb-[100px] bg-[#FF0000]">
	<div class="max-w-[1100px] mx-auto">
		<h1>
			<img class="mx-auto h-[800px] w-auto" src="<?php echo get_field('banner_principal')['url'] ?>" alt="<?php echo get_field('banner_principal')['alt'] ?>">
		</h1>
		<p class="text-white text-justify text-[30px] leading-[41px]">
			<?php echo strip_tags(get_field('texto_1')) ?>
		</p>

		<h2 class="font-black text-white text-center my-8"><?php echo get_field('titulo_2') ?></h2>
		<p class="text-white text-justify text-[30px] leading-[41px]">
			<?php echo strip_tags(get_field('texto_2')) ?>
		</p>

		<h2 class="font-black text-white text-center my-8"><?php echo get_field('titulo_3') ?></h2>
		<p class="text-white text-justify text-[30px] leading-[41px]">
			<?php echo strip_tags(get_field('texto_3')) ?>
		</p>
	</div>
</section>

<?php get_footer(); ?>