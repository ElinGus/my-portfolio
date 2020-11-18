<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        ?>
        
        <div class="heading"><h1><?php the_field('contact_header'); ?></h1></div>
        
        <section class="contact-section">
            <div class="contact_text"> 
                <p><?php the_field('contact_textarea'); ?></p>
                    
                <div class="contact_info">
                    <p><?php the_field('contact_tel'); ?></p>
                    <p><?php the_field('contact_mail'); ?></p>
                <?php 
                $link = get_field('contact_link');
                if( $link ): ?>
                    <a href="<?php echo esc_url( $link ); ?>" target="_blank">GitHub: ElinGus</a>
                <?php endif; ?>
                </div>

            </div>
        </section>

        <?php 
    endwhile; 
endif; 
?>

<?php get_template_part('template-parts/footerbar'); ?>
<?php get_footer(); ?>