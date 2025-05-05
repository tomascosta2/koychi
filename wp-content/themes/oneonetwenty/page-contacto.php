<?php get_header(); ?>

<section class="pt-[130px] bg-[#FF0000]">
	<div class="tcp-container">
		<p class="text-[48px] leading-[100%] font-medium text-white text-center"><?php echo strip_tags(get_field('span')); ?></p>
		<h1 class="text-[96px] leading-[100%] font-black text-white text-center"><?php echo get_field('titulo'); ?></h1>
		<div class="grid grid-cols-2 gap-4">
			<div class="flex items-baseline">
				<img src="<?php echo get_field('imagen')['url']; ?>" alt="<?php echo get_field('imagen')['alt']; ?>">
			</div>
			<div>
				<?php echo do_shortcode('[contact-form-7 id="cba1be0" title="Contact form 1"]') ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>