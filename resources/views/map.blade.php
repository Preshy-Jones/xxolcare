@extends('layouts.app')

@section('content')

<nav class="bg-white shadow mb-10">
    <div x-data="{ isOpen: false }" class="max-w-3xl mx-auto py-3 px-6 md:px-0 md:flex md:justify-between md:items-center">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <img src="#" class="h-8 shadow rounded-full" alt="">
                <a href="#" class="text-gray-800 text-xl hover:text-gray-700 ml-4">David Grzyb</a>
            </div>
            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button 
                    type="button" 
                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" 
                    aria-label="toggle menu"
                    @click="isOpen = !isOpen"
                >
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu, if mobile set to hidden -->
        <div :class="isOpen ? 'show' : 'hidden'" class="md:flex items-center md:block mt-4 md:mt-0">
            <div class="flex flex-col md:flex-row md:ml-6">
                <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0" href="#">Home</a>
                <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0" href="#">About</a>
                <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0" href="#">Contact</a>
            </div>
        </div>
    </div>
</nav>
@endsection