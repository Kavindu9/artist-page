<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php


$button_text = get_post_meta( get_the_ID(), 'button_text', true );
$button_url = get_post_meta( get_the_ID(), 'button_url', true );
$headline = get_post_meta( get_the_ID(), 'headline', true );


$args = array(
	'post_type'              => array( 'villa' ),
);

$accommodations = new WP_Query( $args );
?>




<article class="py-20 lg:py-36 lg:pb-20">
    <div class="container px-4 sm:px-10 max-w-screen-lg mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-10 gap-y-6 sm:gap-y-10  lg:items-center">

        <div class="col-span-1  ">
            <header>
                <h3 class="page-title font-body text-sm font-normal text-smoke-white-900 uppercase tracking-wider">Special Offers</h3>
                <h1 class="page-headline text-5xl sm:text-6xl font-title font-extralight text-paradise-pink-500 mb-16 lg:mb-4 max-w-sm">
                    <?php the_title(); ?>
                </h1>
            </header>
            <main>
                <div class="page-entry prose my-6 lg:my-10">
                    <?php echo wpautop( get_post_meta( get_the_ID(), 'description', true ) ); ?>
                </div>

                <?php if($button_text) { ?>
                <div class="page-action line-button group ">
                    <a href="<?php echo $button_url; ?>" target="_blank" class="inline-block text-base font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150"><?php echo $button_text; ?></a>
                    <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                        <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                    </span>
                </div>
                <?php } ?>
            </main>

        </div>



        <aside class="col-span-1 ">
            <?php if ( has_post_thumbnail() ) { ?>
            <figure class="w-full aspect-[334/384] bg-sapphire-200 overflow-hidden">
                <?php the_post_thumbnail( 'thumbi', array( 'class' => 'scale-100 hover:scale-110 transition ease-out duration-1000' ) );?> </figure>

            <?php }    ?>
        </aside>

    </div>

</article>

<section class="bg-sapphire-blue-100 py-20">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-10 gap-y-6 sm:gap-y-10 ">
        <div class="col-span-1 lg:col-span-2">
            <h2 class="text-3xl sm:text-4xl font-title  text-paradise-pink-500 mb-8 lg:mb-4 ">
                Inclusions
            </h2>
            <div class="page-entry prose my-6 lg:my-10">
                <?php echo wpautop( get_post_meta( get_the_ID(), 'inclusions', true ) ); ?>
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
        <div class="col-span-1 space-y-12">
            <div class="p-0 lg:pt-24">
                <h2 class=" font-title font-bold text-xl text-sapphire-blue-500 mb-4 ">
                    Terms & Conditions
                </h2>
                <div class="page-entry prose my-6 mb-0  ">
                    <?php echo wpautop( get_post_meta( get_the_ID(), 'terms', true ) ); ?>
                </div>
            </div>

            <!-- <div class="p-8 lg:p-10 bg-sapphire-blue-50">
                <?php // get_template_part( 'partials/aside-perks' ); ?>

            </div> -->

        </div>
    </div>
</section>


<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>