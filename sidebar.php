<?php 

if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
    <section class="sidebar">
        <?php dynamic_sidebar('sidebar-1' ); ?>
    </section>

<?php } ?>