@extends('layouts.app')

@section('content')
    <div>
        <section class="flex justify-center items-center relative h-120 w-full"
            style="background: url(images/pexels-anton-uniqueton-40212561.png); background-size: cover;">
            <div class="z-1 text-center">
                <h1 class='font-bold  text-white text-7xl'>XXOL Care blog</h1>
                <h3 class=' font-medium text-white text-2xl'>We love you and we care </h3>
            </div>
            <div class='bg-secondary2 bg-opacity-70 absolute  h-full w-full'>

            </div>
        </section>
        <section id='test' class="py-12 flex flex-col items-around">
            <h2 class="text-secondary  font-bold text-4xl text-center">Latest news from us</h2>
            <div class='flex justify-around'>
                <div class='w-fourth'>
                    <div class="flex flex-col mt-10 items-center">
                        <img src="{{ asset('images/frame 97.png') }}" alt="">
                        <h2 class="text-lg mt-4 text-secondary text-center font-bold">Best five(5) benefits of hiring
                            professional
                            cleanig
                            services</h2>
                        <p class="text-sm mt-4 text-center md:text-justify">The inmates are running riots everywhere The
                            inmates are
                            running
                            riots
                            everywhereThe
                            inmates are
                            running riots everywhereThe inmates are running riots everywhereThe inmates are running riots
                            everywhereThe inmates are running riots everywhereThe inmates are running riots everywhereThe
                            inmates are running riots everywhereThe inmates are running riots</p>
                        <a href="#" class="mt-6 text-primary text-lg font-bold">Read More</a>
                    </div>
                    <div class="flex flex-col mt-10 items-center">
                        <img src="{{ asset('images/frame 97.png') }}" alt="">
                        <h2 class="text-lg mt-4 text-secondary text-center font-bold">Best five(5) benefits of hiring
                            professional
                            cleanig
                            services</h2>
                        <p class="text-sm mt-4 text-center md:text-justify">The inmates are running riots everywhere The
                            inmates are
                            running
                            riots
                            everywhereThe
                            inmates are
                            running riots everywhereThe inmates are running riots everywhereThe inmates are running riots
                            everywhereThe inmates are running riots everywhereThe inmates are running riots everywhereThe
                            inmates are running riots everywhereThe inmates are running riots</p>
                        <a href="#" class="mt-6 text-primary text-lg font-bold">Read More</a>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
