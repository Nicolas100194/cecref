<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
    <body>
        <div class="site-container">
            <header id="top-site">
                <div class="bloc-logo-desktop"><?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if (has_custom_logo()) {
                        echo '<img class="logo-default" src="'.esc_url($logo[0]).'">';
                    }
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="link-logo-header"></a>
                </div>
                <div class="btn-form-princ btn-menu-mobile">
                    <a class="link-btn-form-princ"></a>
                </div>
                <?php wp_nav_menu(['theme_location' => 'header']);?>
                <?php wp_nav_menu(['theme_location' => 'header-mobile','container' => 'false', 'menu_class' => 'menu-mobile']);?>
            </header>