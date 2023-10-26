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
            <?php the_time('F j, Y'); ?></p>
        </div>
    </div>    
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <?php 
                if( has_post_thumbnail() ) { 
            ?>

            <img src="<?php the_post_thumbnail_url(); ?>" alt="Featured Image" class="img-fluid rounded">
            
            <?php 
                } 
            ?>

           
            <div class="mt-4 mb-4">
                <p>
                    <? 
                        the_content(); 
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>

<?php 
    get_footer(); 
?>


