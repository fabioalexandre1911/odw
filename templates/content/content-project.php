<article class="themeGrid__item">
   <div class="themeGrid__item-thumbnail">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_post_thumbnail(); ?>
      </a>
   </div>
   <div class="themeGrid__item-title">
      <div class="themeHomeAbout__images">
         <h3>
            <div class="project-item">
               <a href="<?php the_permalink(); ?>">
                  <h3><?php the_title(); ?></h3>
                  <p><?php the_excerpt(); ?></p>
               </a>
            </div>
         </h3>
      </div>
   </div>
</article>
