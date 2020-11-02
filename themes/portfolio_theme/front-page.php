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
                    <!-- <img src="<?php bloginfo('template_directory'); ?>/images/desktopinsofa.jpg" alt="Elin"> -->
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco.
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
                <div class="work-col-1">
                    <img src="<?php bloginfo('template_directory'); ?>/images/lightbulb.jpg" alt="work1">
                </div>
                <div class="work-col-2">
                    <img src="<?php bloginfo('template_directory'); ?>/images/lightbulb.jpg" alt="work2">
                </div>
                <div class="work-col-3">
                    <img src="<?php bloginfo('template_directory'); ?>/images/lightbulb.jpg" alt="work3">   
                </div>
             </div>
             <div class="portfolio-btn"><button>Se portfolio</button></div>
         </section>

         

        <!-- <section class="my-skills">
             <div class="skill-heading"><h1>Mina kunskaper</h1></div>

             <div class="skill-row-1">
                 <div class="skill-web-col-1">
                    <img src="<?php bloginfo('template_directory'); ?>/images/desktopinsofa.jpg" alt="">
                 </div>
                 <div class="skill-web-col-2">
                    <h1>Webbutveckling</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco.</p>
                 </div>
             </div>

             <div class="skill-row-2">
                 <div class="skill-design-col-1">
                    <h1>Design</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco.</p>
                 </div>
                 <div class="skill-design-col-2">
                    <img src="<?php bloginfo('template_directory'); ?>/images/desktopinsofa.jpg" alt="">   
                 </div>
             </div>
         </section> -->

        <?php 
    endwhile; 
endif; 
?>

<?php get_footer(); ?>