<?php 
/* 
    Template Name: Special Offers
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php

$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );
$hero_image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'hero_image_id', 1 ), "full", "", array( "class" => "w-full h-full aspect-[16/12] object-cover  md:aspect-[16/7]" ) );


$button_text = get_post_meta( get_the_ID(), 'button_text', true );
$button_url = get_post_meta( get_the_ID(), 'button_url', true );
$headline = get_post_meta( get_the_ID(), 'headline', true );


$args = array(
	'post_type'              => array( 'offers' ),
);

$offers = new WP_Query( $args );
?>

<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>

<article class="py-20 lg:py-36">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto block lg:grid lg:grid-cols-3 gap-6 sm:gap-10 sm:gap-y-2 mb-24">
        <?php if($hero_check) { ?>
        <div class="mobile-hero block md:hidden ">
            <h1 class="page-title font-body text-sm font-normal  text-smoke-white-900 uppercase tracking-wider"><?php the_title(); ?></h1>
            <h3 class="page-headline  text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500 max-w-sm ">
                <?php echo $headline; ?>
            </h3>
        </div>
        <?php } else { ?>
        <div class="col-span-1 lg:col-span-2">
            <h1 class="page-title font-body text-sm font-normal  text-smoke-white-900 uppercase tracking-wider"><?php the_title(); ?></h1>
            <h1 class="page-headline  text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500  mb-6 lg:mb-4">
                <?php echo $headline; ?>
            </h1>
        </div>

        <?php } ?>
        <div class="col-span-1 lg:col-span-2 ">
            <div class="page-entry prose mb-6">
                <?php the_content(); ?>
            </div>



            <?php if($button_text) { ?>
            <div class="page-action line-button group ">
                <a href="<?php echo $button_url; ?>" target="_blank" class="inline-block text-base font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150"><?php echo $button_text; ?></a>
                <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                    <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                </span>
            </div>
            <?php } ?>
        </div>
        <aside class="col-span-1 col-start-3 row-start-2 row-end-3 ">
            <div class="bg-sapphire-blue-100 p-10">

                <?php get_template_part( 'partials/aside-perks' ); ?>
            </div>
        </aside>
    </div>


    <?php 


if ( $offers->have_posts() ) { ?>


    <main class=" page-listings container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 sm:gap-12">

        <?php while ( $offers->have_posts() ) {
		$offers->the_post();
		// do something
        get_template_part('partials/card', 'offers');
	} ?>


    </main>

    <?php } else {
	// no posts found
    echo 'not found';
}

// Restore original Post Data
wp_reset_postdata();

?>
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