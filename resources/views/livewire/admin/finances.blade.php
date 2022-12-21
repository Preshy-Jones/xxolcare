<div class='grid grid-cols-7'>
    <livewire:admin.admin-sidebar/>
    <section class='col-start-2 col-end-8 py-8 px-7'>
        <div class='flex justify-between'>
            <div class='flex items-center relative'>
                    <div class="absolute flex items-center ml-2 h-full">
                      <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z"></path>
                      </svg>
                    </div>
                    <input
                     type="text"
                     placeholder="Search by title, contact, assigned..."
                     wire:model='filters.search'
                     class="px-8 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
            </div>
            <div class='flex items-center justify-around'>
                <h2 class='text-sm text-black text-opacity-50 mr-2'>{{$loggedAdminName}}</h2>
                <div>
                    <a href="{{ route('admin.logout')}}" class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
                        Log out
                    </a>
                </div>
            </div>
        </div>
        {{-- Finances --}}
        <div>
            <div>
                <div class='flex justify-between my-5'>
                    <div class='flex items-center'>
                        <h2 class='text-4xl text-black font-semibold'>Finances</h2>
                    </div>
                    <div class='grid grid-cols-2'>
                        {{-- <div class='flex items-center mr-6'>
                            <img src="{{ asset('images/sort.svg') }}" alt="">
                            <h4 class="text-sm font-sans2 text-opacity-50 text-black">Sort</h4>
                        </div>
                        <div class='flex items-center'>
                            <img src="{{ asset('images/filter.svg') }}" alt="">
                            <h4 class="text-sm  text-opacity-50 text-black">Filter</h4>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>
                @if(!$filters['search'])
                <div class="grid grid-cols-3 mb-16">
                    <div x-data="{ active: 'income' }" class="col-start-2 col-end-3 text-fifth text-opacity-50">
                        <button
                        x-bind:class="active == 'income' ? 'bg-secondary2 bg-opacity-30 py-1.5 rounded-3xl px-6 text-secondary2' : ''"
                        @click="active = 'income'"
                        wire:click="changeView('income')"
                            class='text-lg font-semibold mr-5'>
                            Income
                        </button>
                        <button
                        x-bind:class="active == 'expense' ? 'bg-secondary2 bg-opacity-30 py-1.5 rounded-3xl px-6 text-secondary2' : ''"
                        @click="active = 'expense'"
                        wire:click="changeView('expense')"
                         class='text-lg font-semibold'>
                            Expenses
                        </button>
                    </div>
                    {{-- <h2
                        class='text-lg font-semibold text-primary text-opacity-70 col-start-3 col-end-4  justify-self-center'>
                        Export data
                    </h2> --}}
                </div>
                @endif
                <div>
                    <div class='grid grid-cols-6 justify-items-start border-b border-fifth border-opacity-30'>
                        <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Title</h3>
                        <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Contact</h3>
                        <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Amount</h3>
                        <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Date</h3>
                        <h3 class='text-lg font-semibold text-fifth text-opacity-70'>Summary</h3>
                        <h3 class='text-lg font-semibold text-fifth text-opacity-70 justify-self-center'>Assigned</h3>
                    </div>
                    @forelse($finances as $finance)
                    <div class='grid grid-cols-6 justify-items-start border-b border-fifth border-opacity-30 py-7'>
                        <h3 class='text-sm font-medium text-fifth'>{{$finance['title']}}</h3>
                        <h3 class='text-sm font-medium text-fifth'>{{$finance['contact']}}</h3>
                        <h3 class='text-sm font-medium text-fifth'>{{$finance['amount']}}</h3>
                        <h3 class='text-sm font-medium text-fifth'>{{$finance['created_at']}}</h3>
                        <h3 class='text-sm font-medium text-fifth'>{{$finance['summary']}}</h3>
                        <h3 class='text-sm font-medium text-fifth justify-self-center'>{{$finance['assigned']}}</h3>
                    </div>
                    @empty
                    <div class='py-6'>
                        <h3 class='text-sm font-medium text-fifth text-center'>No results found</h3>
                    </div>
                    @endforelse
                </div>
                {{ $finances->links() }}
                <div class>
                    <div class='flex justify-end items-center text-xxs text-black text-opacity-50 pr-5'>
                        <img wire:click="$emit('openModal', 'modals.finance-form')" class='ml-16 cursor-pointer' src="{{ asset('images/addbutton.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>