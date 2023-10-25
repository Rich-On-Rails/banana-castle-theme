<div class="col-md-4 col-12">
<div class="card">
    <?php if( has_post_thumbnail() ) { ?>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" class="card-img-top img-fluid">
    <?php } else { ?>
        <img src="https://placehold.co/600x400"
            class="card-img-top img-fluid" width="100%" height="225">
        <?php } ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text">A summary of your first blog post goes here.</p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
    </div>
</div>
</div>