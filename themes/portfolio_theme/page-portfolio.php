<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        ?>

        <!-- content -->

        <?php 
    endwhile; 
endif; 
?>

<?php get_footer(); ?>