<article class="themeGrid__item">
    <div class="themeGrid__item-thumbnail">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
    <div class="themeGrid__item-category">
        <?php the_category(); ?>
    </div>
    <div class="themeGrid__item-title">
        <h3>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
    </div>
</article>