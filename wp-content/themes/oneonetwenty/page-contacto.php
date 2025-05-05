<?php get_header(); ?>

<section class="py-[100px] bg-[#FF0000]">
	<div class="tcp-container">
		<p><?php echo get_field('span'); ?></p>
		<h1><?php echo get_field('titulo'); ?></h1>
		<div class="grid grid-cols-2 gap-4">
			<img src="<?php echo get_field('imagen')['url']; ?>" alt="<?php echo get_field('imagen')['alt']; ?>">
			<div>
				<?php echo do_shortcode('[contact-form-7 id="cba1be0" title="Contact form 1"]') ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>