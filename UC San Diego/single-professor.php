<?php get_header(); ?>

<div class="content-align">
    <?php
    while(have_posts()) {
        the_post(); ?>

        <div><?php the_post_thumbnail(); ?></div>
        <h3><?php echo the_title(); ?></h3>
        <p><?php echo the_content(); ?> </p>

        <?php
        $relatedDepartment = get_field('related_department');
        if ($relatedDepartment) {
            foreach ($relatedDepartment as $department) { ?>
            <h3>Department: <a href="<?php echo get_the_permalink($department); ?>"><?php echo get_the_title($department); ?></a></h3>
            <?php }
        } ?>

    <?php } ?>
</div>





<?php get_footer(); ?>