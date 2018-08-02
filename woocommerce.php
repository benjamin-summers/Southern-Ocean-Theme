        <?php get_header(); ?>
        
        <div class="parallax"></div>
        
        <?php get_product_search_form(); ?>
        
        <h2 class="page-title"><?php the_field('pagetitle') ?></h2>
        
        <hr>
        
        <div class="container-fluid shopPage">
            <?php woocommerce_content(); ?>
            <?php
            echo do_shortcode("[wcps id='68']");
            echo apply_filters('the_content',$wp_query->post->post_content); ?>
        </div>
        
       <?php get_footer(); ?>