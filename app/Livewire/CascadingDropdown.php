<?php

namespace App\Livewire;

use App\Models\Continent;
use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $continent;
    public $country;
    public $state;
    public $continents = [];
    public $countries = [];
    public $states = [];

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function updatedContinent($value)
    {
        $this->country = null; // Reset country
        $this->state = null; // Reset state
        $this->countries = Country::where('continent_id', $value)->get();
        $this->states = []; // Clear states
    }

    public function updatedCountry($value)
    {
        $this->state = null; // Reset state
        $this->states = State::where('country_id', $value)->get();
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }
}
