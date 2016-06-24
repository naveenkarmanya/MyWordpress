<?php
/*
  Template Name:Page No Title
 */

get_header();
?>
<div class="row">
    <div class="col-xs-12 col-sm-8">

    <?php
    //$newpost = new WP_Query('page id=131');
    if (have_posts()) :

        while (have_posts()) :
            the_post();
            ?>
            <h1>My Custome Template page</h1>
            <small>Posted on :<?php the_time('F j Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?> </small>
            <?php the_content(); ?>
            <hr>

            <?php
        endwhile;

    else :

    endif;
    ?>
    </div>
   
   <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>