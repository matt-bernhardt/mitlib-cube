<?php
/**
 *
 * This is the template that displays single posts
 *
 * @package MIT_Libraries_Child
 * @since 2.1.0
 */

get_header();

get_template_part( 'inc/breadcrumbs', 'child' );

?>

<div id="stage" class="inner" role="main">

	<?php get_template_part( 'inc/postHead' ); ?>

	<div id="content" class="content has-sidebar">

		<div class="content-main main-content">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="article-head">
					<?php foreach ( (get_the_category()) as $category ) { ?>
						<p class="title-sub"><?php echo esc_attr( $category->cat_name ); ?> Exhibit</p>
					<?php } ?>

					<h2><?php the_title(); ?></h2>
					<?php if ( get_field( 'subtitle' ) ) : ?>
						<h3 class="sub-title"><?php the_field( 'subtitle' );?></h3>
					<?php endif; ?>

					<p class="date-span">
						<?php the_field( 'start_date' );?> 
						- 
						<?php the_field( 'end_date' );?>
					</p>
					<?php if ( get_field( 'sponsored' ) ) : ?>
						<p class="sponsored-content"><?php the_field( 'sponsored' );?></p>
					<?php endif; ?>

				</div>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

			<?php endwhile; // End of the loop. ?>
		</div>

		<?php get_sidebar(); ?>
	</div>

</div><!-- end div#stage -->

<?php get_footer(); ?>
