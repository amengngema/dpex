<?php

wp_reset_postdata();

$argServices = array(
    'post_type' => 'post',
    'category_name' => 'services'
);

$queryServices = new WP_Query($argServices);

if( $queryServices->have_posts() ) : 
    
?>

<?php while( $queryServices->have_posts() ) : $queryServices->the_post(); ?>
    <div class="col-md-4">
        <a href="<?php the_permalink(); ?>">
            <figure>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="img-full">
                <h3 class="blog-title"><?php the_title(); ?></h3>
                <figcaption>
                    <?php the_excerpt(); ?>
                </figcaption>
            </figure>
        </a>
    </div>
<?php endwhile; ?>

<?php 
    
endif;

wp_reset_postdata();

?>


