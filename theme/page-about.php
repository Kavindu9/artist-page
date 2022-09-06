<?php 
/* 
    Template Name: About
*/ ?>
<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php

$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );
$hero_image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'hero_image_id', 1 ), "full", "", array( "class" => "w-full h-full aspect-[16/12] object-cover  md:aspect-[16/7]" ) );


$button_text = get_post_meta( get_the_ID(), 'button_text', true );
$button_url = get_post_meta( get_the_ID(), 'button_url', true );
$is_modal = get_post_meta( get_the_ID(), 'is_modal', true );

$headline = get_post_meta( get_the_ID(), 'headline', true );
$whySectionCheck = get_post_meta( get_the_ID(), 'nova_section_check', true );


$args = array(
	'post_type'              => array( 'villa' ),
);

$accommodations = new WP_Query( $args );
?>


<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>




<article class=" py-20 lg:py-36 lg:pb-0">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-10 sm:gap-y-2 mb-24">

        <?php if($hero_check) { ?>
        <div class="mobile-hero block md:hidden ">
            <h1 class="page-title font-body text-sm font-normal  text-paradise-pink-300 uppercase tracking-wider"><?php the_title(); ?></h1>
            <h3 class="page-headline  text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500 max-w-sm ">
                <?php echo $headline; ?>
            </h3>
        </div>
        <?php } else { ?>
        <h1 class="page-title font-body text-sm font-normal  text-paradise-pink-300 uppercase tracking-wider"><?php the_title(); ?></h1>
        <h3 class="page-headline col-span-1 sm:col-span-3 text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500 max-w-sm mb-16 lg:mb-4">
            <?php echo $headline; ?>
        </h3>

        <?php } ?>


        <div class="col-span-1 lg:col-span-3 lg:col-start-1">
            <div class="max-w-screen-md mx-auto">
                <div class="page-entry prose mb-6">
                    <?php the_content(); ?>
                </div>


                <?php if($button_text) { ?>
                <div class="page-action line-button group ">
                    <a <?php if($is_modal === 'on'){ echo "data-fancybox "; echo 'data-type="iframe"';  } ?> href="<?php echo $button_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150"><?php echo $button_text; ?></a>
                    <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                        <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                    </span>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>

</article>

<section>
    <div class="container max-w-none px-4 lg:px-0  mx-auto mb-24">
        <div class="swiper usp-slider relative">
            <div class="swiper-wrapper relative">
                <?php 
        $reasons = get_post_meta( get_the_ID(), 'why_nova_group', true );

        foreach ( (array) $reasons as $key => $entry ) {

            $img = $title = $desc  = '';
        
            if ( isset( $entry['title'] ) ) {
                $title = esc_html( $entry['title'] );
            }
        
            if ( isset( $entry['description'] ) ) {
                $desc = wpautop( $entry['description'] );
            }

    
        
            if ( isset( $entry['image_id'] ) ) {
                $img = wp_get_attachment_image( $entry['image_id'], 'large', null, array(
                    'class' => 'w-full h-full object-cover object-center scale-100 group-hover:scale-110 transition ease-out duration-500 ',
                ) );
            } ?>
                <div class="swiper-slide">
                    <div class="why-nova-item max-w-screem-md  group">
                        <div class="relative ">
                            <figure class="overflow-hidden w-full aspect-[720/480] ">
                                <?php echo $img; ?>

                            </figure>
                            <div class="absolute bottom-0 left-0 w-full h-1/2 flex flex-col justify-end bg-gradient-to-t from-black/60 to-black/0">
                                <div class="p-6 sm:p-10 ">
                                    <h3 class=" font-title text-3xl  sm:text-5xl text-white drop-shadow-xl  ">
                                        <?php echo $title; ?> </h3>

                                </div>
                            </div>
                        </div>

                        <div class="prose p-6 sm:p-10 py-6">
                            <?php echo $desc; ?>
                        </div>



                    </div>

                </div>

                <?php }  ?>


            </div>

            <div class="absolute inset-0 w-full h-full">
                <div class="swiper-arrows relative max-w-none md:max-w-screen-sm xl:max-w-screen-md 2xl:max-w-screen-lg mx-auto w-full aspect-[720/480] md:aspect-[720/380]">
                    <div class="next-arrow group absolute p-4 top-2 lg:top-5 -right-3 lg:-right-2 xl:-right-8 z-20 transition-all duration-150 ease-out">
                        <svg width="99" height="10" viewBox="0 0 99 10" xmlns="http://www.w3.org/2000/svg" class="text-sapphire-blue-500 group-hover:text-sapphire-blue-900">
                            <path d="M93.6245 0.219107L98.61 4.2075C98.8472 4.39035 99 4.67731 99 4.99996C99 5.32262 98.8472 5.60958 98.61 5.79243L93.6245 9.78082C93.1933 10.1258 92.564 10.0559 92.2189 9.62464C91.8739 9.19338 91.9439 8.56409 92.3751 8.21908L95.149 5.99996H1C0.447715 5.99996 0 5.55225 0 4.99996C0 4.44768 0.447715 3.99996 1 3.99996H95.149L92.3751 1.78084C91.9439 1.43584 91.8739 0.806543 92.2189 0.375281C92.564 -0.0559811 93.1933 -0.125903 93.6245 0.219107Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="prev-arrow group absolute p-4 bottom-0 lg:bottom-5 -left-3 lg:-left-2 xl:-left-8 z-20 transition-all duration-150 ease-out">
                        <svg width="99" height="10" viewBox="0 0 99 10" xmlns="http://www.w3.org/2000/svg" class="text-sapphire-blue-500 group-hover:text-sapphire-blue-900">
                            <path d="M5.37549 0.219107L0.389992 4.2075C0.152802 4.39035 0 4.67731 0 4.99996C0 5.32262 0.152809 5.60958 0.390007 5.79243L5.37549 9.78082C5.80675 10.1258 6.43604 10.0559 6.78105 9.62464C7.12606 9.19338 7.05614 8.56409 6.62488 8.21908L3.85098 5.99996H98C98.5523 5.99996 99 5.55225 99 4.99996C99 4.44768 98.5523 3.99996 98 3.99996H3.85098L6.62488 1.78084C7.05614 1.43584 7.12606 0.806543 6.78105 0.375281C6.43604 -0.0559811 5.80675 -0.125903 5.37549 0.219107Z" fill="currentColor" />
                        </svg>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

<?php if($whySectionCheck) { ?>
<section class="py-20 ">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto  mb-24">
        <h3 class=" text-4xl mb-8 sm:text-6xl font-title font-extralight text-paradise-pink-500">
            <?php echo get_post_meta( get_the_ID(), 'section_title', true ); ?></h3>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-12">

            <?php 
        $reasons = get_post_meta( get_the_ID(), 'nova_usp_group', true );

        foreach ( (array) $reasons as $key => $entry ) {

            $img = $title = $desc  =    $button = $button_url = '';
        
            if ( isset( $entry['title'] ) ) {
                $title = esc_html( $entry['title'] );
            }
        
            if ( isset( $entry['description'] ) ) {
                $desc = wpautop( $entry['description'] );
            }

            if ( isset( $entry['button'] ) ) {
                $button = wpautop( $entry['button'] );
            }

            if ( isset( $entry['button_url'] ) ) {
                $button_url = esc_html( $entry['button_url'] );
            }
        
            if ( isset( $entry['image_id'] ) ) {
                $img = wp_get_attachment_image( $entry['image_id'], 'thumbi', null, array(
                    'class' => 'w-full h-full object-cover object-center scale-100 group-hover:scale-110 transition ease-out duration-500 ',
                ) );
            } ?>

            <div class="item">
                <figure class="overflow-hidden w-full aspect-[720/480] mb-4">
                    <?php echo $img; ?>
                </figure>
                <div class="mb-3">
                    <h4 class="text-xl font-bold mb-3"><?php echo $title; ?></h4>
                    <div class="prose">
                        <?php echo $desc; ?>
                    </div>
                </div>
                <div class="actions space-y-2 mt-auto">
                    <?php if($button_url) { ?>
                    <div class="line-button group">
                        <a href="<?php echo $button_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150"><?php echo $button; ?></a>
                        <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                            <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                        </span>
                    </div>
                    <?php } ?>


                </div>
            </div>

            <?php } ?>




        </div>
    </div>
</section>
<?php } ?>



<section class="py-20 hidden">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-3 lg:items-center gap-12 lg:gap-14 sm:gap-y-2 mb-24">
        <div>
            <div class="relative bg-paradise-pink-500/20  hover:bg-paradise-pink-500  transition-all ease-in-out duration-300">
                <div class="  bg-paradise-pink-100 p-8 md:p-12  -translate-x-2 -translate-y-2 transition-all ease-in-out duration-300 hover:-translate-x-1.5 hover:-translate-y-1.5 ">
                    <h4 class="font-title text-2xl text-paradise-pink-500 font-bold mb-4 ">Value for Guests</h4>
                    <ul class="list-disc ml-4 space-y-3 marker:text-paradise-pink-500 text-gray-700">
                        <li>Modern, bright &amp; minimalist aesthetic accommodation integrating the latest technology</li>
                        <li>A base meal plan of FB plus which offers great value for money and a fantastic All-Inclusive option – based on healthy and sustainable food offering</li>
                        <li>A modern All-Inclusive Club Style Community Concept = a modern, value/experience for money, no fuss, no worry, “soft luxury” island destination that is specifically
                            designed around the needs of the millennial traveller</li>
                    </ul>

                </div>

            </div>
        </div>

        <div>
            <div class="relative bg-sunset-yellow-500/20  hover:bg-sunset-yellow-500  transition-all ease-in-out duration-300">
                <div class=" bg-sunset-yellow-100 p-8 md:p-12  -translate-x-2 -translate-y-2 transition-all ease-in-out duration-300 hover:-translate-x-1.5 hover:-translate-y-1.5 ">
                    <h4 class="font-title text-2xl text-sunset-yellow-500 font-bold mb-4 ">Comfort for Guests</h4>
                    <ul class="list-disc ml-4 space-y-3 marker:text-sunset-yellow-500 text-gray-700">
                        <li>A fun, progressive, inclusive community, formed by couples and groups of friends&nbsp;</li>
                        <li>A happening and communal atmosphere created by animators through activities and a number of live entertainment sessions</li>
                        <li>Multiple room types to choose from including inter-connecting Beach Villas for families or groups of friends travelling together</li>
                        <li>A health and wellness focus with a fantastic gym and outdoor training area, group fitness classes and the spa focusing on treatments based on organic products</li>
                        <li>A place for local culture immersion with cultural interactions with the cultural heritage village on Dangethi Island close by </li>
                    </ul>

                </div>

            </div>
        </div>

        <div>
            <div class="relative bg-sapphire-blue-500/20  hover:bg-sapphire-blue-500  transition-all ease-in-out duration-300">
                <div class=" bg-sapphire-blue-100 p-8 md:p-12  -translate-x-2 -translate-y-2 transition-all ease-in-out duration-300 hover:-translate-x-1.5 hover:-translate-y-1.5 ">
                    <h4 class="font-title text-2xl text-sapphire-blue-500 font-bold mb-4 ">Location</h4>


                    <ul class="list-disc ml-4 space-y-3 marker:text-sapphire-blue-500 text-gray-700">
                        <li aria-level="1"><span style="font-weight: 400;">A 100% natural island with well-established vegetation, a fantastic beach and superb house reef</span></li>
                        <li aria-level="1"><span style="font-weight: 400;">A top underwater location – South Ari Atoll is still one of the best locations for diving and snorkeling, with over 30+ manta points/whale sharks points/ship wrecks and dive locations just within a close 40 min range from the island, making Nova a unique spot for those looking for the ultimate marine adventure.</span></li>
                        <li aria-level="1"><span style="font-weight: 400;">South Ari Atoll is the only region in the Maldives where you have the chance to see whale sharks throughout the year.</span></li>
                    </ul>

                </div>

            </div>
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