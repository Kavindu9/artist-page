<?php 
/* 
    Template Name: Villa
*/ ?>
<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>


<?php

$hero_image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'hero_image_id', 1 ), "full", "", array( "class" => "w-full h-full aspect-[16/12] object-cover  md:aspect-[16/7]" ) );
$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );


$button_text = get_post_meta( get_the_ID(), 'button_text', true );
$button_url = get_post_meta( get_the_ID(), 'button_url', true );
$is_modal = get_post_meta( get_the_ID(), 'is_modal', true );

$headline = get_post_meta( get_the_ID(), 'headline', true );

$args = array(
	'post_type'              => array( 'villa' ),
);

$villa = new WP_Query( $args );

?>

<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>

<article class=" py-20 lg:py-36 lg:pb-0">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-10 sm:gap-y-2 mb-24">

        <?php if($hero_check) { ?>
        <div class="mobile-hero block md:hidden ">
            <h3 class="page-title font-body text-sm font-normal font-title  text-paradise-pink-300 uppercase tracking-wider"><?php the_title(); ?></h3>
            <h2 class="page-headline  text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500 max-w-sm ">
                <?php echo $headline; ?>
            </h2>
        </div>
        <?php } else { ?>
            
        <h3 class="page-title font-body text-sm font-normal font-title  text-paradise-pink-300 uppercase tracking-wider" ><?php the_title(); ?></h3>
        <h3 class="page-headline col-span-1 sm:col-span-3 text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500 max-w-sm mb-16 lg:mb-4">
            <?php echo $headline; ?>
        </h3>

        <?php } ?>


        <div class="col-span-1 lg:col-span-3 lg:col-start-1">
            <div class="max-w-screen-md mx-auto">
                <div class="page-entry prose mb-6">
                    <?php the_content(); ?>
                </div>


                <?php if($button_text) { ?>
                <div class="page-action line-button group ">
                    <a <?php if($is_modal === 'on'){ echo "data-fancybox "; echo 'data-type="iframe"';  } ?> href="<?php echo $button_url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150"><?php echo $button_text; ?></a>
                    <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                        <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                    </span>
                </div>
                <?php } ?>

