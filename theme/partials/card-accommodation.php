<?php

$booking_url = get_post_meta( get_the_ID(), 'booking_url', true );
$download_url = get_post_meta( get_the_ID(), 'button_url', true );
$terms = get_the_terms( get_the_ID() , 'category' ); 
$details = get_post_meta( get_the_ID(), 'more', true );

?>

<div <?php post_class("item-card flex flex-col"); ?>>

    <?php if ( has_post_thumbnail() ) { ?>


    <figure class="w-full aspect-[334/384] bg-sapphire-200 overflow-hidden">
        <?php the_post_thumbnail( 'thumbi', array( 'class' => 'scale-100 hover:scale-110 w-full h-full object-cover transition ease-out duration-1000' ) );?> </figure>

    <?php }    ?>
    <h3 class="text-3xl font-title font-extralight text-paradise-pink-500 max-w-[250px] my-8 mb-6">
        <?php the_title(); ?>
    </h3>
    <div class="prose  pr-8 mb-8">
        <?php echo wpautop( get_post_meta( get_the_ID(), 'description', true ) ); ?>

    </div>


    <div class="actions space-y-2 mt-auto">
        <?php if($booking_url) { ?>
        <div class="line-button group">
            <a target="_blank" href="<?php echo $booking_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150">Book Now</a>
            <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
            </span>
        </div>
        <?php } ?>

        <?php if($download_url) { ?>
        <div class="line-button group">
            <a data-fancybox data-type="iframe" href="<?php echo $download_url; ?>" class="inline-block text-sm font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150">
                Download Floor Plan
            </a>
            <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
            </span>
        </div>
        <?php } ?>

        <?php if($details) { ?>
        <div class="line-button group">
            <a traget="_blank" href="<?php echo $details; ?>" class="inline-block text-sm font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150">
                Learn More
            </a>
            <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
            </span>
        </div>
        <?php } ?>
    </div>
</div>
<!-- card -->