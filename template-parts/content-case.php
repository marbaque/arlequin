<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arlequin
 */
?>
<a href="/mercadeo/casos-estrategias-comercio-movil/" title="Volver a casos">Volver a Galería de casos</a>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        arlequin_post_navigation();
        the_title('<h1 class="entry-title">', '</h1>');
        ?>

    </header><!-- .entry-header -->

    <div class="case__wrap">
        <div class="entry-content case-content">

            <?php
            // variables for custom filelds
            $img1 = get_field('gallery_image_1');
            $img2 = get_field('gallery_image_2');
            $img3 = get_field('gallery_image_3');
            $img4 = get_field('gallery_image_4');
            $img5 = get_field('gallery_image_5');
            ?>
            <!--only image 1 is required-->
            <?php if ($img1): ?>

                <div class="case-gallery">

                    <img src="<?php echo $img1; ?>">

                    <?php if ($img2): ?>
                        <img src="<?php echo $img2; ?>">
                    <?php endif; ?>

                    <?php if ($img3): ?>
                        <img src="<?php echo $img3; ?>">
                    <?php endif; ?>

                    <?php if ($img4): ?>
                        <img src="<?php echo $img4; ?>">
                    <?php endif; ?>

                    <?php if ($img5): ?>
                        <img src="<?php echo $img5; ?>">
                    <?php endif; ?>
                </div><!-- .case-gallery --> 

            <?php endif; ?>

            <div class="case-trends">
                <?php the_terms($post->ID, 'tendencia', 'Tendencia: ', ', ', ' '); ?>
            </div>


            <div class="case-desc">
                <?php
                the_content();
                ?>
            </div>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        </div><!-- .entry-content .case-content -->
    </div>

</div>




</article><!-- #post-## -->

<?php get_template_part('template-parts/auxiliar'); ?>
