<?php


function PageBanner($args = NULL) {
    if (!$args['title']) {
        $args['title'] = get_the_title();
    } ?>

    <div>
        <h3 class="content-align"><?php echo $args['title'] ?></h3>
    </div>
<?php }












function custom_files() {
    wp_enqueue_style('main_styles', get_theme_file_uri('/css/main-styles.css'));
    wp_enqueue_style('extra_styles', get_theme_file_uri('/css/extra-styles.css'));
}

add_action('wp_enqueue_scripts', 'custom_files');

function custom_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'custom_features');


?>

