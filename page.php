<?php 
   get_header() 

?>




<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(<?php echo $imagepath[0]  ?>">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center"> <?php echo the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->


    <?php $imagepath = wp_get_attachment_image_src (get_post_thumbnail_id(), 'large'); 

    ?>
      <center>  </center>

     <div style=" margin-top: 30px; padding: 50px;">
        <img style=" float: left; margin:0px 20px 20px 0px; border-radius: 20px;" src="<?php echo $imagepath[0] ?>" width="400">
        <?php echo get_the_content(); ?> 
     </div>

    <?php get_header_image(); ?>
    
	

<?php 
   get_footer(); 

?>