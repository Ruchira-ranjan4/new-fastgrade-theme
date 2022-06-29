<?php

get_header();
?>

<div class="col-sm-12 details2">
    <div class="row">
        
<div class="col-sm-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/default.png" id="img2">
<div class="starsec">
                            <span class="fa fa-star empty"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
</div>
<div class="col-sm-4 profile"> 
    
<a href="<?php the_permalink(); ?>"><button type="button" class="btn-detailyellow">100 students</a></button>
                       
                        <h2 class="headings"><?php the_title();?></h2>
                        <button type="button" class="btn-detailyellow"><?php echo get_term(get_field('subjects'),'subjects')->name ; ?></a>
                       
<div class="col-sm-4"></div>

    </div>
</div>
<div class="col-sm-12 details4">
    <div class="row">


        
    </div>
</div>
<div class="col-sm-12 details3">
    <div class="row">
        <div class="col-sm-3">
            <h1 class="headings1">Education</h1>
        </div>
        <div class="col-sm-9">
            <div class="card2">
            </div>
        </div>

    </div>
</div>
<div class="col-sm-12 details4">
    <div class="row">
        
        <div class="col-sm-8">
            <div class="card3">
            </div>
        </div>
        <div class="col-sm-4">
        <h1 class="headings2">Tutoring Experience</h1>
        </div>

    </div>
</div>
<!-- Breadcrum -->
<div class="col-sm-12 details3">
    <div class="row">
        <div class="col-sm-3">
        <h1 class="headings1">Review</h1>
        </div>
        <div class="col-sm-9">
            <div class="card2">
            </div>
        </div>

    </div>
</div>
<!-- Contact-Content -->
<section id="blog" class="blog py-5">
    <div class="cust-container1">
        <div class="row">
            <div class="col-lg-12 entries">

            </div>
            <!-- End blog entries list -->

            <!-- End blog sidebar -->
        </div>
    </div>
</section>
<?php

get_footer();
?>