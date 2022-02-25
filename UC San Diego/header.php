<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

<div class="header content-align">
    <h1><a href="<?php echo site_url(); ?>">UC San Diego</h1>

    <ul>
        <li <?php if (is_page('about-uc-san-diego') or wp_get_post_parent_id(0) == 19) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-uc-san-diego'); ?>">About</a></li>
        <li <?php if (get_post_type() == 'department') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/departments'); ?>">Departments</a></li>
        <li <?php if (get_post_type() == 'professor') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/professors'); ?>">Professors</a></li>
        <li ><a href="#">Colleges</a></li>
        <li><a href="#">Student Life</a></li>
    </ul>
</div>