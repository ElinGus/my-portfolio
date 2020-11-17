<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/nav-mobile'); ?>

<?php 
get_header();
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    ?>
    
    <div class="about-heading"><h1><?php the_field('about_heading'); ?></h1></div>

    <section class="about-me">
        <div class="textblock">
            <p><?php the_field('about_textarea'); ?></p>
        </div>

        <div class="image-col">
            <?php 
            $image = get_field('about_image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
    </section>
    
    <?php    
    endwhile; 
endif; 
?>

<?php get_template_part('template-parts/footerbar'); ?>
<?php get_footer(); ?>

