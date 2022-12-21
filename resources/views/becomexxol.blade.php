@extends('layouts.app')

@section('content')
    <div>
        <section class="flex justify-center items-center relative h-120 w-full"
            style="background: url(images/pexels-anton-uniqueton-40212561.png); background-size: cover;">
            <div class="z-1 text-center">
                <h1 class='font-bold  text-white text-7xl'>Would you like to Join us</h1>
                <h3 class=' font-medium text-white text-2xl'>We love you and we care </h3>
            </div>
            <div class='bg-secondary2 bg-opacity-70 absolute  h-full w-full'>

            </div>
        </section>
        <section class="py-12 flex flex-col items-around">
            <h2 class="text-secondary mb-6 font-bold text-4xl text-center">HOW TO BECOME A XXOLSTAR
            </h2>
            <div class="flex justify-around">
                <div class="w-4/5 flex flex-col">
                    <ul class="list-disc mb-20">
                        <li class="mb-5">Register online <a class="text-primary font-bold" href="{{route('xxolstars.register')}}">HERE</a>

                        </li>
                        <li class="mb-5"> Pay registration fee of N5200.00

                        </li>
                        <li class="mb-5"> You will be given a form to provide guarantors

                        </li>
                        <li class="mb-5"> You will undergo training and be equipped with Customized T-shirts and cleaning
                            materials

                        </li>
                        <li>For every successful job carried out, you will receive 35% commission</li>
                    </ul>
                    <a class="bg-primary self-center font-semibold rounded-lg text-fifth py-2 px-8" href="#">Become a
                        XXOLSTAR</a>
                </div>
            </div>
        </section>

    </div>
@endsection
