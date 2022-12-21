<main class=" sm:mt-10">
    <div class="flex justify-around items-center">
        <div class="w-4/5">
            <section class="flex flex-col sm:flex-row ">
                <div class="bg-secondary flex-1 mb-4">
                    <div class="flex justify-center">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/xxol-logo-update-1.png') }}"></a>
                    </div>
                    <h1 class="text-white text-center font-bold text-6.5xl">Welcome back</h1>
                    <img src="{{ asset('images/cleaner2.png') }}" alt="">
                </div>
                <div class="flex-1 break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                    <header class="font-bold text-center text-5xl text-secondary  sm:rounded-t-md">
                        {{ __('Register') }}
                    </header>
                    <form class="flex flex-col px-6 space-y-6 sm:px-10 sm:space-y-8"
                        {{-- method="POST" --}}
                        action="{{ route('xxolstars.save') }}"
                        wire:submit.prevent="save" enctype='multipart/form-data'>
                        @csrf
                        @if(Session::get('success'))
                        <div class="bg-green-400 text-white">
                           {{ Session::get('success') }}
                        </div>
                        @endif
                        @if(Session::get('fail'))
                        <div class="bg-red-700 text-white py-3 pl-2">
                        {{ Session::get('fail') }}
                        </div>
                        @endif
                        <div class="flex flex-wrap">
                            <label for="first_name" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('First Name') }}:
                            </label>

                            <input id="first_name" type="text"
                                class="form-input w-full rounded-md border border-fourth  @error('first_name')  border-red-500 @enderror"
                                name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name"  wire:model="first_name"   autofocus>

                            @error('first_name')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <label for="last_name" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('Last Name') }}:
                            </label>

                            <input id="last_name" type="text"
                                class="form-input w-full rounded-md border border-fourth  @error('last_name')  border-red-500 @enderror"
                                name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" wire:model="last_name" autofocus>

                            @error('last_name')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <label for="email" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                class="form-input w-full rounded-md border border-fourth @error('email')  @enderror"
                                name="email" value="{{ old('email') }}" wire:model="email" required autocomplete="email">

                            @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <label for="password" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                class="form-input w-full rounded-md border border-fourth @error('password') @enderror"
                                name="password" wire:model="password" required autocomplete="new-password">

                            @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <label for="phone" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('Phone Number') }}:
                            </label>

                            <input id="phone" type="text"
                                class="form-input w-full rounded-md border border-fourth  @error('phone')  border-red-500 @enderror"
                                name="phone" value="{{ old('phone') }}" wire:model="phone" required autocomplete="phone" autofocus>

                            @error('phone')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-col flex-wrap">
                            <label for="location" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('Location') }}:
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
                        <div class="flex flex-wrap">
                            <label for="address" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('Address') }}:
                            </label>

                            <input id="address" type="text"
                                class="form-input w-full rounded-md border border-fourth  @error('address')  border-red-500 @enderror"
                                name="address" value="{{ old('address') }}" wire:model="address" required autocomplete="address" autofocus>

                            @error('address')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <label for="state" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('State') }}:
                            </label>

                            <input id="state" type="text"
                                class="form-input w-full rounded-md border border-fourth  @error('state')  border-red-500 @enderror"
                                name="state" value="Lagos" wire:model="state" required autocomplete="state" readonly autofocus>

                            @error('state')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <label for="country" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('Country') }}:
                            </label>

                            <input id="country" type="text"
                                class="form-input w-full rounded-md border border-fourth  @error('country')  border-red-500 @enderror"
                                name="country" value="Nigeria" wire:model="country" required autocomplete="country" readonly>

                            @error('country')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <label for="date_of_birth" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('Date of birth') }}:
                            </label>

                            <input id="date_of_birth" type="date"
                                class="form-input w-full rounded-md border border-fourth  @error('date_of_birth')  border-red-500 @enderror"
                                name="date_of_birth" value="{{ old('date_of_birth') }}" wire:model="date_of_birth" autocomplete="date_of_birth">

                            @error('date_of_birth')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>                        
                        <div class="flex flex-col flex-wrap">
                            <label for="biography" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('Biography') }}:
                            </label>
                            <textarea name='biography' class="pl-2 border border-fourth rounded-md pt-1" cols="30" rows="10" wire:model="biography" autocomplete="biography" autofocus>{{ old('biography') }}
                            </textarea>
                            @error('biography')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>                        
                        <div class="flex flex-col flex-wrap">
                            <label for="specialization" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('specialization') }}:
                            </label>
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
                            @error('specialization')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div>
                            <div wire:loading wire:target="photo">Uploading...</div>
                            <div wire:loading wire:target="save">Saving...</div>
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

                        {{-- <div class="flex flex-wrap">
                            <label for="password-confirm" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password"
                                class="form-input w-full rounded-md border border-fourth" name="password_confirmation"
                                required autocomplete="new-password">
                        </div> --}}

                        <div class="flex flex-wrap justify-center">
                            <button type="submit"
                                class="select-none font-bold whitespace-no-wrap py-2 px-20 rounded-lg text-base leading-normal no-underline text-fifth bg-primary hover:bg-blue-700 sm:py-2">
                                Register
                            </button>

                            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                {{ __('Already have an account?') }}
                                <a class="text-primary hover:text-blue-700 no-underline hover:underline"
                                    href="{{ route('xxolstars.login') }}">
                                    {{ __('Login') }}
                                </a>
                            </p>
                        </div>
                    </form>
                </div>

            </section>
        </div>
    </div>
</main>