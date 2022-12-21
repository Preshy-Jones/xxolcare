<section class="flex h-secondary items-center justify-center">
    <div class='shadow-bigCard w-twelfth flex flex-col items-center py-12'>
        <div wire:loading wire:target="verify" class="spinner ">
            <div></div>
            <div></div>
        </div>
        <h1 wire:loading wire:target="verify" class='text-center text-2xl text-secondary font-bold mt-12'>Verifying Payment</h1>
        @if (session()->has('success'))
        <div class='flex justify-center'>
            <img src="{{ asset('images/checkconfirmed.svg') }}" alt="">
        </div>
        <h1 class="text-center text-2xl text-secondary font-bold mt-12 ">
            {{ session('success') }}
        </h1>
        <button wire:click='proceed' class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
            Proceed
          </button>
        @endif
        @if (session()->has('insufficient'))
        <div class='flex justify-center'>
            <img src="{{ asset('images/error.png') }}" alt="">
        </div>
        <h1 class="text-center text-2xl text-secondary font-bold mt-12 ">
            {{ session('insufficient') }}
        </h1>
        @endif
        @if (session()->has('fail'))
        <div class='flex justify-center'>
            <img src="{{ asset('images/error.png') }}" alt="">
        </div>
        <h1 class="text-center text-2xl text-secondary font-bold mt-12">
            {{ session('fail') }}
        </h1>
        @endif

        @if(session()->has('success') == False && session()->has('insufficient') == False && session()->has('fail') == False && $showConfirmButton == true)
        <button wire:click='verify' class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
           Confirm Payment
         </button>
         @endif
    </div>
</section>





{{-- <section class="pt-14 relative pb-56">
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
        <div id="payment_block" class="md:flex-4 md:mr-10 shadow-bigCard px-6 rounded-lgx pb-16">
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
                <input
                    class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit"
                    type="submit" value="Proceed">
            </form>
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
</section> --}}