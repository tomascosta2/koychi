<?php get_header() ?>

<section class="bg-[#FF0000]">
	<div class="tcp-container">
		<div class="flex">
			<div>
				<img class="bg-gray-300 w-[615px] h-full" src="<?php echo get_field('imagen_1')['url'] ?>" alt="<?php echo get_field('imagen_1')['alt'] ?>">
			</div>
			<div>
				<h1>
					<?php echo get_field('titulo') ?>
				</h1>
				<p>
					<?php echo strip_tags(get_field('bajada')) ?>
				</p>
				<img src="<?php echo get_field('imagen_2')['url'] ?>" alt="<?php echo get_field('imagen_2')['alt'] ?>">
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>