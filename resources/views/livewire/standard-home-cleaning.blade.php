<div id="standard_home_cleaning" class="relative bgkk md:flex-5">
    <div class="px-6 py-8 rounded-lgx shadow-bigCard mr-12 rouded-sm">
        <h2 class="text-2xl text-center text-secondary font-bold mb-2">Service Detail</h2>
        <p class="text-xs text-opacity-60 text-black text-center mb-6">Kindly enter the correct details of the
            services you will be needing</p>
            <form class="flex flex-col text-sm text-fifth" method='POST' action="/service/{{$service}}">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class='flex flex-col mb-4'>
                    <label for='service'>What service(s) would you be needing?</label>
                    <input name='service' id='showmodal' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                </div>
                <div class='flex flex-col mb-4'>
                    <label for='state'>State</label>
                    <input name='state' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Lagos' readonly>
                </div> 
                <div class='flex flex-col mb-4'>
                    <label for='location'>Location of the needed services?</label>
                    <input name='location' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                </div>

                <div class='mb-4'>
                    <label>Do you need cleaning materials?</label>
                    <div class='flex items-center'>
                        <input type="radio" id="Yes" name="need_cleaning_materials" value="Yes"> 
                        <label for="Yes">Yes</label>
                    </div>
                    <div class='flex items-center'>
                        <input type="radio" id="No" name="need_cleaning_materials" value="No"> 
                        <label for="No">No</label>
                    </div>
                </div> 
                <div class='flex flex-col mb-4'>
                    <label for='number_of_rooms'>Number of bedrooms</label>
                    <input name='number_of_rooms' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                </div> 
                <div class='flex flex-col mb-4'>
                    <label for='number_of_toilets'>Number of bathrooms</label>
                    <input name='number_of_toilets' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                    {{-- {{Form::label('number_of_toilets', 'Number of bathrooms')}}
                    {{Form::text('number_of_toilets', '', ['class' => 'pl-2 border border-fourth py-3 rounded-md'])}} --}}
                </div> 
                <div class='flex flex-col mb-4'>
                    {{-- {{Form::label('frequency', 'Frequency of the needed services?')}}
                    {{Form::text('frequency', '', ['class' => 'pl-2 border border-fourth py-3 rounded-md','id'=>'showmodal2'])}} --}}
                    <label>Frequency of the needed services?</label>
                    <input name='frequency' 
                    wire:click="showModal('frequency')" 
                    {{-- id='showmodal2' --}}
                     class="pl-2 border border-fourth py-3 rounded-md" type="text">
                </div> 
                <div class='flex flex-col'>
                    {{-- {{Form::label('special_instructions', 'Any special Instructions?')}}
                    {{Form::textarea('special_instructions', '', ['class' => 'pl-2 border border-fourth rounded-md','cols'=>30,'rows'=>5])}} --}}
                    <label>Any special Instructions?</label>
                    <textarea name='special_instructions' class="pl-2 border border-fourth rounded-md pt-1" cols="30" rows="5"></textarea>
                </div> 
                {{-- {{Form::submit('Proceed', ['class' => 'bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit'])}} --}}
            
                <input
                    class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit"
                    type="submit" value="Proceed">
            </form>
            {{-- {!! Form::close() !!} --}}
    </div>
    <div class="pt-4">
        <h2 class="text-2xl text-center text-secondary font-bold mb-6">Extra Services</h2>
        <div class='flex justify-around'>
            <div onclick="selectExtraService(event)" id="standard" class='flex flex-col items-center'>
                <img onclick="selectExtraService(event)" id="standard"
                    class="w-14 h-14 object-cover object-primary mb-2 rounded-secondary"
                    src="{{ asset('images/frame 97.png') }}" alt="">
                <h5 onclick="selectExtraService(event)" id="standard"
                    class='text-center text-sm text-fifth font-semibold'>Laundry</h5>
            </div>
            <div onclick="selectExtraService(event)" id="standard" class='flex flex-col items-center'>
                <img onclick="selectExtraService(event)" id="standard"
                    class="w-14 h-14 object-cover object-primary mb-2 rounded-secondary"
                    src="{{ asset('images/frame 97.png') }}" alt="">
                <h5 onclick="selectExtraService(event)" id="standard"
                    class='text-center text-sm text-fifth font-semibold'>Car wash</h5>
            </div>
            <div onclick="selectExtraService(event)" id="standard" class='flex flex-col items-center'>
                <img onclick="selectExtraService(event)" id="standard"
                    class="w-14 h-14 object-cover object-primary mb-2 rounded-secondary"
                    src="{{ asset('images/frame 97.png') }}" alt="">
                <h5 onclick="selectExtraService(event)" id="standard"
                    class='text-center text-sm text-fifth font-semibold'>Ironing</h5>
            </div>
            <div onclick="selectExtraService(event)" id="standard" class='flex flex-col items-center'>
                <img onclick="selectExtraService(event)" id="standard"
                    class="w-14 h-14 object-cover object-primary mb-2 rounded-secondary"
                    src="{{ asset('images/frame 97.png') }}" alt="">
                <h5 onclick="selectExtraService(event)" id="standard"
                    class='text-center text-sm text-fifth font-semibold'>Deep cleaning</h5>
            </div>
        </div>
    </div>
    <div id="overlay" class="{{$overlayStatus}}"}></div>
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
    <livewire:drop-down-modal  modal='frequency' :modalStatus="$modalStatus" />
    <livewire:drop-down-modal modal='bedroom' :modalStatus="$modalStatus"/>
</div>