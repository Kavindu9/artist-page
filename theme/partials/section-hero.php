<?php 

$hero_image_desktop = get_post_meta( get_the_ID(), 'site_hero', true );
$hero_image_mobile = get_post_meta( get_the_ID(), 'site_hero_mobile', true );

 $hero_image = $hero_image_desktop;

 if ( wp_is_mobile() ) {
    $hero_image = $hero_image_mobile;
}

?>
<div class="hero-wrap relative h-screen ">
    <div class="hero w-full h-screen overflow-hidden bg-cover" style="background-image: url('<?php echo $hero_image; ?>')">
        <div class="nova-branding container max-w-screen-xl h-5/6 grid place-items-center  mx-auto my-auto px-4 sm:px-2 pt-24">
            <svg class="nova-branding--logo w-64 mx-auto text-sapphire-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 426 205" xml:space="preserve">
                <use xlink:href="#nova-logo" />
            </svg>
        </div>


    </div>
</div>