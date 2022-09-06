<?php 
/* 
    Template Name: Gallery
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

        </div>

    </div>

</article>

<!--##################### Gallery Photos ###############-->
<section>
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-5 lg:grid-cols-5   gap-6 sm:gap-10 sm:gap-y-2 mb-24">


    <style>
        .myImages{
            cursor: pointer;
        }

    /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }
    /* Modal Content (image) */
    .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }
    
    /* Caption of Modal Image */
    #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
    }
    
    /* Add Animation */
    .modal-content, #caption {  
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
    }
    
    @-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
    }
    
    @keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
    }
    
    /* The Close Button */
    .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }
    
    .close:hover,
    .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }
    
    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
    }
    
</style>



    <?php 
        $gallery = get_post_meta( get_the_ID(), 'nova_gal_group', true );

        foreach ( (array) $gallery as $key => $entry ) {

            $img = $caption = '';
        
        
            if ( isset( $entry['artimage_id'] ) ) {
                $img = wp_get_attachment_image( $entry['artimage_id'], 'small', null, array(
                    'class' => 'myImages w-full h-full object-cover object-center',
                ) );
            }
            if ( isset( $entry['cap'] ) ) {
                $caption = wpautop( $entry['cap']);
            }
    ?>

        <div class="grid grid-cols-1 gap-4">
            <div><?php echo $img ?></div>

        </div>
    <?php } ?>

     <!--############## Image View ################ -->
     <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    </div>
</section>

<?php endwhile; ?>
<?php else : ?>
<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>

<?php get_footer(); ?>

<script>
                // create references to the modal...
                var modal = document.getElementById('myModal');
                // to all images -- note I'm using a class!
                var images = document.getElementsByClassName('myImages');
                // the image in the modal
                var modalImg = document.getElementById("img01");


                // Go through all of the images with our custom class
                for (var i = 0; i < images.length; i++) {
                var img = images[i];
                    // and attach our click listener for this image.
                    img.onclick = function(evt) {
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        
                    }
                }

                var span = document.getElementsByClassName("close")[0];

                span.onclick = function() {
                modal.style.display = "none";
                }
</script>

