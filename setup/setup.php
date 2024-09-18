<?php

if (!function_exists('themeSetup')) :

    function themeSetup()
    {
        /** supports */
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'themeSetup');

endif;

// Registrar Custom Post Type "projects"
function cpt_projects() {
    $labels = array(
        'name' => 'Projetos',
        'singular_name' => 'Projeto',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Projeto',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'projects'),
    );

    register_post_type('projects', $args);
}
add_action('init', 'cpt_projects');

// Incluir estilos e scripts
function meu_tema_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

// Filtro AJAX para projetos por tipo
function ajax_filter_projects() {
    $type = $_POST['type'];
    $args = array(
        'post_type' => 'projects',
        'meta_query' => array(
            array(
                'key' => 'project_type',
                'value' => $type,
                'compare' => 'LIKE'
            )
        )
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
        get_template_part('templates/content/content-project'); 
        endwhile;
    else :
        echo 'Nenhum projeto encontrado';
    endif;
    wp_die();
}
add_action('wp_ajax_filter_projects', 'ajax_filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'ajax_filter_projects');

