<!-- This example requires Tailwind CSS v2.0+ -->
<div id="booking-mask" class="hidden relative z-30" aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div class="fixed inset-0  transition-opacity "></div>

    <div class="fixed z-40 inset-0 overflow-y-auto">
        <div class="flex items-end sm:items-center justify-end min-h-screen  sm:p-0">

            <div class="booking-mask--content relative bg-white h-screen overflow-y-auto max-w-[375px] px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all duration-150 fade-in-down">
                <div class="">
                    <button type="button" class="modal-close rounded-full p-2 bg-white text-smoke-white-700 hover:text-smoke-white-900 focus:outline-none focus:ring-2 focus:ring-sapphire-blue-300 focus:ring-offset-2 absolute right-4">
                        <span class="sr-only">Close panel</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </button>
                    <header class="text-center mb-4">
                        <h1 class="  text-4xl  sm:text-5xl font-title font-extralight text-paradise-pink-500  mb-2 lg:mb-4">
                            Stay with us
                        </h1>
                        <h3 class="text-base text-smoke-white-900 px-8"> We guarantee you have the best rate by booking your stay directly with us.</h3>
                    </header>
                    <main class="px-4">
                        <form action="https://be.synxis.com/?chain=28430&hotel=35936" target="_blank" method="POST">
                            <div class="grid grid-cols-2  gap-x-6 gap-y-2">

                                <div class="block col-span-2 ">
                                    <label for="travelDates" class="text-smoke-white-900 uppercase text-xs tracking-wider inline-block">Check-in &bull; Check-out</label>

                                    <div class="flex">
                                        <input id="travelDates" type="text" class=" block w-full p-1 border-0 border-b border-sapphire-blue-900/25 focus:border-paradise-pink-500 focus:ring-0 text-sapphire-blue-900 font-bold">
                                    </div>

                                </div>

                                <div class=" col-span-2 hidden">

                                    <div class="flex gap-4">

                                        <input id="arrive" name="arrive" type="hidden" class="block w-full p-1 border-0 border-b border-sapphire-blue-900/25 focus:border-paradise-pink-500 focus:ring-0 text-sapphire-blue-900 font-bold" value="06/20/22">
                                        <input id="depart" name="depart" type="hidden" class="block w-full p-1 border-0 border-b border-sapphire-blue-900/25 focus:border-paradise-pink-500 focus:ring-0  text-sapphire-blue-900 font-bold" value="06/25/22">

                                    </div>

                                </div>


                                <label class="block">
                                    <span class="text-smoke-white-900 uppercase text-xs tracking-wider inline-block">Rooms</span>
                                    <select id="Rooms" name="Rooms" class=" block w-full p-1 border-0 border-b border-sapphire-blue-900/25 focus:border-paradise-pink-500 focus:ring-0  text-sapphire-blue-900 font-bold">
                                        <option selected>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select> </label>
                                <label class="block">
                                    <span class="text-smoke-white-900 uppercase text-xs tracking-wider inline-block"> Adults</span>
                                    <select id="Adult" name="Adult" class=" block w-full p-1 border-0 border-b border-sapphire-blue-900/25 focus:border-paradise-pink-500 focus:ring-0  text-sapphire-blue-900 font-bold">
                                        <option>1</option>
                                        <option selected>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select> </label>

                                <label class="block">
                                    <span class="text-smoke-white-900 uppercase text-xs tracking-wider inline-block"> Children (2-11.9y)</span>
                                    <select id="Child" name="Child" class=" block w-full p-1 border-0 border-b border-sapphire-blue-900/25 focus:border-paradise-pink-500 focus:ring-0  text-sapphire-blue-900 font-bold">
                                        <option selected>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select> </label>
                                <label class="block">
                                    <span class="text-smoke-white-900 uppercase text-xs tracking-wider inline-block">Promo code</span>
                                    <input id="Promo" name="Promo" type="text" class=" block w-full p-1 border-0 border-b border-sapphire-blue-900/25 focus:border-paradise-pink-500 focus:ring-0 text-sapphire-blue-900 font-bold">
                                </label>

                                <div class="col-span-2 mt-3">
                                    <button class="bg-sunset-yellow-500 hover:bg-paradise-pink-500 font-bold text-white rounded-full w-full p-4 pt-3.5 pb-2.5">Book Now</button>
                                </div>
                            </div>
                        </form>

                        <div class="book-direct space-y-2 mt-4">
                            <h3 class="font-title text-xl text-sapphire-blue-500 ">Why book direct?</h3>
                            <p class="uppercase text-sapphire-blue-900 text-xs tracking-wider font-semibold"> Take advantage of these exclusive benefits:
                            </p>

                            <ul class="text-sm list-disc ml-3 space-y-1  pt-1">


                                <?php echo nova_get_option('booking_benefits'); ?>

                            </ul>


                        </div>


                    </main>
                </div>
            </div>
        </div>
    </div>
</div>