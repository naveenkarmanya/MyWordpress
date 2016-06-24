
<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
    <header class="entry-header">
        
<?php the_title(sprintf('<h1 class="entry-title"><a href="%s">',  esc_url(get_permalink())),'<a></h1>'); ?>
</header>
        <small>Posted on :<?php the_time('F j Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?> </small>

    <?php the_content(); ?>
</article>

<small>Posted on :<?php the_time('F j Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?> </small>


