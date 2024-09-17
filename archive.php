<?php get_header(); ?>

<main>
    <section class="themeArhive-top themeContainer">
        <div class="themeContainer__center">
            <div class="themeArhive-top__contents">
                <h1><?php single_term_title(); ?></h1>
                <div class="themeArhive-top__description">
                    <?php the_archive_description(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="themeArchive-loop themeContainer">
        <div class="themeContainer__center">
            <div class="themeHomeBlog__contents themeGrid">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        get_template_part('templates/content/content-grid');
                    endwhile;

                    the_posts_pagination();

                endif;
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>