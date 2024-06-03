<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
            <div class="">
                <select wire:model='continent' class="text-red-800">
                    <option value="">Select a continent</option>
                    @foreach ($continents as $continent)
                        <option value="{{ $continent->id }}">{{ $continent->name }}</option>
                    @endforeach
                </select>
                <select wire:model='country' {{ !$continent ? 'disabled' : '' }} class="text-red-800">
                    <option value="">Select a country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                <select wire:model='state' {{ !$country ? 'disabled' : '' }} class="text-red-800">
                    <option value="">Select a state</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
            </div>
            </p>
        </div>

    </div>
</div>
