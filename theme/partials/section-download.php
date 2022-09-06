<?php
    $section = get_post_meta( get_the_ID(), 'download_group', true );


?>



<div class="download-section">
    <h2 class="font-title text-2xl font-bold my-4 md:my-8 text-smoke-white-900"><?php the_title(); ?></h2>

    <?php if($section) { ?>
    <div class="files-grid grid grid-cols-2 gap-x-5 md:gap-x-10 gap-y-5">


        <?php
            
            foreach ( (array) $section as $key => $item ) {

                $preview = $name = $file  = '';

                if ( isset( $item['name'] ) ) {
                    $name = esc_html( $item['name'] );
                }

                if ( isset( $item['file'] ) ) {
                    $file_url = esc_html( $item['file'] );
                }

                if ( isset( $item['preview_id'] ) ) {
                    $preview = wp_get_attachment_image( $item['preview_id'], array('300', '300'), null, array(
                        'class' => 'h-full w-full object-cover opacity-100 scale-100 group-hover:scale-105 transition-all duration-500 ease-in-out',
                    ) );
                }   
             ?>





        <div class="download-item relative group ">
            <figure class="block w-full md:w-40 h-40 bg-smoke-white-600/30 overflow-hidden">
                <?php echo $preview; ?>
            </figure>

            <div class="lg:absolute top-0 left-32 right-0 h-full w-full md:w-54 flex flex-col  md:justify-center">
                <div class="bg-mist-blue-500 group-hover:bg-mist-blue-400 px-5 md:px-6 py-5 transition-all duration-500 ease-in-out">
                    <h4 class="text-sm tracking-wider uppercase text-mist-blue-900"><?php echo $name; ?></h4>

                    <div class=" line-button group ">
                        <a data-fancybox data-type="iframe" href="<?php echo $file_url; ?>" class="inline-block text-sm font-bold py-3 pb-1.5 text-sapphire-blue-900 hover:text-sapphire-blue-500 transition ease-out duration-150">Download</a>
                        <span class="block relative w-[68px] h-[2px] bg-sapphire-blue-900 overflow-hidden">
                            <span class="absolute inset-0 w-[68px] h-[2px] bg-sapphire-blue-400 -translate-x-[80px] group-hover:animate-draw-line overflow-hidden transition duration-150 ease-out"></span>
                        </span>
                    </div>

                </div>

            </div>
        </div>
        <?php } ?>

    </div>


    <?php } ?>







</div>