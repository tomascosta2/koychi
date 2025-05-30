<?php get_header() ?>

<section class="bg-[#FF0000] pt-[90px]">
	<div class="tcp-container">
		<div class="flex md:flex-row flex-col-reverse">
			<div class="relative md:min-w-[550px]">
				<img class="bg-gray-300 md:w-[550px] h-full md:absolute md:-right-[40px] top-0" src="<?php echo get_field('imagen_1')['url'] ?>" alt="<?php echo get_field('imagen_1')['alt'] ?>">
			</div>
			<div class="pb-[60px] pt-[30px] relative">
				<h1 class="font-black text-white text-[38px] md:text-[95px] leading-[90%]">
					<?php echo get_field('titulo') ?>
				</h1>
				<p class="font-black mt-4 text-white text-[26px] md:text-[50px] md:pl-[64px] leading-[100%]">
					<?php echo strip_tags(get_field('bajada')) ?>
				</p>
				<img class="md:pl-[120px] mt-12" src="<?php echo get_field('imagen_2')['url'] ?>" alt="<?php echo get_field('imagen_2')['alt'] ?>">
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>