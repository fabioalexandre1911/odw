<section class="themeContainer themeHomeBlog">
    <div class="themeContainer__center">
        <header class="themeHeading">
            <h2 class="themeHeading__title">Ultimos conteudos sobre <strong>Wordpress</strong></h2>
        </header>
        <div class="themeHomeBlog__contents themeGrid">
            <!-- < ?php
            $posts = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );

            $query = new WP_Query($posts);
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
                    get_template_part('templates/content/content-grid');
                endwhile;
            endif;
            ?>
            <hr> -->
            <?php
        $projects = new WP_Query(array('post_type' => 'projects', 'posts_per_page' => 6));
        if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post();
                get_template_part('templates/content/content-project'); 
            endwhile;
        endif;
        ?>
        </div>
    </div>
    
</section>