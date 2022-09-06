<?php 
$title = get_post_meta( get_the_ID(), '6_title', true );
$button1_url = get_post_meta( get_the_ID(), '6_button1_url', true );
$button1_text = get_post_meta( get_the_ID(), '6_button1', true );

$button2_url = get_post_meta( get_the_ID(), '6_button2_url', true );
$button2_text = get_post_meta( get_the_ID(), '6_button2', true );

$image = wp_get_attachment_image( get_post_meta( get_the_ID(), '6_image_id', 1 ), array('480', '460'), "", array( "class" => "aspect-[3/4] h-full w-full object-cover mx-auto" ) );

?>

<section class="py-8 md:py-20 relative overflow-hidden">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto mb-12 md:mb-24">
        <h3 class="text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500 max-w-md">
            <?php echo $title; ?>
        </h3>

        <div class="logo-mark-visuals hidden md:inline-block absolute -right-8 scale-50 md:scale-100 sm:right-1/4 top-16 z-30">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810 810" xml:space="preserve" class="h-24 -mb-16 text-mist-blue-400">
                <use xlink:href="#nova-mark" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810 810" xml:space="preserve" class="h-56 text-mist-blue-500">
                <use xlink:href="#nova-mark" />
            </svg>
        </div>
    </div>

    <div class="container grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-10 px-4 sm:px-10 max-w-screen-lg mx-auto mb-8 md:mb-24">
        <div class="text-entry">
            <div class="prose mb-6 max-w-md">
                <?php echo wpautop( get_post_meta( get_the_ID(), '6_description', true ) ); ?>

            </div>
            <div class="actions space-y-2">
                <?php if($button1_url) { ?>
                <div class="section-action line-button group max-w-md ">
                    <a href="<?php echo $button1_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-500 hover:text-paradise-pink-500 transition ease-out duration-150"><?php echo $button1_text; ?></a>
                    <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-400 overflow-hidden">
                        <span class="absolute inset-0 w-[80px] h-[2px] bg-paradise-pink-500 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                    </span>
                </div>
                <?php } ?>
                <?php if($button2_url) { ?>
                <div class="section-action line-button group max-w-md ">
                    <a href="<?php echo $button2_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-500 hover:text-paradise-pink-500 transition ease-out duration-150"><?php echo $button2_text; ?></a>
                    <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-400 overflow-hidden">
                        <span class="absolute inset-0 w-[80px] h-[2px] bg-paradise-pink-500 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                    </span>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="visual relative">
            <?php echo $image; ?>
        </div>
    </div>
</section>