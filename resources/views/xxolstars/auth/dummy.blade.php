@extends('layouts.app')

@section('content')
    <main class=" sm:mt-10">
        <div class="flex justify-around items-center">
            <div class="w-4/5">
                <section class="flex flex-col sm:flex-row ">
                    <div class="bg-secondary flex-1 mb-4">
                        <div class="flex justify-center">
                            <a href="{{ url('/') }}"><img src="{{ asset('images/xxol_care_logo.png') }}"></a>
                        </div>
                        <h1 class="text-white text-center font-bold text-6.5xl">Become a Star</h1>
                        <img src="{{ asset('images/cleaner2.png') }}" alt="">
                    </div>
                    <div class="flex-1 break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                        {{-- <header class="font-bold text-center text-5xl text-secondary  sm:rounded-t-md">
                            {{ __('Register') }}
                        </header> --}}

                     
            

                        <form class="flex flex-col px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                            action="{{ route('xxolstars.save') }}">
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
                            {{-- <div class="flex flex-wrap">
                                <label for="first_name" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                    {{ __('First Name') }}:
                                </label>

                                <input id="first_name" type="text"
                                    class="form-input w-full rounded-md border border-fourth  @error('first_name')  border-red-500 @enderror"
                                    name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

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
                                    name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

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
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    class="form-input w-full rounded-md border border-fourth @error('password')  @enderror"
                                    name="password" required autocomplete="new-password">

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
                                    name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div> --}}

                            <div class="flex flex-col flex-wrap">
                              <label for="location" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                  {{ __('Location') }}:
                              </label>
                              <div class='flex justify-between'>
                                  <div>
                                      <div>
                                          <input type="checkbox" name="location[]" wire:click="levelClicked" value="Victoria Island/ Ikoyi">
                                          <label>Victoria Island/ Ikoyi</label><br>
                                      </div>
                                      <div>
                                          <input type="checkbox" name="location[]" wire:click="levelClicked" value="Lekki/Ajah">
                                          <label>Lekki/Ajah</label><br>
                                      </div>
                                      <div>
                                          <input type="checkbox" name="location[]" wire:click="levelClicked" value="Ogudu/Ikeja GRA">
                                          <label>Ogudu/Ikeja GRA</label><br><br>
                                      </div>
                                  </div>
                                  <div>
                                      <div>
                                          <input type="checkbox" name="location[]" wire:click="levelClicked" value="Maryland/Opebi">
                                          <label>Maryland/Opebi</label><br>
                                      </div>
                                      <div>
                                          <input type="checkbox" name="location[]"  value="Magodo">
                                          <label>Magodo</label><br>
                                      </div>
                                      <div>
                                          <input type="checkbox" name="location[]" value="GBAGADA/OGBA/OBA AKRAN">
                                          <label>GBAGADA/OGBA/OBA AKRAN</label><br><br>
                                      </div>
                                  </div>
                              </div>
                              @error('location')
                              <p class="text-red-500 text-xs italic mt-4">
                                  {{ $message }}
                              </p>
                              @enderror
                          </div>
                            {{-- <div class="flex flex-wrap">
                                <label for="address" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                    {{ __('Address') }}:
                                </label>

                                <input id="address" type="text"
                                    class="form-input w-full rounded-md border border-fourth  @error('address')  border-red-500 @enderror"
                                    name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

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
                                    name="state" value="Lagos" required autocomplete="state" readonly autofocus>

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
                                    name="country" value="Nigeria" required autocomplete="country" readonly autofocus>

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

                                <input id="date_of_birth" type="text"
                                    class="form-input w-full rounded-md border border-fourth  @error('date_of_birth')  border-red-500 @enderror"
                                    name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                                @error('date_of_birth')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>           
                            <div class="flex flex-wrap">
                                <label for="specialization" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                    {{ __('Specialization') }}:
                                </label>

                                <input id="specialization" type="text"
                                    class="form-input w-full rounded-md border border-fourth  @error('specialization')  border-red-500 @enderror"
                                    name="specialization" value="{{ old('specialization') }}" required autocomplete="specialization" autofocus>

                                @error('specialization')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div> --}}


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
                                    {{ __('Register') }}
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
@endsection