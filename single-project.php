<?php get_header(); ?>
<main class="container single-project">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            the_date('F j, Y', '<p>', '</p>');
            the_post_thumbnail('large');
            the_content();
            echo '<p>Tipo: ' . get_field('project_type') . '</p>';
            echo '<a href="' . get_field('project_link') . '" class="button" target="_blank">Visitar Projeto</a>';
        endwhile;
    endif;
    ?>

    <div class="related-projects">
        <h3>Projetos Relacionados</h3>
        <div class="projects-grid">
            <?php
            // Query de projetos relacionados (baseado no tipo)
            $related = new WP_Query(array(
                'post_type' => 'projects',
                'posts_per_page' => 3,
                'meta_key' => 'project_type',
                'meta_value' => get_field('project_type'),
                'post__not_in' => array(get_the_ID())
            ));

            if ($related->have_posts()) :
                while ($related->have_posts()) : $related->the_post();
                    get_template_part('template-parts/content', 'project');
                endwhile;
            else :
                echo 'Nenhum projeto relacionado encontrado.';
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
