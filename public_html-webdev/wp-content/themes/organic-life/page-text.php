<?php 
/**
* Template Name: Test 
*/
get_header();?>

<section id="main" class="container">
    <div class="row">
        <div id="content" class="site-content col-md-8" role="main">

            <?php global $post;?>

            <?php

                $args = array( 
                    'orderby' => 'meta_value',
                    'order' => 'DESC',
                    'posts_per_page' => 1,
                );

                $output     = '';

                $posts = get_posts( $args );

                if(count($posts)>0){

                    foreach ($posts as $post): setup_postdata($post);

                    $output .= '<a href="'.get_permalink().'">'.get_the_post_thumbnail($post->ID, 'xs-blog-gallery', array('class' => 'img-responsive')).'</a>';

                    $output .= '<h4 class="entry-title"><a href="'.get_permalink().'">'. get_the_title() .'.</a></h4>';

                    $output .= '<div class="entry-meta small"><i class="fa fa-clock-o"></i> ' . get_the_time() . ' <i class="fa fa-calendar"></i> ' . get_the_date('d M Y') . '</div>';

                    $output .= the_category();

                    $output .= get_the_excerpt();

                    $output .= '<a href="#">' . comments_number('0', '1', '%'). '</a>'  ;

                    endforeach;

                    wp_reset_query();    
                }

                echo $output;
            ?>



            <div class="btn btn-style pull-left"><?php next_posts_link( '&laquo; Older Posts' ); ?></div>
            <div class="btn btn-style pull-right"><?php previous_posts_link( 'Newer Posts &raquo;' ); ?></div>
        </div>

        <div id="sidebar" class="col-md-4" role="complementary">
            <?php get_template_part( 'my-profile'); ?>
            <div class="sidebar-inner">
                <aside class="widget-area">
                    <?php dynamic_sidebar( 'sidebar' ); ?>
                </aside>
            </div>
        </div> <!-- #sidebar -->

    </div> <!-- .row -->
</section> <!-- .container -->

<?php get_footer();