<?php get_header(); ?>
<div class="row">
    <div class="col-xs-12 col-sm-8">


        <div class="thumbnail-img">
            <?php the_post_thumbnail('thumbnail'); ?>

        </div>

        <?php
        $newpost = new WP_Query('page id=131');
        if ($newpost->have_posts()) :

            while ($newpost->have_posts()) :
                the_post();
                ?>
                <?php the_title(); ?>
                <?php get_template_part('content', get_post_format()); ?>
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