<?php  $stylesheetUrl = get_stylesheet_directory_uri(); ?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo $stylesheetUrl; ?>/css/single.css" >

<div id="post-<?php the_ID(); ?>">
    <?php if (have_posts()) : the_post(); ?>

        <section class="banner banner-sm has-image" style="background-image: url(<?php echo get_header_image(); ?>);">
            <div class="banner-text">
                <h3 class="slogan"><?php the_title(); ?></h3>
            </div>
        </section>
        <section class="main-content main">
            <div class="container-fluid">
                <div id="main" class="<?php simple_boostrap_main_classes(); ?>" role="main">
                    <figure class="post-content">
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="post-thumbnail img-full">
                        <figcaption>
                            <?php the_content(); ?>
                        </figcaption>
                    </figure>	
                </div>

                <?php get_sidebar("left"); ?>
                <?php get_sidebar("right"); ?>
            </div>
        </section>

    <?php else : ?>

        <article id="post-not-found" class="block">
            <p><?php _e("No posts found.", "simple-bootstrap"); ?></p>
        </article>

    <?php endif; ?>
</div>

<?php get_footer(); ?>