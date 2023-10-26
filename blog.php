<?php 
    /**
     * Template Name: Latest News
     * 
     */

    get_header(); 
?>

<div class="row">
    <div class="col-12 py-4 text-center text-white" style="background-color:#c49720">
        <h1>Blog</h1>
    </div>    
</div>

<div class="album py-5 bg-light">
    <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);

                $args = array(    
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'paged' => $paged
                );

                $loop = new WP_Query($args);
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) :
                        $loop->the_post();
                        get_template_part('content', get_post_format());
                endwhile; ?>
            </div>
                <?php bootstrap_pagination($loop);
            endif;
            wp_reset_postdata();?>            
    </div>
</div>   

<?php get_footer(); ?>