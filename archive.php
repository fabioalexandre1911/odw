<?php get_header(); ?>
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
                <h2>Todos os Projetos</h2>
    <aside>
        <ul>
            <?php
            $types = get_terms(array('taxonomy' => 'project_type'));
            foreach ($types as $type) {
                echo '<li><a href="#" class="filter" data-type="' . $type->slug . '">' . $type->name . '</a></li>';
            }
            ?>
        </ul>
    </aside>
    <div class="projects-grid" id="projects-list">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'project');
            endwhile;
        else :
            echo 'Nenhum projeto encontrado';
        endif;
        ?>
    </div>
            </div>
        </div>
    </section>
</main>
<script>
    jQuery(document).ready(function($) {
        $('.filter').on('click', function(e) {
            e.preventDefault();
            var type = $(this).data('type');
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'filter_projects',
                    type: type
                },
                success: function(data) {
                    $('#projects-list').html(data);
                }
            });
        });
    });
</script>

<?php get_footer(); ?>