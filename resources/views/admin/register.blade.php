@extends('layouts.app')

@section('content')
    <main class=" sm:mt-10">
        <div class="flex justify-around items-center">
            <div class="w-4/5">
                <section class="flex flex-col sm:flex-row ">
                    <div class="bg-secondary2 flex-1 mb-4">
                        <div class="flex justify-center">
                            <a href="{{ url('/') }}"><img src="{{ asset('images/xxol_care_logo.png') }}"></a>
                        </div>
                        <h1 class="text-white text-center font-bold text-6.5xl">Welcome back</h1>
                        <img src="{{ asset('images/cleaner2.png') }}" alt="">
                    </div>
                    <div class="flex-1 break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                        <header class="font-bold text-center text-5xl text-secondary  sm:rounded-t-md">
                            {{ __('Register') }}
                        </header>

                        <form class="flex flex-col px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                            method="POST"
                            action="{{ route('admin.save') }}">
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
                                <label for="name" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                    {{ __('Name') }}:
                                </label>

                                <input id="name" type="text"
                                    class="form-input w-full rounded-md border border-fourth  @error('name')  border-red-500 @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
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
                                        href="{{ route('admin.login') }}">
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
