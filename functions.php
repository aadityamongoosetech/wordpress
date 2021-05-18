<?php
register_nav_menus(array('primary-menu'=>'Top menu'));
add_theme_Support('post-thumbnails');
add_theme_Support('custom-header');
register_sidebar(
    array(
        'name'=>"siderabar location",
        'id'=>'sidebar',

    )
    );
?>