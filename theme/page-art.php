<?php 
/* 
    Template Name: Art
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); 



$hero_image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'hero_image_id', 1 ), "full", "", array( "class" => "w-full h-full aspect-[16/12] object-cover  md:aspect-[16/7]" ) );
$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );

$headline = get_post_meta( get_the_ID(), 'headline', true );

$args = array(
	'post_type'              => array( 'art' ),
);
?>

<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>


<article class=" py-20 lg:py-36 lg:pb-20">
    <div class="container px-4 sm:px-10 max-w-screen-lg mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-10 gap-y-6 sm:gap-y-10  lg:items-center">


            <?php 
                $arti = get_post_meta( get_the_ID(), 'nova_arti_group', true );

                foreach ( (array) $arti as $key => $entry ) {

                    $artimg =  '';
                
                    if ( isset( $entry['artimage_id'] ) ) {
                        $artimg = wp_get_attachment_image( $entry['artimage_id'], 'thumbi', null, array(
                            'class' => 'scale-100 hover:scale-110 transition ease-out duration-1000 ',
                        ));
                    }
            
            ?>


        <div class="col-span-1  ">
            <header>
                <h1 class="page-headline text-5xl sm:text-6xl font-title font-extralight text-paradise-pink-500 mb-16 lg:mb-4 max-w-sm">
                    <?php echo $headline; ?>
                </h1>
            </header>
            <main>
                <div class="page-entry prose my-6 lg:my-10">
                    <?php the_content();; ?>
                </div>

                <?php } ?>
            </main>

        </div>

        <aside class="col-span-1 ">
            <figure class="w-full aspect-[334/384] bg-sapphire-200 overflow-hidden">
                <?php echo $artimg;?>
            </figure>

        </aside>



            <!--<div class="grid grid-rows-3 grid-flow-col gap-4">
                    <div class="row-span-3">
                        <div class="max-w-screen-md">
                            <figure class="w-full aspect-[334/384] bg-sapphire-200 overflow-hidden">
                                <?php //echo $artimg;?> 
                            </figure>
                        </div>
                    </div>
                        <div class="col-span-2">
                            <h3 class="page-headline col-span-1 sm:col-span-3 text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500 max-w-sm mb-16 lg:mb-4">
                                <?php //echo $headline; ?>
                            </h3>
                        </div>
                        <div class="row-span-2 col-span-2">
                            <div class="page-entry prose mb-6">
                                <?php //the_content(); ?>
                            </div>
                        </div>
                    
                    
            </div>-->
            <?php //} ?>

                

        
    </div>
<article class=" py-20 lg:py-36 lg:pb-20">

        
<article>
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-3   gap-6 sm:gap-10  mb-24">

    <?php 
                $art = get_post_meta( get_the_ID(), 'nova_art_group', true );

                foreach ( (array) $art as $key => $entry ) {

                    $img = $title = '';
                
                    if ( isset( $entry['image_id'] ) ) {
                        $img = wp_get_attachment_image( $entry['image_id'], 'thumbi', null, array(
                            'class' => 'myImages w-full h-full object-cover object-center scale-100 group-hover:scale-110 transition ease-out duration-500',
                            'id' => 'myImg',
                        ));
                    }

                    if ( isset( $entry['title'] ) ) {
                        $title = wpautop( $entry['title'] );
                    }
                
            ?>

            <style>

                
                .myImages {
                    display: block;
                    width: 100%;
                    height: auto;
                    cursor: pointer;
                }
                
                .overlay {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    height: 100%;
                    width: 100%;
                    opacity: 0;
                    transition: .5s ease;
                    background-color: #008CBA;
                }
                
                .cont:hover .overlay {
                    opacity: 0.8;
                }

                .text {
                    color: white;
                    font-size: 20px;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
                    text-align: center;
                    }


            </style>


            <div class="grid  gap-4">
                <div class="swiper-slide">
                    <div class="why-nova-item max-w-screen-md  group">
                        <div class=" relative ">
                            <figure class="cont w-full aspect-[334/384] bg-sapphire-200 overflow-hidden">
                                <?php echo $img; ?> 
                                <div class="overlay">
                                    <div class="text"><?php echo $title; ?> </div>
                                </div>
                            </figure>
                            <!--<div class="overlay">
                                <div class="text"><?php //echo $title; ?> </div>
                            </div>-->
                            
                            

                        </div>
                    </div>
                </div>
                        
            </div>
            <?php } ?>

    </div>

   

</article>

        <!--</div>-->




<?php endwhile; ?>
<?php else : ?>
<article>   


    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>


<?php endif; ?>
<?php get_footer(); ?>