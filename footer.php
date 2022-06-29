<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.0.0
 */

?>

<footer>

<footer style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-bg.png)left top no-repeat;">
  <section class="footerm">
    <div class="cust-container1">
      <div class="upr-logosec">
        <div class="row align-items-center">
          <div class="col-md-9">
            <div class="left-lg-bef">
              <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/f-lgbef.png">
            </div>
          </div>
          <div class="col-md-3">
            <div class="right-logo">
              <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/f-logo.png">
            </div>
          </div>
        </div>
      </div>
      <div class="lower-gridsec">
        <div class="row">
          <div class="w-20">
            <div class="f-grd">
              <h6>About <span>fastgrades</span></h6>
              <ul>
                <li>
                  <a href="">Our values</a>
                </li>
                <li>
                  <a href="">Work at fastgrades</a>
                </li>
                <li>
                  <a href="">Privacy policy</a>
                </li>
                <li>
                  <a href="">Refund policy</a>
                </li>
                <li>
                  <a href="">Accessibility policy</a>
                </li>
                <li>
                  <a href="">Sitemap</a>
                </li>
                <li>
                  <a href="blog.php">Blog</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-20">
            <div class="f-grd">
              <h6>Using <span>fastgrades</span></h6>
              <ul>
                <li>
                  <a href="">Using our platform</a>
                </li>
                <li>
                  <a href="">fastgrades Reviews</a>
                </li>
                <li>
                  <a href="">Learning guide</a>
                </li>
                <li>
                  <a href="">Certificates</a>
                </li>
                <li>
                  <a href="">Microcredentials</a>
                </li>
                <li>
                  <a href="">How to join</a>
                </li>
                <li>
                  <a href="">Find a Tutors</a>
                </li>
                <li>
                  <a href="">Subjects</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-20">
            <div class="f-grd">
              <h6>Need some <span>help?</span></h6>
              <ul>
                <li>
                  <a href="faq.php">FAQs</a>
                </li>
                <li>
                  <a href="">Child safety</a>
                </li>
                <li>
                  <a href="">Help Centre</a>
                </li>
                <li>
                  <a href="about.php">About us</a>
                </li>
                <li>
                  <a href="contact.php">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-20">
            <div class="f-grd">
              <h6>Popular <span>Subjects</span></h6>
              <ul>
                <li>
                  <a href="">Business and Management</a>
                </li>
                <li>
                  <a href="">Healthcare and Medicine</a>
                </li>
                <li>
                  <a href="">Teaching</a>
                </li>
                <li>
                  <a href="">Psychology and Mental Health</a>
                </li>
                <li>
                  <a href="">IT and Computer Science</a>
                </li>
                <li>
                  <a href="">Featured courses</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-20">
            <div class="f-grd">
              <h6>Get <span>In Touch</span></h6>
              <ul class="contsec">
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/location.png">
                  <p>3 Chalfont Rd,Etobicoke,<br> Ontario,Canada</p>
                </li>
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phone.png">
                  <a href="#">613-293-7181</a>
                </li>
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/email.png">
                  <a href="#">lukemckenz@yahoo.ca</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="f-copysocial">
    <ul class="soc-icos">
      <li>
        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.png"></a>
      </li>
      <li>
        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.png"></a>
      </li>
      <li>
        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.png"></a>
      </li>
      <li>
        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.png"></a>
      </li>
    </ul>
     <p>Copyright © 2021. Design and Developed by designzcloud.com all Rights Reserved.</p>
  </section>
</footer>

  <div class="bootscore-info bg-light text-muted border-top py-2 text-center">
    <div class="container">
      <small>&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small>
    </div>
  </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>