<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="menu-wrap">
            <img src="<?php echo (wp_get_attachment_url(18)) ?>" alt="">

            <?php wp_nav_menu([
                'theme_location' => 'menu-header',
                'container' => false,
                'items_wrap' => '%3$s',
            ]); ?>

        </div>
    </header>