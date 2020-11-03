<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<?php 
get_header();
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    ?>
    <h1>OM MIG!</h1>
        
    <?php    
    endwhile; 
endif; 
?>

<?php get_footer(); ?>

