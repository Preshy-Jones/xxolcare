<div class='top-primary px-12 z-40 w-ninth pt-8 pb-20 bg-white rounded-lg'>
    <div class="relative">
        <h2 class="text-2xl text-center  text-secondary font-bold mb-12">XXOL Star detail</h2>
        <div class='grid grid-cols-3 justify-items-start'>
            <div class="col-start-2 col-end-3 justify-self-center">
                <div class="h-32 w-full">
                    <img class="w-32 h-32 rounded-secondary" src="{{ asset($imageUrl) }}" alt="">
                </div>
                {{-- <div class='mb-3'>
                    <i class="text-lg text-star fas fa-star"></i>
                    <i class="text-lg text-star fas fa-star"></i>
                    <i class="text-lg text-star fas fa-star"></i>
                    <i class="text-lg text-twelfth fas fa-star"></i>
                    <i class="text-lg text-twelfth fas fa-star"></i>
                </div> --}}
                <div class='flex'>
                    <h3 class='text-lg text-fifth mb-4 mr-2'>{{$firstName}}</h3>
                    <h3 class='text-lg text-fifth mb-4'>{{$lastName}}</h3>
                </div>
            </div>
            <div>
                <button wire:click="$emit('closeModal', {{$xxolstarId}}, '{{$firstName}}','{{$lastName}}')"
                    class="col-start-3 col-end-4 bg-primary self-start rounded-md font-semibold text-fifth text-sm  px-6  py-2 submit mb-2">
                    Confirm XXOLstar
                </button>
                {{-- <button id="selectagain"
                    class="col-start-3 col-end-4 bg-primary self-start rounded-md font-semibold text-fifth text-sm  px-6  py-2 submit">
                    Select Again
                </button> --}}
            </div>
        </div>
        <p class='mb-8'>{{$biography}}</p>
        {{-- <div class='grid grid-cols-2 mb-10'>
            <div class='justify-self-center text-center'>
                <h3 class='text-lg text-fifth font-medium text-opacity-50'>Reviews</h3>
                <h3 class='text-lg text-fifth font-medium '>234</h3>
            </div>
            <div class='justify-self-center text-center'>
                <h3 class='text-lg text-fifth font-medium text-opacity-50'>Number of hires</h3>
                <h3 class='text-lg text-fifth font-medium'>534</h3>
            </div>
        </div> --}}
        {{-- <div>
            <div class='grid grid-cols-10 items-center pb-4'>
                <h3 class='col-start-1 col-end-3 text-sm text-fifth'>Excellent (123)</h3>
                <div class="skillbar clearfix col-start-3 col-end-11" data-percent="52.56%">
                    <div class="skillbar-bar bg-primary"></div>
                </div>
            </div>
            <div class='grid grid-cols-10 items-center pb-4'>
                <h3 class='col-start-1 col-end-3 text-sm text-fifth'>Good (34)</h3>
                <div class="skillbar clearfix col-start-3 col-end-11" data-percent="35%">
                    <div class="skillbar-bar bg-primary"></div>
                </div>
            </div>
            <div class='grid grid-cols-10 items-center pb-4'>
                <h3 class='col-start-1 col-end-3 text-sm text-fifth'>Average (12)</h3>
                <div class="skillbar clearfix col-start-3 col-end-11" data-percent="20%">
                    <div class="skillbar-bar bg-primary"></div>
                </div>
            </div>
            <div class='grid grid-cols-10 items-center pb-4'>
                <h3 class='col-start-1 col-end-3 text-sm text-fifth'>Bad (1)</h3>
                <div class="skillbar clearfix col-start-3 col-end-11" data-percent="10%">
                    <div class="skillbar-bar bg-primary"></div>
                </div>
            </div>
            <div class='grid grid-cols-10 items-center'>
                <h3 class='col-start-1 col-end-3 text-sm text-fifth'>Terrible (0)</h3>
                <div class="skillbar clearfix col-start-3 col-end-11" data-percent="5%">
                    <div class="skillbar-bar bg-primary"></div>
                </div>
            </div>
        </div> --}}
    </div>
</div>