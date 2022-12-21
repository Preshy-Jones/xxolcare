<section class="pt-14 relative pb-56">
    <div class="flex items-center md:items-start flex-col md:flex-row">
        <div id="change" class="md:flex-2 pl-6 py-8 font-semibold text-opacity-50 text-black ">
            <h2 class="cursor-pointer mb-8 text-sm text-secondary bgkkk"><span
                    class=" bg-secondary text-sm py-0.5 px-2.3 rounded-secondary text-opacity-100 bg-opacity-50">1</span>
                Service
                details
            </h2>
            <h2 class="cursor-pointer mb-8 text-sm"><span
                    class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">2</span>
                Schedule
                details
            </h2>
            <h2 class="cursor-pointer mb-8 text-sm"><span
                    class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">3</span>
                Contact details
            </h2>
            <h2 class="cursor-pointer mb-8 text-sm"><span
                    class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">4</span>
                Payment</h2>
            <h2 class="cursor-pointer mb-8 text-sm"><span
                    class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">5</span>
                Select
                XXOL
                Star
            </h2>
            <h2 class="cursor-pointer text-sm"><span
                    class="bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">6</span>
                Booking details
            </h2>
        </div> 
        <div id="booking_block" class="md:flex-4 relative md:mr-20 py-6 shadow-bigCard px-6 rounded-lgx">
            <h2 class="text-2xl text-center text-secondary font-bold mb-2">Booking details</h2>
            <p class="text-xs text-opacity-60 text-black text-center mb-6">Total information on the requested bookings
            </p>

            <div class="flex flex-col items-center">
                <h4>XXOL Star Picture</h4>
                <img class="w-20 h-20 object-cover object-primary rounded-secondary"
                    src="{{ asset($xxolstar['profile_photo']) }}" alt="">
            </div>
            <form class="flex flex-col text-sm text-fifth" action="">
                @csrf
                <div class='flex flex-col mb-4'>
                    <label>XXOL Star phone Number </label>
                    <input class="border border-fourth py-3 rounded-md" type="text" value='{{$xxolstar['phone']}}'>
                </div>
                <div class='flex flex-col mb-4'>
                    <label>Transaction secret code</label>
                    <input class="border border-fourth py-3 rounded-md" type="text" value='{{$booking['reference']}}'>
                </div>
                <p class="italic font-medium text-sm text-opacity-50 text-black mb-20">Please do not welcome any XXOL
                    star who
                    doesn’t
                    know the secret
                    code as it
                    the way to verify whether the XXOL star is from XXOL Care. Keep it safe, keep it
                    secret always....</p>
                {{-- <a class="text-ninth text-base font-semibold text-center" href="#">Download as PDF</a> --}}
                <button
                    wire:click.prevent="$emit('openModal','booking-complete-modal', ['Congratulations!You’ve successfully completed your booking, relax while we get working'])"
                    class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
                    Finish Up
                 </button>
            </form>
        </div>
        <div class='md:flex-4 shadow-bigCard flex flex-col justify-evenly px-4 rounded-lgx min-h-primary'>
            <h2 class="text-center text-2xl text-secondary font-bold">Booking summary</h2>
            <div>
                <h4 class="text-center text-lg text-fifth font-bold mb-2">Service details</h4>
                <div>
                    @foreach ($bookingSummary[$service] as $option)
                    <div class='grid grid-cols-2'>
                        <h3 class="text-fifth text-opacity-60 mb-4">{{$option['name']}}</h3>
                        <h3
                        @if($option['id'])
                        id="{{$option['id']}}"
                        @endif
                         class="text-fifth mb-4">
                         {{session('booking')[$option['column_name']]}}
                        </h3>
                    </div>
                    @endforeach

                </div>
            </div>
            @if(session('booking')->sub_total)
            <div>
                <h4 class="text-lg text-fifth font-bold text-center mb-2">Price details</h4>
                <div class='grid grid-cols-2 text-fifth text-sm justify-center'>
                    <h3>Sub Total</h3>
                    <h3>{{session('booking')->sub_total}}</h3>
                </div>
                <div class='grid grid-cols-2 text-fifth text-sm justify-center'>
                    <h3>Service Charge</h3>
                    <h3>{{session('booking')->estimated_tax}}</h3>
                </div>
                <div class='grid grid-cols-2 text-fifth text-sm justify-center'>
                    <h3>Total price</h3>
                    <h3>{{session('booking')->total_price}}</h3>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div id="overlay2"></div>
</section>