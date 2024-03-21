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
            <header>
                <div class="bloc-logo-desktop">
                    <img class="logo-default" src="/wp-content/themes/cecref/assets/img/logo.png">
                    <a href="/" class="link-logo-header"></a>
                </div>
                <div class="btn-form-princ btn-menu-mobile">
                    <a class="link-btn-form-princ"></a>
                </div>
                <?php wp_nav_menu(['theme_location' => 'header']);?>
                <?php wp_nav_menu(['theme_location' => 'header-mobile','container' => 'false', 'menu_class' => 'menu-mobile']);?>
            </header>