<?php
    
function my_theme_enqueue_styles() {
    
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    
}  
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function welcome_message($translated_text, $text, $domain) {
    $new_message = str_replace('Howdy', 'Welcome', $text);
    return $new_message;
}
add_filter('gettext', 'welcome_message', 10, 3);

function themeslug_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    $wp_customize->add_setting( 'themeslug_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    ) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

if( ! function_exists('custom_pagination') )
{
    function custom_pagination($numpages = '', $pagerange = '', $paged='') 
    {

      if (empty($pagerange)) 
      {
        $pagerange = 2;
      }

      global $paged;

      if (empty($paged)) 
      {
        $paged = 1;
      }

      if ($numpages == '') 
      {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;

        if(!$numpages) 
        {
            $numpages = 1;
        }
      }

      $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => False,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => True,
        'prev_text'       => __('&laquo;'),
        'next_text'       => __('&raquo;'),
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => ''
      );

      $paginate_links = paginate_links($pagination_args);

      if ($paginate_links) 
      {
        echo "<nav class='custom-pagination'>";
          echo $paginate_links;
        echo "</nav>";
      }

    }
}

if( ! function_exists('simple_bootstrap_display_main_menu') )
{
    function simple_bootstrap_display_main_menu2() {
        wp_nav_menu(
            array( 
                'theme_location' => 'main_nav', /* where in the theme it's assigned */
                'menu' => 'main_nav', /* menu name */
                'menu_class' => 'nav navbar-nav navbar-right',
                'container' => false, /* container class */
                'depth' => 2,
                'walker' => new simple_bootstrap_Bootstrap_walker(),
            )
        );
    }
}

if( ! function_exists('simple_boostrap_display_post') )
{
    function simple_boostrap_display_post2($multiple_on_page) { ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class("block"); ?> role="article">
            <header>
                <?php if ($multiple_on_page) : ?>
                    <div class="article-header">
                        <h2 class="h1"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                <?php else: ?>
                    <div class="article-header">
                        <h1><?php the_title(); ?></h1>
                    </div>
                <?php endif ?>

                <?php if (has_post_thumbnail()) { ?>
                    <div class="featured-image">
                        <?php if ($multiple_on_page) : ?>
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('simple_boostrap_featured'); ?></a>
                        <?php else: ?>
                            <?php the_post_thumbnail('simple_boostrap_featured'); ?>
                        <?php endif ?>
                    </div>
                <?php } ?>
            </header>
            <section class="post_content">
                <?php
                if ($multiple_on_page) {
                    the_excerpt();
                } else {
                    the_content();
                    wp_link_pages();
                }
                ?>
            </section>
            <footer>
                <?php the_tags('<p class="tags">', ' ', '</p>'); ?>
            </footer>
        </article>
    <?php }
}

?>