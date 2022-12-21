@extends('layouts.app')

@section('content')
    <div>
        <div class="pl-4 flex flex-col-reverse sm:flex-row justify-between items-center">
            <div class=" sm:w-eight">
                <h1 class="text-6.5xl font-poppins text-center sm:text-left font-bold mb-6">Your trusted partner in home
                    care services
                    </h1>
                    <!--<div class='flex justify-center sm:justify-start'>-->
                    <!--    <a class="text-base cursor-pointer text-fifth font-semibold bg-primary px-6 py-2 rounded-sm"-->
                    <!--        href="{{ url('/bookings') }}">Book a-->
                    <!--        visit</a>-->
                    <!--    <a class="ml-8 text-base text-primary border-2 border-primary px-6 py-2 rounded-sm"-->
                    <!--        href="{{ url('/contact') }}">Contact-->
                    <!--        Us</a>-->
                    <!--</div>-->

            </div>
            <div class=" flex sm:w-eight pr-4">
                <img class='' src="{{ asset('images/Frame 14.svg') }}" alt="" srcset="">
                {{-- <img class="___class_+?6___" src="{{ asset('images/Frame 14.svg') }}">
                <img class="-ml-100" src="{{ asset('images/Frame 14.svg') }}"> --}}
            </div>


        </div>
        <div class="mt-10">
            <div class='text-center mb-6 font-bold'>
                <h1 class='text-4xl text-secondary '>Our Services</h1>
            </div>
            <div class='flex justify-around'>
                <div class='sliderrules w-tenth flex flex-col items-center justify-around md:flex-row  pb-10'>
                    <div class='w-full md:w-third mr-4'>
                        <div class='grid justify-items-center h-96 px-4 items-center shadow-card rounded-xl  py-6'>
                            <div
                                class='bg-secondary2 bg-opacity-40 rounded-secondary flex justify-center items-center w-13 h-13'>
                                <img src="{{ asset('images/one.svg') }}" alt="">
                            </div>
                            <h2 class='text-lg font-bold text-center mt-10 mb-4 text-secondary'>Home cleaning</h2>
                            <p class="text-center font-normal text-lg mb-8">Enjoy a clean and healthy home through verified
                                and trusted xxolstars with professional experience and training.</p>
                            <a class="text-sm text-primary font-semibold  px-10 py-1 rounded-3xl"
                                href="{{ url('/bookings/service/standard_home_cleaning') }}">Book
                                Now <i class="ml-2 text-primary fas fa-chevron-right"></i> </a>

                        </div>
                    </div>
                    <div class='w-full md:w-third mr-4'>
                        <div class='grid justify-items-center h-full px-4 items-center shadow-card rounded-xl  py-6'>
                            <div
                                class='bg-seventeenth bg-opacity-40 rounded-secondary flex justify-center items-center w-13 h-13'>
                                <img src="{{ asset('images/two.svg') }}" alt="">
                            </div>
                            <h2 class='text-lg font-bold text-center mt-10 mb-4 text-secondary'>Care Givers</h2>
                            <p class="text-center font-normal text-lg mb-8">Our XxolCarers provide in-home care to the
                                elderly, vulnerable, convalescent and disabled in Nigeria. We specialize in delivering
                                companionship, home help, personal care and 24/7/live-in services
                            </p>
                            <a class="text-sm  text-primary font-semibold  px-10 py-1 rounded-3xl"
                                href="{{ url('/bookings/service/care_givers') }}">Book Now <i
                                    class="ml-2 text-primary fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class='w-full md:w-third mr-4'>
                        <div class='grid justify-items-center h-96 px-4 items-center shadow-card rounded-xl  py-6'>
                            <div
                                class='bg-eighteenth bg-opacity-40 rounded-secondary flex justify-center items-center w-13 h-13'>
                                <img src="{{ asset('images/three.svg') }}" alt="">
                            </div>
                            <h2 class='text-lg font-bold text-center relative bottom-3 text-secondary'>Salon</h2>
                            <p class="text-center font-normal text-lg relative bottom-7">Book beauty services at the
                                comfort of your
                                home
                            </p>
                            <a class="text-sm text-primary font-semibold  px-10 py-1 rounded-3xl relative top-4"
                                href="{{url('/bookings/service/salon_service')}}">Book
                                Now <i class="ml-2 text-primary fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class='w-full md:w-third mr-4'>
                        <div class='grid justify-items-center h-96 px-4 items-center shadow-card rounded-xl  py-6'>
                            <div
                                class='bg-secondary2 bg-opacity-40 rounded-secondary flex justify-center items-center w-13 h-13'>
                                <img src="{{ asset('images/four.svg') }}" alt="">
                            </div>
                            <h2 class='text-lg font-bold text-center mt-10 mb-4 text-secondary'>Spa</h2>
                            <p class="text-center font-normal text-lg mb-8">How about an exceptional treatment from
                                professional massage therapist delivered at your home
                            </p>
                            <a class="text-sm text-primary font-semibold  px-10 py-1 rounded-3xl"
                                href="{{ url('/bookings/service/spa_service') }}">Book
                                Now <i class="ml-2 text-primary fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class='w-full md:w-third mr-4'>
                        <div class='grid justify-items-center h-96 px-4 items-center shadow-card rounded-xl  py-6'>
                            <div
                                class='bg-ninteenth bg-opacity-40 rounded-secondary flex justify-center items-center w-13 h-13'>
                                <img src="{{ asset('images/two.svg') }}" alt="">
                            </div>
                            <h2 class='text-lg font-bold text-center mt-10 mb-4 text-secondary'>Deep Cleaning</h2>
                            <p class="text-center font-normal text-lg mb-8">We have all it takes to give your home that
                                deep clean it deserves.

                            </p>
                            <a class="text-sm text-primary font-semibold  px-10 py-1 rounded-3xl"
                                href="{{ url('/bookings/service/deep_cleaning') }}">Book
                                Now <i class="ml-2 text-primary fas fa-chevron-right"></i> </a>

                        </div>
                    </div>
                    <div class='w-full md:w-third mr-4'>
                        <div class='grid justify-items-center h-96 px-4 items-center shadow-card rounded-xl  py-6'>
                            <div
                                class='bg-secondary2 bg-opacity-40 rounded-secondary flex justify-center items-center w-13 h-13'>
                                <img src="{{ asset('images/two.svg') }}" alt="">
                            </div>
                            <h2 class='text-lg font-bold text-center mt-10 mb-4 text-secondary'>Post Construction Cleaning
                            </h2>
                            <p class="text-center font-normal text-lg mb-8">Give us a call for your building's debut. We
                                clean down to the last detail. </p>
                            <a class="text-sm  text-primary font-semibold  px-10 py-1 rounded-3xl"
                                href="{{ url('/booking') }}">Book Now <i
                                    class="ml-2 text-primary fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class='w-full md:w-third mr-4'>
                        <div class='grid justify-items-center h-96 px-4 items-center shadow-card rounded-xl  py-6'>
                            <div
                                class='bg-secondary2 bg-opacity-40 rounded-secondary flex justify-center items-center w-13 h-13'>
                                <img src="{{ asset('images/two.svg') }}" alt="">
                            </div>
                            <h2 class='text-lg font-bold text-center mt-10 mb-4 text-secondary'>Office Cleaning</h2>
                            <p class="text-center font-normal text-lg mb-8">Allow our xxolstars give your office that clean
                                and hygienic environment. </p>
                            <a class="text-sm text-primary font-semibold  px-10 py-1 rounded-3xl"
                                href="{{ url('/bookings/service/office_cleaning') }}">Book
                                Now <i class="ml-2 text-primary fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    {{-- <div class='w-full md:w-third mr-4'>
                        <div class='grid justify-items-center h-96 px-4 items-center shadow-card rounded-xl  py-6'>
                            <div
                                class='bg-secondary2 bg-opacity-40 rounded-secondary flex justify-center items-center w-13 h-13'>
                                <img src="{{ asset('images/two.svg') }}" alt="">
                            </div>
                            <h2 class='text-lg font-bold text-center mt-10 mb-4 text-secondary'>Logistics</h2>
                            <p class="text-center font-normal text-lg mb-8">Do you need a vehicle to take you and your
                                large family within and outside the state?
                                Do you require a staff bus for your organisation?
                                Do you require delivery services or you need a driver for long or short term?
                                Give us a call now
                            </p>
                            <a class="text-sm text-primary font-semibold  px-10 py-1 rounded-3xl"
                                href="{{ url('/booking') }}">Book
                                Now <i class="ml-2 text-primary fas fa-chevron-right"></i></a>
                        </div>
                    </div> --}}
                    <div class='w-full md:w-third'>
                        <div class='grid justify-items-center h-96 px-4 items-center shadow-card rounded-xl  py-6'>
                            <div
                                class='bg-secondary2 bg-opacity-40 rounded-secondary flex justify-center items-center w-13 h-13'>
                                <img src="{{ asset('images/two.svg') }}" alt="">
                            </div>
                            <h2 class='text-lg font-bold text-center mt-10 mb-4 text-secondary'>Relocation</h2>
                            <p class="text-center font-normal text-lg mb-8">For smooth and reliable moving, packing and
                                installation of your items and furniture

                            </p>
                            <a class="text-sm text-primary font-semibold  px-10 py-1 rounded-3xl"
                                href="{{ url('/bookings/service/relocation_assistance') }}">Book
                                Now <i class="ml-2 text-primary fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='flex flex-col sm:flex-row w-11/12 justify-around items-center'>
            <div class='w-full sm:w-1/3 flex'>
                <img class='' src="{{ asset('images/Frame54.svg') }}" width="500">
                <img class='-m-80 relative top-13' src="{{ asset('images/guy.svg') }}" width="500">
            </div>

            <div class='flex flex-col w-full sm:w-1/3  text-justify'>
                <h2 class="text-secondary text-3.5xl font-bold">Become a xxolstar</h2>
                <p class="mt-6 text-lg ">Do you have what it takes to change lives </p>
                <a class="text-base cursor-pointer  bg-primary font-semibold  self-start rounded-third text-fifth mt-6 py-2 px-8"
                    href="{{url('/becomexxol')}}">Learn More</a>
            </div>
        </div>
        <div class='pt-6 pb-16 bg-third'>
            <div class="text-center font-bold mb-32">
                <h2 class='text-gray-700 text-sm'>Booking made easy</h2>
                <h1 class='text-4xl text-secondary '>How we work</h1>
            </div>
            <div class='flex text-center justify-around'>
                <div class='w-primary flex flex-col items-center justify-center'>
                    <svg width="98" height="122" viewBox="0 0 98 122" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M72.1 40.0999C73.2 40.0999 74.2 40.2 75.3 40.2999V19.1C75.3 12.4 69.8 6.89995 63.1 6.89995H55.3V3.89995C55.3 2.09995 53.9 0.699951 52.1 0.699951C50.3 0.699951 48.9 2.09995 48.9 3.89995V6.89995H26.9V3.89995C26.9 2.09995 25.5 0.699951 23.7 0.699951C21.9 0.699951 20.5 2.09995 20.5 3.89995V6.89995H12.8C6 6.89995 0.5 12.4 0.5 19.1V60.9C0.5 67.6 6 73.1 12.7 73.1H42.4C42.3 72 42.2 71 42.2 69.9C42.3 53.5 55.7 40.0999 72.1 40.0999ZM6.9 25.4V19.2C6.9 16 9.5 13.3 12.8 13.3H20.5V16.3C20.5 18.1 21.9 19.5 23.7 19.5C25.5 19.5 26.9 18.1 26.9 16.3V13.3H48.9V16.3C48.9 18.1 50.3 19.5 52.1 19.5C53.9 19.5 55.3 18.1 55.3 16.3V13.3H63.1C66.3 13.3 68.9 15.9 68.9 19.2V25.4H6.9Z"
                            fill="#CD0866" />
                        <path
                            d="M72.1 46.5C59.2 46.5 48.7 57 48.7 69.9C48.7 82.8 59.2 93.3 72.1 93.3C85 93.3 95.5 82.8 95.5 69.9C95.5 57 85 46.5 72.1 46.5ZM80.9 73.1H72.1C70.3 73.1 68.9 71.7 68.9 69.9V59C68.9 57.2 70.3 55.8 72.1 55.8C73.9 55.8 75.3 57.2 75.3 59V66.7H80.9C82.7 66.7 84.1 68.1 84.1 69.9C84.1 71.7 82.7 73.1 80.9 73.1Z"
                            fill="#CD0866" />
                    </svg>
                    <div class='relative bottom-6'>
                        <h3 class='text-base font-bold my-6'>Booking</h3>
                        <p>Book for the service you need online, make payment and select xxolstar of your choice.</p>
                    </div>
                </div>
                <div class='w-primary flex flex-col items-center'>
                    <svg width="85" height="98" viewBox="0 0 85 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M47.759 21.133H77.929C81.657 21.133 84.68 24.155 84.68 27.884V27.886C84.68 31.254 82.214 34.046 78.988 34.554L72.06 91.703C71.624 95.297 68.574 98 64.954 98H19.726C16.106 98 13.056 95.297 12.62 91.703L5.692 34.554C2.467 34.046 0 31.254 0 27.886V27.884C0 24.155 3.023 21.133 6.751 21.133H15.386L15.406 58.038C15.406 62.234 18.808 65.636 23.004 65.636H40.141C44.337 65.636 47.739 62.234 47.739 58.038V50.714L51.585 52.149C54.858 53.371 58.505 51.706 59.726 48.432C60.947 45.157 59.284 41.515 56.01 40.292L47.739 37.205L47.759 21.133ZM38.111 61.736H40.141C42.183 61.736 43.839 60.08 43.839 58.038V45.096L52.948 48.495C54.204 48.964 55.603 48.326 56.071 47.07C56.54 45.813 55.902 44.415 54.646 43.946L43.839 39.912V21.017H19.306V58.038C19.306 60.08 20.962 61.736 23.004 61.736H25.035V51.814C25.035 50.733 25.913 49.854 26.995 49.854C28.076 49.854 28.955 50.733 28.955 51.814V61.736H34.191V51.814C34.191 50.733 35.069 49.854 36.151 49.854C37.232 49.854 38.111 50.733 38.111 51.814V61.736ZM49.48 17.633C49.634 14.323 51.679 11.507 54.558 10.24V3.92C54.558 1.755 56.313 0 58.478 0H67.072C69.237 0 70.992 1.755 70.992 3.92V10.24C73.871 11.507 75.916 14.323 76.07 17.633H49.48Z"
                            fill="#0B7146" />
                    </svg>

                    <h3 class='text-base font-bold my-6'>We work</h3>
                    <p>Monitor everything online with peace of mind. </p>
                </div>
                <div class='w-primary flex flex-col items-center'>
                    <svg width="95" height="92" viewBox="0 0 95 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M65.768 70.961H29.831L3.83804 83.307L5.54604 86.511L28.406 76.568L41.571 83.596L25.72 91.153H33.986L45.933 85.744L56.338 91.153H64.743L50.224 83.152L64.078 75.679L67.724 75.324L92.897 45.524L88.538 44.545L65.768 70.961ZM46.198 81.505L34.722 75.233H58.606L46.198 81.505ZM74.018 71.296L82.814 91.152L78.877 91.164L71.415 74.365L74.018 71.296ZM13.218 76.083C13.218 76.083 2.66504 81.225 2.65204 81.229C1.83404 81.529 1.01104 78.985 0.852038 78.457C-0.201962 74.937 3.60004 72.323 5.94204 70.476C11.658 65.963 18.55 61.78 25.413 59.289C27.353 58.584 29.371 58.066 31.433 57.887C35.14 57.568 38.867 57.488 42.585 57.47C46.97 57.449 51.338 57.518 55.717 57.771C56.926 57.84 58.147 57.863 59.347 57.657C60.88 57.389 62.367 56.89 63.763 56.206C64.879 55.659 65.836 54.963 66.837 54.242L70.129 51.841L77.689 53.796L64.879 67.852H29.831L13.218 76.083ZM48.243 19.814L5.54704 36.893L42.551 0.777954H94.899L52.07 18.125L65.945 51.84L62.833 53.795L48.243 19.814ZM76.797 37.339C80.484 37.339 83.469 40.325 83.469 44.008C83.469 47.694 80.484 50.681 76.797 50.681C73.113 50.681 70.128 47.694 70.128 44.008C70.128 40.326 73.113 37.339 76.797 37.339Z"
                            fill="#AA00C6" />
                    </svg>

                    <h3 class='text-base font-bold my-6'>You relax</h3>
                    <p>Enjoy time with family and friends why we do the work</p>
                </div>

            </div>
        </div>
        {{-- Testimonials hidden because of there are no geniune details of testimonials at the moment }}
        {{-- <div class="pt-6 pb-16">
            <div class="text-center font-bold mb-10">
                <h2 class='text-gray-700 text-sm'>Testimonial</h2>
                <h1 class='text-4xl text-secondary '>What our clients say about us</h1>
            </div>
            <div class='flex justify-center '>
                <div class='flex flex-col md:flex-row w-secondary shadow-bigCard rounded-primary pl-10 py-10'>
                    <div class='md:flex-1 self-center'>
                        <img src="{{ asset('images/frame57.png') }}">
                    </div>
                    <div class='md:flex-2 text-center md:px-24'>
                        <i class="fas fa-quote-left text-4xl  mb-6 text-secondary"></i>
                        <p>This is my testimonial template This is my testimonial templateThis is my testimonial
                            templateThis is
                            my testimonial templateThis is my testimonial templateThis is my testimonial template</p>
                        <div class="mt-6">
                            <h3 class="text-lg text-secondary font-bold">Sarah Abraham</h3>
                            <p class="text-sm text-fourth mt-2">CEO, Access bank Nigeria</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="bg-third py-6">
            <div class="text-center font-bold mb-20">
                <h1 class='text-4xl text-secondary '>Benefits of Working with Us</h1>
            </div>
            <div>
                <div class='flex flex-col md:flex-row items-center md:justify-center'>
                    <div class='flex md:w-primary mr-20'>
                        <img class="self-start mr-2" src="{{ asset('images/wiper.svg') }}" alt="">
                        <div>
                            <h2 class='text-base text-secondary font-semibold mb-3'>Trusted professionals</h2>
                            <p class='text-xs text-justify'>We have reliable and well trained professional who has
                                undergone thorough background verification </p>
                        </div>
                    </div>
                    <div class='flex md:w-primary mr-20'>
                        <img class="self-start mr-2" src="{{ asset('images/cell.svg') }}" alt="">
                        <div>
                            <h2 class='text-base text-secondary font-semibold mb-3'>Online Booking</h2>
                            <p class='text-xs text-justify'>You can request for your service form anywhere you are </p>
                        </div>
                    </div>
                    <div class='flex md:w-primary'>
                        <img class="self-start mr-2" src="{{ asset('images/support.svg') }}" alt="">
                        <div>
                            <h2 class='text-base text-secondary font-semibold mb-3'>Flexibility</h2>
                            <p class='text-xs text-justify'>You get to choose the xxolstar of your choice via a pool of
                                xxolstar profiles provided for you.</p>
                        </div>
                    </div>
                </div>
                <div class='flex flex-col md:flex-row items-center md:justify-center mt-5'>
                    <div class='flex md:w-primary mr-20'>
                        <img class="self-start mr-2" src="{{ asset('images/van.svg') }}" alt="">
                        <div>
                            <h2 class='text-base text-secondary font-semibold mb-3'>24/7 Customer support</h2>
                            <p class='text-xs text-justify'>Our qualified customer service agents are available to answer
                                all your queries and guide you on our services</p>
                        </div>
                    </div>
                    <div class='flex md:w-primary mr-20'>
                        <img class="self-start mr-2" src="{{ asset('images/shield.svg') }}" alt="">
                        <div>
                            <h2 class='text-base text-secondary font-semibold mb-3'>Manage everything online</h2>
                            <p class='text-xs text-justify'>Whether you are at home or not, relax, monitor the progress of
                                the service online.</p>
                        </div>
                    </div>
                    <div class='flex md:w-primary'>
                        <img class="self-start mr-2" src="{{ asset('images/scissors.svg') }}" alt="">
                        <div>
                            <h2 class='text-base text-secondary font-semibold mb-3'>No hidden cost</h2>
                            <p class='text-xs text-justify'>See cost of service immediately after booking </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6">
            <div class="text-center font-bold mb-0">
                <h2 class='text-gray-700 text-sm'>Let’s do business</h2>
                <h1 class='text-4xl text-secondary '>Contact Us</h1>
            </div>
            <div class='flex flex-col-reverse sm:flex-row justify-around items-center '>
                <form action="" class='flex flex-col shadow-bigCard w-full sm:w-1/3 py-8 px-3 rounded-primary'>
                    <div class='flex flex-col mb-3'> <label class='text-fifth font-bold text-sm' for="">Name</label>
                        <input type="text" class="border  py-1 border-fourth">
                    </div>
                    <div class='flex flex-col mb-3'> <label class='text-fifth font-bold text-sm' for="">Email
                            Address</label>
                        <input type="email" class="border  py-1 border-fourth">
                    </div>
                    <div class='flex flex-col'> <label class='text-fifth font-bold text-sm' for="">Your Message</label>
                        <textarea class="pl-2 border border-fourth rounded-md pt-1" cols="30" rows="5"></textarea>
                    </div>
                    <a class="bg-primary self-center rounded-md text-fifth text-sm font-bold mt-20 py-2 px-6 submit" 
                    href="mailto:mailto:info@xxolcare.com">Send Message</a>
                    {{-- <input class="bg-primary self-center rounded-md text-fifth text-sm font-bold mt-20 py-2 px-6 submit"
                        type="submit" value="Send Message"> --}}
                </form>

                <img class="w-full sm:w-1/3" src="{{ asset('images/Layer2.svg') }}">
            </div>
        </div>
    </div>
@endsection
