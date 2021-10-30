<?php
get_header(); 
?>
  <center>
  	<div class="site-content" style="height: 100%;">
	  <article class="no-results">

	    <header class="entry-header">
	      <h1 class="page-title"><?php esc_html_e( 'Nothing Found Here', 'my-custom-theme' ); ?></h1>
	    </header>

	    <div class="entry-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'my-custom-theme' ); ?></p>
	    </div>

	  </article>
	</div>
</center>


<?php
get_footer();
?>