<?php 
get_header(); 
pageBanner(array(
    'title' => 'Departments'
));
?>

<div class="cards container-align">
    <?php
    while(have_posts()) {
        the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <div class="card">
                <h3><?php echo the_title(); ?></h3>
                <p><?php echo get_the_excerpt(); ?></p>
            </div>
        </a>


    <?php } ?>
</div>





<?php get_footer(); ?>