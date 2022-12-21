<div class="py-6">
    <h2 class="text-center text-2xl text-secondary font-bold mb-8">{{$confirmedOption}} this offer</h2>
    <div class="flex justify-center mb-6">
        <button wire:click="$emit('closeModal', '{{$confirmedStatus}}')" class=' bg-green-500 rounded-md font-semibold text-fifth text-sm py-2 px-12 mr-16'>
            Confirm
        </button>
        <button wire:click="$emit('closeModal', 'cancel')" class=' bg-red-500 rounded-md font-semibold text-fifth text-sm py-2 px-12'>
            Cancel
        </button>
    </div>
    
</div>