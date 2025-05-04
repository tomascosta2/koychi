<?php get_header(); ?>

<section class="pt-[110px] pb-[100px] bg-[#FF0000]">
	<div class="max-w-[1100px] mx-auto">
		<img class="mx-auto" src="<?php echo get_field('banner_principal')['url'] ?>" alt="<?php echo get_field('banner_principal')['alt'] ?>">
		<p class="text-white text-justify text-[30px]">
			<?php echo strip_tags(get_field('texto_1')) ?>
		</p>
	</div>
</section>

<?php get_footer(); ?>