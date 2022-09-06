<?php 
$title = get_post_meta( get_the_ID(), '2_title', true );
$button_url = get_post_meta( get_the_ID(), '2_button_url', true );
$button_text = get_post_meta( get_the_ID(), '2_button', true );

$image1 = wp_get_attachment_image( get_post_meta( get_the_ID(), '2_image_left_id', 1 ), array('480', '460'), "", array( "class" => "w-full h-full object-cover object-center" ) );
$image2 = wp_get_attachment_image( get_post_meta( get_the_ID(), '2_image_right_id', 1 ), array('480', '460'), "", array( "class" => "w-full h-full object-cover object-center" ) );

?>

<section class="sectionExperiences py-8 md:py-20">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-10 sm:gap-y-2 mb-8 md:mb-24">
        <div class="col-span-1 sm:col-span-1 lg:order-2">
            <h3 class="text-5xl sm:text-7xl md:max-w-lg font-title font-extralight text-sapphire-blue-500 mt-0 mb:mt-10 mb-10">
                <?php echo $title; ?>
            </h3>
            <div class="prose mb-6 max-w-md mx-auto">
                <?php echo wpautop( get_post_meta( get_the_ID(), '2_description', true ) ); ?>


            </div>
            <?php if($button_url) { ?>
            <div class="section-action line-button group max-w-md mx-auto">
                <a href="<?php echo $button_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-500 hover:text-paradise-pink-500 transition ease-out duration-150"><?php echo $button_text; ?></a>
                <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-400 overflow-hidden">
                    <span class="absolute inset-0 w-[80px] h-[2px] bg-paradise-pink-500 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                </span>
            </div>
            <?php } ?>
        </div>
        <div class="col-span-1 sm:col-span-1 relative ">
            <div class="photo-visuals flex justify-center pt-8 mb:pt-24">
                <div class="visual-item photo-card-2  inline-block origin-bottom max-w-md relative rotate-0 lg:scale-125 sm:-translate-y-8 sm:translate-x-8   ">
                    <figure class="w-full bg-white pb-8 sm:pb-12 p-3 sm:p-4 aspect-[9/12] relative shadow-effect-2 shadow-sm">
                        <?php echo $image1; ?>
                    </figure>
                </div>
                <!-- visual-1 -->

                <div class="visual-item photo-card-3 inline-block origin-bottom max-w-sm relative rotate-0 translate-x-0 sm:translate-x-8 sm:translate-y-36">
                    <figure class="w-full bg-white pb-8 sm:pb-12 p-3 sm:p-4 aspect-square relative shadow-effect-2 shadow-sm">
                        <?php echo $image2; ?>
                    </figure>
                </div>
                <!-- visual-2 -->
            </div>

            <div class="logo-mark-visuals absolute  scale-25 sm:scale-100 left-0 -bottom-24 z-30">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810 810" xml:space="preserve" class="h-16 -mb-6 -translate-x-8 text-sapphire-blue-500">
                    <use xlink:href="#nova-mark" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810 810" xml:space="preserve" class="h-24 text-sapphire-blue-500">
                    <use xlink:href="#nova-mark" />
                </svg>
            </div>
        </div>



    </div>
</section>