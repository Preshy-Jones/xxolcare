<section class="mt-14 mb-32">
    <div class="flex">
        <div id="change" class="flex-2 flex flex-col pl-6 py-8 font-semibold text-opacity-50 text-black">
            <a href="{{route('home')}}" class="cursor-pointer mb-8 text-sm">
                <span
                    class=" bg-fifth text-sm py-0.5 px-2.3 rounded-secondary  bg-opacity-50">1</span>
                My Profile
            </a>
            <a href="{{route('userbookings')}}" class="cursor-pointer mb-8 text-sm text-secondary"><span
                    class=" bg-secondary text-sm py-0.5 px-2 rounded-secondary text-opacity-100 bg-opacity-50">2</span>
                Bookings
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
                    <div class='mb-4'>
                        <div class='flex mb-4'>
                            <div class='mr-auto'>
                                <h3 class="showbookingstatus cursor-pointer text-fifth font-semibold text-lg">{{$booking['service_name']}}
                                </h3>
                            </div>
                            <h3 class="text-fifth font-semibold mr-4">{{$booking['total_price']}}</h3>
                            <button 
                            wire:click="openBookingTrackingSection({{ json_encode(["booking" => $booking]) }})"
                            class='bg-primary rounded-md font-semibold text-fifth text-sm h-6 px-6'>
                                View booking
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
                            wire:click="openBookingTrackingSection({{ json_encode(["booking" => $booking]) }})"
                            {{-- wire:click="openProgressUpdateSection({{ $booking['id'] }}, '{{ $booking['service_name'] }}')" --}}
                            class='bg-primary rounded-md font-semibold text-fifth text-sm h-6 px-6'>
                                View booking
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
                @if($currentView =='bookingTracker')
                <div>
                    <h2 class="text-secondary font-bold text-center text-lg">{{($progressView =='inProgress')? "In Progress" : "Completed"}}</h2>
                    @if($booking['booking']['service_name']==='Salon' || $booking['booking']['service_name']==='Spa' || $booking['booking']['service_name']==='Standard Home cleaning' || $booking['booking']['service_name']==='Care Givers')
                    <div class='flex justify-center mb-6'>
                        <img class="w-20 h-20 object-cover object-primary rounded-secondary"
                        src="{{ asset($xxolstarPhoto) }}" alt="">
                    </div>
                    @endif
                    <div class='flex justify-center text-lg mb-6'>
                        <h3 class='text-lg text-fifth mb-4 mr-2'>{{$booking['booking']['xxol_star_name']}}</h3>
                        {{-- <h3 class='text-lg text-fifth mb-4'>{{$booking['last_name']}}</h3> --}}
                    </div>
                    @if($booking['booking']['service_name']==='Salon' || $booking['booking']['service_name']==='Spa' || $booking['booking']['service_name']==='Standard Home cleaning' || $booking['booking']['service_name']==='Care Givers')
                    <div class="stepper-wrapper">
                        <div class="stepper-item text-fifth font-bold {{($selectedBookingProgressValue>=1) ? "completed" : "text-opacity-50"}}">
                          <div class="step-counter"></div>
                          <div class="step-name text-xs">Yet to move</div>
                        </div>
                        <div class="stepper-item text-fifth font-bold {{($selectedBookingProgressValue>=2) ? "completed" : "text-opacity-50"}}">
                          <div class="step-counter"></div>
                          <div class="step-name text-xs">On the way</div>
                        </div>
                        <div class="stepper-item text-fifth font-bold {{($selectedBookingProgressValue>=3) ? "completed" : "text-opacity-50"}}">
                          <div class="step-counter"></div>
                          <div class="step-name text-xs">Arrived</div>
                        </div>
                        <div class="stepper-item text-fifth font-bold {{($selectedBookingProgressValue>=4) ? "completed" : "text-opacity-50"}}">
                          <div class="step-counter"></div>
                          <div class="step-name text-xs">Working</div>
                        </div>
                        <div class="stepper-item text-fifth font-bold {{($selectedBookingProgressValue>=5) ? "completed" : "text-opacity-50"}}">
                          <div class="step-counter"></div>
                          <div class="step-name text-xs">Done</div>
                        </div>
                        <div class="stepper-item text-fifth font-bold {{($selectedBookingProgressValue>=6) ? "completed" : "text-opacity-50"}}">
                          <div class="step-counter"></div>
                          <div class="step-name text-xs">Departed</div>
                        </div>
                      </div>
                    @endif
                    <div>
                        @foreach ($bookingSummary[$service] as $option)
                        <div class='grid grid-cols-2'>
                            <h3 class="text-fifth text-opacity-60 mb-4">{{$option['name']}}</h3>
                            <h3
                            @if($option['id'])
                            id="{{$option['id']}}"
                            @endif
                             class="text-fifth mb-4">
                             {{$booking['booking'][$option['column_name']]}}
                            </h3>
                        </div>
                        @endforeach
                    </div>
                    <div class='text-center text-sm mt-24'>
                        <h5>Service title:</h5>
                        <p>{{$booking['booking']['service_name']}}</p>
                        @if($booking['booking']['service_name']==='Salon' || $booking['booking']['service_name']==='Spa' || $booking['booking']['service_name']==='Standard Home cleaning' || $booking['booking']['service_name']==='Care Givers')
                        <h5>Transaction Secret ID:</h5>
                        <h5>{{$booking['booking']['reference']}}</h5>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="flex-2">
        </div>
    </div>
</section>