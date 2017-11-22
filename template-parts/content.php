<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arlequin
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php
        if ( has_post_thumbnail() ) { ?>
            <figure class="featured-image index-img">
		<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
			<?php
			the_post_thumbnail('humescores-index-img');
			?>
		</a>
	</figure><!-- .featured-image full-bleed -->

        <?php } ?>
    
    <div class="post__content">

        <header class="entry-header">
            <?php arlequin_the_category_list(); ?>
            <?php
            if (is_singular()) :
                the_title('<h1 class="entry-title">', '</h1>');
            else :
                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            endif;

            if ('post' === get_post_type()) :
                ?>
                <div class="entry-meta">
                    <?php arlequin_posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php endif;
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_excerpt();

            ?>
        </div><!-- .entry-content -->
        
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


    </div> <!--post__content-->
    
</article><!-- #post-<?php the_ID(); ?> -->
