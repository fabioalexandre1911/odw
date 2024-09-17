<article class="themeGrid__item">
    <div class="themeGrid__item-thumbnail">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
    <div class="themeGrid__item-title">
        <div class="themeHomeAbout__images">
            <h3>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                    <p><?php the_excerpt(); ?></p>
                    <p>Tipo: <?php the_field('project_type'); ?></p>
                </a>
            </h3>
        </div>
    </div>
</article>