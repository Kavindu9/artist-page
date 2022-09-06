<?php 
 $hero_image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'hero_image_id', 1 ), "full", "", array( "class" => "w-full h-full aspect-[16/12] object-cover  md:aspect-[16/7]" ) );
 $headline = get_post_meta( get_the_ID(), 'headline', true );

?>

<div class="page-hero w-full mx-auto bg-smoke-white-600 ">

    <div class="hero-image relative">

        <?php echo $hero_image; ?>
        <div class="absolute  bg-black/20 w-full h-full hidden md:flex flex-col justify-end bottom-0 py-20">
            <header class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-10 sm:gap-y-2 mb-8 lg:mb-24">
                <h1 class="page-title font-body text-sm font-normal  text-paradise-pink-50 uppercase tracking-wider"><?php the_title(); ?></h1>
                <h3 class="page-headline col-span-1 sm:col-span-3 text-5xl sm:text-7xl font-title font-normal text-white max-w-sm">
                    <?php echo $headline; ?>
                </h3>
            </header>
        </div>

    </div>
    <!-- <video autoplay="" loop="" muted="" playsinline="" class="w-full h-full" poster="https://www.thenautilusmaldives.com/wp-content/uploads/2021/03/ocean-house-with-private-pool-header.jpg">
    <source data-src="https://www.thenautilusmaldives.com/wp-content/themes/nautilustheme/videos/ocean-house-with-private-Pool.mp4" type="video/mp4" src="https://www.thenautilusmaldives.com/wp-content/themes/nautilustheme/videos/ocean-house-with-private-Pool.mp4">
    Your browser does not support this video.
</video> -->

</div>