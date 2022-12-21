@extends('layouts.app')

@section('content')
    <main class="  sm:mt-10">
        <div class="flex justify-around items-center">
            <div class="w-4/5">
                <section class="flex flex-col sm:flex-row">
                    <div class="bg-secondary2 flex-1 mb-4 sm:mb-0">
                        <div class="flex justify-center">
                            <a href="{{ url('/') }}"><img src="{{ asset('images/xxol_care_logo.png') }}"></a>
                        </div>
                        <h1 class="text-white text-center font-bold text-6.5xl">Welcome back</h1>
                        <img src="{{ asset('images/cleaner1.png') }}" alt="">
                    </div>
                    <div class="flex-1 break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                        <header class="font-bold text-center text-5xl text-secondary  sm:rounded-t-md">
                            {{ __('Login') }}
                        </header>
                        <form class="flex flex-col px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                            action="{{ route('admin.check') }}">
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
                                <label for="email" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                    {{ __('E-Mail') }}:
                                </label>

                                <input id="email" type="email"
                                    class="form-input w-full rounded-md border border-fourth @error('email')  @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="flex flex-wrap">
                                <label for="password" class="block text-fifth text-sm mb-2 sm:mb-4">
                                    {{ __('Password') }}:
                                </label>

                                <input id="password" type="password"
                                    class="form-input w-full rounded-md border @error('password')  @enderror"
                                    name="password" required>

                                @error('password')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="flex items-center">
                                <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                    <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <span class="ml-2">{{ __('Remember Me') }}</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a class="text-sm text-primary text-opacity-80 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="flex flex-wrap justify-center">
                                <button type="submit"
                                    class="select-none font-bold whitespace-no-wrap py-2 px-20 rounded-lg text-base leading-normal no-underline text-fifth bg-primary hover:bg-blue-700 sm:py-2">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('register'))
                                    <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                        {{ __("Don't have an account?") }}
                                        <a class="text-primary hover:text-blue-700 no-underline hover:underline"
                                            href="{{ route('admin.register') }}">
                                            {{ __('Register') }}
                                        </a>
                                    </p>
                                @endif
                            </div>
                        </form>
                    </div>

                </section>
            </div>
        </div>
    </main>
@endsection
