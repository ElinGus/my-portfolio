<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<?php 
get_header();
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    ?>
    
    <section class="about-me">
            <div class="textblock-col">
                <h1>Om mig</h1>
                <p>
                "Jag är som mest effektiv när jag får jobba kreativt, använda mitt öga för detaljer och 
                samtidigt får de tekniska utmaningarna från programmering, vilket väckte intresset för 
                webbutvecklaryrket."
                </p>
                <button>Läs mer</button>
            </div>
            <!--
            <div class="image-col">
                <img src="<?php bloginfo('template_directory'); ?>/images/Elin_sierrafilter.jpg" alt="Elin">
            </div>
            -->
    </section>
        
    <?php    
    endwhile; 
endif; 
?>

<?php get_footer(); ?>

