<?php get_header(); 

$content = get_the_content();
$word_count = str_word_count( strip_tags( $content ) );
$reading_time = ceil( $word_count / 200 );
?>

<?php if (has_post_thumbnail()) : ?>
<img
	class="w-full h-[400px] bg-gray-100 object-cover rounded-bl-[20px] rounded-br-[20px]"
	src="<?php echo get_the_post_thumbnail_url(); ?>"
	alt="<?php echo get_the_title(); ?>"
>
<?php endif; ?>
<section class="py-[80px]">
	<div class="tcp-container flex flex-col md:flex-row gap-12">

		<!-- CONTENIDO PRINCIPAL -->
		<article class="w-full md:w-2/3">

			<!-- Título -->
			<h1 class="text-[52px] text-center font-black leading-none uppercase mb-8"><?php the_title(); ?></h1>

			<!-- Fecha y categoría -->
			<div class="text-sm text-gray-600 flex items-center gap-4 mb-4">
				<span><?php echo get_the_date(); ?></span>
				<span>•</span>
				<span><?php the_category(', '); ?></span>
			</div>

			<!-- Tiempo de lectura -->
			<div class="flex items-center gap-2 text-[14px] text-gray-500">
				<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
					viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round"
						d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
				<?php echo $reading_time; ?> minuto<?php echo $reading_time > 1 ? 's' : ''; ?> de lectura
			</div>

			<!-- Contenido -->
			<div class="text-justify whitespace-pre-line max-w-none text-[#111] text-[18px] leading-relaxed">
				<p><?php echo get_the_content(); ?></p>
			</div>
		</article>

		<!-- SIDEBAR -->
		<aside class="w-full md:w-1/3">
			<div class="bg-[#111] text-white p-4 rounded-lg mb-8 text-center uppercase text-[14px] font-bold tracking-wide">OTRAS KOYCHI NEWS</div>

			<?php
			$recent_posts = wp_get_recent_posts([
				'numberposts' => 3,
				'post_status' => 'publish',
				'post__not_in' => [get_the_ID()]
			]);
			foreach ($recent_posts as $post) :
				$thumb = get_the_post_thumbnail_url($post['ID'], 'thumbnail') ?: 'https://via.placeholder.com/150';
			?>
				<a href="<?php echo get_permalink($post['ID']); ?>" class="flex gap-4 mb-6 group">
					<div class="w-[100px] h-[100px] bg-gray-200 rounded-md overflow-hidden">
						<img src="<?php echo esc_url($thumb); ?>" alt="" class="w-full h-full object-cover">
					</div>
					<div>
						<h3 class="font-bold text-[16px] text-[#111] group-hover:underline mb-1"><?php echo esc_html($post['post_title']); ?></h3>
						<div class="text-gray-500 text-[12px]">
							<?php echo get_the_date('', $post['ID']); ?> • <?php echo do_shortcode('[tiempo_lectura id="' . $post['ID'] . '"]'); ?>
						</div>
					</div>
				</a>
			<?php endforeach; ?>
		</aside>

	</div>
</section>

<?php get_footer(); ?>