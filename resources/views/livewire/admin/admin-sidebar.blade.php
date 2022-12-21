<section class='col-start-1 col-end-2 bg-secondary pt-8'>
    <div class='mb-10'>
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/xxol_care_logo.png') }}">
        </a>
    </div>
    <div class='mb-48 pl-8'>
        <a href="{{ url('/admin') }}">
            <div class='flex cursor-pointer justify-items-start  mb-9'>
                <img id='dashboard' class='relative right-3' src="{{ asset('images/dashboard.svg') }}" alt="">
                <h3 id='dashboard' class='font-medium text-white text-opacity-60 text-lg'>Dashboard</h3>
            </div>
        </a>
        <a href="{{ url('/admin/xxolstars') }}">
            <div class='flex cursor-pointer justify-items-start  mb-9'>
                <img class='relative right-1.5 mr-1' src="{{ asset('images/xxolstarsicon.svg') }}"
                    alt="">
                <h3 class='font-medium text-white text-opacity-60 text-lg'>XXOL Stars</h3>
            </div>
        </a>
        <a href="{{ url('/admin/documents')}}">
            <div class='flex cursor-pointer justify-items-start  mb-9'>
                <img id="documentz" class='mr-3' src="{{ asset('images/docicon.svg') }}" alt="">
                <h3 id="documentz" class='font-medium text-white text-opacity-60 text-lg'>Documents</h3>
            </div>
        </a>
        <a href="{{url('/admin/finances')}}">
            <div class='flex cursor-pointer justify-items-start  mb-9'>
                <img class='mr-3' src="{{ asset('images/naira.svg') }}" alt="">
                <h3 class='font-medium text-white text-opacity-60 text-lg'>Finances</h3>
            </div>
        </a>
        {{-- <a href="">
            <div class='flex cursor-pointer justify-items-start  mb-9'>
                <img id="userz" class='mr-3' src="{{ asset('images/usericon.svg') }}" alt="">
                <h3 id="userz" class='font-medium text-white text-opacity-60 text-lg'>Users</h3>
            </div>
        </a> --}}
        <a href="{{ url('/admin/clients') }}">
            <div class='flex cursor-pointer justify-items-start  mb-9'>
                <img class='mr-3' src="{{ asset('images/clientsicon.svg') }}" alt="">
                <h3 class='font-medium text-white text-opacity-60 text-lg'>Clients</h3>
            </div>
        </a>
        <a href="{{ url('/admin/jobs') }}">
            <div class='flex justify-items-start '>
                <img class='mr-3' src="{{ asset('images/jobsicon.svg') }}" alt="">
                <h3 class='font-medium text-white text-opacity-60 text-lg'>Jobs</h3>
            </div>
        </a>
    </div>
    <div class='pl-8'>
        {{-- <div class='flex mb-9'>
            <img class='mr-3' src="{{ asset('images/clientsicon.svg') }}" alt="">
            <h3 class='font-medium text-white text-opacity-60 text-lg'>Settings</h3>
        </div> --}}
        <a href="{{ route('admin.logout')}}">
            <div class='flex'>
                <img class='mr-3' src="{{ asset('images/jobsicon.svg') }}" alt="">
                <h3 class='font-medium text-white text-opacity-60 text-lg'>Log out</h3>
            </div>
        </a>
    </div>
</section>