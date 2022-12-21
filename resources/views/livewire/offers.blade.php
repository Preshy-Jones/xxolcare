<section class="mt-14 mb-96">
    <div class="flex">
        <div id="change" class="flex-2 flex flex-col pl-6 py-8 font-semibold text-opacity-50 text-black">
            <a href='{{route('xxolstars.dashboard')}}' class="non-active-block-h">
                <span
                    class="non-active-block-span">1</span>
                My Profile
            </a>
            <a href='{{route('xxolstars.bookings')}}' class="non-active-block-h"><span
                    class="non-active-block-span">2</span>
                Bookings
            </a>
            <a href='{{route('xxolstars.offers')}}' class="active-block-h"><span
                    class="active-block-span">3</span>
                Offers
            </a>

        </div>
        <div></div>
        <div class="flex-3 md:mr-10 shadow-bigCard px-6 py-8 rounded-lgx">
            <div class='flex justify-center'>
                @if ($currentView =='offers')
                <div class='w-4/5'>
                    <h2 class="text-2xl text-center text-secondary font-bold mb-2">Offers</h2>
                    <div>
                        @foreach ($bookings as $booking)
                        <div class='mb-4 '>
                            <div class='flex justify-between items-center'>
                                <h3 class="showbookingsummary cursor-pointer text-fifth font-semibold text-lg mb-4"> {{$booking['service_name']}}
                                </h3>
                                <button wire:click="openSummary({{ $booking['id'] }}, '{{ $booking['service_name'] }}')" class='bg-primary rounded-md font-semibold text-fifth text-sm h-6 px-6'>
                                    View offer
                                </button>
                            </div>
                            <div class="flex text-fifth text-xs text-opacity-60 mb-8">
                                <h2 class="text-sm mr-auto text-black">{{$booking['address']}}</h2>
                                @if ($booking['date'])
                                    <h5 class="ml-auto">{{$booking['date']}}</h5>
                                @endif
                                @if ($booking['time'])
                                    <h5 class='ml-3'>{{$booking['time']}}</h5>
                                @endif
                            </div>
                            {{-- <div class='flex justify-center'>
                                <h3 class="text-sm font-bold text-primary  mr-20">Accept</h3>
                                <h3 class="text-sm font-bold text-fifth text-opacity-60">Decline</h3>
                            </div> --}}
                        </div>
                        @endforeach
                
                    </div>
                    {{-- <div class='flex justify-center'>
                        <h3 class="text-lg font-semibold text-fifth text-opacity-50 mr-6">Prev</h3>
                        <h3 class="text-lg font-semibold text-primary">Next</h3>
                    </div> --}}
                </div>
                @endif
                @if($currentView =='summary')
                <div>
                    <h2 class="text-center text-2xl text-secondary font-bold mb-24">Booking summary</h2>
                    {{-- <div class='flex justify-center mb-6'>
                        <button
                            class="bg-white rounded-md font-semibold text-primary border-2 border-primary text-sm  mt-10 py-2 px-8 mr-16">
                            Call
                        </button>
                        <button
                            class="bg-white rounded-md font-semibold text-primary border-2 border-primary text-sm  mt-10 py-2 px-8 ">
                            Message
                        </button>
                    </div> --}}
                    {{-- <h4 class="text-center text-lg text-fifth font-bold mb-16">City</h4> --}}
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
                                 {{$booking[$option['column_name']]}}
                                </h3>
                            </div>
                            @endforeach
                        </div>
                    <div class='flex justify-center mb-6'>
                        <button wire:click="$emit('openModal', 'confirmation-modal',{{ json_encode(['Accept', 'Accepted']) }})"
                            class="bg-white rounded-md font-semibold text-primary border-2 border-primary text-sm  mt-10 py-2 px-8 mr-16">
                            Accept
                        </button>
                        <button wire:click="$emit('openModal', 'confirmation-modal', {{ json_encode(['Decline','Declined']) }})"
                            class="bg-white rounded-md font-semibold text-primary border-2 border-primary text-sm  mt-10 py-2 px-8 ">
                            Decline
                        </button>
                    </div>
                    <h5 class="text-center cursor-pointer text-primary mt-8" wire:click="viewOffers">Go back</h5>
                    </div>
                </div>
                @endif
            </div>

        </div>
        <div class="flex-2">
            <a href="{{ route('xxolstars.logout')}}" class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
            Log out
        </a>
        </div>
    </div>
    <div id="overlay4"></div>
</section>