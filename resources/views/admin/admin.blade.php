@extends('layouts.app')

@section('content')
    <div class='grid grid-cols-7'>
        <section class='col-start-1 col-end-2 bg-secondary pt-8'>
            <div class='mb-10'>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/xxol_care_logo.png') }}">
                </a>
            </div>
            <div class='mb-48 pl-8'>
                <div onclick="changeAdminBlock(event)" id='dashboard' class='flex cursor-pointer justify-items-start  mb-9'>
                    <img id='dashboard' class='relative right-3' src="{{ asset('images/dashboard.svg') }}" alt="">
                    <h3 id='dashboard' class='font-medium text-white text-opacity-60 text-lg'>Dashboard</h3>
                </div>
                <div onclick="changeAdminBlock(event)" id='xxolstarz' class='flex cursor-pointer justify-items-start  mb-9'>
                    <img id='xxolstarz' class='relative right-1.5 mr-1' src="{{ asset('images/xxolstarsicon.svg') }}"
                        alt="">
                    <h3 id='xxolstarz' class='font-medium text-white text-opacity-60 text-lg'>XXOL Stars</h3>
                </div>
                <div onclick="changeAdminBlock(event)" id="documentz" class='flex cursor-pointer justify-items-start  mb-9'>
                    <img id="documentz" class='mr-3' src="{{ asset('images/docicon.svg') }}" alt="">
                    <h3 id="documentz" class='font-medium text-white text-opacity-60 text-lg'>Documents</h3>
                </div>
                <div onclick="changeAdminBlock(event)" id="financez" class='flex cursor-pointer justify-items-start  mb-9'>
                    <img id="financez" class='mr-3' src="{{ asset('images/naira.svg') }}" alt="">
                    <h3 id="financez" class='font-medium text-white text-opacity-60 text-lg'>Finances</h3>
                </div>
                <div onclick="changeAdminBlock(event)" id="userz" class='flex cursor-pointer justify-items-start  mb-9'>
                    <img id="userz" class='mr-3' src="{{ asset('images/usericon.svg') }}" alt="">
                    <h3 id="userz" class='font-medium text-white text-opacity-60 text-lg'>Users</h3>
                </div>
                <div onclick="changeAdminBlock(event)" id='clientz' class='flex cursor-pointer justify-items-start  mb-9'>
                    <img id='clientz' class='mr-3' src="{{ asset('images/clientsicon.svg') }}" alt="">
                    <h3 id='clientz' class='font-medium text-white text-opacity-60 text-lg'>Clients</h3>
                </div>
                <div onclick="changeAdminBlock(event)" id="jobz" class='flex justify-items-start '>
                    <img id="jobz" class='mr-3' src="{{ asset('images/jobsicon.svg') }}" alt="">
                    <h3 id="jobz" class='font-medium text-white text-opacity-60 text-lg'>Jobs</h3>
                </div>
            </div>
            <div class='pl-8'>
                <div class='flex mb-9'>
                    <img class='mr-3' src="{{ asset('images/clientsicon.svg') }}" alt="">
                    <h3 class='font-medium text-white text-opacity-60 text-lg'>Settings</h3>
                </div>
                <div class='flex'>
                    <img class='mr-3' src="{{ asset('images/jobsicon.svg') }}" alt="">
                    <h3 class='font-medium text-white text-opacity-60 text-lg'>Log out</h3>
                </div>
            </div>
        </section>
        <section class='col-start-2 col-end-8 py-8 px-7'>
            <div class='flex justify-between'>
                <div class='flex items-center'>
                    <h2 class='text-sm text-black font-light italic text-opacity-50 mr-2'>Search anything</h2>
                    <img class='relative top-1' src="{{ asset('images/search.svg') }}" alt="">
                </div>
                <div class='grid grid-cols-3'>
                    <img class="justify-self-end mr-2 " src="{{ asset('images/adminpic.svg') }}" alt="">
                    <h2 class='text-sm text-black text-opacity-50'>Oripeloye Timilehin</h2>
                    <div>
                        <a href="{{ route('admin.logout')}}" class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
                            Log out
                        </a>
                    </div>
                </div>
            </div>
            {{-- dashboard --}}
            <div id="dashboard_block" class='adminKey'>
                <div class='flex items-center'>
                    <h2 class='text-4xl text-black font-semibold'>Dashboard</h2>
                </div>
                <div class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>
                    <div class='flex justify-around'>
                        <div class='flex flex-col items-center shadow-bigCard rounded-sm py-12 px-12'>
                            <img src="{{ asset('images/regclients.svg') }}" alt="">
                            <h3 class='font-semibold text-sm text-fifth text-opacity-70'>Registered Clients</h3>
                            <h2 class='font-semibold text-sm text-fifth'>809</h2>
                        </div>
                        <div class='flex flex-col items-center shadow-bigCard rounded-sm py-12 px-12'>
                            <img src="{{ asset('images/numbofjobs.svg') }}" alt="">
                            <h3 class='font-semibold text-sm text-fifth text-opacity-70'>Number of Jobs done</h3>
                            <h2 class='font-semibold text-sm text-fifth'>534</h2>
                        </div>
                        <div class='flex flex-col items-center shadow-bigCard rounded-sm py-12 px-12'>
                            <img src="{{ asset('images/successfullbookings.svg') }}" alt="">
                            <h3 class='font-semibold text-sm text-fifth text-opacity-70'>Successfully Bookings</h3>
                            <h2 class='font-semibold text-sm text-fifth'>809</h2>
                        </div>
                        <div class='flex flex-col items-center shadow-bigCard rounded-sm py-12 px-12'>
                            <img src="{{ asset('images/numbofxxolstars.svg') }}" alt="">
                            <h3 class='font-semibold text-sm text-fifth text-opacity-70'>Number of XXOL Stars</h3>
                            <h2 class='font-semibold text-sm text-fifth'>809</h2>
                        </div>

                    </div>
                </div>
            </div>
            {{-- Finances --}}
            <div id="finances_block" class="hidden">
                <div>
                    <div class='flex justify-between my-5'>
                        <div class='flex items-center'>
                            <h2 class='text-4xl text-black font-semibold'>Finances</h2>
                        </div>
                        <div class='grid grid-cols-2'>
                            <div class='flex items-center mr-6'>
                                <img src="{{ asset('images/sort.svg') }}" alt="">
                                <h4 class="text-sm font-sans2 text-opacity-50 text-black">Sort</h4>
                            </div>
                            <div class='flex items-center'>
                                <img src="{{ asset('images/filter.svg') }}" alt="">
                                <h4 class="text-sm  text-opacity-50 text-black">Filter</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>
                    <div class="grid grid-cols-3 mb-16">
                        <div class="col-start-2 col-end-3">
                            <button
                                class=' bg-secondary2 bg-opacity-30 py-1.5 rounded-3xl text-lg font-semibold text-secondary2 px-6 mr-5'>
                                Income
                            </button>
                            <button class='text-lg font-semibold text-fifth text-opacity-50'>
                                Expenses
                            </button>
                        </div>
                        <h2
                            class='text-lg font-semibold text-primary text-opacity-70 col-start-3 col-end-4  justify-self-center'>
                            Export data
                        </h2>
                    </div>
                    <div>
                        <div class='grid grid-cols-6 justify-items-start border-b border-fifth border-opacity-30'>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Title</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Contact</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Amount</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Date</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Summary</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70 justify-self-center'>Assigned</h3>
                        </div>
                        <div class='grid grid-cols-6 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>N123,435,930.00</h3>
                            <h3 class='text-sm font-medium text-fifth'>20/12/21</h3>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee to join our
                                leagues of partners</h3>
                            <h3 class='text-sm font-medium text-fifth justify-self-center'>Timilehin John</h3>
                        </div>
                        <div class='grid grid-cols-6 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>N123,435,930.00</h3>
                            <h3 class='text-sm font-medium text-fifth'>20/12/21</h3>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee to join our
                                leagues of partners</h3>
                            <h3 class='text-sm font-medium text-fifth justify-self-center'>Timilehin John</h3>
                        </div>
                        <div class='grid grid-cols-6 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>N123,435,930.00</h3>
                            <h3 class='text-sm font-medium text-fifth'>20/12/21</h3>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee to join our
                                leagues of partners</h3>
                            <h3 class='text-sm font-medium text-fifth justify-self-center'>Timilehin John</h3>
                        </div>
                        <div class='grid grid-cols-6 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>N123,435,930.00</h3>
                            <h3 class='text-sm font-medium text-fifth'>20/12/21</h3>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee to join our
                                leagues of partners</h3>
                            <h3 class='text-sm font-medium text-fifth justify-self-center'>Timilehin John</h3>
                        </div>
                        <div class='grid grid-cols-6 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>N123,435,930.00</h3>
                            <h3 class='text-sm font-medium text-fifth'>20/12/21</h3>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee to join our
                                leagues of partners</h3>
                            <h3 class='text-sm font-medium text-fifth justify-self-center'>Timilehin John</h3>
                        </div>
                        <div class='grid grid-cols-6 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>N123,435,930.00</h3>
                            <h3 class='text-sm font-medium text-fifth'>20/12/21</h3>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee to join our
                                leagues of partners</h3>
                            <h3 class='text-sm font-medium text-fifth justify-self-center'>Timilehin John</h3>
                        </div>
                        <div class='grid grid-cols-6 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>N123,435,930.00</h3>
                            <h3 class='text-sm font-medium text-fifth'>20/12/21</h3>
                            <h3 class='text-sm font-medium text-fifth'>Partnership fee to join our
                                leagues of partners</h3>
                            <h3 class='text-sm font-medium text-fifth justify-self-center'>Timilehin John</h3>
                        </div>
                    </div>
                    <div class>
                        <div class='flex justify-end items-center text-xxs text-black text-opacity-50 pr-5'>
                            <p>Rows per page: <span class=" text-black">9</span></p>
                            <p class='ml-8'>1-9 of 1233</p>
                            <img class='ml-16' src="{{ asset('images/addbutton.svg') }}" alt="">
                        </div>
                        <div class='flex justify-center'>
                            <p class='text-sm font-semibold text-secondary text-opacity-30'> <span
                                    class='text-secondary'>1</span> 2
                                3 4</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- clients --}}
            <div id='clients_block' class='hidden'>
                <h1>Clients</h1>
            </div>
            {{-- XXOL STARS --}}
            <div id="xxolstars_block" class="hidden">
                <div class="___class_+?7___">
                    <div>
                        <div class=' flex justify-between my-5'>
                            <div class='flex items-center'>
                                <h2 class='text-4xl text-black font-semibold'>XXOL Stars</h2>
                            </div>
                            <div class='grid grid-cols-2'>
                                <div class='flex items-center mr-6'>
                                    <img src="{{ asset('images/sort.svg') }}" alt="">
                                    <h4 class="text-sm font-sans2 text-opacity-50 text-black">Sort</h4>
                                </div>
                                <div class='flex items-center'>
                                    <img src="{{ asset('images/filter.svg') }}" alt="">
                                    <h4 class="text-sm  text-opacity-50 text-black">Filter</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- xxolstars --}}
                    <div id="xxolstars" class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>
                        <div class='flex justify-center mb-6'>
                            <h3 onclick="changePJ(event)" id='personal' class='pjactive mr-12 PJ'>Personal info
                            </h3>
                            <h3 onclick="changePJ(event)" id='jobhistory' class='pjdisable'>Job
                                History</h3>
                        </div>
                        <div class="___class_+?10___">
                            <div id="personal_block" class='PJb'>
                                <div class='grid grid-cols-13s justify-items-start border-b border-fifth border-opacity-30'>
                                    <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-1 col-end-3'>Name
                                    </h3>
                                    <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-3 col-end-5'>Phone
                                        Number
                                    </h3>
                                    <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-5 col-end-8'>Email
                                        Address
                                    </h3>
                                    <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-8 col-end-11'>
                                        Specialization</h3>
                                    <h3
                                        class='text-lg font-semibold text-fifth text-opacity-70 col-start-11 col-end-12 justify-self-center'>
                                        Country
                                    </h3>
                                    <h3
                                        class='text-lg font-semibold text-fifth text-opacity-70 col-start-12 col-end-13 justify-self-center'>
                                        State</h3>
                                    <h3 class='col-start-13 col-end-14 justify-self-center'></h3>
                                </div>
                                <div
                                    class='grid grid-cols-13s  justify-items-start border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+2348188996821</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-5 col-end-8 '>
                                        titilopejames123@gmail.com
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-8 col-end-11 '>House cleaning,
                                        laundry,
                                        hair making</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-11 col-end-12 justify-self-center'>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-12 col-end-13 justify-self-center'>
                                        Lagos
                                    </h3>
                                    <div class='col-start-13 col-end-14 justify-self-center relative'>
                                        <img id="options" src="{{ asset('images/options.svg') }}" alt="">
                                        <div id="editmodal" class='absolute leftn top-8 shadow-bigCard hidden'>
                                            <h1 id="showedit"
                                                class="bg-secondary2 bg-opacity-40 py-3 font-medium text-fifth pl-8 pr-24 ">
                                                Edit
                                            </h1>
                                            <h1 class='bg-white py-3 font-medium text-fifth pl-8 pr-24'>Delete</h1>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class='grid grid-cols-13s  justify-items-start border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+2348188996821</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-5 col-end-8 '>
                                        titilopejames123@gmail.com
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-8 col-end-11 '>House cleaning,
                                        laundry,
                                        hair making</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-11 col-end-12 justify-self-center'>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-12 col-end-13 justify-self-center'>
                                        Lagos
                                    </h3>
                                    <img class='col-start-13 col-end-14 justify-self-center'
                                        src="{{ asset('images/options.svg') }}" alt="">
                                </div>
                                <div
                                    class='grid grid-cols-13s  justify-items-start border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+2348188996821</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-5 col-end-8 '>
                                        titilopejames123@gmail.com
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-8 col-end-11 '>House cleaning,
                                        laundry,
                                        hair making</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-11 col-end-12 justify-self-center'>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-12 col-end-13 justify-self-center'>
                                        Lagos
                                    </h3>
                                    <img class='col-start-13 col-end-14 justify-self-center'
                                        src="{{ asset('images/options.svg') }}" alt="">
                                </div>
                                <div
                                    class='grid grid-cols-13s  justify-items-start border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+2348188996821</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-5 col-end-8 '>
                                        titilopejames123@gmail.com
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-8 col-end-11 '>House cleaning,
                                        laundry,
                                        hair making</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-11 col-end-12 justify-self-center'>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-12 col-end-13 justify-self-center'>
                                        Lagos
                                    </h3>
                                    <img class='col-start-13 col-end-14 justify-self-center'
                                        src="{{ asset('images/options.svg') }}" alt="">
                                </div>
                                <div
                                    class='grid grid-cols-13s  justify-items-start border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+2348188996821</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-5 col-end-8 '>
                                        titilopejames123@gmail.com
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-8 col-end-11 '>House cleaning,
                                        laundry,
                                        hair making</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-11 col-end-12 justify-self-center'>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-12 col-end-13 justify-self-center'>
                                        Lagos
                                    </h3>
                                    <img class='col-start-13 col-end-14 justify-self-center'
                                        src="{{ asset('images/options.svg') }}" alt="">
                                </div>
                                <div
                                    class='grid grid-cols-13s  justify-items-start border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+2348188996821</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-5 col-end-8 '>
                                        titilopejames123@gmail.com
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-8 col-end-11 '>House cleaning,
                                        laundry,
                                        hair making</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-11 col-end-12 justify-self-center'>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-12 col-end-13 justify-self-center'>
                                        Lagos
                                    </h3>
                                    <img class='col-start-13 col-end-14 justify-self-center'
                                        src="{{ asset('images/options.svg') }}" alt="">
                                </div>
                                <div
                                    class='grid grid-cols-13s  justify-items-start border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+2348188996821</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-5 col-end-8 '>
                                        titilopejames123@gmail.com
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-8 col-end-11 '>House cleaning,
                                        laundry,
                                        hair making</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-11 col-end-12 justify-self-center'>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-12 col-end-13 justify-self-center'>
                                        Lagos
                                    </h3>
                                    <img class='col-start-13 col-end-14 justify-self-center'
                                        src="{{ asset('images/options.svg') }}" alt="">
                                </div>
                                <div
                                    class='grid grid-cols-13s  justify-items-start border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+2348188996821</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-5 col-end-8 '>
                                        titilopejames123@gmail.com
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-8 col-end-11 '>House cleaning,
                                        laundry,
                                        hair making</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-11 col-end-12 justify-self-center'>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-12 col-end-13 justify-self-center'>
                                        Lagos
                                    </h3>
                                    <img class='col-start-13 col-end-14 justify-self-center'
                                        src="{{ asset('images/options.svg') }}" alt="">
                                </div>
                                <div
                                    class='grid grid-cols-13s  justify-items-start border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+2348188996821</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-5 col-end-8 '>
                                        titilopejames123@gmail.com
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-8 col-end-11 '>House cleaning,
                                        laundry,
                                        hair making</h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-11 col-end-12 justify-self-center'>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-12 col-end-13 justify-self-center'>
                                        Lagos
                                    </h3>
                                    <img class='col-start-13 col-end-14 justify-self-center'
                                        src="{{ asset('images/options.svg') }}" alt="">
                                </div>
                            </div>
                            <div id="jobhistory_block" class='hidden'>
                                <div class='grid grid-cols-8s'>
                                    <h3 class="text-lg font-semibold col-start-6 col-end-8 justify-self-center">Commision
                                    </h3>
                                </div>

                                <div class='grid grid-cols-8 border-b border-fifth border-opacity-30'>
                                    <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-1 col-end-3'>
                                        Service
                                        provided</h3>
                                    <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-3 col-end-5'>
                                        Address
                                    </h3>
                                    <h3 class='text-lg font-semibold text-fifth text-opacity-70 '>Amount
                                    </h3>
                                    <h3 class='text-lg font-semibold text-fifth text-opacity-70 '>
                                        XXOL star</h3>
                                    <h3 class='text-lg font-semibold text-fifth text-opacity-70'>
                                        XXOL care
                                    </h3>
                                    <h3 class='text-lg font-semibold text-fifth text-opacity-70'>
                                        Date</h3>
                                </div>
                                <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>2 bed room duplex
                                        cleaning
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+23, Ibikunle street,
                                        yaba
                                        Lagos</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        23/2/2021
                                    </h3>
                                </div>
                                <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>2 bed room duplex
                                        cleaning
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+23, Ibikunle street,
                                        yaba
                                        Lagos</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        23/2/2021
                                    </h3>
                                </div>
                                <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>2 bed room duplex
                                        cleaning
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+23, Ibikunle street,
                                        yaba
                                        Lagos</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        23/2/2021
                                    </h3>
                                </div>
                                <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>2 bed room duplex
                                        cleaning
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+23, Ibikunle street,
                                        yaba
                                        Lagos</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        23/2/2021
                                    </h3>
                                </div>
                                <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>2 bed room duplex
                                        cleaning
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+23, Ibikunle street,
                                        yaba
                                        Lagos</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        23/2/2021
                                    </h3>
                                </div>
                                <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>2 bed room duplex
                                        cleaning
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+23, Ibikunle street,
                                        yaba
                                        Lagos</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        23/2/2021
                                    </h3>
                                </div>
                                <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>2 bed room duplex
                                        cleaning
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+23, Ibikunle street,
                                        yaba
                                        Lagos</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        23/2/2021
                                    </h3>
                                </div>
                                <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>2 bed room duplex
                                        cleaning
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+23, Ibikunle street,
                                        yaba
                                        Lagos</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        23/2/2021
                                    </h3>
                                </div>
                                <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                    <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>2 bed room duplex
                                        cleaning
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>+23, Ibikunle street,
                                        yaba
                                        Lagos</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>N11,500.00</h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        Nigeria
                                    </h3>
                                    <h3 class='text-sm font-medium text-fifth  '>
                                        23/2/2021
                                    </h3>
                                </div>



                            </div>
                        </div>
                        <div>
                            <div class='flex justify-end items-center text-xxs text-black text-opacity-50 pr-5'>
                                <p>Rows per page: <span class=" text-black">9</span></p>
                                <p class='ml-8'>1-9 of 1233</p>
                                <img class='ml-16' src="{{ asset('images/addbutton.svg') }}" alt="">
                            </div>
                            <div class='flex justify-center'>
                                <p class='text-sm font-semibold text-secondary text-opacity-30'> <span
                                        class='text-secondary'>1</span> 2
                                    3 4</p>
                            </div>
                        </div>
                    </div>
                    {{-- editform --}}
                    <div id='editform' class='hidden'>
                        <div class='flex justify-center mb-6'>
                            <h3 onclick="changePJedit(event)" id='personal' class='pjactive mr-12 PJ'>Personal info
                            </h3>
                            <h3 onclick="changePJedit(event)" id='jobhistory' class='pjdisable'>Job
                                History</h3>
                        </div>
                        <div>
                            <div class='flex justify-center'>
                                <img src="{{ asset('images/editprofile.svg') }}" alt="">
                            </div>
                            <div class='flex justify-center'>
                                <form action="" class='flex flex-col w-1/2 shadow-bigCard py-8 px-10 rounded-primary'>
                                    <div class='flex justify-between'>
                                        <div class='flex flex-col mb-3 w-full mr-4'> <label class='text-fifth text-sm mb-1'
                                                for="">First
                                                name</label>
                                            <input type="text" class="rounded-md border  py-3 border-fourth">
                                        </div>
                                        <div class='flex flex-col mb-3 w-full ml-4'> <label class='text-fifth  text-sm mb-1'
                                                for="">Last
                                                name</label>
                                            <input type="text" class="rounded-md border  py-3 border-fourth">
                                        </div>
                                    </div>
                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1' for="">Phone
                                            number</label>
                                        <input type="text" class="rounded-md border  py-3 border-fourth">
                                    </div>
                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1' for="">Email
                                            Address</label>
                                        <input type="email" class="rounded-md border  py-3 border-fourth">
                                    </div>
                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1'
                                            for="">State/country </label>
                                        <input type="text" class="rounded-md border  py-3 border-fourth">
                                    </div>
                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1'
                                            for="">Address</label>
                                        <input type="email" class="rounded-md border  py-3 border-fourth">
                                    </div>
                                    <div class='flex flex-col mb-3'>
                                        <label class='text-fifth  text-sm mb-1' for="">Bio</label>
                                        <textarea class="border border-fourth rounded-md" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1'
                                            for="">Specialization</label>
                                        <input type="email" class="rounded-md border  py-3 border-fourth">
                                    </div>

                                    <input id="closeedit"
                                        class="bg-white self-center rounded-md font-semibold text-primary border-2 border-primary text-sm  mt-10 py-2 px-12 submit"
                                        type="submit" value="Edit Profile">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- jobs --}}
            <div id="jobs_block" class="hidden">
                <div>
                    <div class='flex justify-between my-5'>
                        <div class='flex items-center'>
                            <h2 class='text-4xl text-black font-semibold'>Finances</h2>
                        </div>
                        <div class='grid grid-cols-2'>
                            <div class='flex items-center mr-6'>
                                <img src="{{ asset('images/sort.svg') }}" alt="">
                                <h4 class="text-sm font-sans2 text-opacity-50 text-black">Sort</h4>
                            </div>
                            <div class='flex items-center'>
                                <img src="{{ asset('images/filter.svg') }}" alt="">
                                <h4 class="text-sm  text-opacity-50 text-black">Filter</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>

                    <div class="flex justify-center mb-10">
                        <button class='text-lg font-semibold text-fifth text-opacity-50 mr-28'>
                            All
                        </button>
                        <button
                            class=' bg-secondary2 bg-opacity-30 py-1.5 rounded-3xl text-lg font-semibold text-secondary2 px-6 mr-28'>
                            Active
                        </button>
                        <button class='text-lg font-semibold text-fifth text-opacity-50 mr-28'>
                            Pending
                        </button>
                        <button class='text-lg font-semibold text-fifth text-opacity-50 mr-28'>
                            Declined
                        </button>
                        <button class='text-lg font-semibold text-fifth text-opacity-50'>
                            Done
                        </button>
                    </div>
                    {{-- All --}}
                    <div>
                        <div class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30'>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-1 col-end-3'>Client</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-3 col-end-6'>Service</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-6 col-end-8'>Phone</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-8 col-end-10'>XXOL star
                            </h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-10 col-end-13'>Address
                            </h3>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div
                                class='bg-active bg-opacity-30 text-active w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>Active
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div
                                class='bg-pending bg-opacity-30 text-pending w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>
                                    Pending
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div
                                class='bg-declined bg-opacity-30 text-declined w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>
                                    Declined
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div class='bg-done bg-opacity-30 text-done w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>Done
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div
                                class='bg-active bg-opacity-30 text-active w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>Active
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div
                                class='bg-pending bg-opacity-30 text-pending w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>
                                    Pending
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div
                                class='bg-declined bg-opacity-30 text-declined w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>
                                    Declined
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div class='bg-done bg-opacity-30 text-done w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>Done
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div
                                class='bg-active bg-opacity-30 text-active w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>Active
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div
                                class='bg-pending bg-opacity-30 text-pending w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>
                                    Pending
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div
                                class='bg-declined bg-opacity-30 text-declined w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>
                                    Declined
                                </h3>
                            </div>
                        </div>
                        <div
                            class='grid grid-cols-14s justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-3 col-end-6'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-6 col-end-8'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-8 col-end-10'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth col-start-10 col-end-13'>10, lawani str, Abule Oja
                            </h3>
                            <div class='bg-done bg-opacity-30 text-done w-28 py-1.5 rounded-3xl col-start-13 col-end-15'>
                                <h3 class='text-center'>Done
                                </h3>
                            </div>
                        </div>


                    </div>
                    {{-- Active --}}
                    <div class='hidden'>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30'>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Client</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Service</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Phone</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>XXOL star</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Address</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                    </div>
                    {{-- Pending --}}
                    <div class='hidden'>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30'>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Client</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Service</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Phone</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>XXOL star</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Address</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                    </div>
                    {{-- Declined --}}
                    <div class='hidden'>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30'>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Client</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Service</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Phone</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>XXOL star</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Address</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                    </div>
                    {{-- Done --}}
                    <div class='hidden'>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30'>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Client</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Service</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Phone</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>XXOL star</h3>
                            <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Address</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                        <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                            <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                            <h3 class='text-sm font-medium text-fifth'>Post construction cleaning</h3>
                            <h3 class='text-sm font-medium text-fifth'>2349055380387</h3>
                            <h3 class='text-sm font-medium text-fifth'>Titilayo James</h3>
                            <h3 class='text-sm font-medium text-fifth'>10, lawani str, Abule Oja</h3>
                        </div>
                    </div>
                    <div>
                        <div class='flex justify-end items-center text-xxs text-black text-opacity-50 pr-5'>
                            <div class='flex mr-auto border border-fifth rounded-sm px-4 py-2'>
                                <h3 class='text-sm text-fifth font-medium mr-8'>Bulk Action</h3>
                                <i class="fas fa-caret-down text-sm text-fifth"></i>
                            </div>
                            <p>Rows per page: <span class=" text-black">9</span></p>
                            <p class='ml-8'>1-9 of 1233</p>
                            <img class='ml-16' src="{{ asset('images/addbutton.svg') }}" alt="">
                        </div>
                        <div class='flex justify-center'>
                            <p class='text-sm font-semibold text-secondary text-opacity-30'>
                                <span class='text-secondary'>1</span> 2 3 4
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            {{-- Users --}}
            <div id="users_block" class="hidden">
                <div class='flex items-center'>
                    <h2 class='text-4xl text-black font-semibold'>Users</h2>
                </div>
                <div class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>
                    {{-- Users list --}}
                    <div id='userslist' class=''>
                        <div class='grid grid-cols-4 gap-1.5'>
                            <div class='flex flex-col items-center rounded-lg iflex-1 py-16 shadow-bigCard bg-superadmin'>
                                <h5 class='text-lg font-semibold text-opacity-80 mb-5'>1 User(s)</h5>
                                <h3 class='text-4xl font-semibold text-fifth'>Super Admin</h3>
                            </div>
                            <div class='flex flex-col items-center rounded-lg flex-1 py-16 shadow-bigCard bg-admin'>
                                <h5 class='text-lg font-semibold text-opacity-80 mb-5'>3 User(s)</h5>
                                <h3 class='text-4xl font-semibold text-fifth'>Admin</h3>
                            </div>
                            <div class='flex flex-col items-center rounded-lg flex-1 py-16 shadow-bigCard bg-viewer'>
                                <h5 class='text-lg font-semibold text-opacity-80 mb-5'>3 User(s)</h5>
                                <h3 class='text-4xl font-semibold text-fifth'>Viewer</h3>
                            </div>
                            <div class='flex flex-col items-center rounded-lg flex-1 py-16 shadow-bigCard bg-editor'>
                                <h5 class='text-lg font-semibold text-opacity-80 mb-5'>3 User(s)</h5>
                                <h3 class='text-4xl font-semibold text-fifth'>Editor</h3>
                            </div>
                        </div>
                        <div class='mt-8'>
                            <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30'>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Full name</h3>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Username</h3>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Email Address</h3>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Password</h3>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Privilege</h3>
                            </div>
                            <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                                <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                                <h3 class='text-sm font-medium text-fifth'>preshyjones</h3>
                                <h3 class='text-sm font-medium text-fifth'>adedibuprecious@gmail.com</h3>
                                <h3 class='text-sm font-medium text-fifth'>12345678</h3>
                                <h3 class='text-sm font-medium text-superadmin'>Super Admin</h3>
                            </div>
                            <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                                <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                                <h3 class='text-sm font-medium text-fifth'>preshyjones</h3>
                                <h3 class='text-sm font-medium text-fifth'>adedibuprecious@gmail.com</h3>
                                <h3 class='text-sm font-medium text-fifth'>12345678</h3>
                                <h3 class='text-sm font-medium text-superadmin'>Super Admin</h3>
                            </div>
                            <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                                <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                                <h3 class='text-sm font-medium text-fifth'>preshyjones</h3>
                                <h3 class='text-sm font-medium text-fifth'>adedibuprecious@gmail.com</h3>
                                <h3 class='text-sm font-medium text-fifth'>12345678</h3>
                                <h3 class='text-sm font-medium text-editor'>Editor</h3>
                            </div>
                            <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                                <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                                <h3 class='text-sm font-medium text-fifth'>preshyjones</h3>
                                <h3 class='text-sm font-medium text-fifth'>adedibuprecious@gmail.com</h3>
                                <h3 class='text-sm font-medium text-fifth'>12345678</h3>
                                <h3 class='text-sm font-medium text-admin'>Admin</h3>
                            </div>
                            <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                                <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                                <h3 class='text-sm font-medium text-fifth'>preshyjones</h3>
                                <h3 class='text-sm font-medium text-fifth'>adedibuprecious@gmail.com</h3>
                                <h3 class='text-sm font-medium text-fifth'>12345678</h3>
                                <h3 class='text-sm font-medium text-viewer'>Viewer</h3>
                            </div>
                            <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                                <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                                <h3 class='text-sm font-medium text-fifth'>preshyjones</h3>
                                <h3 class='text-sm font-medium text-fifth'>adedibuprecious@gmail.com</h3>
                                <h3 class='text-sm font-medium text-fifth'>12345678</h3>
                                <h3 class='text-sm font-medium text-superadmin'>Super Admin</h3>
                            </div>
                            <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                                <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                                <h3 class='text-sm font-medium text-fifth'>preshyjones</h3>
                                <h3 class='text-sm font-medium text-fifth'>adedibuprecious@gmail.com</h3>
                                <h3 class='text-sm font-medium text-fifth'>12345678</h3>
                                <h3 class='text-sm font-medium text-viewer'>Viewer</h3>
                            </div>
                            <div class='grid grid-cols-5 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                                <h3 class='text-sm font-medium text-fifth'>Adedibu Precious</h3>
                                <h3 class='text-sm font-medium text-fifth'>preshyjones</h3>
                                <h3 class='text-sm font-medium text-fifth'>adedibuprecious@gmail.com</h3>
                                <h3 class='text-sm font-medium text-fifth'>12345678</h3>
                                <h3 class='text-sm font-medium text-admin'>Admin</h3>
                            </div>
                        </div>
                        <div>
                            <div class='flex justify-end items-center text-xxs text-black text-opacity-50 pr-5'>
                                <p>Rows per page: <span class=" text-black">9</span></p>
                                <p class='ml-8'>1-9 of 1233</p>
                                <img id='addusers' class='ml-16' src="{{ asset('images/addbutton.svg') }}" alt="">
                            </div>
                            <div class='flex justify-center'>
                                <p class='text-sm font-semibold text-secondary text-opacity-30'> <span
                                        class='text-secondary'>1</span> 2
                                    3 4</p>
                            </div>
                        </div>
                    </div>
                    {{-- addusers --}}
                    <div id='addusersform' class='hidden'>
                        <div>
                            <div class='flex justify-center'>
                                <form action="" class='flex flex-col w-1/2 shadow-bigCard py-8 px-10 rounded-primary'>
                                    <h1 class='text-center text-secondary text-2xl font-bold mb-9'>Add a new User </h1>
                                    <div class='flex flex-col mb-3'>
                                        <label class='text-fifth  text-sm mb-1' for="">Full Name</label>
                                        <input type="text" class="rounded-md border  py-3 border-fourth">
                                    </div>

                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1'
                                            for="">Username</label>
                                        <input type="text" class="rounded-md border  py-3 border-fourth">
                                    </div>
                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1'
                                            for="">Password</label>
                                        <input type="password" class="rounded-md border  py-3 border-fourth">
                                    </div>
                                    <div class='flex flex-col mb-3'>
                                        <label class='text-fifth  text-sm mb-1' for="">Email Address</label>
                                        <input type="email" class="rounded-md border  py-3 border-fourth">
                                    </div>
                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1'
                                            for="">Priviledge</label>
                                        <input type="text" class="rounded-md border  py-3 border-fourth">
                                    </div>
                                    <input id='closeusersform'
                                        class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-6 submit"
                                        type="submit" value="Add a new user">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- document --}}
            <div id="documents_block" class='hidden'>
                {{-- Documents --}}
                <div id='documents' class=''>
                    <div class='flex items-center'>
                        <h2 class='text-4xl text-black font-semibold'>Documents</h2>
                    </div>
                    <div class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>
                        <div class='flex justify-between flex-wrap'>
                            <div class='flex justify-between px-12 py-16 shadow-bigCard w-eleventh'>
                                <h3 class='text-2xl font-semibold text-fifth'>Invoice</h3>
                                <img src="{{ asset('images/invoice.svg') }}">
                            </div>
                            <div id='opencontracts' class='flex justify-between px-12 py-16 shadow-bigCard w-eleventh'>
                                <h3 class='text-2xl font-semibold text-fifth'>Contracts</h3>
                                <img src="{{ asset('images/contract.svg') }}">
                            </div>
                            <div class='flex justify-between px-12 py-16 shadow-bigCard w-eleventh'>
                                <h3 class='text-2xl font-semibold text-fifth'>T&C</h3>
                                <img src="{{ asset('images/T&C.svg') }}">
                            </div>
                            <div class='flex justify-between px-12 py-16 shadow-bigCard w-eleventh mt-14'>
                                <h3 class='text-2xl font-semibold text-fifth'>Identification</h3>
                                <img src="{{ asset('images/identification.svg') }}">
                            </div>
                        </div>
                        <div class='flex justify-end'>
                            <img src="{{ asset('images/addbutton.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- contracts --}}
                <div id="contracts_block" class="hidden">
                    <div>
                        <div class='flex justify-between my-5'>
                            <div class='flex items-center'>
                                <h2 class='text-4xl text-black font-semibold'>Contracts</h2>
                            </div>
                            <div class='grid grid-cols-2'>
                                <div class='flex items-center mr-6'>
                                    <img src="{{ asset('images/sort.svg') }}" alt="">
                                    <h4 class="text-sm font-sans2 text-opacity-50 text-black">Sort</h4>
                                </div>
                                <div class='flex items-center'>
                                    <img src="{{ asset('images/filter.svg') }}" alt="">
                                    <h4 class="text-sm  text-opacity-50 text-black">Filter</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>
                        <div>
                            <div class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30'>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-1 col-end-3'>Name</h3>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Format</h3>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Time</h3>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Date</h3>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70'></h3>
                                <h3 class='text-lg font-semibold text-fifth text-opacity-70'></h3>
                            </div>
                            <div
                                class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James cv</h3>
                                <h3 class='text-sm font-medium text-fifth'>PDF</h3>
                                <h3 class='text-sm font-medium text-fifth'>10:37AM</h3>
                                <h3 class='text-sm font-medium text-fifth'>20-17-2021</h3>
                                <img src="{{ asset('images/shareicon.svg') }}" alt="">
                                <img src="{{ asset('images/downloadicon.svg') }}" alt="">
                                <img src="{{ asset('images/saveicon.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/Rectangle22.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/options.svg') }}" alt="">
                            </div>
                            <div
                                class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James cv</h3>
                                <h3 class='text-sm font-medium text-fifth'>PDF</h3>
                                <h3 class='text-sm font-medium text-fifth'>10:37AM</h3>
                                <h3 class='text-sm font-medium text-fifth'>20-17-2021</h3>
                                <img src="{{ asset('images/shareicon.svg') }}" alt="">
                                <img src="{{ asset('images/downloadicon.svg') }}" alt="">
                                <img src="{{ asset('images/saveicon.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/Rectangle22.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/options.svg') }}" alt="">
                            </div>
                            <div
                                class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James cv</h3>
                                <h3 class='text-sm font-medium text-fifth'>PDF</h3>
                                <h3 class='text-sm font-medium text-fifth'>10:37AM</h3>
                                <h3 class='text-sm font-medium text-fifth'>20-17-2021</h3>
                                <img src="{{ asset('images/shareicon.svg') }}" alt="">
                                <img src="{{ asset('images/downloadicon.svg') }}" alt="">
                                <img src="{{ asset('images/saveicon.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/Rectangle22.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/options.svg') }}" alt="">
                            </div>
                            <div
                                class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James cv</h3>
                                <h3 class='text-sm font-medium text-fifth'>PDF</h3>
                                <h3 class='text-sm font-medium text-fifth'>10:37AM</h3>
                                <h3 class='text-sm font-medium text-fifth'>20-17-2021</h3>
                                <img src="{{ asset('images/shareicon.svg') }}" alt="">
                                <img src="{{ asset('images/downloadicon.svg') }}" alt="">
                                <img src="{{ asset('images/saveicon.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/Rectangle22.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/options.svg') }}" alt="">
                            </div>
                            <div
                                class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James cv</h3>
                                <h3 class='text-sm font-medium text-fifth'>PDF</h3>
                                <h3 class='text-sm font-medium text-fifth'>10:37AM</h3>
                                <h3 class='text-sm font-medium text-fifth'>20-17-2021</h3>
                                <img src="{{ asset('images/shareicon.svg') }}" alt="">
                                <img src="{{ asset('images/downloadicon.svg') }}" alt="">
                                <img src="{{ asset('images/saveicon.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/Rectangle22.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/options.svg') }}" alt="">
                            </div>
                            <div
                                class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James cv</h3>
                                <h3 class='text-sm font-medium text-fifth'>PDF</h3>
                                <h3 class='text-sm font-medium text-fifth'>10:37AM</h3>
                                <h3 class='text-sm font-medium text-fifth'>20-17-2021</h3>
                                <img src="{{ asset('images/shareicon.svg') }}" alt="">
                                <img src="{{ asset('images/downloadicon.svg') }}" alt="">
                                <img src="{{ asset('images/saveicon.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/Rectangle22.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/options.svg') }}" alt="">
                            </div>
                            <div
                                class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James cv</h3>
                                <h3 class='text-sm font-medium text-fifth'>PDF</h3>
                                <h3 class='text-sm font-medium text-fifth'>10:37AM</h3>
                                <h3 class='text-sm font-medium text-fifth'>20-17-2021</h3>
                                <img src="{{ asset('images/shareicon.svg') }}" alt="">
                                <img src="{{ asset('images/downloadicon.svg') }}" alt="">
                                <img src="{{ asset('images/saveicon.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/Rectangle22.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/options.svg') }}" alt="">
                            </div>
                            <div
                                class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James cv</h3>
                                <h3 class='text-sm font-medium text-fifth'>PDF</h3>
                                <h3 class='text-sm font-medium text-fifth'>10:37AM</h3>
                                <h3 class='text-sm font-medium text-fifth'>20-17-2021</h3>
                                <img src="{{ asset('images/shareicon.svg') }}" alt="">
                                <img src="{{ asset('images/downloadicon.svg') }}" alt="">
                                <img src="{{ asset('images/saveicon.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/Rectangle22.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/options.svg') }}" alt="">
                            </div>
                            <div
                                class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>Titilope James cv</h3>
                                <h3 class='text-sm font-medium text-fifth'>PDF</h3>
                                <h3 class='text-sm font-medium text-fifth'>10:37AM</h3>
                                <h3 class='text-sm font-medium text-fifth'>20-17-2021</h3>
                                <img src="{{ asset('images/shareicon.svg') }}" alt="">
                                <img src="{{ asset('images/downloadicon.svg') }}" alt="">
                                <img src="{{ asset('images/saveicon.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/Rectangle22.svg') }}" alt="">
                                <img class='justify-self-center' src="{{ asset('images/options.svg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class='flex justify-end items-center text-xxs text-black text-opacity-50 pr-5'>
                                <div class='flex mr-auto border border-fifth rounded-sm px-4 py-2'>
                                    <h3 class='text-sm text-fifth font-medium mr-8'>Bulk Action</h3>
                                    <i class="fas fa-caret-down text-sm text-fifth"></i>
                                </div>
                                <p>Rows per page: <span class=" text-black">9</span></p>
                                <p class='ml-8'>1-9 of 1233</p>
                                <img class='ml-16' src="{{ asset('images/addbutton.svg') }}" alt="">
                            </div>
                            <div class='flex justify-center'>
                                <p class='text-sm font-semibold text-secondary text-opacity-30'>
                                    <span class='text-secondary'>1</span> 2 3 4
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
