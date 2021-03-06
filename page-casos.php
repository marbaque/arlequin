<?php
/* Template Name: Galería de casos
 */
get_header();
?>

<div id="primary" class="content-area case-template">
    <main id="main" class="site-main" role="main">

        <?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content', 'page');

        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->

    <section class="case-gallery">

        <?php
        $args = array(
            'post_type' => 'caso',
            'posts_per_page' => -1,
            'order' => 'ASC',
        );

        $casos = new WP_Query($args);


        while ($casos->have_posts()) : $casos->the_post();
            ?>
            <div class="case-item">

                <?php
                arlequin_the_category_list();

                //Find the featured image of the post
                if (has_post_thumbnail($post->ID)) {
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'arlequin-index-img');
                    $image = $image[0];
                    $image_id = get_post_thumbnail_id($post->ID);
                    $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                    ?>
                    <figure>
                        <a href="<?php the_permalink(); ?>">
                            <img class="img-responsive" src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
                        </a>
                    </figure>
                    <?php
                }
                ?>	    	


                <h2><a href="<?php the_permalink(); ?>"> <?php echo get_the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
                
                <div class="continue-reading">
                    <?php
                    $read_more_link = sprintf(
                        /* translators: %s: Name of current post. */
                        wp_kses(__('Continue reading %s', 'arlequin'), array('span' => array('class' => array()))), the_title('<span class="screen-reader-text">"', '"</span>', false)
                    );
                    ?>

                    <a href="<?php echo esc_url(get_permalink()) ?>" rel="bookmark">
                        <?php echo $read_more_link; ?>
                    </a>
                </div><!-- .continue-reading -->
            </div><!-- .case-item -->

            <?php endwhile; ?>
        
            


    </section><!-- .case-gallery -->

</div><!-- #primary -->

<?php
get_footer();
