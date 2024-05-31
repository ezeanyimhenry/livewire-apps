<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
                <button wire:click='decrement' class="text-white rounded bg-red-800 hover:bg-red-400 py-2 px-4">-</button>
                <span>{{ $count }}</span>
                <button wire:click='increment' class="text-white rounded bg-red-800 hover:bg-red-400 py-2 px-4">+</button>
            </p>
        </div>
    </div>
</div>
