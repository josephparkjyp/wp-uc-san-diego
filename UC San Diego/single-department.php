<?php get_header(); ?>

<div class="content-align">
    <?php
    while(have_posts()) {
        the_post(); ?>

        <h3><?php echo "Department of " . get_the_title(); ?></h3>
        <p><?php echo the_content(); ?> </p>

    <?php } ?>

    <?php
    #Custom query for related professors.
    $professorsInDept = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'professor',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
            array(
            'key' => 'related_department',
            'compare' => 'LIKE',
            'value' => '"' . get_the_ID() . '"'
            )
        ),
    ));

    #Display related professors if they exist.
    if($professorsInDept->have_posts()) { ?>
        <h3>Department Faculty:</h3>
        <div class="professor-cards">
        <?php

        while ($professorsInDept->have_posts()) {
            $professorsInDept->the_post(); ?>

            <a href="<?php the_permalink(); ?>">
                <div class="professor-card">
                    <div class="professor-card-content-left"><?php the_post_thumbnail(); ?></div>
                    <div class="professor-card-content-right">    
                        <h3><?php echo the_title(); ?></h3>
                        <p><?php echo get_the_excerpt(); ?></p>
                    </div>
                </div>
            </a>

        <?php } ?>
        </div>
    <?php } ?>
    
</div>





<?php get_footer(); ?>