<?php

namespace App\Livewire;

use App\Models\Continent;
use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $countries = [];
    public $states = [];
    public $selectedContinent = null;
    public $selectedCountry = null;
    public $selectedState = null;

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function updateContinent()
    {
        if ($this->selectedContinent  != '-1') {
            $this->selectedCountry = null; // Reset country
            $this->selectedState = null; // Reset state
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
            $this->states = []; // Clear states
        } else {
            $this->countries = [];
            $this->states = [];
        }
    }

    public function updateCountry()
    {
        if ($this->selectedCountry != '-1') {
            $this->selectedState = null; // Reset state
            $this->states = State::where('country_id', $this->selectedCountry)->get();
        } else {
            $this->states = [];
        }
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }
}
