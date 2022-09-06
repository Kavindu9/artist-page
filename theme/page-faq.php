<?php 
/* 
    Template Name: FAQs
*/ ?>
<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php

$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );
$hero_image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'hero_image_id', 1 ), "full", "", array( "class" => "w-full h-full aspect-[16/12] object-cover  md:aspect-[16/7]" ) );


$button_text = get_post_meta( get_the_ID(), 'button_text', true );
$button_url = get_post_meta( get_the_ID(), 'button_url', true );
$headline = get_post_meta( get_the_ID(), 'headline', true );


$faqs = get_post_meta( get_the_ID(), 'faq_group', true );

?>


<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>

<article class="py-20 lg:py-36">
    <main class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-10 sm:gap-y-2 mb-24">
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

        <div class="col-span-1 md:col-span-2 md:col-start-2">
            <div class="page-entry prose mb-6">
                <?php the_content(); ?>
            </div>



            <?php if($button_text) { ?>
            <div class="page-action line-button group ">
                <a href="<?php echo $button_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150"><?php echo $button_text; ?></a>
                <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                    <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                </span>
            </div>
            <?php } ?>


            <?php if($faqs) { ?>
            <div class="page-listings faq-section space-y-3 mt-8">

                <?php
            
            foreach ( (array) $faqs as $key => $faq ) {

                $question = $answer = '';
            
                if ( isset( $faq['question'] ) ) {
                    $question = esc_html( $faq['question'] );
                }
            
                if ( isset( $faq['answer'] ) ) {
                    $answer = wpautop( $faq['answer'] );
                } ?>


                <details class="question p-6 bg-white hover:bg-mist-blue-100 transition duration-150 ease-out ">

                    <summary class="flex items-center ">
                        <p class="text-md font-bold text-gray-800 hover:text-sapphire-blue-600 transition-all duration-75 ease-out cursor-pointer"> <?php     echo $question; ?>
                        </p>
                        <button class="ml-auto">


                            <svg class="fill-current text-smoke-white-700 opacity-75 w-4 h-4 -mr-1" xmlns="http://www.w3.org/2000/svg" width="192" height="192" viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <polyline points="96 48 176 128 96 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></polyline>
                            </svg>
                        </button>
                    </summary>

                    <div class="answer mt-3 prose max-w-none ">
                        <?php  echo $answer; ?>
                    </div>
                </details>

                <?php } ?>




            </div>
            <?php } ?>
        </div>
    </main>

</article>


<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>