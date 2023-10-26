<?php
    /**
     * The template for displaying sing posts entries
     *
     *
     */ 

    get_header(); 
?>

<div class="row">
    <div class="col-12 py-4 text-center text-white" style="background-color:#c49720">
        <h1>
            <? the_title(); ?>
        </h1>
        <div class="mb-3">
            <p>By <?php $username = get_userdata($post->post_author); ?>
            <?php echo $username->user_nicename; ?> | Category: <?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory;?> | <?php the_time('F j, Y'); ?></p>
        </div>
    </div>    
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <?php 
                if( has_post_thumbnail() ) { 
            ?>
            <!-- Featured Image -->
            <img src="featured-image.jpg" alt="Featured Image" class="img-fluid rounded">
            <?php 
                } 
            ?>

            <div class="mt-4">
                <p>
                    <? 
                        the_content(); 
                    ?>
                </p>
            </div>
            
            <?php
                $posttags = get_the_tags(); 
                if ($posttags) 
                {
            ?>

            <div class="mt-4">
                <p class="text-muted">
                    Tags: 
                        <?php                              
                            foreach($posttags as $tag) 
                            { 
                                echo $tag->name . ' '; 
                            }                            
                        ?>
                </p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php 
    get_footer(); 
?>


