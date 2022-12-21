<section x-data="{address:''}" class="pt-14 relative pb-56">
    <h1 id='servicesKey' class='hidden'>{{$service}}</h1>
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
        <div  id="standard_home_cleaning"  class="relative bgkk md:flex-5 {{$serviceVisible['standard_home_cleaning']}}">
            <div class="px-6 py-8 rounded-lgx shadow-bigCard md:mr-12 rouded-sm">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Service Detail</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">Kindly enter the correct details of the
                    services you will be needing</p>
                    <form class="flex flex-col text-sm text-fifth" method='POST' action="/service/{{$service}}" autocomplete="off">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="total_price" id='st_total_price' />
                        <input type="hidden" name="sub_total" id='st_subs_total' />
                        <input type="hidden" name="estimated_tax" id='st_estimated_tax' />
                        <input type="hidden" name="extra_services" id='st_extra_services' />
                        {{-- <div class='flex flex-col mb-4'>
                            <label for='service'>What service(s) would you be needing?</label>
                            <input name='service' id='showmodal' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        </div> --}}
                        <div class='flex flex-col mb-4'>
                            <label for='state'>State</label>
                            <input name='state' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Lagos' readonly>
                        </div> 
                        <div class='flex flex-col mb-4 stlocation'>
                            <label for='location'>Location of the needed services?</label>
                            <input id='show_st_location_modal' name='location' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Victoria Island' >
                            @error('location')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='address'>Address</label>
                            <input x-model='address' name='address' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                            @error('address')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label>Frequency of the needed services?</label>
                            <input name='frequency' id="show_st_frequency_modal" class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('frequency')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div> 
                        <div class='mb-4'>
                            <label>Do you need cleaning materials?</label>
                            <div class='flex items-center'>
                                <input type="radio" id="yes" name="need_cleaning_materials" value="Yes"> 
                                <label for="Yes">Yes</label>
                            </div>
                            <div class='flex items-center'>
                                <input type="radio" id="no" name="need_cleaning_materials" value="No"> 
                                <label for="No">No</label>
                            </div>
                            @error('need_cleaning_materials')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ "Please specify if you will need cleaning materials" }}
                            </p>
                            @enderror
                        </div> 
                        <div class='flex flex-col mb-4 bedroom'>
                            <label for='number_of_rooms'>Number of bedrooms</label>
                            <input name='number_of_rooms' id="show_st_room_modal" class="pl-2 border border-fourth py-3 rounded-md" type="number" >
                            @error('number_of_rooms')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div> 
                        <div class='flex flex-col mb-4 bathroom'>
                            <label for='number_of_bathrooms'>Extra Bathrooms</label>
                            <input name='number_of_bathrooms' id="show_st_bathroom_modal" class="pl-2 border border-fourth py-3 rounded-md" type="number">
                            @error('number_of_bathrooms')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div> 

                        <div class='flex flex-col'>
                            {{-- {{Form::label('special_instructions', 'Any special Instructions?')}}
                            {{Form::textarea('special_instructions', '', ['class' => 'pl-2 border border-fourth rounded-md','cols'=>30,'rows'=>5])}} --}}
                            <label>Any special Instructions?</label>
                            <textarea name='special_instructions' class="pl-2 border border-fourth rounded-md pt-1" cols="30" rows="5">{{ old('special_instructions') }}</textarea>
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
                    <div class='flex flex-col items-center'>
                        <div class=" border-8 rounded-secondary">
                            <i onclick="selectExtraService(event)" id="laundry" class="fas fa-check mx-4 my-4 text-2xl"></i>
                        </div>
                        <h5 class='text-center text-sm text-fifth font-semibold'>Laundry</h5>
                    </div>
                    <div class='flex flex-col items-center'>
                        <div class=" border-8 rounded-secondary">
                            <i onclick="selectExtraService(event)" id="car_wash" class="fas fa-check mx-4 my-4 text-2xl"></i>
                        </div>
                        <h5 class='text-center text-sm text-fifth font-semibold'>Car wash</h5>
                    </div>
                    <div class='flex flex-col items-center'>
                        <div class=" border-8 rounded-secondary">
                            <i onclick="selectExtraService(event)" id="ironing" class="fas fa-check mx-4 my-4 text-2xl"></i>
                        </div>
                        <h5 class='text-center text-sm text-fifth font-semibold'>Ironing</h5>
                    </div>
                </div>
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
                    <div onclick="selectService(event)" id="deep_msg" class='flex flex-col items-center'>
                        <img onclick="selectService(event)" id="deep_msg"
                            class="w-14 h-14 object-cover object-primary rounded-secondary"
                            src="{{ asset('images/frame 97.png') }}" alt="">
                        <h5 onclick="selectService(event)" id="deep_msg"
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
            <div id="st_frequency_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Frequency of the needed services?</h2>
                <div class="grid">
                    <p id="one_time" onclick="selectFrequency(event)"
                        class='mb-6  pl-14 font-medium text-lg cursor-pointer'>
                        One-time Service</p>
                    <p id="week" onclick="selectFrequency(event)"
                        class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Twice Weekly
                    </p>
                    <p id="month" onclick="selectFrequency(event)" class='font-medium text-lg pl-14 cursor-pointer'>Twice Monthly</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneFrequency"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="st_room_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of Bedrooms</h2>
                <div class="grid">
                    <p id="one_rm" onclick="selectRoom(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_rm" onclick="selectRoom(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_rm" onclick="selectRoom(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_rm" onclick="selectRoom(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_rm" onclick="selectRoom(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneRoom"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="st_bathroom_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of Bathrooms</h2>
                <div class="grid">
                    <p id="zero_bt" onclick="selectBathroom(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>0</p>
                    <p id="one_bt" onclick="selectBathroom(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_bt" onclick="selectBathroom(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_bt" onclick="selectBathroom(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_bt" onclick="selectBathroom(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_bt" onclick="selectBathroom(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneBathroom"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="st_location_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of Bathrooms</h2>
                <div class="grid">
                    <p id="vic" onclick="selectstLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Victoria Island</p>
                    <p id="ikoyi" onclick="selectstLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Ikoyi</p>
                    <p id="lekki" onclick="selectstLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Lekki</p>
                    <p id="ajah" onclick="selectstLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Ajah</p>
                    <p id="ogudu" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogudu</p>
                    <p id="ikeja" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ikeja GRA</p>
                    <p id="maryland" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Maryland</p>
                    <p id="opebi" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Opebi</p>
                    <p id="yaba" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Yaba</p>
                    <p id="magodo" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Magodo</p>
                    <p id="gbagada" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Gbagada</p>
                    <p id="ogba" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogba</p>
                    <p id="akran" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Oba Akran</p>
                    <p id="ill" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Illupeju</p>
                    <p id="fest" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Festac</p>
                    <p id="suru" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Surulere</p>
                    <p id="ojod" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ojodu</p>
                    <p id="ore" onclick="selectstLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Oregun</p>
                    <p id="ala" onclick="selectstLocation(event)" class='font-medium text-lg pl-14 cursor-pointer'>Alausa</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donestLocation"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
        </div>
        <div id="care_givers" class="relative bgkk md:flex-5 {{$serviceVisible['care_givers']}}">
            <div class="px-6 py-8 rounded-lgx shadow-bigCard md:mr-12 rouded-sm">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Service Detail</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">Kindly enter the correct details of the
                    services you will be needing</p>
                    <form class="flex flex-col text-sm text-fifth" method='POST' action="/service/{{$service}}" autocomplete="off">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="total_price" id='cg_total_price' />
                        <input type="hidden" name="sub_total" id='cg_subs_total' />
                        <input type="hidden" name="estimated_tax" id='cg_estimated_tax' />
                        <div class='flex flex-col mb-4'>
                            <label for='service'>What service(s) would you be needing?</label>
                            <input id='showcgservicesmodal' name='service' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('service')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='state'>State</label>
                            <input name='state' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Lagos' readonly>
                            @error('state')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div> 
                        <div class='flex flex-col mb-4'>
                            <label for='location'>Location of the needed services?</label>
                            <input id='showcgLocationmodal' name='location' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Victoria Island' >
                            @error('location')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='address'>Address</label>
                            <input  x-model='address' name='address' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('address')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='age'>Age</label>
                            <input id='show_cg_age_modal' name='age' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('age')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='frequency'>Frequency of the needed services?</label>
                            <input id='showcgfrequencymodal' name='frequency' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                            @error('frequency')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='number_of_people'>Number of people</label>
                            <input id='show_cg_people_modal' name='number_of_people' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('number_of_people')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div> 
                        <div class='flex flex-col mb-4'>
                            <label for='language'>Language</label>
                            <input id='show_cg_language_modal' name='language' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('language')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div> 
                        <div class='flex flex-col mb-4'>
                            <label for='local_dialect'>If local dialect, specify</label>
                            <input name='local_dialect' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                        </div> 
                        <div class='flex flex-col'>
                            <label for='special_instructions'>Any special Instructions?</label>
                            <textarea name="special_instructions" class='pl-2 border border-fourth rounded-md' cols="30" rows="5"></textarea>
                        </div>            
                        <input class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit" type="submit" value="Proceed">         

                    </form>
            </div>
            <div id="cgoverlay"></div>
            <div id="cgservicesmodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">What services would you be needing?</h2>
                <div class="grid">
                    <p id="sitter" onclick="selectcgServices(event)"
                        class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Home nanny/Baby sitter</p>
                    <p id="aged" onclick="selectcgServices(event)"
                        class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Care for the aged.
                    </p>
                    <p id="special_needs" onclick="selectcgServices(event)" class='font-medium text-lg pl-14 cursor-pointer'>Care for people with special needs.</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donecgServices"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="cgLocationmodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Location</h2>
                <div class="grid">
                    <p id="vic_cg" onclick="selectcgLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Victoria Island</p>
                    <p id="ikoyi_cg" onclick="selectcgLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Ikoyi</p>
                    <p id="lekki_cg" onclick="selectcgLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Lekki</p>
                    <p id="ajah_cg" onclick="selectcgLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Ajah</p>
                    <p id="ogudu_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogudu</p>
                    <p id="ikeja_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ikeja GRA</p>
                    <p id="maryland_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Maryland</p>
                    <p id="opebi_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Opebi</p>
                    <p id="yaba_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Yaba</p>
                    <p id="magodo_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Magodo</p>
                    <p id="gbagada_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Gbagada</p>
                    <p id="ogba_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogba</p>
                    <p id="akran_cg" onclick="selectcgLocation(event)" class='font-medium text-lg pl-14 cursor-pointer'>Oba Akran</p>
                    <p id="ill_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Illupeju</p>
                    <p id="fest_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Festac</p>
                    <p id="suru_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Surulere</p>
                    <p id="ojod_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ojodu</p>
                    <p id="ore_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Oregun</p>
                    <p id="ala_cg" onclick="selectcgLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Alausa</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donecgLocation"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="cgfrequencymodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Frequency of the needed services?</h2>
                <div class="grid">
                    <p id="one_off" onclick="selectCGFrequency(event)"
                        class='mb-6 font-medium text-lg pl-14 cursor-pointer'>One-off</p>
                    <p id="in" onclick="selectCGFrequency(event)"
                        class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Live in
                    </p>
                    <p id="out" onclick="selectCGFrequency(event)" class='font-medium text-lg pl-14 cursor-pointer'>Live out</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneCgFrequency"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="cg_people_modal" class='hidden absolute top-96 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of People</h2>
                <div class="grid">
                    <p id="one_cgp" onclick="selectPeople(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_cgp" onclick="selectPeople(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_cgp" onclick="selectPeople(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_cgp" onclick="selectPeople(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_cgp" onclick="selectPeople(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donePeople"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="cg_language_modal" class='hidden absolute top-96 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Language</h2>
                <div class="grid">
                    <p id="english" onclick="selectLanguage(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>English</p>
                    <p id="french" onclick="selectLanguage(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>French</p>
                    <p id="local_dialect" onclick="selectLanguage(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Local Dialect</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneLanguage"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="cg_age_modal" class='hidden absolute top-48 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Language</h2>
                <div class="grid">
                    <p id="0_10" onclick="selectAge(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>0-10</p>
                    <p id="10_20" onclick="selectAge(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>10-20</p>
                    <p id="20_30" onclick="selectAge(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>20-30</p>
                    <p id="30_40" onclick="selectAge(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>30-40</p>
                    <p id="40_50" onclick="selectAge(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>40-50</p>
                    <p id="50_60" onclick="selectAge(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>50-60</p>
                    <p id="60_70" onclick="selectAge(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>60-70</p>
                    <p id="70_80" onclick="selectAge(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>70-80</p>
                    <p id="80_90" onclick="selectAge(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>80-90</p>
                    <p id="90_100" onclick="selectAge(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>90-100</p>
                    <p id="100_plus" onclick="selectAge(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>100+</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneAge"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
        </div>
        <div id="spa_service" class="relative bgkk md:flex-5 {{$serviceVisible['spa_service']}}">
            <div class="px-6 py-8 rounded-lgx shadow-bigCard md:mr-12 rouded-sm">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Service Detail</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">Kindly enter the correct details of the
                    services you will be needing</p>
                    <form class="flex flex-col text-sm text-fifth" method='POST' action="/service/{{$service}}" autocomplete="off">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="total_price" id='spa_total_price' />
                        <input type="hidden" name="sub_total" id='spa_subs_total' />
                        <input type="hidden" name="estimated_tax" id='spa_estimated_tax' />
                        <div class='flex flex-col mb-4'>
                            <label for='service'>What service(s) would you be needing?</label>
                            <input name='service' id='showspServicesmodal' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('service')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='state'>State</label>
                            <input name='state' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Lagos' readonly>
                            @error('service')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div> 
                        <div class='flex flex-col mb-4'>
                            <label for='location'>Location of the needed services?</label>
                            <input id='showspLocationmodal' name='location' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Victoria Island' >
                            @error('location')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='address'>Address</label>
                            <input  x-model='address' name='address' class="pl-2 border border-fourth py-3 rounded-md" type="text" wire:model='address'>
                            @error('address')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        {{-- <div class='flex flex-col mb-4'>
                            <label for='frequency'>Frequency</label>
                            <input id='showspfrequencymodal' name='frequency' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('frequency')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div> --}}
                        {{-- <div class='flex flex-col mb-4'>
                            <label for='date'>Date</label>
                            <input name='date' class="pl-2 border border-fourth py-3 rounded-md" type="date">
                        </div>  --}}
                        <div class='flex flex-col mb-4'>
                            <label for='gender'>Gender</label>
                            <input id='showspGendermodal' name='gender' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                            @error('gender')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div> 
                        <div class='flex flex-col'>
                            <label for='special_instructions'>Any special Instructions?</label>
                            <textarea class='pl-2 border border-fourth rounded-md' name="special_instructions"  cols="30" rows="5"></textarea>
                        </div> 
                        <input class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit" type="submit" value="Proceed">         
                    </form>
                       
            </div>
            <div id="spoverlay"></div>
            <div id="spServicesmodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">What services would you be needing?</h2>
                <div class="grid">
                    <p id="normal" onclick="selectspServices(event)"
                        class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Normal/Swedish massage</p>
                    <p id="deep" onclick="selectspServices(event)"
                        class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Deep massage
                    </p>
                    <p id="pre" onclick="selectspServices(event)"
                    class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Pre-natal massage
                    </p>
                    <p id="trigger" onclick="selectspServices(event)" class='font-medium text-lg pl-14 cursor-pointer'>Trigger and Reflexology</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donespServices"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            {{-- <div id="spfrequencymodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Frequency of the needed services?</h2>
                <div class="grid">
                    <p id="one_off_sp" onclick="selectSPFrequency(event)"
                        class='mb-6 font-medium text-lg pl-14 cursor-pointer'>One-off</p>
                    <p id="in_sp" onclick="selectSPFrequency(event)"
                        class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Live in
                    </p>
                    <p id="out_sp" onclick="selectSPFrequency(event)" class='font-medium text-lg pl-14 cursor-pointer'>Live out</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneSpFrequency"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div> --}}
            <div id="spGendermodal" class='hidden absolute top-96 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Gender</h2>
                <div class="grid">
                    <p id="male" onclick="selectspGender(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Male</p>
                    <p id="female" onclick="selectspGender(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Female</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donespGender"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="spLocationmodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of Bathrooms</h2>
                <div class="grid">
                    <p id="vic_spa" onclick="selectspLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Victoria Island</p>
                    <p id="ikoyi_spa" onclick="selectspLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Ikoyi</p>
                    <p id="lekki_spa" onclick="selectspLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Lekki</p>
                    <p id="ajah_spa" onclick="selectspLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Ajah</p>
                    <p id="ogudu_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogudu</p>
                    <p id="ikeja_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ikeja GRA</p>
                    <p id="maryland_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Maryland</p>
                    <p id="opebi_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Opebi</p>
                    <p id="yaba_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Yaba</p>
                    <p id="magodo_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Magodo</p>
                    <p id="gbagada_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Gbagada</p>
                    <p id="ogba_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogba</p>
                    <p id="akran_spa" onclick="selectspLocation(event)" class='font-medium text-lg pl-14 cursor-pointer'>Oba Akran</p>
                    <p id="ill_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Illupeju</p>
                    <p id="fest_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Festac</p>
                    <p id="suru_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Surulere</p>
                    <p id="ojod_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ojodu</p>
                    <p id="ore_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Oregun</p>
                    <p id="ala_spa" onclick="selectspLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Alausa</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donespLocation"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
        </div>
        <div id="salon_service" class="relative bgkk md:flex-5 {{$serviceVisible['salon_service']}}">
            <div class="px-6 py-8 rounded-lgx shadow-bigCard md:mr-12 rouded-sm">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Service Detail</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">Kindly enter the correct details of the
                    services you will be needing</p>

                    <form class="flex flex-col text-sm text-fifth" method='POST' action="/service/{{$service}}" autocomplete="off">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="total_price" id='sl_total_price' />
                        <input type="hidden" name="sub_total" id='sl_subs_total' />
                        <input type="hidden" name="estimated_tax" id='sl_estimated_tax' />
                        <div class='flex flex-col mb-4'>
                            <label for='service'>What service(s) would you be needing?</label>
                            <input name='service' id='showslServicesmodal' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('service')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='state'>State</label>
                            <input name='state' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Lagos' readonly>
                            @error('state')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror

                        </div> 
                        <div class='flex flex-col mb-4'>
                            <label for='location'>Location of the needed services?</label>
                            <input id='showslLocationmodal' name='location' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Victoria Island' >
                            @error('location')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='address'>Address</label>
                            <input  x-model='address' name='address' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                            @error('address')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='number_of_persons'>Number of Persons</label>
                            <input id='show_sl_persons_modal' name='number_of_persons' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                            @error('number_of_persons')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        {{-- <div class='flex flex-col mb-4'>
                            <label for='date'>Date</label>
                            <input name='date' class="pl-2 border border-fourth py-3 rounded-md" type="date">
                        </div>  --}}

                        <div class='flex flex-col'>
                            <label for='special_instructions'>Any special Instructions?</label>
                            <textarea class='pl-2 border border-fourth rounded-md' name="special_instructions"  cols="30" rows="5"></textarea>
                        </div> 
                        
                        <input class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit" type="submit" value="Proceed">         
                    </form>
            </div>
            <div id="sloverlay"></div>
            <div id='hair_grooming_prompt' class='hidden text-secondary2 absolute top-96 w-full py-8 bg-white rounded-lg'>
                <p class="font-medium text-lg pl-14">The cost of all hair grooming service will be decided between the customer and xxolstar</p>
                <div class="flex justify-center mt-8">
                    <button id="done_hair_grooming_prompt"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        Proceed
                    </button>
                </div>
            </div>
            <div id="sl_persons_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of People</h2>
                <div class="grid">
                    <p id="one_slp" onclick="selectslPersons(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_slp" onclick="selectslPersons(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_slp" onclick="selectslPersons(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_slp" onclick="selectslPersons(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_slp" onclick="selectslPersons(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneslPersons"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="slServicesmodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">What services would you be needing?</h2>
                <div class="grid">
                    <p id="pedi_madi" onclick="selectslServices(event)"
                        class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Pedicure and Manicure</p>
                    <p id="makeup" onclick="selectslServices(event)"
                        class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Make-up
                    </p>
                    <p id="male_hair_grooming" onclick="selectslServices(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Male Hair Grooming</p>
                    <p id="female_hair_grooming" onclick="selectslServices(event)" class='font-medium text-lg pl-14 cursor-pointer'>Female Hair Grooming</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneslServices"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="slLocationmodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Location</h2>
                <div class="grid">
                    <p id="vic_sl" onclick="selectslLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Victoria Island</p>
                    <p id="ikoyi_sl" onclick="selectslLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Ikoyi</p>
                    <p id="lekki_sl" onclick="selectslLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Lekki</p>
                    <p id="ajah_sl" onclick="selectslLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Ajah</p>
                    <p id="ogudu_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogudu</p>
                    <p id="ikeja_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ikeja GRA</p>
                    <p id="maryland_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Maryland</p>
                    <p id="opebi_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Opebi</p>
                    <p id="yaba_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Yaba</p>
                    <p id="magodo_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Magodo</p>
                    <p id="gbagada_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Gbagada</p>
                    <p id="ogba_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogba</p>
                    <p id="akran_sl" onclick="selectslLocation(event)" class='font-medium text-lg pl-14 cursor-pointer'>Oba Akran</p>
                    <p id="ill_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Illupeju</p>
                    <p id="fest_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Festac</p>
                    <p id="suru_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Surulere</p>
                    <p id="ojod_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ojodu</p>
                    <p id="ore_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Oregun</p>
                    <p id="ala_sl" onclick="selectslLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Alausa</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneslLocation"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
        </div>
        <div id="office_cleaning" class="relative bgkk md:flex-5 {{$serviceVisible['office_cleaning']}}">
            <div class="px-6 py-8 rounded-lgx shadow-bigCard md:mr-12 rouded-sm">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Service Detail</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">Kindly enter the correct details of the
                    services you will be needing</p>

                <form class="flex flex-col text-sm text-fifth" method='POST' action="/service/{{$service}}" autocomplete="off">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class='flex flex-col mb-4'>
                        <label for='state'>State</label>
                        <input name='state' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Lagos' readonly>
                        @error('state')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div> 
                    <div class='flex flex-col mb-4'>
                        <label for='location'>Location of the needed services?</label>
                        <input id='showoffLocationmodal' name='location' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                        @error('location')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class='flex flex-col mb-4'>
                        <label for='address'>Address</label>
                        <input  x-model='address' name='address' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        @error('address')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class='flex flex-col mb-4'>
                        <label for='number_of_floors'>Number of Floors</label>
                        <input id='show_off_floors_modal' name='number_of_floors' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        @error('number_of_floors')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class='flex flex-col mb-4'>
                        <label for='number_of_rooms'>Number of Rooms</label>
                        <input id='show_off_rooms_modal' name='number_of_rooms' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        @error('number_of_rooms')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class='flex flex-col mb-4'>
                        <label for='number_of_bathrooms'>Number of Bathrooms</label>
                        <input id='show_off_bathrooms_modal' name='number_of_bathrooms' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        @error('number_of_bathrooms')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class='flex flex-col mb-4'>
                        <label for='frequency'>Frequency of the needed services?</label>
                        <input id='show_off_frequency_modal' name='frequency' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                        @error('frequency')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div> 
                    {{-- <div class='flex flex-col mb-4'>
                        <label for='date'>Date</label>
                        <input name='date' class="pl-2 border border-fourth py-3 rounded-md" type="date">
                        @error('service')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>  --}}
                    <div class='flex flex-col mb-4'>
                        <label for='scheduled_date_for_site_visit'>Scheduled date for site visit</label>
                        <input name='scheduled_date_for_site_visit' class="pl-2 border border-fourth py-3 rounded-md" type="date">                                
                        @error('scheduled_date_for_site_visit')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div> 
                    <input class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit" type="submit" value="Proceed">         
                </form>
            </div>
            <div id="of_overlay"></div>
            <div id="off_floors_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of Floors</h2>
                <div class="grid">
                    <p id="one_offi" onclick="selectoffFloors(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_offi" onclick="selectoffFloors(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_offi" onclick="selectoffFloors(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_offi" onclick="selectoffFloors(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_offi" onclick="selectoffFloors(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneoffFloors"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="off_rooms_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of rooms</h2>
                <div class="grid">
                    <p id="one_offi_rm" onclick="selectoffRooms(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_offi_rm" onclick="selectoffRooms(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_offi_rm" onclick="selectoffRooms(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_offi_rm" onclick="selectoffRooms(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_offi_rm" onclick="selectoffRooms(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneoffRooms"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="off_bathrooms_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of rooms</h2>
                <div class="grid">
                    <p id="one_offi_bm" onclick="selectoffBathrooms(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_offi_bm" onclick="selectoffBathrooms(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_offi_bm" onclick="selectoffBathrooms(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_offi_bm" onclick="selectoffBathrooms(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_offi_bm" onclick="selectoffBathrooms(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneoffBathrooms"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="off_frequency_modal" class='hidden absolute top-96 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Frequency of the needed services?</h2>
                <div class="grid">
                    <p id="one_time_off" onclick="selectoffFrequency(event)"
                        class='mb-6  pl-14 font-medium text-lg cursor-pointer'>
                        One-time Service</p>
                    <p id="week_off" onclick="selectoffFrequency(event)"
                        class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Twice Weekly
                    </p>
                    <p id="month_off" onclick="selectoffFrequency(event)" class='font-medium text-lg pl-14 cursor-pointer'>Twice Monthly</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneoffFrequency"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="offLocationmodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Location</h2>
                <div class="grid">
                    <p id="vic_off" onclick="selectoffLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Victoria Island</p>
                    <p id="ikoyi_off" onclick="selectoffLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Ikoyi</p>
                    <p id="lekki_off" onclick="selectoffLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Lekki</p>
                    <p id="ajah_off" onclick="selectoffLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Ajah</p>
                    <p id="ogudu_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogudu</p>
                    <p id="ikeja_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ikeja GRA</p>
                    <p id="maryland_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Maryland</p>
                    <p id="opebi_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Opebi</p>
                    <p id="yaba_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Yaba</p>
                    <p id="magodo_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Magodo</p>
                    <p id="gbagada_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Gbagada</p>
                    <p id="ogba_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogba</p>
                    <p id="akran_off" onclick="selectoffLocation(event)" class='font-medium text-lg pl-14 cursor-pointer'>Oba Akran</p>
                    <p id="ill_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Illupeju</p>
                    <p id="fest_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Festac</p>
                    <p id="suru_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Surulere</p>
                    <p id="ojod_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ojodu</p>
                    <p id="ore_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Oregun</p>
                    <p id="ala_off" onclick="selectoffLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Alausa</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="doneoffLocation"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>

        </div>
        <div id="relocation_assistance" class="relative bgkk md:flex-5 {{$serviceVisible['relocation_assistance']}}">
            <div class="px-6 py-8 rounded-lgx shadow-bigCard md:mr-12 rouded-sm">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Service Detail</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">Kindly enter the correct details of the
                    services you will be needing</p>
                    <form class="flex flex-col text-sm text-fifth" method='POST' action="/service/{{$service}}" autocomplete="off">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class='flex flex-col mb-4'>
                            <label for='type_of_property'>Type of Property</label>
                            <input id='show_type_of_property_modal' name='type_of_property' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('type_of_property')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='address'>Address</label>
                            <input  x-model='address' name='address' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('address')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                    </div>
                        <div class='flex flex-col mb-4'>
                            <label for='from'>From</label>
                            <input  name='from' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('from')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='to'>To</label>
                            <input  name='to' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('to')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='interstate_intrastate'>Interstate or Intrastate?</label>
                            <input id='show_interstate_intrastate_modal' name='interstate_intrastate' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('interstate_intrastate')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='number_of_rooms'>Number of Rooms</label>
                            <input id='show_rel_rooms_modal' name='number_of_rooms' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('number_of_rooms')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        {{-- <div class='flex flex-col mb-4'>
                            <label for='date'>Date</label>
                            <input name='date' class="pl-2 border border-fourth py-3 rounded-md" type="date">
                        </div>  --}}
                        <div class='flex flex-col mb-4'>
                            <label for='scheduled_date_for_site_visit'>Scheduled date for site visit</label>
                            <input name='scheduled_date_for_site_visit' class="pl-2 border border-fourth py-3 rounded-md" type="date">   
                            @error('scheduled_date_for_site_visit')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror                             
                        </div> 
                        <input class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit" type="submit" value="Proceed">         
                    </form>
            </div>
            <div id="relocation_overlay"></div>
            <div id="relocation_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Frequency of the needed services?</h2>
                <div class="grid">
                    <p id="office_rel" onclick="selectrelocation(event)"
                        class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Office</p>
                    <p id="residential_rel" onclick="selectrelocation(event)"
                        class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Residential
                    </p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donerelocation"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="rel_rooms_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of rooms</h2>
                <div class="grid">
                    <p id="one_rel" onclick="selectrelocationRooms(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_rel" onclick="selectrelocationRooms(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_rel" onclick="selectrelocationRooms(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_rel" onclick="selectrelocationRooms(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_rel" onclick="selectrelocationRooms(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donerelocationRooms"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="rel_interstate_intrastate_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of rooms</h2>
                <div class="grid">
                    <p id="rel_interstate" onclick="selectrelocationInterIntra(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Interstate</p>
                    <p id="rel_intrastate" onclick="selectrelocationInterIntra(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Intrastate</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donerelocationInterIntra"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>


        </div>
        <div id="deep_cleaning" class="relative bgkk md:flex-5 {{$serviceVisible['deep_cleaning']}}" autocomplete="off">
            <div class="px-6 py-8 rounded-lgx shadow-bigCard md:mr-12 rouded-sm">
                <h2 class="text-2xl text-center text-secondary font-bold mb-2">Service Detail</h2>
                <p class="text-xs text-opacity-60 text-black text-center mb-6">Kindly enter the correct details of the
                    services you will be needing</p>
                    <form class="flex flex-col text-sm text-fifth" method='POST' action="/service/{{$service}}">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class='flex flex-col mb-4'>
                            <label for='service'>What service(s) would you be needing?</label>
                            <input id='show_dp_services_modal' name='service' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('service')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='state'>State</label>
                            <input name='state' class="pl-2 border border-fourth py-3 rounded-md" type="text" value='Lagos' readonly>
                            @error('state')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div> 
                        <div class='flex flex-col mb-4'>
                            <label for='location'>Location of the needed services?</label>
                            <input id='showdpLocationmodal' name='location' class="pl-2 border border-fourth py-3 rounded-md" type="text" >
                            @error('location')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='address'>Address</label>
                            <input  x-model='address' name='address' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                            @error('address')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='number_of_floors'>Number of Floors</label>
                            <input id ='show_dp_floors_modal' name='number_of_floors' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                            @error('number_of_floors')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='number_of_rooms'>Number of Rooms</label>
                            <input id='show_dp_rooms_modal' name='number_of_rooms' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                            @error('number_of_rooms')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-4'>
                            <label for='number_of_bathrooms'>Number of Bathrooms</label>
                            <input id='show_dp_bathrooms_modal' name='number_of_bathrooms' class="pl-2 border border-fourth py-3 rounded-md" type="text">
                            @error('number_of_bathrooms')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        {{-- <div class='flex flex-col mb-4'>
                            <label for='date'>Date</label>
                            <input name='date' class="pl-2 border border-fourth py-3 rounded-md" type="date">
                        </div>  --}}
                        <div class='flex flex-col mb-4'>
                            <label for='scheduled_date_for_site_visit'>Scheduled date for site visit</label>
                            <input name='scheduled_date_for_site_visit' class="pl-2 border border-fourth py-3 rounded-md" type="date">
                            @error('scheduled_date_for_site_visit')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror                                
                        </div> 
                        <input class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit" type="submit" value="Proceed">         
                    </form>
            </div>
            <div id="dp_overlay"></div>
            <div id="dpServicesmodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">What services would you be needing?</h2>
                <div class="grid">
                    <p id="deep_dp" onclick="selectdpServices(event)"
                        class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Deep cleaning</p>
                    <p id="post_dp" onclick="selectdpServices(event)"
                        class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Post construction cleaning</h3>
                    </p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donedpServices"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="dp_floors_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of Floors</h2>
                <div class="grid">
                    <p id="one_dp" onclick="selectdpFloors(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_dp" onclick="selectdpFloors(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_dp" onclick="selectdpFloors(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_dp" onclick="selectdpFloors(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_dp" onclick="selectdpFloors(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donedpFloors"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="dp_rooms_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of rooms</h2>
                <div class="grid">
                    <p id="one_dp_rm" onclick="selectdpRooms(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_dp_rm" onclick="selectdpRooms(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_dp_rm" onclick="selectdpRooms(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_dp_rm" onclick="selectdpRooms(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_dp_rm" onclick="selectdpRooms(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donedpRooms"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="dp_bathrooms_modal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Number of rooms</h2>
                <div class="grid">
                    <p id="one_dp_bm" onclick="selectdpBathrooms(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>1</p>
                    <p id="two_dp_bm" onclick="selectdpBathrooms(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>2</p>
                    <p id="three_dp_bm" onclick="selectdpBathrooms(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>3</p>
                    <p id="four_dp_bm" onclick="selectdpBathrooms(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>4</p>
                    <p id="five_dp_bm" onclick="selectdpBathrooms(event)" class='font-medium text-lg pl-14 cursor-pointer'>5</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donedpBathrooms"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
            <div id="dpLocationmodal" class='hidden absolute top-44 w-full py-8 bg-white rounded-lg'>
                <h2 class="text-secondary font-bold text-center text-lg mb-8">Location</h2>
                <div class="grid">
                    <p id="vic_dp" onclick="selectdpLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Victoria Island</p>
                    <p id="ikoyi_dp" onclick="selectdpLocation(event)"class='mb-6  pl-14 font-medium text-lg cursor-pointer'>Ikoyi</p>
                    <p id="lekki_dp" onclick="selectdpLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Lekki</p>
                    <p id="ajah_dp" onclick="selectdpLocation(event)" class='mb-6  font-medium text-lg pl-14 cursor-pointer'>Ajah</p>
                    <p id="ogudu_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogudu</p>
                    <p id="ikeja_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ikeja GRA</p>
                    <p id="maryland_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Maryland</p>
                    <p id="opebi_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Opebi</p>
                    <p id="yaba_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Yaba</p>
                    <p id="magodo_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Magodo</p>
                    <p id="gbagada_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Gbagada</p>
                    <p id="ogba_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ogba</p>
                    <p id="akran_dp" onclick="selectdpLocation(event)" class='font-medium text-lg pl-14 cursor-pointer'>Oba Akran</p>
                    <p id="ill_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Illupeju</p>
                    <p id="fest_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Festac</p>
                    <p id="suru_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Surulere</p>
                    <p id="ojod_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Ojodu</p>
                    <p id="ore_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Oregun</p>
                    <p id="ala_dp" onclick="selectdpLocation(event)" class='mb-6 font-medium text-lg pl-14 cursor-pointer'>Alausa</p>
                </div>
                <div class="flex justify-center mt-8">
                    <button id="donedpLocation"
                        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                        That's all
                    </button>
                </div>
            </div>
        </div>
        <div class='md:flex-4 shadow-bigCard flex flex-col justify-evenly px-4 rounded-lgx min-h-primary'>
            <h2 class="text-center text-2xl text-secondary font-bold">Booking summary</h2>
            {{-- <h4 class="text-center text-lg text-fifth font-bold">City</h4> --}}
            <div>
                <h4 class="text-center text-lg text-fifth font-bold mb-2">Service details</h4>
                <div>
                    @foreach ($bookingSummary[$service] as $option)
                    <div class='grid grid-cols-2'>
                        <h3 class="text-fifth text-opacity-60 mb-4">{{$option['name']}}</h3>
                        <h3 id="{{$option['id']}}"
                        @if ($option['name'] == 'Address')
                            x-text='address'
                        @endif
                         class="text-fifth mb-4">
                            @if($option['name'] =='Location')
                                    Victoria Island
                            @elseif ($option['name'] =='Local dialect')
                                    {{$dialect}}
                            @endif
                        </h3>
                    </div>
                    @endforeach

                </div>
            </div>
            @if($service != 'deep_cleaning' && $service != 'relocation_assistance' && $service !='office_cleaning' )
            <div>
                <h4 class="text-lg text-fifth font-bold text-center mb-2">Price details</h4>
                <div class='grid grid-cols-2 text-fifth text-sm justify-center'>
                    <h3>Sub Total</h3>
                    <h3 class='{{$pricingIds[$service]['gen_totals']}}' id='{{$pricingIds[$service]['sub_total']}}'>0</h3>
                </div>
                <div class='grid grid-cols-2 text-fifth text-sm justify-center'>
                    <h3>Service Charge</h3>
                    <h3 class='{{$pricingIds[$service]['gen_totals']}}' id='{{$pricingIds[$service]['tax_total']}}'>0</h3>
                </div>
                <div class='grid grid-cols-2 text-fifth text-sm justify-center'>
                    <h3>Total price</h3>
                    <h3 class='{{$pricingIds[$service]['gen_totals']}}' id='{{$pricingIds[$service]['order_total']}}'>0</h3>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div id="overlay2"></div>
</section>