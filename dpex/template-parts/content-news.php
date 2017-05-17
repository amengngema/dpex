<?php

wp_reset_postdata();

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

$argNews = array(
    'post_type' => 'post',
    'category_name' => 'news',
    'posts_per_page' => 2,
    'paged' => $paged
);

$queryNews = new WP_Query($argNews);

if( $queryNews->have_posts() ) : 
    
?>

<?php while( $queryNews->have_posts() ) : $queryNews->the_post(); ?>
    <figure>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="img-full">
        <h3 class="blog-title"><?php the_title(); ?></h3>
        <figcaption>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-permalink">Read More</a>
        </figcaption>
    </figure>
<?php endwhile; ?>
<?php custom_pagination( $queryNews->max_num_pages, "", $paged ); ?>

<?php 
    
endif;

wp_reset_postdata();

?>


