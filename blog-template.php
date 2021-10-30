<?php
//Template Name:Blog
get_header();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Blog - Gias ul Hassan</title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/maicons.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="row">
              <div class="col-md-6 col-lg-4 py-3">

              	<?php  
					       $wp_query = new WP_Query(array('posts_per_page'=>-3));
					        while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>

                <div class="card-blog">
                  <div class="header">
                    <div class="avatar">
                      <img src="<?php the_post_thumbnail() ?> " alt="">
                    </div>
                    <div class="entry-footer">
                      <div class="post-author"><?php the_author() ?></div>
                      <a href="#" class="post-date"><?php echo get_the_date() ?></a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="blog-single.html"><?php the_title() ?></a></div>
                    <div class="post-excerpt"><?php the_content() ?></div>
                  </div>
                  <div class="footer">
                    <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>


              <?php
                endwhile;
              ?>


              <div class="col-12 my-5">
                <nav aria-label="Page Navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>

            
            </div>
          </div>
          
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  </main>

  
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/wow/wow.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/google-maps.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>

</body>
</html>

<?php

get_footer();

?>