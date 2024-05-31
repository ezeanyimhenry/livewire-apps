<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
            <div class="">
                <input type="number" wire:model='number1' class="text-red-800">
                <select wire:model='action' class="text-red-800">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                </select>
                <input type="number" wire:model='number2' class="text-red-800">
                <button wire:click='calculate'
                    class="text-white rounded bg-red-800 hover:bg-red-400 py-2 px-4" {{ $buttonIsDisabled ? 'disabled' : '' }}>=</button>
            </div>
            </p>
        </div>

        <div class="text-4xl flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            {{ $result }}
        </div>
    </div>
</div>
