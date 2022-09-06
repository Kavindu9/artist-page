<?php 
$title = get_post_meta( get_the_ID(), '4_title', true );
$button_url = get_post_meta( get_the_ID(), '4_button_url', true );
$button_text = get_post_meta( get_the_ID(), '4_button', true );

$image1 = wp_get_attachment_image( get_post_meta( get_the_ID(), '4_image_left_id', 1 ), array('480', '460'), "", array( "class" => "w-full h-full object-cover object-center" ) );
$image2 = wp_get_attachment_image( get_post_meta( get_the_ID(), '4_image_right_id', 1 ), array('480', '460'), "", array( "class" => "w-full h-full object-cover object-center" ) );

?>
<section class="py-8 md:py-20">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-10 sm:gap-y-2 mb-8 md:mb-24">
        <h3 class="col-span-1 sm:col-span-3 text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500 max-w-sm">
            <?php echo $title; ?>
        </h3>
        <div class="col-span-1 md:col-span-2 md:col-start-2">
            <div class="prose mb-6 ">
                <?php echo wpautop( get_post_meta( get_the_ID(), '4_description', true ) ); ?>

            </div>

            <?php if($button_url) { ?>
            <div class="section-action line-button group max-w-md ">
                <a href="<?php echo $button_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-500 hover:text-paradise-pink-500 transition ease-out duration-150"><?php echo $button_text; ?></a>
                <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-400 overflow-hidden">
                    <span class="absolute inset-0 w-[80px] h-[2px] bg-paradise-pink-500 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                </span>
            </div>
            <?php } ?>
        </div>


<!-- *******************TEST***************************
<div class="actions space-y-2 mt-auto">


    <?php if($button_text) { ?>
    <div class="line-button group">
        <a href="<?php echo $button_url; ?>" class="inline-block text-sm font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150">
            <?php echo $button_text; ?>
        </a>
        <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
        </span>
    </div>
    <?php } ?>
</div>-->





        <div class="col-span-1 sm:col-span-3 relative">
            <div class="photo-visuals flex justify-center pt-12 md:pt-24">
                <div class="visual-item inline-block max-w-xl relative -rotate-12 translate-x-4 sm:translate-x-0">
                    <figure class="w-full bg-white pb-8 sm:pb-12 p-3 sm:p-5 aspect-[540/440] shadow-effect shadow-sm relative">
                        <?php echo $image1; ?>
                    </figure>
                </div>
                <!-- visual-1 -->

                <div class="visual-item inline-block max-w-xs relative rotate-12 -translate-x-6 sm:-translate-x-8">
                    <figure class="w-full bg-white pb-8 sm:pb-12 p-3 sm:p-5 aspect-square relative shadow-effect-2 shadow-sm">
                        <?php echo $image2; ?>
                    </figure>
                </div>
                <!-- visual-2 -->
            </div>

            <div class="hidden logo-mark-visuals absolute -right-8 scale-75 sm:scale-100 sm:right-[20%] -bottom-10 z-30">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810 810" xml:space="preserve" class="h-16 -mb-8 text-sapphire-blue-400">
                    <use xlink:href="#nova-mark" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810 810" xml:space="preserve" class="h-48 text-sapphire-blue-500">
                    <use xlink:href="#nova-mark" />
                </svg>
            </div>
        </div>
    </div>
</section>