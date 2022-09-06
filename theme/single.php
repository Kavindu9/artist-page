<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nova_Maldives
 */

get_header();
?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<article class="py-20 lg:py-36">
    <main class="container px-4 sm:px-10 max-w-screen-lg mx-auto">
        <header>
            <h1 class="page-headline text-5xl sm:text-6xl font-title font-extralight text-paradise-pink-500  mb-6 lg:mb-8 lg:max-w-screen-lg text-left md:text-center"><?php the_title(); ?></h1>
            <div class="flex justify-center space-x-2 mb-4">
                <p><?php the_date( 'd M y', '', '' ); ?></p>
                <spa class="text-smoke-white-900">|</spa>
                <div>
                    <?php 
			$categories = get_the_category();
			if ( ! empty( $categories ) ) {
				echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
			}
			?>
                </div>
            </div>
        </header>
        <?php if ( has_post_thumbnail() ) : ?>
        <figure class="mb-8">
            <?php the_post_thumbnail(); ?>
        </figure>
        <?php endif; ?>
        <div class="page-entry prose mx-auto">
            <?php the_content(); ?>
        </div>
    </main>


</article>


<?php endwhile; ?>

<?php get_template_part('partials/section', 'articles'); ?>


<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>