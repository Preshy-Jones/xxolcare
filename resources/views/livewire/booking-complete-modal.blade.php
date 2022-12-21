<div class='px-12 z-40 pt-8 pb-20 bg-white rounded-lg flex flex-col items-center'>
    <img class="w-32" src="{{ asset('images/checklogo.svg') }}" alt="">
    <p class='text-center'>{{$message}}</p>
    <button wire:click="$emit('closeModal')"
        class="col-start-3 col-end-4 bg-primary self-center rounded-md font-semibold text-fifth text-sm  px-6  py-2 submit">
        Done
    </button>
</div>