<?php 
$title = get_post_meta( get_the_ID(), '5_title', true );
$button_url = get_post_meta( get_the_ID(), '5_button_url', true );
$button_text = get_post_meta( get_the_ID(), '5_button', true );



$image1 = wp_get_attachment_image( get_post_meta( get_the_ID(), '5_image_left_id', 1 ), array('480', '460'), "", array( "class" => "w-full h-full object-cover object-center" ) );
$image2 = wp_get_attachment_image( get_post_meta( get_the_ID(), '5_image_right_id', 1 ), array('480', '460'), "", array( "class" => "w-full h-full object-cover object-center" ) );



$args = array(
	'post_type'              => array( 'offers' ),
);

$offers = new WP_Query( $args );
?>

<section class="py-8 md:py-20">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-5 gap-y-8 mb-24">
        <h3 class="col-span-1 sm:col-span-2 text-5xl sm:text-7xl font-title font-extralight text-sapphire-blue-500 max-w-md">
            <?php echo $title; ?>
        </h3>
        <div class="col-span-1 sm:col-span-3">
            <div class="prose text-gray-600 text-base mb-3 mt-8">
                <?php echo wpautop( get_post_meta( get_the_ID(), '5_description', true ) ); ?>

            </div>

            <div>
                <div class="actions space-y-2">
                    <?php if($button_url) { ?>
                    <div class="section-action line-button group max-w-md ">
                        <a href="<?php echo $button_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-500 hover:text-paradise-pink-500 transition ease-out duration-150"><?php echo $button_text; ?></a>
                        <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-400 overflow-hidden">
                            <span class="absolute inset-0 w-[80px] h-[2px] bg-paradise-pink-500 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                        </span>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php 

if ( $offers->have_posts() ) { ?>
    <div class="offers-carousel container px-4 sm:px-10 max-w-screen-xl mx-auto relative">
        <div class="swiper swiper-x">
            <div class="swiper-wrapper">
                <?php while ( $offers->have_posts() ) {
		$offers->the_post(); ?>
                <div class="item-card swiper-slide">
                    <?php if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="group">

                        <figure class="w-full aspect-[334/384] bg-sapphire-200 overflow-hidden relative">
                            <?php the_post_thumbnail( 'thumbi', array( 'class' => 'w-full h-full object-cover object-center scale-100 group-hover:scale-110 transition ease-out duration-1000' ) );?>

                            <div class="absolute bottom-0 left-0 w-full h-1/2 flex flex-col justify-end bg-gradient-to-t from-black/60 to-black/0">
                                <div class="p-8 ">
                                    <h3 class="text-2xl font-title font-extralight text-white drop-shadow-xl  ">
                                        <?php the_title(); ?>
                                    </h3>
                                    <div class="prose text-white/50 text-sm mt-2">
                                        <?php echo wpautop( get_post_meta( get_the_ID(), 'description_short', true ) ); ?>

                                    </div>
                                </div>
                            </div>
                        </figure>
                    </a>



                    <?php }    ?>
                </div>
                <!-- card -->
                <?php  } ?>


            </div>
            <!-- wrap -->
        </div>

        <div class="next-arrow group absolute p-4 top-1/3 lg:top-5 -right-3 lg:-right-2 xl:-right-8 z-20 transition-all duration-150 ease-out">
            <svg width="99" height="10" viewBox="0 0 99 10" xmlns="http://www.w3.org/2000/svg" class="text-sapphire-blue-500 group-hover:text-sapphire-blue-900">
                <path d="M93.6245 0.219107L98.61 4.2075C98.8472 4.39035 99 4.67731 99 4.99996C99 5.32262 98.8472 5.60958 98.61 5.79243L93.6245 9.78082C93.1933 10.1258 92.564 10.0559 92.2189 9.62464C91.8739 9.19338 91.9439 8.56409 92.3751 8.21908L95.149 5.99996H1C0.447715 5.99996 0 5.55225 0 4.99996C0 4.44768 0.447715 3.99996 1 3.99996H95.149L92.3751 1.78084C91.9439 1.43584 91.8739 0.806543 92.2189 0.375281C92.564 -0.0559811 93.1933 -0.125903 93.6245 0.219107Z" fill="currentColor" />
            </svg>
        </div>
        <div class="prev-arrow group absolute p-4 bottom-1/3 lg:bottom-5 -left-3 lg:-left-2 xl:-left-8 z-20 transition-all duration-150 ease-out">
            <svg width="99" height="10" viewBox="0 0 99 10" xmlns="http://www.w3.org/2000/svg" class="text-sapphire-blue-500 group-hover:text-sapphire-blue-900">
                <path d="M5.37549 0.219107L0.389992 4.2075C0.152802 4.39035 0 4.67731 0 4.99996C0 5.32262 0.152809 5.60958 0.390007 5.79243L5.37549 9.78082C5.80675 10.1258 6.43604 10.0559 6.78105 9.62464C7.12606 9.19338 7.05614 8.56409 6.62488 8.21908L3.85098 5.99996H98C98.5523 5.99996 99 5.55225 99 4.99996C99 4.44768 98.5523 3.99996 98 3.99996H3.85098L6.62488 1.78084C7.05614 1.43584 7.12606 0.806543 6.78105 0.375281C6.43604 -0.0559811 5.80675 -0.125903 5.37549 0.219107Z" fill="currentColor" />
            </svg>
        </div>
    </div>

    <?php } else {
	// no posts found
    echo 'not found';
}

// Restore original Post Data
wp_reset_postdata();

?>
</section>