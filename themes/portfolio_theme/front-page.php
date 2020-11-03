<?php get_header(); ?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        ?>

         <section class="home-section">
             <div class="home-block">
                <div class="col-1">
                    <div class="logo">
                        <h1>Elin <br> Gustafsson</h1>
                    </div>
                    <img class="top-image" src="<?php bloginfo('template_directory'); ?>/images/workplace.jpg" alt="">
                    <img class="buttom-image" src="<?php bloginfo('template_directory'); ?>/images/parkbench.jpg" alt="">
                </div>
                
                <div class="col-2">
                    <nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
                    <div class="headline-text">
                        <h1>Hello World!</h1>
                        <h2>Looking for a web developer?</h2>
                    </div>
                </div>
            </div> 
         </section>

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
            <div class="image-col">
                <img src="<?php bloginfo('template_directory'); ?>/images/Elin_sierrafilter.jpg" alt="Elin">
            </div>
         </section>

         <section class="portfolio-section">
             <h1>Portfolio</h1>

             <div class="work-columns">
                <div class="work-col">
                    <img src="<?php bloginfo('template_directory'); ?>/images/lightbulb.jpg" alt="work1">
                </div>

                <div class="work-col">
                    <img src="<?php bloginfo('template_directory'); ?>/images/lightbulb.jpg" alt="work2">
                </div>

                <div class="work-col">
                    <img src="<?php bloginfo('template_directory'); ?>/images/lightbulb.jpg" alt="work3">   
                </div>
             </div>

             <div class="portfolio-btn"><button>Se portfolio</button></div>
         </section>

        <?php 
    endwhile; 
endif; 
?>

<?php get_footer(); ?>