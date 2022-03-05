<?php
function cc_register()
{
    register_nav_menu('primary', 'Menu Bebek');
}

add_action('init', 'cc_register');
