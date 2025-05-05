<?php get_header() ?>

<section class="bg-[#FF0000] pt-[90px]">
	<div class="tcp-container">
		<div class="flex">
			<div>
				<img class="bg-gray-300 w-[615px] h-full" src="<?php echo get_field('imagen_1')['url'] ?>" alt="<?php echo get_field('imagen_1')['alt'] ?>">
			</div>
			<div class="pb-[60px] pt-[30px]">
				<h1 class="font-black text-white text-[100px] leading-[90%]">
					<?php echo get_field('titulo') ?>
				</h1>
				<p class="font-black text-white text-[50px] pl-[64px]">
					<?php echo strip_tags(get_field('bajada')) ?>
				</p>
				<img class="pl-[120px]" src="<?php echo get_field('imagen_2')['url'] ?>" alt="<?php echo get_field('imagen_2')['alt'] ?>">
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>