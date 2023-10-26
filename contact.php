<?php 
    /** 
     * Template Name: Contact Us 
     * 
     * 
    */ 

    get_header(); 
?>
<main>

<div class="row">
    <div class="col-12 py-4 text-center text-white" style="background-color:#c49720">
        <h1>Contact Me</h1>
    </div>    
</div>

<div class="container-fluid px-5 my-5">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-12">
            <div class="row g-0">
                <div class="col-md-6 col-12 p-4 text-center">
                    <img class="rounded img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/images/contact.jpg">                   
                </div>
                <div class="col-md-6 col-12 p-4">                    
                    <? echo do_shortcode('[contact-form-7 id="e513ace" title="Contact form 1"]');?>
                </div>
            </div>    
        </div>
    </div>
</div>

</main>
<?php 
    get_footer(); 
?>