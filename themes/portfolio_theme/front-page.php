<?php get_header(); ?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        ?>

        <section class="home-section">
            <div class="home-block">

                <div class="img-col">
                    <img class="top-image" src="<?php bloginfo('template_directory'); ?>/images/workplace.jpg" alt="">
                    <img class="buttom-image" src="<?php bloginfo('template_directory'); ?>/images/parkbench.jpg" alt="">
                </div>
                
                <div class="menu-col">
                    <div class="overlay" id="myNav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                            <i class="fa fa-times"></i>
                        </a>
                        
                        <div class="overlay-content">
                            <nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
                        </div>
                    </div>

                    <span class="burger-menu" onclick="openNav()">
                        <i class="fa fa-bars"></i>
                    </span>

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

<?php get_footer(); ?>