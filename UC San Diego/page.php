<?php get_header(); ?>

<div class="content-align">
    <?php
    while(have_posts()) {
        the_post(); ?>

        <h3><?php echo the_title(); ?></h3>
        <p><?php echo the_content(); ?> </p>




    <?php } ?>
</div>





<?php get_footer(); ?>