<div  class='w-full py-8 z-40 bg-white rounded-lg'>
    <h2 class="text-secondary font-bold text-center text-lg mb-8">Frequency of the needed services?</h2>
    <div class="grid">
        @foreach($progressOptions as $progressOption)
        <p wire:click="selectProgress('{{$progressOption}}')"
        class='mb-6 pl-14 font-medium text-lg cursor-pointer
        @if($progressOption == $chosenProgress)
        serviceoption
        @endif
        '>
        {{$progressOption}}
        </p>
        @endforeach
    </div>
    <div class="flex justify-center mt-8">
        <button wire:click='$emit("closeModal",{{ json_encode($chosenProgress) }})'
            class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
            That's all
        </button>
    </div>
</div>