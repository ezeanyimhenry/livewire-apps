<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="flex items-center justify-center py-4 rounded bg-gray-50 dark:bg-gray-800">
                <div class="text-gray-400 dark:text-gray-500 items-center">
                    @forelse ($todos as $todo)
                        <div class="flex items-center mb-2 py-2 px-4 h-10 bg-gray-800 dark:bg-gray-400 rounded text-grey-800 dark:text-gray-800">
                            <input type="checkbox" class="mr-2" wire:change='todoCheck({{ $todo->id }})' {{ $todo->is_done ? 'checked' : '' }}>
                            <span class="flex-grow {{ $todo->is_done ? 'line-through' : '' }}">{{ $todo->item }}</span>
                            <button class="rounded text-red-800 hover:text-red-400" wire:click='todoDelete({{ $todo->id }})'>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>                              
                            </button>
                        </div>
                    @empty
                        <p>Todo List is Empty</p>
                    @endforelse
                </div>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-gray-400 dark:text-gray-500 items-center">
                    <input type="text" placeholder="Enter New Todo" wire:model='todoText' wire:keydown.enter='addTodo'>
                    <button wire:click='addTodo'
                        class="items-center text-white rounded bg-red-800 hover:bg-red-400 py-2 px-4">Add Todo +
                    </button>
                </p>
            </div>
        </div>
        
    </div>
</div>
