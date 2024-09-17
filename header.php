<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
</head>

<body <?php body_class(); ?>>

    <header class="themeHeader themeContainer">
        <div class="themeContainer__center">
            <div class="themeHeader__contents">
                <div class="themeHeader__logo">
                    <?php
                    if (has_custom_logo()) :
                        the_custom_logo();
                    else :
                        echo '<h2>Meu Blog Pessoal</h2>';
                    endif;
                    ?>
                </div>
                <nav class="themeHeader__navigation">
                    <?php
                    if (has_nav_menu('primary')) :
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu_id' => 'primary-menu'
                            )
                        );
                    endif;
                    ?>
                    <button class="themeHeader__mobile">
                        <span></span><span></span><span></span>
                    </button>
                </nav>
            </div>
        </div>
    </header>