<div  class='{{$modalStatus[$modal]}} absolute top-96 w-full py-8 bg-white rounded-lg'>
    <h2 class="text-secondary font-bold text-center text-lg mb-8">Frequency of the needed services?</h2>
    <div class="grid">
        <h1 wire:click="testing" >Test</h1>
        @foreach ($options[$modal]  as $option)
        <p
            class='mb-6  pl-14 font-medium text-lg cursor-pointer'>{{$option}}</p>
        {{-- <p
            class='mb-6  font-medium text-lg pl-14 cursor-pointer'>WeeklyService
        </p>
        <p class='font-medium text-lg pl-14 cursor-pointer'>Monthly Service</p> --}}
        @endforeach
    </div>
    <div class="flex justify-center mt-8">
        <button id="doneFrequency"
            class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
            That's all
        </button>
    </div>
</div>