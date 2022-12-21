<div class='pt-6 pb-2'>
    <h2 class="text-secondary font-bold text-center text-lg mb-8">Add new finance</h2>
    <div class='flex justify-center'>
        <form wire:submit.prevent="save"
         class="flex flex-col w-4/5 text-sm text-fifth">
            <div class='flex flex-col mb-4'>
                <label for='title'>Title</label>
                <input wire:model="title" class="pl-2 border border-fourth py-0.5 rounded-md" type="text" >
                @error('title')
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class='flex flex-col mb-4'>
                <label for='contact'>Contact</label>
                <input wire:model="contact" class="pl-2 border border-fourth py-0.5 rounded-md" type="text" >
                @error('contact')
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class='flex flex-col mb-4'>
                <label for='amount'>Amount</label>
                <input wire:model="amount" class="pl-2 border border-fourth py-0.5 rounded-md" type="text" >
                @error('amount')
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class='flex flex-col mb-4'>
                <label for='type'>Type</label>
                <select wire:model="type" class="px-4 py-1.5 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">Select Finance type</option>
                    <option value="Income">Income</option>
                    <option value="Expense">Expense</option>
                </select>
                @error('type')
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class='flex flex-col mb-4'>
                <label for='summary'>Summary</label>
                <textarea wire:model="summary" class="pl-2 border border-fourth rounded-md pt-1" cols="30" rows="3"></textarea>
                @error('summary')
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="flex justify-center mt-8">
                <button type='submit'
                    class=' bg-primary rounded-md font-semibold text-fifth text-sm py-2 px-12'>
                    Add finance
                </button>
            </div>
        </form>
    </div>
</div>
