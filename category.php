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
<h1><?php single_cat_title( '', true ); ?></h1>

<!-- LOOP -->
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink() ?>">
      <?php
      the_post_thumbnail('thumbnail',array('title' => get_the_title(),'class'=>'img-responsive'));
      ?>
    </a>
    <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
    <?php the_excerpt();?>
	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>
