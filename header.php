<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo get_bloginfo( 'name' ); ?> — <?php echo get_bloginfo( 'description' ); ?></title>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <nav id="navbar" class="navbar navbar-expand-md border-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Downloads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Contact</a>
                </li>
            </ul>
        </div>
    </nav>