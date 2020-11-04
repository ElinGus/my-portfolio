<?php get_header(); ?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        ?>

        <section class="home-section">
            <div class="home-block">
                <div class="col-1">
                    <div class="logo">
                        <!--<h1>Elin <br> Gustafsson</h1>-->
                    </div>
                    <img class="top-image" src="<?php bloginfo('template_directory'); ?>/images/workplace.jpg" alt="">
                    <img class="buttom-image" src="<?php bloginfo('template_directory'); ?>/images/parkbench.jpg" alt="">
                </div>
                
                <div class="col-2">
                    <nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
                    
                    <div class="headline-text">
                        <h1>Hello World!</h1>
                        <h2>Looking for a web developer?</h2>
                        <h2>I´m Elin. Check out my work!</h2>
                    </div>
                </div>
            </div> 
        </section>

        <?php 
    endwhile; 
endif; 
?>

<!--<?php get_footer(); ?>--> 