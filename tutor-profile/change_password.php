<?php
/*
Template Name:send_booking_request
*/



get_header();
?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-5">
                <h3>Welcome, Fastgrade</h3>
                <nav class="navbar navbar-expand-md" role="navigation">
                    <?php
                wp_nav_menu(array(
                  'theme_location' => 'tutoring-request',
                  'container_class'=> 'collapse navbar-collapse',
                  'menu_class' => 'nav-side-menu',
                  'fallback_cb'=> 'WP_Bootstrap_Navwalker::fallback',
                  'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                </nav>
            </div>


            <div class="col-sm-6">
            <h1 class="headings">Change password</h1>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
    </div>

</section>
<?php get_footer(); ?>