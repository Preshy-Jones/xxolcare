<div class='grid grid-cols-7'>
    <livewire:admin.admin-sidebar/>
    <section class='col-start-2 col-end-8 py-8 px-7'>
        <div class='flex justify-between'>
            <div class='flex items-center relative'>
                <div>
                    @if ($currentView == 'usersList')
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
        <div>
            <div>
                <div x-data="{ openFilter: false, openSort:false  }">
                    <div class=' flex justify-between my-5'>
                        <div class='flex items-center'>
                            <h2 class='text-4xl text-black font-semibold'>Clients</h2>
                        </div>
 
                        <div>
                            <div  class='grid grid-cols-2'>
                                @if($currentView == 'usersList')
                                <div class="relative grid cursor-pointer">

                                </div>
                                @endif
                            </div>
                            <div  class='grid grid-cols-2'>
                                @if($currentView == 'bookingHistory')
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
                                                @if($sortFieldBookings==='service_name')
                                                    @if($sortDirectionBookings==='asc')
                                                    <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                    @elseif($sortDirectionBookings==='desc')
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
                                                @if($sortFieldBookings==='total_price')
                                                    @if($sortDirectionBookings==='asc')
                                                    <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                    @elseif($sortDirectionBookings==='desc')
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
                                                @if($sortFieldBookings==='date')
                                                    @if($sortDirectionBookings==='asc')
                                                    <span class="border-2 text-active border-active p-1 rounded-lg justify-self-center">Asc</span>
                                                    @elseif($sortDirectionBookings==='desc')
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
                                    @if ($currentView === 'usersList')
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
                                    @if ($currentView === 'bookingHistory')
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
                    @if($currentView == 'usersList')
                    {{-- xxolstars --}}
                    <div class='rounded-2xl py-10 shadow-bigCard border px-7 border-fourteenth'>
                        {{-- <div class='flex justify-center mb-6'>
                            <h3 onclick="changePJ(event)" id='personal' class='pjactive mr-12 PJ'>info
                            </h3>
                            <h3 onclick="changePJ(event)" id='bookingHistory' class='pjdisable'>Job
                                History</h3>
                        </div> --}}
                        <div class="mb-14 w-full">
                            <div class='w-full'>
                                <table>
                                    <tr class='xxolstar-gridclient justify-items-start border-b border-fifth border-opacity-30'>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70'>Name</th>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70'>Email Address</th>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70 ml-2'>Country</th>
                                        <th class='text-lg font-semibold text-fifth text-opacity-70'>State</th>
                                        <th></th>
                                    </tr>
                                    @forelse ($users as $user)
                                    <tr class='border-b xxolstar-gridclient justify-items-start  border-fifth border-opacity-30 '>
                                        <td class='py-7 text-sm font-medium text-fifth'>{{$user['name']}}</td>
                                        <td class='py-7 text-sm font-medium text-fifth'>{{$user['email']}}</td>
                                        <td class='py-7 text-sm font-medium text-fifth ml-2'>Lagos</td>
                                        <td class='py-7 text-sm font-medium text-fifth'>Nigeria</td>
                                        <td>
                                            <div
                                             {{-- x-data="{ openEditModal: false }" --}}
                                             class=' relative py-7'>
                                                <img class='cursor-pointer' 
                                                {{-- @click="openEditModal = ! openEditModal" --}}
                                                 src="{{ asset('images/options.svg') }}" alt="" wire:click="$emit('openModal', 'modals.edit-delete-modal', {{json_encode([$user['id'],'client'])}})">
                                                {{-- <div x-data="{ editOption: false, deleteoption: false }" x-show="openEditModal" @click.outside="openEditModal = false" class='bg-white absolute leftn top-8 shadow-bigCard'>
                                                    <h1 
                                                     x-bind:class="editOption ? 'bg-secondary2 bg-opacity-40' : ''"
                                                     @click="editOption = ! editOption ; deleteoption = false " wire:click="viewEditProfile({{json_encode($user)}})"
                                                        class="cursor py-3 font-medium text-fifth pl-8 pr-24 ">
                                                            Edit
                                                    </h1>
                                                    <h1
                                                     x-bind:class="deleteoption ? 'bg-secondary2 bg-opacity-40' : ''"
                                                     @click="deleteoption = ! deleteoption; editOption = false  " wire:click="deleteXxolstar({{$user['id']}})"
                                                     class='cursor py-3 font-medium text-fifth pl-8 pr-24'>Delete</h1>
                                                </div> --}}
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class='py-6'>
                                        <h3 class='text-sm font-medium text-fifth text-center'>No XXOL Stars found</h3>
                                    </div>
                                    @endforelse    
                                </table>
                            </div>

                        </div>
                        {{ $users->links() }}
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
                <div>
                        @if($currentView == 'editProfile' || $currentView == 'bookingHistory')
                    <div x-data="{ editProfile : true, bookingHistory: false }">
                        <div  class='flex justify-center mb-6'>
                            <h3
                            x-bind:class="editProfile ? 'pjactive' : 'pjdisable'"
                            @click="editProfile = ! editProfile ; bookingHistory = false "
                             wire:click='viewEditProfile({{json_encode($user)}})' class=' mr-12 PJ cursor-pointer'>Personal info
                            </h3>
                            <h3
                            x-bind:class="bookingHistory ? 'pjactive' : 'pjdisable'"
                            @click="bookingHistory = ! bookingHistory ; editProfile = false " 
                            wire:click='viewBookingHistory' class=' cursor-pointer'>Booking
                                History</h3>
                        </div>
                        @endif
                    </div>
                    <div>
                        @if($currentView == 'editProfile')
                        {{-- editform --}}
                        <div>
                            <div class='flex justify-center'>
                                <form wire:submit.prevent="edit" class='flex flex-col w-1/2 shadow-bigCard py-8 px-10 rounded-primary'>
                                    <div class='flex flex-col mb-3'> 
                                        <label class='text-fifth text-sm mb-1'
                                            for="">Name</label>
                                        <input type="text" class="rounded-md border  py-3 border-fourth" required autocomplete="name" wire:model='name' autofocus>            
                                        @error('name')
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
                                    <div wire:loading wire:target="edit">Saving...</div>             
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
                        @if($currentView == 'bookingHistory')
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
                            @foreach($bookings as $booking)
                            <div class='grid grid-cols-8  border-b  border-fifth border-opacity-30 py-7'>
                                <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>{{$booking['service_name']}}
                                </h3>
                                <h3 class='text-sm font-medium text-fifth col-start-3 col-end-5'>{{$booking['address']}}</h3>
                                <h3 class='text-sm font-medium text-fifth  '>{{$booking['total_price']}}
                                </h3>
                                <h3 class='text-sm font-medium text-fifth  '>{{$booking['total_price']}}</h3>
                                <h3 class='text-sm font-medium text-fifth  '>
                                    {{$booking['total_price']}}
                                </h3>
                                <h3 class='text-sm font-medium text-fifth  '>
                                    {{$booking['date']}}
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