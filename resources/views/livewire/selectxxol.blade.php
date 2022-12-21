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
            <h2 id="booking" class="cursor-pointer text-sm"><span
                    class="bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">6</span>
                Booking details
            </h2>
        </div>
        <div id="select_block" class='md:flex-4 md:mr-10 relative shadow-bigCard px-4 rounded-lgx'>

            <h2 class="text-2xl text-center text-secondary font-bold mb-2">Select XXOL Star</h2>
            <p class="text-xs text-opacity-60 text-black text-center mb-6">These are XXOL Stars within close proximity
                of where the service is to be done
            </p>
            <div class='grid grid-cols-3'>
                {{-- <div class='flex flex-col items-center border border-eight rounded-third mr-1.5 py-4 px-3'>
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

                </div> --}}
                @foreach ($xxolstars as $xxolstar)
                <div class='flex flex-col items-center border border-eight rounded-third mr-1.5 py-4 px-3'>
                    <img class="w-9 h-9 rounded-secondary" src="{{ asset($xxolstar['profile_photo']) }}" alt="">
                    {{-- <div>
                        <i class="text-xxxs text-star fas fa-star"></i>
                        <i class="text-xxxs text-star fas fa-star"></i>
                        <i class="text-xxxs text-star fas fa-star"></i>
                        <i class="text-xxxs text-star fas fa-star"></i>
                        <i class="text-xxxs text-star fas fa-star"></i>
                    </div> --}}
                    <h3 class='text-xs text-fifth my-3'>{{$xxolstar['first_name']}}</h3>
                    <p class=' text-xxs text-center mb-8 text-fifth text-opacity-60'>
                    {{
                        \Illuminate\Support\Str::limit($xxolstar['biography'], 50, $end='...')
                    }}
                    </p>
                    <button class="showstarinfo text-primary font-semibold text-xxs"
                    wire:click="$emit('openModal', 'xxolstar-modal', {{ json_encode([$xxolstar['first_name'], $xxolstar['last_name'], $xxolstar['biography'], $xxolstar['profile_photo'], $xxolstar['id']]) }})"
                    {{-- wire:click="updateModal('{{ $xxolstar['first_name'] }}','{{$xxolstar['last_name']}}', '{{ $xxolstar['biography'] }}', '{{$xxolstar['profile_photo']}}')"  --}}
                    >
                        Click to select
                    </button>
                </div>
                @endforeach

            </div>
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