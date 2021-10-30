<?php
 get_header();
?>
  <main>
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 py-3">
            <?php
              if ( have_posts() ) :
                
                while ( have_posts() ) :
                
                 the_post();
            ?>

            <?php $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); ?>
            <img src="<?php echo $imagepath['0'] ?>">
            <a href="<?php the_permalink() ?>"> <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> </a>
            <?php echo get_the_date(); ?> by
            <h5 style="display: inline; color: green"> <?php the_author(); ?></h5> <br>
            
                    
            <?php the_content(); ?>


                    
                    
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
            comments_template();

            endif;
                
            endwhile;
                
            else :
            ?>

            <h1 class="page-title"><?php esc_html_e( 'Nothing Found !!!', 'gclassy' ); ?></h1>
            <p><?php esc_html_e( 'It looks like nothing was found at this location.', 'gclassy' ); ?></p>
                  
            <?php
            endif;
            ?>
          </div>

          <div class="col-lg-4 py-3">
            <div>
              <?php get_sidebar() ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php
get_footer();
?>