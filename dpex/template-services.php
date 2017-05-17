<?php //Template Name: Template Services ?>

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

<section class="main-content main blog-grid">
    <div class="container">
        <?php get_template_part( 'template-parts/content', 'services' ); ?>
    </div>
</section>

<?php get_footer(); ?>