<div class='grid grid-cols-7'>
    <livewire:admin.admin-sidebar/>
    <section class='col-start-2 col-end-8 py-8 px-7'>
        <div class='flex justify-between'>
            <div class='flex items-center relative'>
                <div>
                    @if ($currentView == 'xxolstarsList')
                    <div class="absolute flex items-center ml-2 h-full">
                      <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z"></path>
                      </svg>
                    </div>
                    <input
                     type="text"
                     placeholder="Search by first name, last name, email, location specialization..."
                     wire:model='filters.search'
                     class="px-8 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                     @endif
                </div>
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
        {{-- XXOL STARS --}}
        <div id="xxolstars_block">
            <div class="___class_+?7___">
                <div x-data="{ openFilter: false, openSort:false  }">
                    <div class=' flex justify-between my-5'>
                        <div class='flex items-center'>
                            <h2 class='text-4xl text-black font-semibold'>XXOL Stars</h2>
                        </div>
                        <div>
                            <div  class='grid grid-cols-2'>
                                @if($currentView == 'xxolstarsList')
                                <div class="relative grid cursor-pointer">
                                    <div @click="openSort = ! openSort" class='flex items-center mr-6'>
                                    <img src="{{ asset('images/sort.svg') }}" alt="">
                                    <h4 class="text-sm font-sans2 text-opacity-50 text-black">Sort</h4>
                                    </div>
                                    <div x-show="openSort" @click.outside="openSort = false" class="origin-top-right absolute top-4 right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                        <div class="py-1" role="none">
                                            <h4 class="text-sm font-sans2 text-opacity-50 text-black px-4">Sort By:</h4>
                                            <a wire:click="sort('first_name')" class="font-medium text-gray-900 block px-4 py-2 text-sm">
                                            <div class='grid grid-cols-2 items-center'>
                                                <span>First Name</span>
                                                @if($sortField==='first_name')
                                                    @if($sortDirection==='asc')
                                                    <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                    @elseif($sortDirection==='desc')
                                                    <span class="border-2 text-declined border-declined p-1 rounded-lg justify-self-center">Desc</span>
                                                    @endif
                                                @else
                                                <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                @endif
                                            </div>
                                            </a>
                                            <a wire:click="sort('last_name')" class="font-medium text-gray-900 block px-4 py-2 text-sm">
                                            <div class='grid grid-cols-2 items-center'>
                                                <span>Last Name</span>
                                                @if($sortField==='last_name')
                                                    @if($sortDirection==='asc')
                                                    <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                    @elseif($sortDirection==='desc')
                                                    <span class="border-2 text-declined border-declined p-1 rounded-lg justify-self-center">Desc</span>
                                                    @endif
                                                @else
                                                <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                @endif
                                            </div>
                                            </a>
                                            <a wire:click="sort('created_at')" class="font-medium text-gray-900 block px-4 py-2 text-sm">
                                            <div class='grid grid-cols-2 items-center'>
                                                <span>Date</span>
                                                @if($sortField==='created_at')
                                                    @if($sortDirection==='asc')
                                                    <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                    @elseif($sortDirection==='desc')
                                                    <span class="border-2 text-declined border-declined p-1 rounded-lg justify-self-center">Desc</span>
                                                    @endif
                                                @else
                                                <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                @endif
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div @click="openFilter = ! openFilter" class='flex cursor-pointer items-center'>
                                    <img src="{{ asset('images/filter.svg') }}" alt="">
                                    <h4 class="text-sm text-opacity-50 text-black">Filter</h4>
                                </div>
                                @endif
                            </div>
                            <div  class='grid grid-cols-2'>
                                @if($currentView == 'jobHistory')
                                <div class="relative grid cursor-pointer">
                                    <div @click="openSort = ! openSort" class='flex items-center mr-6'>
                                    <img src="{{ asset('images/sort.svg') }}" alt="">
                                    <h4 class="text-sm font-sans2 text-opacity-50 text-black">Sort</h4>
                                    </div>
                                    <div x-show="openSort" @click.outside="openSort = false" class="origin-top-right absolute top-4 right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                        <div class="py-1" role="none">
                                            <h4 class="text-sm font-sans2 text-opacity-50 text-black px-4">Sort By:</h4>
                                            <a wire:click="sortJobs('service_name')" class="font-medium text-gray-900 block px-4 py-2 text-sm">
                                            <div class='grid grid-cols-2 items-center'>
                                                <span>Service provided</span>
                                                @if($sortFieldJobs==='service_name')
                                                    @if($sortDirectionJobs==='asc')
                                                    <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                    @elseif($sortDirectionJobs==='desc')
                                                    <span class="border-2 text-declined border-declined p-1 rounded-lg justify-self-center">Desc</span>
                                                    @endif
                                                @else
                                                <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                @endif
                                            </div>
                                            </a>
                                            <a wire:click="sortJobs('total_price')" class="font-medium text-gray-900 block px-4 py-2 text-sm">
                                            <div class='grid grid-cols-2 items-center'>
                                                <span>Amount</span>
                                                @if($sortFieldJobs==='total_price')
                                                    @if($sortDirectionJobs==='asc')
                                                    <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                    @elseif($sortDirectionJobs==='desc')
                                                    <span class="border-2 text-declined border-declined p-1 rounded-lg justify-self-center">Desc</span>
                                                    @endif
                                                @else
                                                <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                @endif
                                            </div>
                                            </a>
                                            <a wire:click="sortJobs('date')" class="font-medium text-gray-900 block px-4 py-2 text-sm">
                                            <div class='grid grid-cols-2 items-center'>
                                                <span>Date</span>
                                                @if($sortFieldJobs==='date')
                                                    @if($sortDirectionJobs==='asc')
                                                    <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                    @elseif($sortDirectionJobs==='desc')
                                                    <span class="border-2 text-declined border-declined p-1 rounded-lg justify-self-center">Desc</span>
                                                    @endif
                                                @else
                                                <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                @endif
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div @click="openFilter = ! openFilter" class='flex cursor-pointer items-center'>
                                    <img src="{{ asset('images/filter.svg') }}" alt="">
                                    <h4 class="text-sm text-opacity-50 text-black">Filter</h4>
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div x-show="openFilter" @click.outside="openFilter = false" class="w-full  shadow p-5 rounded-lg bg-white">
                        <div class="flex items-center justify-between mt-4">
                            <p class="font-medium">
                                Filters
                            </p>
                        
                            <button wire:click='resetFilters' class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md">
                                Reset Filter
                            </button>
                        </div>
                    
                        <div>
                            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 mt-4">
                                <div>
                                    @if ($currentView === 'xxolstarsList')
                                    <div>
                                        <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-3 col-end-5'>
                                            Specialization
                                        </h3>
                                        <select wire:model="filters.specialization" class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                                            <option value="">Select Specialization</option>
                                            <option value="Standard Home cleaning">Standard Home cleaning</option>
                                            <option value="Care Givers">Care Givers</option>
                                            <option value="Spa">Spa</option>
                                            <option value="Salon">Salon</option>
                                        </select>
                                    </div>
                                    <div>
                                        <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-3 col-end-5'>
                                            Location
                                        </h3>
                                        <select wire:model="filters.location" class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                                            <option value="">Select Location</option>
                                            <option value="Victoria Island">Victoria Island</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Magodo">Magodo</option>
                                            <option value="Yaba">Yaba</option>
                                            <option value="Gbagada">Gbagada</option>
                                            <option value="Oba Akran">Oba Akran</option>
                                            <option value="Ajah">Ajah</option>
                                            <option value="Opebi">Opebi</option>
                                            <option value="Ogba">Ogba</option>
                                            <option value="Ikoyi">Ikoyi</option>
                                            <option value="Ikeja GRA">Ikeja GRA</option>                                    
                                        </select>
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    @if ($currentView === 'jobHistory')
                                    <div>
                                        <h3 class='text-lg font-semibold text-fifth text-opacity-70 col-start-3 col-end-5'>
                                            Service Provided
                                        </h3>
                                        <select wire:model="filtersJobs.service_provided" class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                                            <option value="">Select Service Provided</option>
                                            <option value="Standard Home cleaning">Standard Home cleaning</option>
                                            <option value="Care Givers">Care Givers</option>
                                            <option value="Spa">Spa</option>
                                            <option value="Salon">Salon</option>
                                        </select>
                                    </div>
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @json($filters) --}}
                <div>
                    @if($currentView == 'xxolstarsList')
                    {{-- xxolstars --}}
                    <div class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>
                        <div class="mb-14 w-full">
                            <div class='w-full'>

                                <table>
                                    <tr class='xxolstar-grid justify-items-start border-b border-fifth border-opacity-30'>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70'>Name</th>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70'>Phone Number</th>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70'>Email Address</th>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70'>Specialization</th>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70'>Location</th>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70'>Country</th>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70'>State</th>
                                        <th></th>
                                    </tr>
                                    @forelse ($xxolstars as $xxolstar)
                                    <tr class='border-b xxolstar-grid justify-items-start  border-fifth border-opacity-30 '>
                                        <td class='py-7 text-sm font-medium text-fifth'>{{$xxolstar['first_name']}} {{$xxolstar['last_name']}}</td>
                                        <td class='py-7 text-sm font-medium text-fifth'>{{$xxolstar['phone']}}</td>
                                        <td class='py-7 text-sm font-medium text-fifth'>{{$xxolstar['email']}}</td>
                                        <td class='py-7 text-sm font-medium text-fifth'>{{  implode(",",$xxolstar['specialization']) }}</td>
                                        <td class='py-7 text-sm font-medium text-fifth'>{{  implode(",",$xxolstar['location']) }}</td>
                                        <td class='py-7 text-sm font-medium text-fifth'>{{$xxolstar['country']}}</td>
                                        <td class='py-7 text-sm font-medium text-fifth'>{{$xxolstar['state']}}</td>
                                        <td>
                                            <div 
                                            {{-- x-data="{ openEditModal: @entangle('openEditModal') }"  --}}
                                            class=' relative py-7'>
                                                <img class='cursor-pointer'
                                                 {{-- @click="openEditModal = ! openEditModal"  --}}
                                                src="{{ asset('images/options.svg') }}" alt="" wire:click="$emit('openModal', 'modals.edit-delete-modal', {{json_encode([$xxolstar['id'], 'xxolstar'])}})">
                                                {{-- <div x-data="{ editOption: false, deleteoption: false }" x-show="openEditModal" @click.outside="openEditModal = false" class='bg-white absolute leftn top-8 shadow-bigCard'>
                                                    <h1 
                                                     x-bind:class="editOption ? 'bg-secondary2 bg-opacity-40' : ''"
                                                     @click="editOption = ! editOption ; deleteoption = false " wire:click="viewEditProfile({{json_encode($xxolstar)}})"
                                                        class="cursor py-3 font-medium text-fifth pl-8 pr-24 ">
                                                            Edit
                                                    </h1>
                                                    <h1
                                                     x-bind:class="deleteoption ? 'bg-secondary2 bg-opacity-40' : ''"
                                                     @click="deleteoption = ! deleteoption; editOption = false  " wire:click="deleteXxolstar({{$xxolstar['id']}})"
                                                     class='cursor py-3 font-medium text-fifth pl-8 pr-24'>Delete</h1>
                                                </div> --}}
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class='py-6'>
                                        <td class='text-sm font-medium text-fifth text-center'>No XXOL Stars found</h3>
                                    </tr>
                                    @endforelse  
                                </table>
                                {{-- @forelse ($xxolstars as $xxolstar)
                                <div class='grid grid-cols-7  justify-items-start border-b  border-fifth border-opacity-30 py-7' wire:loading.class.delay='opacity-50' wire:target="filters.search">
                                    <div class='flex text-sm font-medium text-fifth'>
                                        <h3 class='mr-2'>{{$xxolstar['first_name']}}</h3>
                                        <h3 class=''>{{$xxolstar['last_name']}}</h3>
                                    </div>
                                    <h3 class='text-sm font-medium text-fifth'>{{$xxolstar['phone']}}</h3>
                                    <h3 class='text-sm font-medium text-fifth '>{{$xxolstar['email']}}</h3>
                                    <h3 class='text-sm font-medium text-fifth '>{{  implode(",",$xxolstar['specialization']) }}</h3>
                                    <h3 class='text-sm font-medium text-fifth '>{{$xxolstar['country']}}</h3>
                                    <h3 class='text-sm font-medium text-fifth '>{{$xxolstar['state']}}</h3>
                                    <div x-data="{ openEditModal: false }" class=' relative'>
                                        <img class='cursor-pointer' @click="openEditModal = ! openEditModal" src="{{ asset('images/options.svg') }}" alt="">
                                        <div x-data="{ editOption: false, deleteoption: false }" x-show="openEditModal" @click.outside="openEditModal = false" class='bg-white absolute leftn top-8 shadow-bigCard'>
                                            <h1 
                                             x-bind:class="editOption ? 'bg-secondary2 bg-opacity-40' : ''"
                                             @click="editOption = ! editOption ; deleteoption = false " wire:click="viewEditProfile({{json_encode($xxolstar)}})"
                                                class="cursor py-3 font-medium text-fifth pl-8 pr-24 ">
                                                    Edit
                                            </h1>
                                            <h1
                                             x-bind:class="deleteoption ? 'bg-secondary2 bg-opacity-40' : ''"
                                             @click="deleteoption = ! deleteoption; editOption = false  " wire:click="deleteXxolstar"
                                             class='cursor py-3 font-medium text-fifth pl-8 pr-24'>Delete</h1>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class='py-6'>
                                    <h3 class='text-sm font-medium text-fifth text-center'>No XXOL Stars found</h3>
                                </div>
                                @endforelse --}}
                            </div>

                        </div>
                        {{ $xxolstars->links() }}
                        <div>
                            <div class='flex justify-end items-center text-xxs text-black text-opacity-50 pr-5'>
                                {{-- <p>Rows per page: <span class=" text-black">9</span></p>
                                <p class='ml-8'>1-9 of 1233</p> --}}
                                <img class='ml-16' src="{{ asset('images/addbutton.svg') }}" alt="">
                            </div>
                            {{-- <div class='flex justify-center'>
                                <p class='text-sm font-semibold text-secondary text-opacity-30'> <span
                                        class='text-secondary'>1</span> 2
                                    3 4</p>
                            </div> --}}
                        </div>
                    </div>
                    @endif
                </div>
                    {{-- editform and job history--}}
                {{-- <div x-data="{ editOption: false, deleteoption: false }" x-show="openEditModal" @click.outside="openEditModal = false" class='bg-white absolute leftn top-8 shadow-bigCard'>
                    <h1 
                        x-bind:class="editOption ? 'bg-secondary2 bg-opacity-40' : ''"
                        @click="editOption = ! editOption ; deleteoption = false " wire:click="viewEditProfile({{json_encode($xxolstar)}})"
                        class="cursor py-3 font-medium text-fifth pl-8 pr-24 ">
                            Edit
                    </h1>
                    <h1
                        x-bind:class="deleteoption ? 'bg-secondary2 bg-opacity-40' : ''"
                        @click="deleteoption = ! deleteoption; editOption = false  " wire:click="deleteXxolstar"
                        class='cursor py-3 font-medium text-fifth pl-8 pr-24'>Delete</h1>
                </div> --}}
                <div>
                        @if($currentView == 'editProfile' || $currentView == 'jobHistory')
                    <div x-data="{ editProfile : true, jobHistory: false }">
                        <div  class='flex justify-center mb-6'>
                            <h3
                            x-bind:class="editProfile ? 'pjactive' : 'pjdisable'"
                            @click="editProfile = ! editProfile ; jobHistory = false "
                             wire:click='viewEditProfile({{json_encode($xxolstar)}})' class=' mr-12 PJ cursor-pointer'>Personal info
                            </h3>
                            <h3
                            x-bind:class="jobHistory ? 'pjactive' : 'pjdisable'"
                            @click="jobHistory = ! jobHistory ; editProfile = false " 
                            wire:click='viewJobHistory' class=' cursor-pointer'>Job
                                History</h3>
                        </div>
                        @endif
                    </div>
                    <div>
                        @if($currentView == 'editProfile')
                        {{-- editform --}}
                        <div>
                            <div class='flex justify-center mb-6'>
                                <img src="{{ $viewedPhoto }}" alt="" width="100">
                            </div>
                            <div class='flex justify-center'>
                                <form wire:submit.prevent="edit" class='flex flex-col w-1/2 shadow-bigCard py-8 px-10 rounded-primary'>
                                    <div class='flex justify-between'>
                                        <div class='flex flex-col mb-3 w-full mr-4'> 
                                            <label class='text-fifth text-sm mb-1'
                                                for="">First
                                                name</label>
                                            <input type="text" class="rounded-md border  py-3 border-fourth" required autocomplete="first_name" wire:model='first_name' autofocus>            
                                            @error('first_name')
                                                <p class="text-red-500 text-xs italic mt-4">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class='flex flex-col mb-3 w-full ml-4'> <label class='text-fifth  text-sm mb-1'
                                                for="">Last
                                                name</label>
                                            <input type="text" class="rounded-md border  py-3 border-fourth" wire:model='last_name' required autocomplete="last_name" autofocus>
                                            @error('last_name')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1' for="">Phone
                                            number</label>
                                        <input type="text" class="rounded-md border  py-3 border-fourth" wire:model='phone' required autocomplete="last_name">
                                        @error('phone')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div class='flex flex-col mb-3'>
                                        <label class='text-fifth  text-sm mb-1' for="">Location
                                        </label>
                                        <div class='flex justify-between'>
                                            <div>
                                                <div>
                                                    <input type="checkbox"  value='Victoria Island' wire:model="location">
                                                    <label>Victoria Island</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Ikoyi' wire:model="location">
                                                    <label>Ikoyi</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Lekki' wire:model="location">
                                                    <label>Lekki</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Ajah' wire:model="location">
                                                    <label>Ajah</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Ogudu' wire:model="location">
                                                    <label>Ogudu</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Ikeja GRA' wire:model="location">
                                                    <label>Ikeja GRA</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Maryland' wire:model="location">
                                                    <label>Maryland</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Illupeju' wire:model="location">
                                                    <label>Illupeju</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Festac' wire:model="location">
                                                    <label>Festac</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Surulere' wire:model="location">
                                                    <label>Surulere</label><br>
                                                </div>
            
                                            </div>
                                            <div>
                                                <div>
                                                    <input type="checkbox"  value='Opebi' wire:model="location">
                                                    <label>Opebi</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"   value='Magodo' wire:model="location">
                                                    <label>Magodo</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Yaba' wire:model="location">
                                                    <label>Yaba</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Gbagada' wire:model="location">
                                                    <label>Gbagada</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"   value='Ogba' wire:model="location">
                                                    <label>Ogba</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Oba Akran' wire:model="location">
                                                    <label>Oba Akran</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Ojodu' wire:model="location">
                                                    <label>Ojodu</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Oregun' wire:model="location">
                                                    <label>Oregun</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox"  value='Alausa' wire:model="location">
                                                    <label>Alausa</label><br>
                                                </div>
                                            </div>
                                        </div>
                                        @error('location')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1' for="">Email
                                            Address</label>
                                        <input type="email" class="rounded-md border  py-3 border-fourth" wire:model='email' required autocomplete="email">
                                        @error('email')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    
                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1'
                                            for="">State </label>
                                        <input type="text" class="rounded-md border  py-3 border-fourth" wire:model='state' required autocomplete="state" readonly>
                                        @error('state')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div class='flex flex-col mb-3'>
                                         <label class='text-fifth  text-sm mb-1'
                                        for="">Country </label>
                                        <input type="text" class="rounded-md border  py-3 border-fourth" wire:model='country' required autocomplete="country" readonly>
                                        @error('country')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div class='flex flex-col mb-3'> 
                                        <label class='text-fifth  text-sm mb-1' for="">Date of birth
                                        </label>
                                        <input type="date" class="rounded-md border  py-3 border-fourth" wire:model='date_of_birth' required autocomplete="date_of_birth">
                                        @error('date_of_birth')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>

                                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1'
                                            for="">Address</label>
                                        <input type="text" class="rounded-md border  py-3 border-fourth" wire:model='address'  autocomplete="address">
                                        @error('address')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div class='flex flex-col mb-3'>
                                        <label class='text-fifth  text-sm mb-1' for="">Bio</label>
                                        <textarea class="border border-fourth rounded-md" cols="30" rows="5" wire:model='biography' required autocomplete="biography"></textarea>
                                        @error('biography')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div class='flex flex-col mb-3'>
                                        <label class='text-fifth  text-sm mb-1' for="">Specialization</label>
                                        <div class='flex justify-between'>
                                            <div>
                                                <div>
                                                    <input type="checkbox" value='Standard Home cleaning' wire:model="specialization">
                                                    <label>Standard Home cleaning</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox" value='Care Givers' wire:model="specialization">
                                                    <label>Care Giver</label><br>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <input type="checkbox"  value='Salon' wire:model="specialization">
                                                    <label>Salon Services</label><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='mt-4'>
                                            <h3 class='text-xs'>Spa services</h3>
                                            <div class="grid grid-cols-2 ">
                                                <div>
                                                    <input type="checkbox" value='Normal/Swedish massage' wire:model="specialization">
                                                    <label>Normal/Swedish massage</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox" value='Deep massage' wire:model="specialization">
                                                    <label>Deep massage</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox" value='Pre-natal massage' wire:model="specialization">
                                                    <label>Pre-natal massage</label><br>
                                                </div>
                                                <div>
                                                    <input type="checkbox" value='Spa' wire:model="specialization">
                                                    <label>Trigger and Reflexology</label><br>
                                                </div>
                                            </div>
                                        </div>
                                        @error('specialization')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div>
                                        <div wire:loading wire:target="photo">Uploading...</div>
                                        <div wire:loading wire:target="edit">Saving...</div>
                                        <label for="photo" class="block text-fifth text-sm  mb-2 sm:mb-4">
                                            {{ __('Profile Photo') }}:
                                        </label>
                                        <input type="file" wire:model="photo">
                                        @error('photo') <span class="error">{{ $message }}</span> @enderror 
                                        <br>    
                                        @if ($photo)
                                        Photo Preview:
                                        <img src="{{ $photo->temporaryUrl() }}">
                                        @endif                    
                                    </div>
            
                                    <button type="submit"
                                    class="bg-white self-center rounded-md font-semibold text-primary border-2 border-primary text-sm  mt-10 py-2 px-12 submit">
                                    Edit Profile
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div>
                        @if($currentView == 'jobHistory')
                        {{-- JOB HISTORY --}}
                        <div>
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
                            @foreach($jobs as $job)
                            <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>{{$job['service_name']}}
                                </h3>
                                <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>{{$job['address']}}</h3>
                                <h3 class='text-sm font-medium text-fifth  '>{{$job['total_price']}}
                                </h3>
                                <h3 class='text-sm font-medium text-fifth  '>{{$job['total_price'] *0.6 }}</h3>
                                <h3 class='text-sm font-medium text-fifth  '>
                                    {{$job['total_price']}}
                                </h3>
                                <h3 class='text-sm font-medium text-fifth  '>
                                    {{$job['date']}}
                                </h3>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>

            </div>

        </div>
    </section>
</div>