<?php  $stylesheetUrl = get_stylesheet_directory_uri(); ?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo $stylesheetUrl; ?>/css/blog.css" >

<?php 

$backgroundImage = $stylesheetUrl . '/img/default-banner.jpg';

if (has_header_image()):
    $backgroundImage = get_header_image();
endif 

?>
<section class="banner banner-sm has-image" style="background-image: url(<?php echo $backgroundImage; ?>);">
    <div class="banner-text">
        <h1 class="slogan">
            <?php echo get_the_archive_title() ?>
        </h1>
    </div>
</section>
<section class="main-content main blog-full">
    <div class="container-fluid">

        <div id="main" class="<?php simple_boostrap_main_classes(); ?>" role="main">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6">
                        <figure>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="img-full">
                            <h3 class="blog-title"><?php the_title(); ?></h3>
                            <figcaption>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="blog-permalink">Read More</a>
                            </figcaption>
                        </figure>
                    </div>
                <?php endwhile; ?>	
                <div class="clearfix"></div>
                <?php custom_pagination( $queryNews->max_num_pages, "", $paged ); ?>

            <?php else : ?>

                <article id="post-not-found" class="block">
                    <p><?php _e("No items found.", "simple-bootstrap"); ?></p>
                </article>

            <?php endif; ?>

        </div>

        <?php get_sidebar("left"); ?>
        <?php get_sidebar("right"); ?>

    </div>
</section>
<?php get_footer(); ?>