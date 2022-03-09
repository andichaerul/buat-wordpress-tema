<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-sm">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <?php
        wp_nav_menu([
            'theme_location' => 'menu_navbar',
            'menu_class' => 'navbar-nav',
        ])
        ?>
    </div>
</nav>