<!-- ############### Adding Multiple Buttons #########################-->

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-1 sm:gap-0">

            <?php 
        $reasons = get_post_meta( get_the_ID(), 'villa_group', true );

        foreach ( (array) $reasons as $key => $entry ) {

            $menu = $url = '';
        
            if ( isset( $entry['menu'] ) ) {
                $menu = wpautop( $entry['menu'] );
            }
        
            if ( isset( $entry['Url'] ) ) {
                $url = esc_html( $entry['Url'] );
            }
            ?>

            <div class="col-span-1 lg:col-span-3 lg:col-start-1">
                <div class="max-w-screen-md mx-auto">
                    <?php if($url) { ?>
                    <div class=" page-action line-button group ">
                        <a  href="<?php  echo $url; ?>" class="inline-block text-base font-bold py-3 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150"><?php echo $menu; ?></a>
                        <span class="block relative w-[80px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                            <span class="absolute inset-0 w-[80px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                        </span>
                    </div>

                    <?php } ?>


                </div>
            </div>

        <?php } ?>

    </div>

<!--################ END ######################-->

            </div>

        </div>

    </div>

</article>


<!--############ Villa Gallery Carousel #############-->
<section>
    <div class="container max-w-none px-4 lg:px-0  mx-auto mb-24">
        <div class="swiper usp-slider relative">
            <div class="swiper-wrapper relative">
                <?php 
        $reasons = get_post_meta( get_the_ID(), 'nova_villas_group', true );

        foreach ( (array) $reasons as $key => $entry ) {

            $img = '';
        
        
            if ( isset( $entry['image_id'] ) ) {
                $img = wp_get_attachment_image( $entry['image_id'], 'large', null, array(
                    'class' => 'w-full h-full object-cover object-center scale-100 group-hover:scale-110 transition ease-out duration-500 ',
                ) );
            } ?>

                <div class="swiper-slide">
                    <div class="why-nova-item max-w-screem-md  group">
                        <div class="relative ">
                            <figure class="overflow-hidden w-full aspect-[720/480] ">
                                <?php echo $img; ?>

                            </figure>
                    
                        </div>

                    </div>

                </div>

                <?php }  ?>


            </div>

            <div class="absolute inset-0 w-full h-full">
                <div class="swiper-arrows relative max-w-none md:max-w-screen-sm xl:max-w-screen-md 2xl:max-w-screen-lg mx-auto w-full aspect-[720/480] md:aspect-[720/380]">
                    <div class="next-arrow group absolute p-4 top-2 lg:top-5 -right-3 lg:-right-2 xl:-right-8 z-20 transition-all duration-150 ease-out">
                        <svg width="99" height="10" viewBox="0 0 99 10" xmlns="http://www.w3.org/2000/svg" class="text-sapphire-blue-500 group-hover:text-sapphire-blue-900">
                            <path d="M93.6245 0.219107L98.61 4.2075C98.8472 4.39035 99 4.67731 99 4.99996C99 5.32262 98.8472 5.60958 98.61 5.79243L93.6245 9.78082C93.1933 10.1258 92.564 10.0559 92.2189 9.62464C91.8739 9.19338 91.9439 8.56409 92.3751 8.21908L95.149 5.99996H1C0.447715 5.99996 0 5.55225 0 4.99996C0 4.44768 0.447715 3.99996 1 3.99996H95.149L92.3751 1.78084C91.9439 1.43584 91.8739 0.806543 92.2189 0.375281C92.564 -0.0559811 93.1933 -0.125903 93.6245 0.219107Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="prev-arrow group absolute p-4 bottom-0 lg:bottom-5 -left-3 lg:-left-2 xl:-left-8 z-20 transition-all duration-150 ease-out">
                        <svg width="99" height="10" viewBox="0 0 99 10" xmlns="http://www.w3.org/2000/svg" class="text-sapphire-blue-500 group-hover:text-sapphire-blue-900">
                            <path d="M5.37549 0.219107L0.389992 4.2075C0.152802 4.39035 0 4.67731 0 4.99996C0 5.32262 0.152809 5.60958 0.390007 5.79243L5.37549 9.78082C5.80675 10.1258 6.43604 10.0559 6.78105 9.62464C7.12606 9.19338 7.05614 8.56409 6.62488 8.21908L3.85098 5.99996H98C98.5523 5.99996 99 5.55225 99 4.99996C99 4.44768 98.5523 3.99996 98 3.99996H3.85098L6.62488 1.78084C7.05614 1.43584 7.12606 0.806543 6.78105 0.375281C6.43604 -0.0559811 5.80675 -0.125903 5.37549 0.219107Z" fill="currentColor" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--########## END #############-->

<!--########### Features ################-->
<article>
    <h3 class="section-title text-4xl text-center font-title  font-extralight mt-8 mb-10">Villas Features</h2>
    <div class="container px-4 sm:px-10 max-w-none xl:max-w-screen-2xl mx-auto space-y-14 py-2 lg:py-14  font-body font-normal flex flex-col items-center">
        <div class="swiper usp-slider relative">
            <div class="swiper-wrapper relative">
                <?php

                $vIcon = get_post_meta( get_the_ID(), 'villas_feature_group', true );

                $che_in = esc_html( get_post_meta( get_the_ID(), 'in', true ) );
                $che_out = esc_html( get_post_meta( get_the_ID(), 'out', true ) );
                $occupen =  esc_html( get_post_meta( get_the_ID(), 'occ', true ) );
                $size =  esc_html( get_post_meta( get_the_ID(), 'size', true ) );

                ?>

        <nav class=" py-8 lg:py-0 text-center space-y-4 ">
            <div class="text-base font-semibold flex flex-col  space-y-6 lg:flex-row lg:items-center lg:justify-center lg:space-y-0 lg:space-x-8 ">
                <div class="flex space-x-2 justify-center items-cente">

                    <figure class="footer-nav-link">
                    <!--<svg class="w-16 h-16  fill-current" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M117.6,330.5c-22.8-11.5-45.4-23.3-67.7-35.1l-1.7-0.9l-0.4-1.9c-0.7-3-1.7-5.9-3-8.6s-3-5.3-4.9-7.7
                                                                                                                    c-1.9-2.4-4.1-4.5-6.5-6.4c-2.4-1.9-5-3.5-7.8-4.7l-15.8-7l17.2-0.8c6.3-0.3,12.6,0.2,18.8,1.6c6.2,1.3,12.2,3.4,17.8,6.2
                                                                                                                    c-3.7-14.3-6.2-28.9-7.6-43.6c-1.4-14.7-1.7-29.5-0.9-44.2l0.2-3.2l3.1-0.6c24.3-4.5,43.5,16.5,57.5,35.3
                                                                                                                    c3.1,4.2,8,11.2,13.7,19.3c18.4,26.2,52.5,74.8,64.2,80.7l0.1,0c34.1,8.8,72.3,15.9,106.8,22.1c-6.7-6.1-13.7-12.3-20.9-18.7
                                                                                                                    c-17.5-15.5-35.5-31.5-53-49L212,248.5l19.2,8.2c56.2,24,96.3,47.5,147.2,77.3l17,9.9c7.8,2.2,39,6.4,78.3,11.7
                                                                                                                    c76.8,10.4,192.8,26.2,244.2,41.9c23.9,7.3,61.9,42.4,72.6,67.1c3.8,8.8,4.3,16.1,1.5,21.8l-1.2,2.4l-2.7-0.2
                                                                                                                    c-101.6-5.7-187.7-20.5-278.8-36.2l-8.5-1.5l-6.7,20.1l-3.8-1.2c-13.4-4.4-26.4-9.9-39-16.4s-24.4-14.1-35.7-22.6l-9.2,15.4
                                                                                                                    l-3-0.8c-11.9-3.3-23.2-7.8-34.1-13.5c-10.9-5.7-21.1-12.5-30.5-20.4C260.5,397.4,187.7,365.8,117.6,330.5z M55.2,289.1
                                                                                                                    c90.3,47.5,183.7,96.5,286,114.7l1.1,0.2l0.8,0.7c8.7,7.4,18,13.7,28,19.2c10,5.4,20.5,9.7,31.4,13l10.7-17.9l3.6,2.8
                                                                                                                    c10.8,8.5,22.3,16,34.4,22.6c12.1,6.6,24.7,12.1,37.7,16.6l6.4-19l15.3,2.6c90,15.5,175,30.1,274.8,35.9
                                                                                                                    c0.4-4.4-0.4-8.6-2.4-12.6c-9.8-22.6-45.7-55.9-67.5-62.6c-50.8-15.5-166.4-31.2-242.9-41.6c-42-5.7-72.4-9.8-80-12.2
                                                                                                                    l-0.5-0.1L374.3,341c-44.1-25.9-80.2-47-125.6-67.8c12.2,11.5,24.5,22.3,36.5,33c11,9.8,21.4,19,31.3,28.2l10,9.4l-20.7-3.8
                                                                                                                    c-36.4-6.6-77.7-14.1-114.3-23.5l-0.6-0.2c-12.2-5.4-39.1-42.7-67.8-83.6c-5.7-8.1-10.5-15-13.6-19.1
                                                                                                                    c-12-16-27.9-33.9-46.4-32.6c-0.7,15.4-0.1,30.8,1.7,46.1c1.8,15.3,4.9,30.4,9.2,45.2l3.2,10.8l-9.3-6.3
                                                                                                                    c-7.9-5.4-16.6-8.9-26.1-10.5c3.3,3.1,6,6.5,8.3,10.4S54.1,284.7,55.2,289.1z"/>
                    </svg>-->
                        
                        <div class="prose display: flex; justify-content: space-between;">

                        <p class="text-sm mb-0  "> <?php echo "CHECK IN :" . $che_in . "&nbsp; |<br>"; ?></p>
                    
                        </div>
                    </figure>

                    <figure class="footer-nav-link">
                    <!--<svg class="w-16 h-16  fill-current" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M147.2,499.5c-23.8,0-47.5-0.4-71-0.9l-1.8,0l-1.1-1.4c-1.8-2.2-3.9-4.2-6.1-5.9c-2.3-1.7-4.7-3.2-7.3-4.4
			c-2.6-1.2-5.3-2-8.1-2.6c-2.8-0.5-5.6-0.8-8.5-0.7l-16,0.8l14-7.8c5.2-2.9,10.6-5.1,16.3-6.6c5.7-1.5,11.5-2.3,17.4-2.3
			c-18.2-20.9-32.8-44-43.8-69.4l-1.2-2.7l2.4-1.8c18.3-13.9,43.1-4.5,62.6,5.3c4.3,2.2,11.4,5.9,19.5,10.3
			c26.3,14.1,74.9,40.2,87.1,40.2h0.1c32-6.9,66.8-17,98.1-26.2c-8.1-2.3-16.5-4.5-25.2-6.8c-21-5.6-42.7-11.3-64.6-18.6l-18.4-6.1
			l19.4-1.2c56.7-3.5,100-0.8,154.7,2.7l18.3,1.2c7.4-1.4,35.1-11,70-22.9c68.2-23.4,171.3-58.8,220.6-67.2
			c22.9-3.9,69.2,9.4,88.4,25.4c6.8,5.7,10.3,11.6,10.4,17.5l0,2.5l-2.3,1c-86.9,37.7-164.6,61.4-246.9,86.4l-7.6,2.3l2.8,19.5
			l-3.7,0.6c-13,2-26.1,2.9-39.3,2.7c-13.2-0.2-26.2-1.5-39.2-3.8l-1.2,16.6l-2.8,0.6c-11.2,2.2-22.6,3.3-34,3.1
			c-11.5-0.2-22.8-1.6-33.9-4.2C294,495.4,220.3,499.5,147.2,499.5z M78.1,491.2c95,1.7,193.1,3.4,285.7-24.2l1-0.3l1,0.2
			c10.3,2.5,20.7,3.9,31.3,4.2c10.6,0.3,21.1-0.5,31.5-2.3l1.4-19.4l4.2,0.8c12.6,2.5,25.2,4,38.1,4.4c12.8,0.4,25.6-0.2,38.3-2
			l-2.6-18.4l13.8-4.2c81.3-24.7,158.1-48.1,243.5-85c-1.5-3.8-4-7-7.3-9.4c-17.6-14.7-61.4-27.3-82.3-23.8
			c-48.7,8.3-151.4,43.6-219.4,67c-37.3,12.8-64.3,22.1-71.6,23.3l-0.4,0.1L365,401c-47.5-3-86.3-5.5-132.8-3.8
			c14.9,4.4,29.7,8.3,44.1,12.2c13.2,3.5,25.7,6.8,37.9,10.4l12.3,3.6l-18.8,5.5c-33,9.7-70.4,20.8-104.9,28.2l-0.6,0.1
			c-12.5,0.6-50.4-19.1-91.3-41.1c-8.1-4.3-15-8.1-19.3-10.2c-16.7-8.3-37.3-16.5-52.2-7.7c5.9,13.1,12.8,25.6,20.7,37.6
			c7.9,12,16.8,23.2,26.6,33.7l7.1,7.7l-10.4-1.4c-8.8-1.1-17.5-0.4-26.1,2.2c4,1.2,7.8,2.9,11.3,5.1
			C72.2,485.4,75.3,488.1,78.1,491.2z"/>
                    </svg>-->
                        
                        <div class="prose display: flex; justify-content: space-between;">

                        <p class="text-sm mb-0  "><?php echo "CHECK OUT :" . $che_out . "&nbsp; |<br>"; ?></p>
                    
                        </div>
                    </figure>

                    <figure class="footer-nav-link">
                    <!--<svg class="w-16 h-16  fill-current" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <style type="text/css">
	.st0{fill:none;stroke:#000000;stroke-width:4;stroke-miterlimit:10;}
</style>
<path class="st0" d="M184,88c0,30.9-25.1,56-56,56c-30.9,0-56-25.1-56-56c0-30.9,25.1-56,56-56C158.9,32,184,57.1,184,88z
	 M208.4,196.3C178.7,222.7,160,261.2,160,304c0,34.3,11.1,65.8,32,90.5V416c0,17.7-14.3,32-32,32H96c-17.7,0-32-14.3-32-32v-26.8
	C26.2,371.2,0,332.7,0,288c0-61.9,50.1-112,112-112h32C167.1,176,190.2,183.5,208.4,196.3L208.4,196.3z M64,245.7
	c-10,11.2-16,26.1-16,42.3s6,31.1,16,42.3V245.7z M448,416v-21.5c20-24.7,32-56.2,32-90.5c0-42.8-18.7-81.3-48.4-107.7
	C449.8,183.5,472,176,496,176h32c61.9,0,112,50.1,112,112c0,44.7-26.2,83.2-64,101.2V416c0,17.7-14.3,32-32,32h-64
	C462.3,448,448,433.7,448,416z M576,330.3c9.1-11.2,16-26.1,16-42.3s-6.9-31.1-16-42.3V330.3z M568,88c0,30.9-25.1,56-56,56
	s-56-25.1-56-56c0-30.9,25.1-56,56-56S568,57.1,568,88z M256,96c0-35.3,28.7-64,64-64s64,28.7,64,64c0,35.3-28.7,64-64,64
	S256,131.3,256,96z M448,304c0,44.7-26.2,83.2-64,101.2V448c0,17.7-14.3,32-32,32h-64c-17.7,0-32-14.3-32-32v-42.8
	c-37.8-18-64-56.5-64-101.2c0-61.9,50.1-112,112-112h32C397.9,192,448,242.1,448,304z M256,346.3v-84.6c-10,11.2-16,26.1-16,42.3
	S246,335.1,256,346.3z M384,261.7v84.6c9.1-11.3,16-26.1,16-42.3S393.1,272.9,384,261.7z"/>

                    </svg>-->
                        
                        <div class="prose display: flex; justify-content: space-between;">

                        <p class="text-sm mb-0  "><?php echo "MAX OCCUPANCY :" . $occupen . "&nbsp; |<br>"; ?></p>
                    
                        </div>
                    </figure>

                    <figure class="footer-nav-link">
                    <!--<svg class="w-16 h-16  fill-current" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="st0" d="M444,318.5v133c0,13-10.6,22.7-22.7,22.7h-133c-12.7,0-24.2-7.7-29.1-19.4c-4.8-10.9-2.2-25.3,6.8-34.3
                l29.6-29.6l-71.2-67.6l-70.3,70.3l29.6,29.6c9,9,11.7,22.5,6.8,34.3c-4.9,11.7-16.4,18.5-29.1,18.5H27.6c-13,0-22.7-10.6-22.7-22.7
                v-133c0-12.7,7.7-24.2,19.4-29.1c3-2.5,7.1-3.3,11.2-3.3c8.2,0,16.2,3.2,22.3,9.2l29.6,29.6l70.3-70.3l-70.3-70.3l-29.6,29.5
                c-9,9-22.5,11.7-34.3,6.8C11.7,217.7,4,206.1,4,192.6v-133c0-13,10.6-22.7,22.7-22.7h133c12.7,0,24.2,7.7,29.1,19.4
                c3.4,3,3.3,7.1,3.3,10.3c0,8.2-3.2,16.2-9.2,22.3l-28.7,30.5l70.3,70.3l70.3-70.3l-29.6-29.6c-9-9-11.7-22.5-6.8-34.3
                c4.9-11.8,16.4-19.4,29.1-19.4h133c13,0,22.7,10.6,22.7,22.7v133c0,12.7-7.7,24.2-19.4,29.1c-10.9,4.8-25.3,2.2-34.3-6.8l-29.6-29.6
                l-70.3,70.3l70.3,70.3l29.6-29.6c9-9,22.5-11.7,34.3-6.8C437.2,295.2,444,306.7,444,318.5z"/>

                    </svg>-->
                        
                        <div class="prose display: flex; justify-content: space-between;">

                        <p class="text-sm mb-0  "><?php echo "SIZE : " . $size . "&nbsp; <br>"; ?></p>
                    
                        </div>
                    </figure>

                </div>

                
 
            </div>

            <div>
        </div>
    </div>



</article>

<!--############# END #####################-->

<section class="bg-sapphire-blue-100 py-8">

<?php

$villadet = get_post_meta( get_the_ID(), 'villas_details_group', true );

?>

<div class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-10 gap-y-6 sm:gap-y-10 ">
        <div class="col-span-1 lg:col-span-2 ">
            <div class="pt-3 prose">
                    <h2 class=" font-title font-bold text-xl text-sapphire-blue-500 mb-4 "><?php echo wpautop( get_post_meta( get_the_ID(), 'title', true ) ); ?></h2>
            </div>
            <div class="page-entry prose my-6 lg:my-10 l1">
                
                <style>.l1 {-webkit-column-count: 2;-moz-column-count: 2;column-count: 2;}</style>
            <?php echo wpautop( get_post_meta( get_the_ID(), 'feature', true ) ); ?>
            </div>

        </div>
        <div class="col-span-1 space-y-12 ">
            <div class="p-0">
                <div class="page-entry prose my-6 mb-0">
                    <?php get_template_part( 'partials/aside-perks' ); ?>
                </div>
            </div>
        </div>


</div>

</section>

<section class="py-20">
<!--******************Carousel Starts Here****************** -->
<h3 class="section-title text-4xl text-center font-title  font-extralight mt-8 mb-10">More Villas</h3>
<div class="offers-carousel container px-4 sm:px-10 max-w-screen-xl mx-auto relative">
        <div class="swiper swiper-x">
            <div class="swiper-wrapper">
                <?php while ( $villa->have_posts() ) {
		$villa->the_post(); ?>
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

    <!--############# END #################-->
</section>



<?php endwhile; ?>
<?php else : ?>
<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?><br>

<?php get_footer(); ?>