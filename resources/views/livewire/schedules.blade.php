<section class="pt-14 relative pb-56">
    {{-- <h1>{{ $service}}</h1> --}}
    {{-- <h2>{{session('booking')->id}}</h2> --}}
    <div class="flex items-center md:items-start flex-col md:flex-row">
        <div id="change" class="md:flex-2 pl-6 py-8 font-semibold text-opacity-50 text-black ">
            <a href="{{ url('/bookings/service/'.$service) }}">
                <h2 class="cursor-pointer mb-8 text-sm bgkkk"><span
                    class=" bg-fifth text-sm py-0.5 px-2.3 rounded-secondary text-opacity-100 bg-opacity-50">1</span>
                Service
                details
            </h2>
            </a>
            <h2 id="schedule" class="cursor-pointer mb-8 text-sm text-secondary"><span
                    class=" bg-secondary text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">2</span>
                Schedule
                details
            </h2>
            <h2 id="contact" class="cursor-pointer mb-8 text-sm"><span
                    class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">3</span>
                Contact details
            </h2>
            <h2 id="payment" class="cursor-pointer mb-8 text-sm"><span
                    class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">4</span>
                Payment</h2>
            <h2 id="select" class="cursor-pointer mb-8 text-sm"><span
                    class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">5</span>
                Select
                XXOL
                Star
            </h2>
            <h2 id="booking" class="cursor-pointer text-sm"><span
                    class="bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">6</span>
                Booking details
            </h2>
        </div>

        <div id="schedule_block" class="md:flex-4 md:mr-10 shadow-bigCard px-6 rounded-lgx pb-16 max-h-96">
            <h2 class="text-2xl text-center text-secondary font-bold mb-2">Schedule details</h2>
            <p class="text-xs text-opacity-60 text-black text-center mb-6">when would you like the service to be carried
                out</p>
            {{-- <form class="flex flex-col text-sm text-fifth" action=""> --}}
            {{-- {!! Form::open(['action' => ['\App\Http\Controllers\BookingsController@schedule', $booking->id], 'method' => 'POST', 'class'=>'flex flex-col text-sm text-fifth', 'enctype' => 'multipart/form-data']) !!} --}}

            <form class="flex flex-col text-sm text-fifth" method='POST' action="/schedule/{{$service}}/{{session('booking')->id}}">
                @csrf
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                {{-- @if ($service != "care_givers") --}}
               <div class='flex flex-col mb-4'>

                    <label>Select date of service</label>
                    <input name='date' id='datepicker' class="border border-fourth py-3 rounded-md" type="text">
                </div>
                {{-- @endif --}}

                <div class='flex flex-col mb-4'>
            
                    <label>Select time of service</label>
                    <input name="time" id='timepicker' class="border border-fourth py-3 rounded-md" type="text">
                </div>
     
                <input class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit" type="submit" value="Proceed">
          
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