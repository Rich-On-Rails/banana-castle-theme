<?php

/**
 * The template for displaying sing posts entries
 *
 *
 */ ?>

<?php get_header(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <!-- Post Title -->
            <h1 class="display-4"><? the_title(); ?></h1>

            <div class="mb-3">
                <p class="text-muted">By <?php $username = get_userdata($post->post_author); ?>
            <?php echo $username->user_nicename; ?> | Category: <?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory;?> | <?php the_time('F j, Y'); ?></p>
            </div>

            <?php if( has_post_thumbnail() ) { ?>
            <!-- Featured Image -->
            <img src="featured-image.jpg" alt="Featured Image" class="img-fluid rounded">
            <?php } ?>

            <!-- Post Content -->
            <div class="mt-4">
                <p><? the_content(); ?></p>
            </div>

            <!-- Tags at the Bottom -->
            <div class="mt-4">
                <p class="text-muted">Tags: <?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ' '; }}?></p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>


