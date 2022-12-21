<section class="mt-14 mb-48">
    <div class="flex">
        <div id="change" class="flex-2 flex flex-col pl-6 py-8 font-semibold text-opacity-50 text-black">
            <a href="{{route('home')}}" class="cursor-pointer mb-8 text-sm text-secondary prof">
                <span
                    class=" bg-secondary text-sm py-0.5 px-2.3 rounded-secondary text-opacity-100 bg-opacity-50">1</span>
                My Profile
            </a>
            <a href="{{route('userbookings')}}" class="cursor-pointer mb-8 text-sm"><span
                    class=" bg-fifth text-sm py-0.5 px-2 rounded-secondary  bg-opacity-50">2</span>
                Bookings
            </a>
        </div>
        <div></div>
        <div class="flex-3 md:mr-10 shadow-bigCard px-6 py-8 rounded-lgx relative">
            <h2 class="text-secondary font-bold text-center text-lg mb-4">My account</h2>
            <div class='flex flex-col items-center'>
                <form wire:submit.prevent="edit"
                {{-- method="POST"  --}}
                {{-- action="/dashboard/edit/{{Auth::id()}}" --}}
                 enctype='multipart/form-data'>
                    @csrf
                    @method('PUT')
                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1' for="">Name</label>
                        <input name='name' type="text" class="px-1.5 rounded-md border  py-3 border-fourth" 
                        {{-- value='{{Auth::user()['name']}}' --}}
                        wire:model="name"
                         >
                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-1' for="">Email</label>
                        <input name='email' type="email" class="px-1.5 rounded-md border  py-3 border-fourth" 
                        {{-- value='{{Auth::user()['email']}}' --}}
                        wire:model="email"
                        >
                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="bg-white self-center rounded-md font-semibold text-primary border-2 border-primary text-sm  mt-10 py-2 px-12 submit">
                    Edit Profile
                    </button>
 
                    {{-- <div wire:loading wire:target="edit">
                        Loading...
                    </div> --}}
                    {{-- <div class="flex justify-center">
                        <input
                            class="bg-white self-center rounded-md font-semibold text-primary border-2 border-primary text-sm  mt-10 py-2 px-12 submit"
                            type="submit" value="Edit Profile">
                    </div> --}}
                </form>
                <div wire:loading wire:target="edit" class='mt-10'>
                    <div>
                        <div class="bouncer">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-2">
        </div>
    </div>
</section>
