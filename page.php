        <?php get_header(); ?>
        
        <div class="parallax"></div>
        
        <h2 class="page-title"><?php the_field('pagetitle') ?></h2>
        
        <hr>
        
        <div class="container-fluid">
            <?php woocommerce_content(); ?>
            <?php
            echo apply_filters('the_content',$wp_query->post->post_content); ?>
        </div>
        

    
        <?php get_footer(); ?>