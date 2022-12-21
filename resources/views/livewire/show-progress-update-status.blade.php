<div class='flex flex-col items-center py-10'>
    @if($status == 'success')
    <div class=" border-8 border-active rounded-secondary">
        <i class="fas fa-check text-active mx-4 my-4 text-4xl"></i>
    </div>
    @endif
    @if($status == 'error')
        <i class="far fa-window-close text-declined mx-4 my-4 text-4xl"></i>
    @endif
    <h5 class='text-center text-sm text-fifth font-semibold my-3'>{{$message}}</h5>
    <button wire:click='$emit("closeModal","none")'

        class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
        Close
    </button>
</div>
