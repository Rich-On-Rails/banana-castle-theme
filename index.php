<?php get_header(); ?>

    <div id="section-dots"></div>

    <section id="home" class="hero d-flex justify-content-center align-items-center cover">
        <div class="container text-center">
            <h1>Banana Castle</h1>
            <p>5 inch Gauge Planet</p>
            <div class="social-icons">
                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-mastodon"></i></a>
            </div>
            <div class="scroll-arrow">
                <div class="arrow"></div>
            </div>
        </div>
    </section> 
    
    <section id="blog" class="section">
        <div class="container">
            <h2>Latest Blog Posts</h2>
            <div class="row">                
                <?php
                
                $args = array (
                    'post_status' => 'published',
                    'order'          => 'desc',
                    'orderby'        => 'publish_date',
                    'posts_per_page' => 6,
                );

                $posts = new WP_Query( $args );
                
                if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); 
                    get_template_part( 'content', get_post_format() );
                        endwhile; endif; wp_reset_postdata(); 
                ?>
            </div>
        </div>        
    </section>

    <section id="videos" class="section">
        <div class="container">
            <h2>Latest YouTube Videos</h2>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="video-thumbnail">                        
                        <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/OQz7Rh3tVic?si=NcHQrdvKmFay9YQh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="video-thumbnail">                        
                        <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/OQz7Rh3tVic?si=NcHQrdvKmFay9YQh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>               
            </div>            
        </div>
    </section>
    <?php 
    
    $photoArgs = array (
        'category_name' => 'HomeGram',
        'post_type' => 'attachment',
        'post_status' => 'published',
        'numberposts' => 9,
    );

    $attachments = get_posts($photoArgs);
    $post_count = count($attachments);

    if($post_count > 0)
    {?>
    <section id="latest-pictures" class="section">
        <div class="container">
            <h2>Latest Pictures</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

                <?php
                if($attachments) {
                    foreach ($attachments as $attachment) {
                        echo "<div class=\"col-lg-4 col-md-6 col-12\">";
                        echo "<div class=\"picture\">";
                        $url = get_attachment_link($attachment->ID);
                        $img = wp_get_attachment_url($attachment->ID);
                        echo '<img src="'.$img.'">';
                        echo "</div>";
                        echo "</div>";
                    }
                };
        };
                ?>                
            </div>
        </div>
    </section>


    <?php get_footer(); ?>     
</body>
</html>