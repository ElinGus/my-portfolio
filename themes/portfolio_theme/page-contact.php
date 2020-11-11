<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        ?>
        
        <div class="heading"><h1>Kontakta mig gärna!</h1></div>
        
        <section class="contact-section">
            <div class="contact_text">    
                <p>Känner du att det du läst och sett känns intressant?
                    Tvecka inte att slänga dig på luren, eller skicka ett mail.
                    Vill ni se kod från mina porjekt och labbar? Kika då in på min GitHub.
                </p>
                    
                <div class="contact_info">
                    <a href="tel:0706549488">Tel: 070 654 94 88</a>
                    <a href="mailto:elin.b.gustafsson@gmail.com">Mail: elin.b.gustafsson@gmail.com</a>
                    <a href="https://github.com/ElinGus" target="_blank">GitHub: ElinGus</a>
                </div>
            </div>
        </section>

        <?php 
    endwhile; 
endif; 
?>

<?php get_template_part('template-parts/footerbar'); ?>
<?php get_footer(); ?>