<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.css">
        <?php wp_head(); ?>
        <style>
        [x-cloak] {
            display: none
        }

        .fancybox__content {
            padding: 0;
            background: black;
        }

        .fancybox__backdrop {
            background: rgba(120, 120, 120, .4);
        }

        .carousel__button.is-close {
            background: rgba(120, 120, 120, .8);
            padding: 2px;
            box-shadow: none;
        }

        .carousel__button.is-close svg {
            width: 16px;
            box-shadow: none;
        }

        .flatpickr-day.today {
            border-color: #f7ba40;
        }

        .flatpickr-day.today:hover,
        .flatpickr-day.today:focus {
            background-color: #f7ba40;
        }

        .flatpickr-day.selected,
        .flatpickr-day.startRange,
        .flatpickr-day.endRange,
        .flatpickr-day.selected.inRange,
        .flatpickr-day.startRange.inRange,
        .flatpickr-day.endRange.inRange,
        .flatpickr-day.selected:focus,
        .flatpickr-day.startRange:focus,
        .flatpickr-day.endRange:focus,
        .flatpickr-day.selected:hover,
        .flatpickr-day.startRange:hover,
        .flatpickr-day.endRange:hover,
        .flatpickr-day.selected.prevMonthDay,
        .flatpickr-day.startRange.prevMonthDay,
        .flatpickr-day.endRange.prevMonthDay,
        .flatpickr-day.selected.nextMonthDay,
        .flatpickr-day.startRange.nextMonthDay,
        .flatpickr-day.endRange.nextMonthDay {
            background: #da5262;
            border-color: #da5262;
        }

        .flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)),
        .flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)),
        .flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)) {
            box-shadow: -10px 0 0 #da5262;
        }

        .flatpickr-day.inRange,
        .flatpickr-day.prevMonthDay.inRange,
        .flatpickr-day.nextMonthDay.inRange,
        .flatpickr-day.today.inRange,
        .flatpickr-day.prevMonthDay.today.inRange,
        .flatpickr-day.nextMonthDay.today.inRange,
        .flatpickr-day:hover,
        .flatpickr-day.prevMonthDay:hover,
        .flatpickr-day.nextMonthDay:hover,
        .flatpickr-day:focus,
        .flatpickr-day.prevMonthDay:focus,
        .flatpickr-day.nextMonthDay:focus {
            background: #f6d4d8;
            border-color: #f6d4d8;
        }

        .flatpickr-day.inRange {
            box-shadow: -5px 0 0 #f6d4d8, 5px 0 0 #f6d4d8;
        }

        .flatpickr-current-month input.cur-year,
        .flatpickr-current-month .flatpickr-monthDropdown-months {
            font-weight: normal;
            font-size: 14px;
        }

        .flatpickr-current-month span.cur-month {
            font-weight: normal;
        }

        .flatpickr-calendar {
            background: #f5f5f5;
        }

        .flatpickr-day.hidden {
            display: inline-block !important;
        }
        </style>


    </head>

    <body <?php body_class( 'subpixel-antialiased font-body font-extralight bg-smoke-white-500 relative' ); ?>>
        <div>
            <header id="global-header" class="site-header absolute  w-full top-0  z-30 lg:py-4 bg-opacity-80 transition-all transform ease-out duration-500 ">
                <div class="container px-4 sm:px-10 max-w-none xl:max-w-screen-2xl mx-auto py-2 lg:py-4 flex flex-col lg:flex-row items-center font-body font-bold text-sapphire-blue-500">


                    <div class="w-full lg:w-auto text-right uppercase lg:order-3   flex pb-2 justify-between lg:justify-end items-center">
                        <div class=" lg:hidden  relative">
                            <button class="mobile-menu-btn h-[32px]   group text-sapphire-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-hamburger absolute top-0  transform w-8 h-8 text-sapphire-blue-500 transition-all ease-in duration-300" viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none"></rect>
                                    <line x1="40" y1="128" x2="216" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line>
                                    <line x1="40" y1="64" x2="216" y2="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line>
                                    <line x1="40" y1="192" x2="216" y2="192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-close absolute  top-0 transform invisible opacity-0 -rotate-45  w-8 h-8 text-sapphire-blue-500 transition-all ease-out duration-500 " viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none"></rect>
                                    <line x1="200" y1="56" x2="56" y2="200" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line>
                                    <line x1="200" y1="200" x2="56" y2="56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line>
                                </svg>
                            </button>
                        </div>
                        <button type="button" id="book-now" class="inline-flex z-20 font-bold uppercase hover:cursor-pointer items-center justify-center pb-2 pt-3 md:pb-3 md:pt-4 px-4 md:px-8 text-base text-white bg-sunset-yellow-500 hover:bg-paradise-pink-500 hover:text-white rounded-full transition duration-150 ease-out">
                            <span class="text-sm  tracking-wider  hover:cursor-pointer">Book Now</span>
                        </button>
                    </div>

                    <div class="global-nav flex-1 hidden  w-full   lg:block col-span-3 lg:order-1 lg:col-span-1 border-t border-sapphire-blue-200 lg:border-t-0">
                        <nav class="  py-8 lg:py-0 text-center text-base lg:text-left ">
                            <ul class="flex flex-col space-y-6 lg:flex-row lg:items-center lg:space-y-0 lg:space-x-8">
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-sapphire-blue-400 inline-block h-10 transition duration-150 ease-out p-1">

                                        <span class="home-text">Home</span>


                                        <svg class="home-star hidden w-10 h-10" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M28.5728 19.042C28.1432 18.8494 27.679 18.716 27.2148 18.6272C24.2173 18.0642 22.4099 16.8839 21.7383 14.1481C21.195 11.9358 20.7407 9.70864 20.2667 7.48642C20.0642 6.52839 19.9407 5.55555 19.7234 4.60247C19.679 4.39012 19.5852 4.05432 19.2444 4.03951C18.9432 4.04938 18.8395 4.35555 18.716 4.56296C18.6123 4.74568 18.6123 4.98765 18.5926 5.20494C18.4642 6.5679 18.3457 7.93086 18.2173 9.29383C17.9802 11.7975 17.8025 14.3111 16.642 16.642C15.8271 18.2716 14.6617 19.5259 12.9481 20.2914C12.3753 20.5481 11.8025 20.8148 11.2395 21.1012C10.8148 21.3185 10.6025 21.6988 10.9876 21.9309C11.4518 22.2074 12.1531 22.4198 12.6815 22.5284C13.5457 22.7062 14.4494 22.7358 15.3185 22.8889C16.6469 23.121 17.6988 23.8074 18.242 25.0074C18.642 25.8963 18.9234 26.8444 19.1407 27.7926C19.6296 29.916 19.995 32.0642 20.5234 34.1778C20.6864 34.8988 21.1555 35.2642 21.5605 35.7481C21.8568 36.1037 22.2469 35.9852 22.4 35.5901C22.6025 35.0469 22.8395 34.4642 22.8247 33.9062C22.7802 32.5136 22.5926 31.1309 22.479 29.7432C22.3753 28.4988 22.2173 27.2593 22.2271 26.0148C22.242 23.5111 23.2049 22.2568 25.6543 21.3975C26.4395 21.121 27.279 20.9778 28.0444 20.6667C28.4642 20.4988 29.2197 20.0889 29.2197 19.758C29.2444 19.3185 28.7901 19.1358 28.5728 19.042ZM23.4518 20.0494C21.916 21.0716 21.3383 22.6025 20.9432 24.2519C20.8889 24.4839 20.7901 24.9728 20.5926 25.0025C20.3308 25.1012 20.0395 24.6123 19.8469 24.4247C18.9234 22.6272 18.395 21.6494 16.1827 20.8346C15.7629 20.6815 15.8271 20.2963 16.1432 19.9753C17.4963 18.5778 18.5037 16.9926 18.9679 15.1111C19.0123 14.9284 19.2099 14.6222 19.3432 14.6173C19.521 14.6025 19.7086 14.8741 19.7827 15.0469C20.5432 16.7802 21.6741 18.2074 23.3728 19.1852C23.7876 19.4272 23.9012 19.7531 23.4518 20.0494Z" fill="currentColor" />
                                        </svg>



                                    </a>



                                </li>

                                <li><a href="<?php echo esc_url(home_url('/accommodation')); ?>" class="menu-item-link">Villas
                                    </a>
                                </li>
                                <li><a href="<?php echo esc_url(home_url('/dining')); ?>" class="menu-item-link">Eat & Drink
                                    </a>
                                </li>



                                <li class="group  relative dropdown  cursor-pointer ">
                                    <a href="<?php echo esc_url(home_url('/things-to-do')); ?>" class="menu-item-link inline-flex items-center ">Experiences </a>
                                    <div class="lg:hidden lg:group-hover:block dropdown-menu lg:absolute -left-2   h-auto text-smoke-white-900">
                                        <?php if (wp_is_mobile() ) { ?>
                                        <button id="slide-toggle" class="absolute w-6 h-6 p-1 top-0 right-0 ">
                                            <svg class=" w-5 h-5 text-current" xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 256 256">

                                                <rect width="256" height="256" fill="none"></rect>
                                                <line x1="40" y1="128" x2="216" y2="128" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"></line>
                                                <line x1="128" y1="40" x2="128" y2="216" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"></line>
                                            </svg>

                                        </button>
                                        <?php } ?>

                                        <div class="dropdown-menu-wrap  flex flex-col lg:w-48 lg:bg-white rounded-lg mt-2 space-y-2  px-4 py-2 lg:py-4 pb-0 lg:pb-4 font-normal ">
                                            <a href="<?php echo esc_url(home_url('/spa')); ?>" class=" hover:text-paradise-pink-500 transition duration-150 ease-out p-1">Wellness</a>
                                            <a href="<?php echo esc_url(home_url('/aquaholics')); ?>" class=" hover:text-paradise-pink-500 transition duration-150 ease-out p-1">Aquaholics</a>
                                            <a href="<?php echo esc_url(home_url('/things-to-do/maldives-weddings/')); ?>" class=" hover:text-paradise-pink-500 transition duration-150 ease-out p-1">Weddings</a>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="menu-item-link">About
                                    </a>
                                </li>
                                <li><a href="<?php echo esc_url(home_url('/special-offers')); ?>" class="menu-item-link">Offers
                                    </a>
                                </li>
                                <!-- <a href="<?php echo esc_url(home_url('/faq')); ?>" class="menu-item-link">FAQs
                        </a> -->
                            </ul>

                        </nav>
                    </div>
                </div>
            </header>