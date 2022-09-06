<?php 
$title = get_post_meta( get_the_ID(), '1_title', true );
$button_url = get_post_meta( get_the_ID(), '1_button_url', true );
$button_text = get_post_meta( get_the_ID(), '1_button', true );

$image = wp_get_attachment_image( get_post_meta( get_the_ID(), '1_image_id', 1 ), array('480', '460'), "", array( "class" => "w-full h-full object-cover object-center" ) );

?>

<section class="sectionOne py-8 md:py-20">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto block md:grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-10 sm:gap-y-2 mb-0 md:mb-24">
        <div class="col-span-1 sm:col-span-1">
            <h2 class="section-title text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500 my-10">
                <?php echo $title; ?>
            </h2>
            <div class="section-entry prose mb-6 max-w-md mx-auto">
                <?php echo wpautop( get_post_meta( get_the_ID(), '1_description', true ) ); ?>

            </div>
            <?php if($button_url) { ?>
            <div class="section-action line-button group max-w-md mx-auto">
                <a target="_blank" href="<?php echo $button_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-500 hover:text-paradise-pink-500 transition ease-out duration-150"><?php echo $button_text; ?></a>
                <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-400 overflow-hidden">
                    <span class="absolute inset-0 w-[80px] h-[2px] bg-paradise-pink-500 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                </span>
            </div>
            <?php } ?>
        </div>

        <div class="col-span-1 sm:col-span-1 relative">
            <div class="photo-visuals flex justify-center pt-10 md:pt-24">
                <div class="visual-item photo-card-1 inline-block max-w-md relative rotate-0 translate-x-6 -translate-y-6 sm:-translate-y-8 scale-75 lg:scale-100">
                    <figure class="w-full bg-white pb-8 sm:pb-12 p-3 sm:p-5 aspect-square relative shadow-effect-2 shadow-sm">
                        <?php echo $image; ?>
                    </figure>
                </div>
                <!-- visual-2 -->
            </div>

            <div class="logo-mark-visuals absolute -left-8 scale-75 sm:scale-100 sm:left-[5%] bottom-4 z-30">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810 810" xml:space="preserve" class="h-16 -mb-8 text-paradise-pink-400">
                    <use xlink:href="#nova-mark" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810 810" xml:space="preserve" class="h-44 text-paradise-pink-500">
                    <use xlink:href="#nova-mark" />
                </svg>
            </div>
        </div>
    </div>
</section>