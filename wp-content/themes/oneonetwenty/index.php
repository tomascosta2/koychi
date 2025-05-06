<?php
get_header(); 

$post_id = 819;

$image_url = get_the_post_thumbnail_url( $post_id, 'full' );
$image_alt = get_post_meta( get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true );
?>

<img 
	class="w-full h-[500px] bg-gray-100 object-cover rounded-bl-[20px] rounded-br-[20px]" 
	src="<?php echo esc_url( $image_url ); ?>" 
	alt="<?php echo esc_attr( $image_alt ); ?>"
>
<div class="tcp-container">
	<nav class="flex flex-wrap justify-center py-[35px] text-[24px]">
		<!-- Enlace a "Todos" -->
		<a class="border-r-2 px-8 border-[#111]" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="text-blue-600 font-semibold">
			Todos
		</a>

		<!-- Enlaces a categorías -->
		<?php
		$categories = get_categories();
		foreach ( $categories as $category ) {
			$cat_link = get_category_link( $category->term_id );
			echo '<a class="not-last:border-r-2 not-last:px-8 ps-8" href="' . esc_url( $cat_link ) . '" class="text-gray-700 hover:text-blue-600">' . esc_html( $category->name ) . '</a>';
		}
		?>
	</nav>
<?php
if (have_posts()) {

	// Load posts loop.
	$i = 0;
	while (have_posts()) {
		the_post();
		$content = get_the_content();
        $word_count = str_word_count( strip_tags( $content ) );
        $reading_time = ceil( $word_count / 200 );
		?>
		<div class="flex flex-col <?php echo $i % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse' ?> items-start gap-6 not-last:mb-8">
			<!-- Imagen -->
			<div class="w-full md:w-1/2 bg-gray-200 rounded-xl aspect-video border border-blue-500 md:border-0"></div>

			<!-- Contenido -->
			<div class="flex-1 flex flex-col justify-between aspect-video">
				<div>
					<h2 class="text-lg font-bold text-[40px] leading-[100%] uppercase mb-2"><?php the_title(); ?></h2>
					<p class="font-semibold text-[20px] leading-[110%] text-gray-700 mb-4"><?php the_excerpt(); ?></p>
				</div>
				<div class="flex items-center gap-2 text-[14px] text-gray-500">
					<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
						viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					<?php echo $reading_time; ?> minuto<?php echo $reading_time > 1 ? 's' : ''; ?> de lectura
				</div>
			</div>
		</div>
<?php
		$i++;
	}

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();
} else {

	// If no content, include the "No posts found" template.
	get_template_part('template-parts/content/content-none');
} ?>

	<div class="w-full p-10 rounded-[20px] bg-[#FF0000] my-12">

	</div>

</div>

<?php
get_footer();
