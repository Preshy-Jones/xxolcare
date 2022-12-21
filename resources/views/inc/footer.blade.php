<footer class="flex flex-col text-justify  sm:flex-row items-center sm:items-start justify-around py-10">
    <div class="w-3/4 sm:w-primary">
        <div class="flex mb-3">
            <img class="w-16" src="{{ asset('images/xxol-logo-update-2.png') }}">
            {{-- <img src="{{ asset('images/flame-cleaning-robot.png') }}" width="50px">
            <h2 class="text-primary text-2xl">Care</h2> --}}
        </div>
        <p class="text-fifth text-opacity-50 text-sm">We offer you the best of the best</p>
    </div>
    <div class='w-3/4 sm:w-primary'>
        <h2 class='text-2xl text-fifth font-semibold mb-3'>About</h2>
        <h4 class=''><a class="text-fifth text-lg text-opacity-50" href="{{ url('/about') }}">About us</a></h4>
        <h4 class='text-fifth text-lg'><a class="text-fifth text-lg text-opacity-50"
                href="{{ url('/contact') }}">Contact us</a></h4>
        <h4 class='text-fifth text-lg'><a class="text-fifth text-lg text-opacity-50"
                href="{{ url('/terms') }}">Terms And Conditions</a></h4>        
    </div>
    <div class='w-3/4 sm:w-primary'>
        <h2 class='text-2xl text-fifth font-semibold mb-3'>Company</h2>
        {{-- <h4 class='text-fifth text-lg'><a class="text-fifth text-lg text-opacity-50" href="{{ url('/xxolstar') }}">Why
                XXOL care?</a></h4> --}}
        <h4 class='text-fifth text-lg'><a class="text-fifth text-lg text-opacity-50"
                href="{{ url('/partner') }}">Partner with us</a></h4>
        <h4 class='text-fifth text-lg'><a class="text-fifth text-lg text-opacity-50" href="{{ url('/faq') }}">FAQ</a>
        </h4>
        <h4 class='text-fifth text-lg'><a class="text-fifth text-lg text-opacity-50"
                href="{{ url('/blog') }}">Blog</a></h4>
    </div>
    <div class='w-3/4 sm:w-primary'>
        <h2 class='text-2xl text-fifth font-semibold mb-3'>Get in touch</h2>
        <h4 class='text-fifth text-lg'><a class="text-fifth text-lg text-opacity-50" href="#"> Subscribe to our news letter</a>
        </h4>
        <form action="">
            <input class='border text-sme border-fourth rounded-2xl   pl-3.1 py-1 ' placeholder="Email Address"
                type="text">
            <button type="submit" class="relative  right-6 top-1">
                <i class="fas fa-caret-right text-secondary text-2xl"></i>
            </button>
        </form>
    </div>
</footer>
