<?php

get_header();
?>
<section class="inner-banner abt-ib">
    <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png">
    <div class="brd-crm">
        <a href="#">Blog</a>
    </div>
</section>
<div class="main">

    <!-- Portfolio Gallery Grid -->
    <div class="container">
        <div class="row">
            <?php
// Custom WP query query
$args_query = array(
	'post_type' => array('tutoringrequest'),
	'order' => 'DESC',
);

$query = new WP_Query( $args_query );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	

?>

<div class="col-sm-12">
            <div class="card">
            <?php $term = get_term_by( 'id', get_field('fields_of_Study'),'field_of_study' ); 
echo $term->name; ?>
                    <h2 class="headings"><?php the_title();?></h2>
                    <p class="paragraph"><?php the_content();?></h2>
                    <p class="paragraph"><?php echo the_field('expectations'); ?></p>
                    <p class="paragraph">Level : <?php echo the_field(''); ?></p>
                    <p class="paragraph"> Subjects :<?php echo get_term(get_field('subject'),'subject')->name ; ?></p>
                    
                    <p class="paragraph"> Field of studies :  <?php $term = get_term_by( 'id', get_field('fields_of_Study'),'field_of_study' ); 
echo $term->name; ?></p>
                    <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-outline-primary">View
                            Request</button></a>
                </div>
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
<?php

get_footer();
?>