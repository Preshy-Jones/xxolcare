<div class='grid grid-cols-7'>
    <livewire:admin.admin-sidebar/>
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
        <div class='adminKey'>
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
    </section>
</div>