    <section class="mt-14">
        <div class="flex">
            <div class="flex-2 flex flex-col pl-6 py-8 font-semibold text-opacity-50 text-black">
                <a href='{{route('xxolstars.dashboard')}}' class="active-block-h">
                    <span
                        class="active-block-span">1</span>
                    My Profile
                </a>
                <a href='{{route('xxolstars.bookings')}}' class="non-active-block-h"><span
                        class=" non-active-block-span">2</span>
                    Bookings
                </a>
                <a href='{{route('xxolstars.offers')}}' class="non-active-block-h"><span
                        class="non-active-block-span">3</span>
                    Offers
                </a>

            </div>
            <div></div>
            <div id="myprofile_block" class="flex-3 md:mr-10 shadow-bigCard px-6 py-8 rounded-lgx profk">
                <h2 class="text-secondary font-bold text-center text-lg mb-4">My profile</h2>
                <div class='flex justify-center mb-6'>
                    <img src="{{ $viewedPhoto }}" alt="" width="100">
                </div>
                <div class='flex justify-center'>
                    <form wire:submit.prevent="edit" >
                        <div class='flex justify-between'>
                            <div class='flex flex-col mb-3 w-full mr-4'> 
                                <label class='text-fifth text-sm mb-1'
                                    for="">First
                                    name</label>
                                <input type="text" class="rounded-md border  py-3 border-fourth" required autocomplete="first_name" wire:model='first_name' autofocus>            
                                @error('first_name')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class='flex flex-col mb-3 w-full ml-4'> <label class='text-fifth  text-sm mb-1'
                                    for="">Last
                                    name</label>
                                <input type="text" class="rounded-md border  py-3 border-fourth" wire:model='last_name' required autocomplete="last_name" autofocus>
                                @error('last_name')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1' for="">Phone
                                number</label>
                            <input type="text" class="rounded-md border  py-3 border-fourth" wire:model='phone' required autocomplete="last_name">
                            @error('phone')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-3'>
                            <label class='text-fifth  text-sm mb-1' for="">Location
                            </label>
                            <div class='flex justify-between'>
                                <div>
                                    <div>
                                        <input type="checkbox"  value='Victoria Island' wire:model="location">
                                        <label>Victoria Island</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Ikoyi' wire:model="location">
                                        <label>Ikoyi</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Lekki' wire:model="location">
                                        <label>Lekki</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Ajah' wire:model="location">
                                        <label>Ajah</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Ogudu' wire:model="location">
                                        <label>Ogudu</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Ikeja GRA' wire:model="location">
                                        <label>Ikeja GRA</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Maryland' wire:model="location">
                                        <label>Maryland</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Illupeju' wire:model="location">
                                        <label>Illupeju</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Festac' wire:model="location">
                                        <label>Festac</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Surulere' wire:model="location">
                                        <label>Surulere</label><br>
                                    </div>

                                </div>
                                <div>
                                    <div>
                                        <input type="checkbox"  value='Opebi' wire:model="location">
                                        <label>Opebi</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"   value='Magodo' wire:model="location">
                                        <label>Magodo</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Yaba' wire:model="location">
                                        <label>Yaba</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Gbagada' wire:model="location">
                                        <label>Gbagada</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"   value='Ogba' wire:model="location">
                                        <label>Ogba</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Oba Akran' wire:model="location">
                                        <label>Oba Akran</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Ojodu' wire:model="location">
                                        <label>Ojodu</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Oregun' wire:model="location">
                                        <label>Oregun</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox"  value='Alausa' wire:model="location">
                                        <label>Alausa</label><br>
                                    </div>
                                </div>
                            </div>
                            @error('location')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1' for="">Email
                                Address</label>
                            <input type="email" class="rounded-md border  py-3 border-fourth" wire:model='email' required autocomplete="email">
                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        
                        <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1'
                                for="">State </label>
                            <input type="text" class="rounded-md border  py-3 border-fourth" wire:model='state' required autocomplete="state" readonly>
                            @error('state')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-3'>
                             <label class='text-fifth  text-sm mb-1'
                            for="">Country </label>
                            <input type="text" class="rounded-md border  py-3 border-fourth" wire:model='country' required autocomplete="country" readonly>
                            @error('country')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-3'> 
                            <label class='text-fifth  text-sm mb-1' for="">Date of birth
                            </label>
                            <input type="date" class="rounded-md border  py-3 border-fourth" wire:model='date_of_birth' required autocomplete="date_of_birth">
                            @error('date_of_birth')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1'
                                for="">Address</label>
                            <input type="text" class="rounded-md border  py-3 border-fourth" wire:model='address'  autocomplete="address">
                            @error('address')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-3'>
                            <label class='text-fifth  text-sm mb-1' for="">Bio</label>
                            <textarea class="border border-fourth rounded-md" cols="30" rows="5" wire:model='biography' required autocomplete="biography"></textarea>
                            @error('biography')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class='flex flex-col mb-3'>
                            <label class='text-fifth  text-sm mb-1' for="">Specialization</label>
                            <div class='flex justify-between'>
                                <div>
                                    <div>
                                        <input type="checkbox" value='Standard Home cleaning' wire:model="specialization">
                                        <label>Standard Home cleaning</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox" value='Care Givers' wire:model="specialization">
                                        <label>Care Giver</label><br>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <input type="checkbox"  value='Salon' wire:model="specialization">
                                        <label>Salon Services</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class='mt-4'>
                                <h3 class='text-xs'>Spa services</h3>
                                <div class="grid grid-cols-2 ">
                                    <div>
                                        <input type="checkbox" value='Normal/Swedish massage' wire:model="specialization">
                                        <label>Normal/Swedish massage</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox" value='Deep massage' wire:model="specialization">
                                        <label>Deep massage</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox" value='Pre-natal massage' wire:model="specialization">
                                        <label>Pre-natal massage</label><br>
                                    </div>
                                    <div>
                                        <input type="checkbox" value='Trigger and Reflexology' wire:model="specialization">
                                        <label>Trigger and Reflexology</label><br>
                                    </div>
                                </div>
                            </div>
                            @json($specialization)
                            @error('specialization')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div>
                            <div wire:loading wire:target="photo">Uploading...</div>
                            <div wire:loading wire:target="edit">Saving...</div>
                            <label for="photo" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('Profile Photo') }}:
                            </label>
                            <input type="file" wire:model="photo">
                            @error('photo') <span class="error">{{ $message }}</span> @enderror 
                            <br>    
                            @if ($photo)
                            Photo Preview:
                            <img src="{{ $photo->temporaryUrl() }}">
                            @endif                    
                        </div>

                        <div class='flex justify-center'>
                            <button type="submit"
                            class="bg-white self-center rounded-md font-semibold text-primary border-2 border-primary text-sm  mt-10 py-2 px-12 submit">
                            Edit Profile
                            </button>
                        </div>
                    </form>
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
