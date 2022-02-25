<?php \
get_header(); 
pageBanner(array(
    'title' => 'Professors'
));
?>

<div class="content-align">
    <?php
    while(have_posts()) {
        the_post(); ?>

        <div><?php the_post_thumbnail(); ?></div>
        <h3><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
        <p><?php echo get_the_excerpt(); ?></p>




    <?php } ?>
</div>





<?php get_footer(); ?>