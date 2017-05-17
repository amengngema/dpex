<?php //Template Name: Template News ?>

<?php  $stylesheetUrl = get_stylesheet_directory_uri(); ?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo $stylesheetUrl; ?>/css/blog.css" >

<?php


$background = $stylesheetUrl . '/img/default-banner.jpg';


if( have_posts() ) : the_post();

    $thumbnail = get_the_post_thumbnail_url('full');

    if( ! $thumbnail == '' )
    {
        $background = $thumbnail;
    }

?>

<section id="news" class="banner banner-sm has-image overlay" style="background-image: url(<?php echo $background; ?>);">
    <div class="banner-text">
        <h1 class="slogan"><?php the_title(); ?></h1>
    </div>
</section>

<?php endif; ?>

<section class="main-content main blog-full">
    <div class="container-fluid">
        <div id="main" class="<?php simple_boostrap_main_classes(); ?>" role="main">
            <?php get_template_part( 'template-parts/content', 'news' ); ?>
        </div>

        <?php get_sidebar("left"); ?>
        <?php get_sidebar("right"); ?>
        
    </div>
</section>

<?php get_footer(); ?>