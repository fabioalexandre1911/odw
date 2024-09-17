<?php get_header(); ?>

<main>
    <?php
    if (have_posts()) :
        the_post();
    ?>

        <section class="themeArhive-top themeContainer">
            <div class="themeContainer__center">
                <div class="themeArhive-top__contents">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <section class="themeContainer themeSingle-content">
            <div class="themeContainer__center">
                <div class="themeSingle-content__contents">
                    <div class="themeSingle-content__thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="themeSingle-content__htmlchars">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>

    <?php
    endif;
    ?>
</main>

<?php get_footer(); ?>