<section class="mt-14 mb-96">
    <div class="flex">
        <div class="flex-2 flex flex-col pl-6 py-8 font-semibold text-opacity-50 text-black">
            <a href='{{route('xxolstars.dashboard')}}' class="non-active-block-h">
                <span
                    class=" non-active-block-span">1</span>
                My Profile
            </a>
            <a href='{{route('xxolstars.bookings')}}' class="active-block-h"><span
                    class="active-block-span">2</span>
                Bookings
            </a>
            <a href='{{route('xxolstars.offers')}}' class="non-active-block-h"><span
                    class=" non-active-block-span">3</span>
                Offers
            </a>

        </div>
        <div></div>
        <div class="flex-3 md:mr-10 shadow-bigCard px-6 py-8 rounded-lgx">
            <div class="relative">
                @if ($currentView == 'bookings')
                <div >
                    <h2 class="text-2xl text-center text-secondary font-bold mb-2">Booking</h2>
                    <div class="flex justify-around mb-4 text-fifth text-opacity-50">
                        <h3 wire:click='viewInProgress' class="cursor-pointer
                        @if ($progressView == 'inProgress')
                        text-primary font-bold
                        @endif
                        ">In progress({{count($inProgressBookings)}})</h3>
                        <h3 wire:click='viewCompleted' class='cursor-pointer
                        @if($progressView == 'completed')
                        text-primary font-bold
                        @endif
                        '>Completed({{count($completedBookings)}})</h3>
                        {{-- <h3 wire:click='viewFailed' class='text-primary font-bold'>failed(10)</h3> --}}
                    </div>
                    @if($progressView == 'inProgress')
                    @foreach($inProgressBookings as $booking)
                    <div>
                        <div class='flex justify-between mb-4'>
                            <div>
                                <h3 class="showbookingstatus cursor-pointer text-fifth font-semibold text-lg">{{$booking['service_name']}}
                                </h3>
                            </div>
                            <h3 class="text-fifth font-semibold">{{$booking['total_price']}}</h3>
                            <button 
                            wire:click="openProgressUpdateSection({{ $booking['id'] }}, '{{ $booking['service_name'] }}')"
                            class='bg-primary rounded-md font-semibold text-fifth text-sm h-6 px-6'>
                                Update Booking progress
                            </button>
                        </div>
                        <div class="flex justify-between text-fifth text-xs text-opacity-60">
                            <h5>{{$booking['date']}}</h5>
                            <h5>{{$booking['time']}}</h5>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    @if($progressView == 'completed')
                    @foreach($completedBookings as $booking)
                    <div>
                        <div class='flex justify-between mb-4'>
                            <div>
                                <h3 class="showbookingstatus cursor-pointer text-fifth font-semibold text-lg">{{$booking['service_name']}}
                                </h3>
                            </div>
                            <h3 class="text-fifth font-semibold">{{$booking['total_price']}}</h3>
                            <button 
                            wire:click="openProgressUpdateSection({{ $booking['id'] }}, '{{ $booking['service_name'] }}')"
                            class='bg-primary rounded-md font-semibold text-fifth text-sm h-6 px-6'>
                                Update Booking progress
                            </button>
                        </div>
                        <div class="flex justify-between text-fifth text-xs text-opacity-60">
                            <h5>{{$booking['date']}}</h5>
                            <h5>{{$booking['time']}}</h5>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    {{-- <div class='flex justify-center'>
                        <h3 class="text-lg font-semibold text-fifth text-opacity-50 mr-6">Prev</h3>
                        <h3 class="text-lg font-semibold text-primary">Next</h3>
                    </div> --}}
                </div>
                @endif
                {{-- Update progress --}}
                @if($currentView =='progressUpdateSection')
                <div>
                    <form  wire:submit.prevent="updateProgress"
                    class="flex flex-col text-sm text-fifth" >
                        <h2 class="text-secondary font-bold text-center text-lg">In progress</h2>
                        <div class='flex flex-col mb-4'>
                            <label>XXOL Star current status</label>
                            <input
                            wire:click="$emit('openModal', 'booking-tracker-modal')"
                             class="pl-2 border border-fourth py-3 rounded-md" type="text"
                                value="{{ ($chosenProgress =='') ? $booking['progress'] : $chosenProgress}}">
                        </div>
                        <div class='mb-6'>
                            <h3 class='text-sm font-bold text-fifth mb-3'>Service title</h3>
                            <h5 class='text-sm text-fifth'>{{$booking['service_name']}}</h5>
                        </div>
                        <div class='mb-6'>
                            <h3 class='text-sm font-bold text-fifth mb-3'>Price</h3>
                            <h5 class='text-sm text-fifth'>{{$booking['total_price']}}</h5>
                        </div>
                        <div>
                            <h3 class='text-sm font-bold text-fifth mb-3'>Transaction Secret code</h3>
                            <h5 class='text-sm text-fifth'>{{$booking['reference']}}</h5>
                        </div>
                        {{-- <p class="text-primary font-bold text-center text-2xl mt-32">download service details</p> --}}
                        <button type='submit'
                            class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
                            Update Progress
                        </button>

                        <h5 wire:click='viewBookings' class="text-primary font-bold text-center text-lg mt-32 cursor-pointer">Go back</h5>
                        {{-- <input
                            class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit"
                            type="submit" value="Proceed"> --}}
                    </form>
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