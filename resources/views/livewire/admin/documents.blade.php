<div class='grid grid-cols-7'>
    <livewire:admin.admin-sidebar/>
    @if ($view === 'dashboard')
    <section class='col-start-2 col-end-8 py-8 px-7'>
        <div class='flex justify-between'>
            <div></div>

            <div class='grid grid-cols-2'>
                <h2 class='text-sm text-black text-opacity-50'>{{$loggedAdminName}}</h2>
                <div>
                    <a href="{{ route('admin.logout')}}" class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
                        Log out
                    </a>
                </div>
            </div>
        </div>
        {{-- document --}}
        <div>
            {{-- Documents --}}
            <div>
                <div class='flex items-center'>
                    <h2 class='text-4xl text-black font-semibold'>Documents</h2>
                </div>
                <div class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>
                    <div class='flex justify-between flex-wrap'>
                        <div wire:click="changeView('invoice')" class='flex cursor-pointer justify-between px-12 py-16 shadow-bigCard w-eleventh'>
                            <h3 class='text-2xl font-semibold text-fifth'>Invoice</h3>
                            <img src="{{ asset('images/invoice.svg') }}">
                        </div>
                        <div wire:click="changeView('contracts')" class='flex cursor-pointer justify-between px-12 py-16 shadow-bigCard w-eleventh'>
                            <h3 class='text-2xl font-semibold text-fifth'>Contracts</h3>
                            <img src="{{ asset('images/contract.svg') }}">
                        </div>
                        <div wire:click="changeView('terms')" class='flex cursor-pointer justify-between px-12 py-16 shadow-bigCard w-eleventh'>
                            <h3 class='text-2xl font-semibold text-fifth'>T&C</h3>
                            <img src="{{ asset('images/T&C.svg') }}">
                        </div>
                        <div wire:click="changeView('identification')" class='flex cursor-pointer justify-between px-12 py-16 shadow-bigCard w-eleventh mt-14'>
                            <h3 class='text-2xl font-semibold text-fifth'>Identification</h3>
                            <img src="{{ asset('images/identification.svg') }}">
                        </div>
                    </div>
                    <div class='flex justify-end'>
                        <img src="{{ asset('images/addbutton.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif



    @if ($view === 'contracts')
    <livewire:admin.documents.contracts :loggedadmin="$loggedAdminName">
    @endif
    @if ($view === 'identification')
    <livewire:admin.documents.identifications :loggedadmin="$loggedAdminName">
    @endif
    @if ($view === 'invoice')
    <livewire:admin.documents.invoices :loggedadmin="$loggedAdminName">
    @endif
    @if ($view === 'terms')
    <livewire:admin.documents.terms :loggedadmin="$loggedAdminName">
    @endif
</div>