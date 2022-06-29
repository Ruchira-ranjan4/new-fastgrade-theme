<?php

get_header();
?>

<section class="inner-banner">
    <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" alt="">
    <div class="brd-crm">
        <a href="#">Blog</a>
    </div>
</section>
<!-- Breadcrum -->
<section class="tutors-sec">
    <div class="row m-0">
        <div class="col-md-12 p-0">
            <h2>Great Tutors Great <span>Learning</span></h2>
        </div>
        <div class="col-md-12 p-0">
            <div class="row clr">
                <?php
// Custom WP query query
$args_query = array(
	'post_type' => array('tutor_profiles'),
	'order' => 'DESC',
);

$query = new WP_Query( $args_query );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	

?>
                <div class="col-sm-3">
                    <a class="t-grid" href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/profile.png">
                        <h4><?php the_title(); ?></h4>
                        <div class="starsec">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        
                        <h3>Private Tutor</h3>
                       
                            <a href="<?php the_permalink(); ?>"><button type="button" class="btn-detail">View
                                    details</a></button>
                        
                    </a>
                </div>

                <?php
            
        }
    } else {
    echo "no post";
    }
    
    wp_reset_postdata();
            
            ?>

            </div>
        </div>
    </div>
</section>
<!-- Contact-Content -->

<?php

get_footer();
?>