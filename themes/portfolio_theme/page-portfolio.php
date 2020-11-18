<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        ?>
        <section class="portfolio-section">
             <h1><?php the_field('page_heading'); ?></h1>

             <div class="work-columns">
                <div class="work-col">
                    <img src="<?php bloginfo('template_directory'); ?>/images/lightbulb.jpg" alt="work1">
                    <h3>NaturKlur</h3>
                    <p>En kort beskrivning av projektet.</p>
                    <p>En lista över tech stack</p>
                </div>

                <div class="work-col">
                    <img src="<?php bloginfo('template_directory'); ?>/images/lightbulb.jpg" alt="work2">
                    <h3>NaturKlur</h3>
                    <p>En kort beskrivning av projektet.</p>
                    <p>En lista över tech stack</p>
                </div>

                <div class="work-col">
                    <img src="<?php bloginfo('template_directory'); ?>/images/lightbulb.jpg" alt="work3">  
                    <h3>NaturKlur</h3>
                    <p>En kort beskrivning av projektet.</p>
                    <p>En lista över tech stack</p> 
                </div>

             </div>
         </section>

        <?php 
    endwhile; 
endif; 
?>

<?php get_template_part('template-parts/footerbar'); ?>
<?php get_footer(); ?>