@extends('layouts.app')

@section('content')

    <section class="pt-14 relative pb-56">
        <div class="flex items-center md:items-start flex-col md:flex-row">
            <div id="change" class="md:flex-2 pl-6 py-8 font-semibold text-opacity-50 text-black ">
                <h2 onclick="changeBlock(event)" id="service" class="cursor-pointer mb-8 text-sm text-secondary bgkkk"><span
                        class=" bg-secondary text-sm py-0.5 px-2.3 rounded-secondary text-opacity-100 bg-opacity-50">1</span>
                    Service
                    details
                </h2>
                <h2 onclick="changeBlock(event)" id="schedule" class="cursor-pointer mb-8 text-sm"><span
                        class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">2</span>
                    Schedule
                    details
                </h2>
                <h2 onclick="changeBlock(event)" id="contact" class="cursor-pointer mb-8 text-sm"><span
                        class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">3</span>
                    Contact details
                </h2>
                <h2 onclick="changeBlock(event)" id="payment" class="cursor-pointer mb-8 text-sm"><span
                        class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">4</span>
                    Payment</h2>
                <h2 onclick="changeBlock(event)" id="select" class="cursor-pointer mb-8 text-sm"><span
                        class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">5</span>
                    Select
                    XXOL
                    Star
                </h2>
                <h2 onclick="changeBlock(event)" id="booking" class="cursor-pointer text-sm"><span
                        class="bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">6</span>
                    Booking details
                </h2>
            </div>
            <div id="service_block" class="relative bgkk md:flex-5 ">
                <div class="shadow-bigCard px-6 py-8 rounded-lgx ">
                    <h2 class="text-2xl text-center text-secondary font-bold mb-2">Service Detail</h2>
                    <p class="text-xs text-opacity-60 text-black text-center mb-6">Kindly enter the correct details of the
                        services you will be needing</p>

                    <form class="flex flex-col text-sm text-fifth" action="">
                        <div class='flex flex-col mb-4'>
                            <label>What service(s) would you be needing?</label>
                            {{-- <select id="showmodal" class="border border-fourth py-3 rounded-md">
                                <option value=""></option>
                            </select> --}}
                            <input id="showmodal" class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label>Location of the needed services?</label>
                            <input class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label>Frequency of the needed services?</label>
                            <input id="showmodal2" class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        </div>
                        {{-- <div class='mb-4'>
                            <label>Do you need cleaning materials?</label>
                            <div class='flex items-center'>
                                <input type="radio" id="Yes" name="need_cleaning" value="Yes">
                                <label for="Yes">Yes</label>
                            </div>
                            <div class='flex items-center'>
                                <input type="radio" id="No" name="need_cleaning" value="No">
                                <label for="No">No</label>
                            </div>
                        </div> --}}
                        <div class='flex flex-col'>
                            <label>Any special Instructions?</label>
                            <textarea class="pl-2 border border-fourth rounded-md" cols="30" rows="5"></textarea>
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label>Type</label>
                            <input class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label>Gender</label>
                            <input class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        </div>
                        <button onclick="changeBlock(event)" id="schedule"
                            class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
                            Proceed
                        </button>
                        {{-- <input
                            class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit"
                            type="submit" value="Proceed"> --}}
                    </form>
                </div>
                <div id="overlay"></div>
                <div id="modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                    <h2 class="text-secondary font-bold text-center text-lg">What service(s) would you be needing?</h2>
                    <div class='grid grid-cols-4 mt-6 gap-y-12'>
                        <div onclick="selectService(event)" id="standard" class='flex flex-col items-center'>
                            <img onclick="selectService(event)" id="standard"
                                class="w-14 h-14 object-cover object-primary rounded-secondary"
                                src="{{ asset('images/frame 97.png') }}" alt="">
                            <h5 onclick="selectService(event)" id="standard"
                                class='text-center text-sm text-fifth font-semibold'>Standard home
                                cleaning</h5>
                        </div>
                        <div onclick="selectService(event)" id="special" class='flex flex-col items-center'>
                            <img onclick="selectService(event)" id="special"
                                class="w-14 h-14 object-cover object-primary rounded-secondary"
                                src="{{ asset('images/frame 97.png') }}" alt="">
                            <h5 onclick="selectService(event)" id="special"
                                class='text-center text-sm text-fifth font-semibold'>Care for people
                                with special need</h5>
                        </div>
                        <div onclick="selectService(event)" id="baby" class='flex flex-col items-center'>
                            <img onclick="selectService(event)" id="baby"
                                class="w-14 h-14 object-cover object-primary rounded-secondary"
                                src="{{ asset('images/frame 97.png') }}" alt="">
                            <h5 onclick="selectService(event)" id="baby"
                                class='text-center text-sm text-fifth font-semibold'>Baby sitting/
                                home nanny</h5>
                        </div>
                        <div onclick="selectService(event)" id="deep" class='flex flex-col items-center'>
                            <img onclick="selectService(event)" id="deep"
                                class="w-14 h-14 object-cover object-primary rounded-secondary"
                                src="{{ asset('images/frame 97.png') }}" alt="">
                            <h5 onclick="selectService(event)" id="deep"
                                class='text-center text-sm text-fifth font-semibold'>Deep cleaning</h5>
                        </div>
                        <div onclick="selectService(event)" id="post" class='flex flex-col items-center'>
                            <img onclick="selectService(event)" id="post"
                                class="w-14 h-14 object-cover object-primary rounded-secondary"
                                src="{{ asset('images/frame 97.png') }}" alt="">
                            <h5 onclick="selectService(event)" id="post"
                                class='text-center text-sm text-fifth font-semibold'>Post Construction cleaning</h5>
                        </div>
                        <div onclick="selectService(event)" id="salon" class='flex flex-col items-center'>
                            <img onclick="selectService(event)" id="salon"
                                class="w-14 h-14 object-cover object-primary rounded-secondary"
                                src="{{ asset('images/frame 97.png') }}" alt="">
                            <h5 onclick="selectService(event)" id="salon"
                                class='text-center text-sm text-fifth font-semibold'>Salon</h5>
                        </div>
                        <div onclick="selectService(event)" id="spa" class='flex flex-col items-center'>
                            <img onclick="selectService(event)" id="spa"
                                class="w-14 h-14 object-cover object-primary rounded-secondary"
                                src="{{ asset('images/frame 97.png') }}" alt="">
                            <h5 onclick="selectService(event)" id="spa"
                                class='text-center text-sm text-fifth font-semibold'>Spa</h5>
                        </div>
                        <div onclick="selectService(event)" id="office" class='flex flex-col items-center'>
                            <img onclick="selectService(event)" id="office"
                                class="w-14 h-14 object-cover object-primary rounded-secondary"
                                src="{{ asset('images/frame 97.png') }}" alt="">
                            <h5 onclick="selectService(event)" id="office"
                                class='text-center text-sm text-fifth font-semibold'>Office cleaning</h5>
                        </div>
                        <div onclick="selectService(event)" id="logistics" class='flex flex-col items-center'>
                            <img onclick="selectService(event)" id="logistics"
                                class="w-14 h-14 object-cover object-primary rounded-secondary"
                                src="{{ asset('images/frame 97.png') }}" alt="">
                            <h5 onclick="selectService(event)" id="logistics"
                                class='text-center text-sm text-fifth font-semibold'>Logistics</h5>
                        </div>
                    </div>
                    <h3 class='font-semibold text-sm text-ninth text-center mt-8'>Please note that you can select one or
                        more
                        services</h3>
                    <div class='flex justify-center mt-8'>
                        <button class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                            That's all
                        </button>
                    </div>
                </div>
                <div id="modal2" class='hidden absolute top-96 w-full py-8 bg-white rounded-lg'>
                    <h2 class="text-secondary font-bold text-center text-lg mb-8">Frequency of the needed services?</h2>
                    <div class="grid">
                        <p id="one" onclick="selectFrequency(event)"
                            class='mb-6 freq serviceoption pl-14 font-medium text-lg cursor-pointer'>
                            One-time Service</p>
                        <p id="week" onclick="selectFrequency(event)"
                            class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Weekly
                            Service
                        </p>
                        <p id="month" onclick="selectFrequency(event)" class='font-medium text-lg pl-14 cursor-pointer'>
                            Monthly
                            Service</p>
                    </div>
                    <div class="flex justify-center mt-8">
                        <button id="doneFrequency"
                            class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                            That's all
                        </button>
                    </div>
                </div>
            </div>
            <div id="schedule_block" class="md:flex-4 md:mr-10 shadow-bigCard px-6 rounded-lgx pb-16 max-h-96 hidden">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Schedule details</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">when would you like the service to be carried
                    out</p>
                <form class="flex flex-col text-sm text-fifth" action="">
                    <div class='flex flex-col mb-4'>
                        <label>Select date of service</label>
                        <input class="border border-fourth py-3 rounded-md" type="text">
                    </div>
                    <div class='flex flex-col mb-4'>
                        <label>Select time of service</label>
                        <input class="border border-fourth py-3 rounded-md" type="text">
                    </div>
                    <button onclick="changeBlock(event)" id="contact"
                        class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
                        Proceed
                    </button>
                    {{-- <input
                        class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit"
                        type="submit" value="Proceed"> --}}
                </form>
            </div>
            <div id="contact_block" class="md:flex-4 md:mr-10 shadow-bigCard px-6 rounded-lgx pb-16 max-h-96 hidden">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Details Confirmation</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">Please confirm the phone number </p>
                <form class="flex flex-col text-sm text-fifth" action="">
                    <div class='flex flex-col mb-4'>
                        <label>Enter your Phone number</label>
                        <input class="border border-fourth py-3 rounded-md" type="text">
                    </div>
                    <div class='flex flex-col mb-4'>
                        <label>Enter your Email Address</label>
                        <input class="border border-fourth py-3 rounded-md" type="text">
                    </div>
                    <button onclick="changeBlock(event)" id="payment"
                        class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
                        Proceed
                    </button>
                    {{-- <input
                        class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit"
                        type="submit" value="Proceed"> --}}
                </form>
            </div>
            <div id="payment_block" class="md:flex-4 md:mr-10 shadow-bigCard px-6 rounded-lgx pb-16  hidden">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Payment</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">Please choose and complete a payment choice
                </p>

                <div class="flex justify-center items-center">
                    <div class='flex mr-2 border border-secondary rounded-third py-5 px-5 bg-secondary bg-opacity-20'>
                        <img class="h-3.5" src="{{ asset('images/paystack_logo.png') }}" alt="">

                    </div>
                    <div class="flex ml-2 border border-eight rounded-third py-3.5 px-4">
                        <img class="w-6 opacity-60 mr-2" src="{{ asset('images/Bank.svg') }}" alt="">
                        <h3 class="text-lg text-fifth font-medium text-opacity-60">Banks</h3>
                    </div>
                </div>
                <form class="flex flex-col text-sm text-fifth" action="">
                    @csrf
                    <div class='flex flex-col mb-4'>
                        <label>Enter your card number</label>
                        <input class="border border-fourth py-3 rounded-md" type="text">
                    </div>
                    <div class="flex justify-between">
                        <div class='flex flex-col mb-4'>
                            <label>Expiry date</label>
                            <input class="border border-fourth w-fifth py-3 rounded-md" type="text">
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label>CVV</label>
                            <input class="border border-fourth w-fifth py-3 rounded-md" type="text">
                        </div>
                    </div>
                    <button onclick="changeBlock(event)" id="select"
                        class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
                        Proceed
                    </button>
                    {{-- <input
                        class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit"
                        type="submit" value="Proceed"> --}}
                </form>
            </div>
            <div id="select_block" class='md:flex-4 md:mr-10 relative shadow-bigCard px-4 rounded-lgx hidden'>

                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Select XXOL Star</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">These are XXOL Stars within close proximity
                    of where the service is to be done
                </p>
                <div class='flex justify-center'>
                    <div class='flex flex-col items-center border border-eight rounded-third mr-1.5 py-4 px-3'>
                        <img class="w-9 h-9 rounded-secondary" src="{{ asset('images/ellipse 10.png') }}" alt="">
                        <div>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                        </div>
                        <h3 class='text-xs text-fifth my-3'>Auto Assign </h3>
                        <p class=' text-xxs text-center mb-8 text-fifth text-opacity-60'>We will assign our available XXOL
                            star
                            for a little
                            extra fee </p>
                        <h3 class="showstarinfo text-primary font-semibold text-xxs">Click to select</h3>

                    </div>
                    <div class='flex flex-col items-center border border-eight rounded-third mr-1.5 py-4 px-3'>
                        <img class="w-9 h-9 rounded-secondary" src="{{ asset('images/ellipse 10.png') }}" alt="">
                        <div>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                        </div>
                        <h3 class='text-xs text-fifth my-3'>Tiwa </h3>
                        <p class=' text-xxs text-center mb-8 text-fifth text-opacity-60'>I am a professional janitor who
                            also is
                            a make-up artiste</p>
                        <h3 class="showstarinfo text-primary font-semibold text-xxs">Click to select</h3>

                    </div>
                    <div class='flex flex-col items-center border border-eight rounded-third mr-1.5 py-4 px-3'>
                        <img class="w-9 h-9 rounded-secondary" src="{{ asset('images/ellipse 10.png') }}" alt="">
                        <div>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                        </div>
                        <h3 class='text-xs text-fifth my-3'>Tiwa </h3>
                        <p class=' text-xxs text-center mb-8 text-fifth text-opacity-60'>I am a professional janitor who
                            also is
                            a make-up artiste</p>
                        <h3 class="showstarinfo text-primary font-semibold text-xxs">Click to select</h3>

                    </div>
                    <div class='flex flex-col items-center border border-eight rounded-third py-4 px-3'>
                        <img class="w-9 h-9 rounded-secondary" src="{{ asset('images/ellipse 10.png') }}" alt="">
                        <div>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                            <i class="text-xxxs text-star fas fa-star"></i>
                        </div>
                        <h3 class='text-xs text-fifth my-3'>Tiwa </h3>
                        <p class=' text-xxs text-center mb-8 text-fifth text-opacity-60'>I am a professional janitor who
                            also is
                            a make-up artiste</p>
                        <h3 class="showstarinfo text-primary font-semibold text-xxs">Click to select</h3>

                    </div>

                </div>
                <div id="modal3" class='absolute top-primary px-12 z-40 w-ninth pt-8 pb-20 bg-white rounded-lg hidden'>
                    <div class="relative">
                        <h2 class="text-2xl text-center  text-secondary font-bold mb-12">XXOL Star detail</h2>
                        <div class='grid grid-cols-3 justify-items-start'>
                            <div class="col-start-2 col-end-3 justify-self-center">
                                <div class="h-32 w-full">
                                    <img class="absolute w-32" src="{{ asset('images/cleanercircle.svg') }}" alt="">
                                    <img class="absolute w-32" src="{{ asset('images/cleanercircleimage.svg') }}"
                                        alt="">
                                </div>
                                <div class='mb-3'>
                                    <i class="text-lg text-star fas fa-star"></i>
                                    <i class="text-lg text-star fas fa-star"></i>
                                    <i class="text-lg text-star fas fa-star"></i>
                                    <i class="text-lg text-twelfth fas fa-star"></i>
                                    <i class="text-lg text-twelfth fas fa-star"></i>
                                </div>
                                <h3 class='text-lg text-fifth mb-4'>Tiwatope James</h3>
                            </div>
                            <div>
                                <button onclick="changeBlock(event)" id="booking"
                                    class="col-start-3 col-end-4 bg-primary self-start rounded-md font-semibold text-fifth text-sm  px-6  py-2 submit mb-2">
                                    Confirm XXOLstar
                                </button>
                                <button id="selectagain"
                                    class="col-start-3 col-end-4 bg-primary self-start rounded-md font-semibold text-fifth text-sm  px-6  py-2 submit">
                                    Select Again
                                </button>
                            </div>
                        </div>
                        <p class='mb-8'>Good day! My home country is Uganda and I've been working here in UAE between 1 to 3
                            years. My
                            native language is Luganda plus I can communicate fluently in English. I previously worked in
                            home cleaning, hotel cleaning, hospital cleaning; and my skills can be described as
                            time-management, trustworthiness, attentiveness to detail, friendliness, problem Solving,
                            flexibility, ability to work independently. My hobbies are reading, listening to songs, relaxing
                            in the house. The part I enjoy the most about cleaning is to provide a good customer service. My
                            work motto is ''I am excited to serve your cleaning needs!''.</p>
                        <div class='grid grid-cols-2 mb-10'>
                            <div class='justify-self-center text-center'>
                                <h3 class='text-lg text-fifth font-medium text-opacity-50'>Reviews</h3>
                                <h3 class='text-lg text-fifth font-medium '>234</h3>
                            </div>
                            <div class='justify-self-center text-center'>
                                <h3 class='text-lg text-fifth font-medium text-opacity-50'>Number of hires</h3>
                                <h3 class='text-lg text-fifth font-medium'>534</h3>
                            </div>
                        </div>
                        <div>
                            <div class='grid grid-cols-10 items-center pb-4'>
                                <h3 class='col-start-1 col-end-3 text-sm text-fifth'>Excellent (123)</h3>
                                <div class="skillbar clearfix col-start-3 col-end-11" data-percent="52.56%">
                                    <div class="skillbar-bar bg-primary"></div>
                                </div>
                            </div>
                            <div class='grid grid-cols-10 items-center pb-4'>
                                <h3 class='col-start-1 col-end-3 text-sm text-fifth'>Good (34)</h3>
                                <div class="skillbar clearfix col-start-3 col-end-11" data-percent="35%">
                                    <div class="skillbar-bar bg-primary"></div>
                                </div>
                            </div>
                            <div class='grid grid-cols-10 items-center pb-4'>
                                <h3 class='col-start-1 col-end-3 text-sm text-fifth'>Average (12)</h3>
                                <div class="skillbar clearfix col-start-3 col-end-11" data-percent="20%">
                                    <div class="skillbar-bar bg-primary"></div>
                                </div>
                            </div>
                            <div class='grid grid-cols-10 items-center pb-4'>
                                <h3 class='col-start-1 col-end-3 text-sm text-fifth'>Bad (1)</h3>
                                <div class="skillbar clearfix col-start-3 col-end-11" data-percent="10%">
                                    <div class="skillbar-bar bg-primary"></div>
                                </div>
                            </div>
                            <div class='grid grid-cols-10 items-center'>
                                <h3 class='col-start-1 col-end-3 text-sm text-fifth'>Terrible (0)</h3>
                                <div class="skillbar clearfix col-start-3 col-end-11" data-percent="5%">
                                    <div class="skillbar-bar bg-primary"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="booking_block" class="md:flex-4 relative md:mr-20 shadow-bigCard px-6 rounded-lgx hidden">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Booking details</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">Total information on the requested bookings
                </p>

                <div class="flex flex-col items-center">
                    <h4>XXOL Star Picture</h4>
                    <img class="w-20 h-20 object-cover object-primary rounded-secondary"
                        src="{{ asset('images/frame 97.png') }}" alt="">
                </div>
                <form class="flex flex-col text-sm text-fifth" action="">
                    @csrf
                    <div class='flex flex-col mb-4'>
                        <label>XXOL Star phone Number </label>
                        <input class="border border-fourth py-3 rounded-md" type="text">
                    </div>
                    <div class='flex flex-col mb-4'>
                        <label>Transaction secret code</label>
                        <input class="border border-fourth py-3 rounded-md" type="text">
                    </div>
                    <p class="italic font-medium text-sm text-opacity-50 text-black mb-20">Please do not welcome any XXOL
                        star who
                        doesn’t
                        know the secret
                        code as it
                        the way to verify whether the XXOL star is from XXOL Care. Keep it safe, keep it
                        secret always....</p>
                    <a class="text-ninth text-base font-semibold text-center" href="#">Download as PDF</a>
                    <input
                        class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit"
                        type="submit" value="Finish Up">
                </form>
                <div id="modal4 "
                    class='absolute top-primary px-12 z-40 pt-8 pb-20 bg-white rounded-lg flex flex-col items-center hidden'>
                    <img class="w-32" src="{{ asset('images/checklogo.svg') }}" alt="">
                    <p class='text-center'>Congratulations!You’ve successfully completed your booking, relax while we get
                        working</p>
                    <button id="selectagain"
                        class="col-start-3 col-end-4 bg-primary self-center rounded-md font-semibold text-fifth text-sm  px-6  py-2 submit">
                        Done
                    </button>
                </div>
            </div>
            <div class='md:flex-4 shadow-bigCard flex flex-col justify-evenly px-4 rounded-lgx min-h-primary'>
                <h2 class="text-center text-2xl text-secondary font-bold">Booking summary</h2>
                <h4 class="text-center text-lg text-fifth font-bold">City</h4>
                <div>
                    <h4 class="text-center text-lg text-fifth font-bold mb-2">Service details</h4>
                    <div class="flex">
                        <div class="text-sm  flex flex-col mr-6">
                            <h3 class="text-fifth text-opacity-60 mb-4">Frequecy of service</h3>
                            <h3 class="text-fifth text-opacity-60 mb-4">Numbers of XXOL Stars</h3>
                            <h3 class="text-fifth text-opacity-60 mb-4">Cleaning Materials</h3>
                            <h3 class="text-fifth text-opacity-60 mb-4">Date and Time</h3>
                            <h3 class="text-fifth text-opacity-60">Address</h3>

                        </div>
                        <div class="text-sm  flex flex-col">
                            <h3 class="text-fifth mb-4">One-time</h3>
                            <h3 class="text-fifth mb-4">3</h3>
                            <h3 class="text-fifth mb-4">Yes</h3>
                            <h3 class="text-fifth mb-4">Dec. 16 10:00PM </h3>
                            <h3 class="text-fifth">10, Adekunle street, yaba, Lagos</h3>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg text-fifth font-bold text-center mb-2">Price details</h4>
                    <div class='grid grid-cols-2 text-fifth text-sm justify-center'>
                        <h3>Total price</h3>
                        <h3>#45,0879.00</h3>
                    </div>
                </div>

            </div>
        </div>
        <div id="overlay2"></div>
    </section>

@endsection
