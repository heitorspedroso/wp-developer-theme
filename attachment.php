<?php
get_header();
?>
<!-- YOAST BREADCRUMB -->
<?php if ( function_exists('yoast_breadcrumb') )
  {
    yoast_breadcrumb('<p id="breadcrumbs">','</p>');
  }
?>
<!-- TITLE -->
<h1><?php the_archive_title( '', true ); ?></h1>

<!-- LOOP -->
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
  		 <?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "post"); ?>
				<a href="<?php echo esc_url(wp_get_attachment_url($post->id)); ?>" title="<?php the_title(); ?>" rel="attachment">
				<img src="<?php echo esc_url( $att_image[0] );?>" class="img-responsive" alt="<?php the_title(); ?>" /></a>
		<?php else : ?>
				<a href="<?php echo esc_url(wp_get_attachment_url($post->ID)); ?>" title="<?php echo esc_html(get_the_title($post->ID), 1 ) ?>" rel="attachment">
				<?php echo esc_html(basename($post->guid)); ?></a>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
