<section class='col-start-2 col-end-8 py-8 px-7'>
    <div>
        @if($currentView =='identifications')
        <div class='flex justify-between'>
            <div></div>
            {{-- <div class='flex items-center relative'>
                <div class="absolute flex items-center ml-2 h-full">
                  <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z"></path>
                  </svg>
                </div>
        
                <input
                 type="text"
                 placeholder="Search by listing, location, bedroom number..."
                 wire:model='filters.search'
                 class="px-8 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
            </div> --}}
            <div class='grid grid-cols-2'>
                <h2 class='text-sm text-black text-opacity-50'>{{$loggedadmin}}</h2>
                <div>
                    <a href="{{ route('admin.logout')}}" class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit">
                        Log out
                    </a>
                </div>
            </div>
        </div>
        {{-- document --}}
        <div>
            {{-- contracts --}}
            <div x-data="{openSort:false}">
                <div>
                    <div  class='flex justify-between my-5'>
                        <div class='flex items-center'>
                            <h2 class='text-4xl text-black font-semibold'>Identification</h2>
                        </div>
                        <div>
                            <div  class='grid grid-cols-2'>
                                <div class="relative grid cursor-pointer">
                                    <div @click="openSort = ! openSort" class='flex items-center mr-6'>
                                        <img src="{{ asset('images/sort.svg') }}" alt="">
                                        <h4 class="text-sm font-sans2 text-opacity-50 text-black">Sort</h4>
                                    </div>
                                    <div x-show="openSort" @click.outside="openSort = false" class="origin-top-right absolute top-4 right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                        <div class="py-1" role="none">
                                            <h4 class="text-sm font-sans2 text-opacity-50 text-black px-4">Sort By:</h4>
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
                        @foreach($identifications as $identification)
                        <div
                            class='grid grid-cols-10 justify-items-start border-b border-fifth border-opacity-30 py-7 items-center'>
                            <h3 class='text-sm font-medium text-fifth col-start-1 col-end-3'>{{$identification['name']}}</h3>
                            <h3 class='text-sm font-medium text-fifth'>PDF</h3>
                            <h3 class='text-sm font-medium text-fifth'>{{ \Carbon\Carbon::parse($identification['created_at'])->toTimeString()}}</h3>
                            <h3 class='text-sm font-medium text-fifth'>{{ \Carbon\Carbon::parse($identification['created_at'])->toDateString()}}</h3>
                            {{-- <img src="{{ asset('images/shareicon.svg') }}" alt=""> --}}
                            <a href="{{$identification['file_URL']}}" download>
                                <img class='cursor-pointer'
                                 {{-- wire:click="export('{{$contract['file_URL']}}')" --}}
                                  src="{{ asset('images/downloadicon.svg') }}" alt="">
                            </a>
                            {{-- <img src="{{ asset('images/saveicon.svg') }}" alt=""> --}}
                            <img class='justify-self-center' src="{{ asset('images/Rectangle22.svg') }}" alt="">
                            <img class='justify-self-center' src="{{ asset('images/options.svg') }}" alt="">
                        </div>
                        @endforeach
                    </div>
                    {{ $identifications->links() }}
                    <div>
                        <div class='flex justify-end items-center text-xxs text-black text-opacity-50 pr-5'>
                            <div class='flex mr-auto border border-fifth rounded-sm px-4 py-2'>
                                <h3 class='text-sm text-fifth font-medium mr-8'>Bulk Action</h3>
                                <i class="fas fa-caret-down text-sm text-fifth"></i>
                            </div>
                            <img wire:click="viewAddDocuments" class='ml-16 cursor-pointer' src="{{ asset('images/addbutton.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @elseif($currentView == 'addDocument')
        <div>
            <div class='flex justify-between my-5'>
                <div class='flex items-center'>
                    <h2 class='text-4xl text-black font-semibold'>Contracts</h2>
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
            <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <div class="w-full h-40 rounded-lg text-center text-gray-500 p-16 cursor-pointer border border-dashed border-gray-500"
                style="background-image: linear-gradient( 89.9deg,  rgba(208,246,255,1) 0.1%, rgba(255,237,237,1) 47.9%, rgba(255,255,231,1) 100.2% );"
                @click="$refs.fileInput.click()">Upload Files</div>
            <input x-ref="fileInput" type="file" wire:model="file" class="hidden" />
            @error('file')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror    
            <!-- Progress Bar -->
            <div x-show="isUploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
            @if($file)
            <div class="p-4 my-3 rounded-lg shadow-lg transition-all duration-500"
                style="background-image: radial-gradient( circle farthest-corner at 14.2% 27.5%,  rgba(104,199,255,1) 0%, rgba(181,126,255,1) 90% );"
                >
                <div class="flex justify-center items-center">
                    <h1>File Uploaded</h1>
                </div>
                {{-- <i class="fas fa-times-circle text-gray-700 text-2xl float-right cursor-pointer"
                    wire:click="remove"
                    ></i>
                <div class="flex justify-center">
                    <img src="{{ $file->temporaryUrl() }}" width="250">
                </div> --}}
            </div>
            <div class='flex flex-col'>
                <label for='state'>File Name</label>
                <input placeholder='Input file name' class='w-full pl-2 border border-fourth py-3 rounded-md' type="text" wire:model='name'>
                @error('name')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <button wire:loading.remove wire:click.prevent="save" class="w-full p-2 text-white rounded shadow-lg"
                style="background-image: linear-gradient( 65.4deg,  rgba(56,248,249,1) -9.1%, rgba(213,141,240,1) 48%, rgba(249,56,152,1) 111.1% );">Save</button>
            <button wire:loading wire:target="save" class="w-full p-2 text-white rounded shadow-lg"
            style="background-image: linear-gradient( 65.4deg,  rgba(56,248,249,1) -9.1%, rgba(213,141,240,1) 48%, rgba(249,56,152,1) 111.1% );">
            <i class="fas fa-spinner fa-spin text-2xl"></i>
            </button>
            @endif
        </div>
        </div>
        @endif
    </div>
</section>