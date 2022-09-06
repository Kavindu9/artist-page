<?php 
/* 
    Template Name: Static Page
*/ ?>
<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php
$button_text = get_post_meta( get_the_ID(), 'button_text', true );
$button_url = get_post_meta( get_the_ID(), 'button_url', true );

?>

<article class="py-20 lg:py-36">
    <header class="container px-4 sm:px-10 max-w-screen-lg mx-auto  mb-24">

        <h1 class="page-title text-center  text-4xl sm:text-6xl font-title font-extralight text-paradise-pink-500 ">
            <?php the_title() ?>
        </h1>


    </header>

    <main class="container px-4 sm:px-10 max-w-screen-lg mx-auto  mb-24">

        <div class="page-entry prose max-w-none mb-6">
            <?php the_content(); ?>
        </div>

        <?php if($button_text) { ?>
        <div class="page-action line-button group ">
            <a href="<?php echo $button_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150"><?php echo $button_text; ?></a>
            <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
            </span>
        </div>
        <?php } ?>

    </main>

</article>


<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>