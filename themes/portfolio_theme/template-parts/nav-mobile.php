<div class="nav-mobile">
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
</div>
