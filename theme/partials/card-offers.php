<?php

$button_text = get_post_meta( get_the_ID(), 'button_text', true );
$button_url = get_post_meta( get_the_ID(), 'button_url', true );

?>

<div class="item-card flex flex-col">

    <?php if ( has_post_thumbnail() ) { ?>
    <figure class="w-full aspect-[334/384] bg-sapphire-200 overflow-hidden">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'thumbi', array( 'class' => 'scale-100 hover:scale-110 transition h-full w-full object-cover ease-out duration-1000' ) );?>
    </figure>
    </a>
    <?php }    ?>

    <h3 class="text-3xl font-title font-extralight text-paradise-pink-500 max-w-[250px] my-8 mb-4">
        <?php the_title(); ?>
    </h3>
    <div class="prose mb-4 pr-8 ">
        <?php echo wpautop( get_post_meta( get_the_ID(), 'description_short', true ) ); ?>

    </div>


    <div class="actions space-y-2 mt-auto">


        <div class="line-button group">
            <a href="<?php the_permalink(); ?>" class="inline-block text-sm font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150">
                Discover more
            </a>
            <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
            </span>
        </div>

    </div>
</div>
<!-- card -->