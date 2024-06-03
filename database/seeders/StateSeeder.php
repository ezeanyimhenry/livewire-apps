<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all continents and countries at once
        $continents = Continent::all();
        $countries = Country::all();

        // Create associative arrays for quick lookup
        $continentMap = $continents->keyBy('name');
        $countryMap = $countries->keyBy('name');

        $states = [
            'USA' => ['California', 'Texas', 'New York', 'Florida'],
            'Canada' => ['Ontario', 'Quebec', 'British Columbia', 'Alberta'],
            'France' => ['Île-de-France', 'Provence-Alpes-Côte d\'Azur', 'Auvergne-Rhône-Alpes', 'Nouvelle-Aquitaine'],
            'Germany' => ['Bavaria', 'Baden-Württemberg', 'North Rhine-Westphalia', 'Hesse'],
            'China' => ['Guangdong', 'Beijing', 'Shanghai', 'Zhejiang'],
            'Japan' => ['Tokyo', 'Osaka', 'Kanagawa', 'Hokkaido'],
            'Brazil' => ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Bahia'],
            'Argentina' => ['Buenos Aires', 'Córdoba', 'Santa Fe', 'Mendoza'],
            'Nigeria' => ['Lagos', 'Kano', 'Rivers', 'Oyo'],
            'South Africa' => ['Gauteng', 'Western Cape', 'KwaZulu-Natal', 'Eastern Cape'],
            'Australia' => ['New South Wales', 'Victoria', 'Queensland', 'Western Australia'],
            'New Zealand' => ['Auckland', 'Wellington', 'Canterbury', 'Otago'],
            'Russia' => ['Moscow', 'Saint Petersburg', 'Novosibirsk', 'Yekaterinburg'],
            'India' => ['Maharashtra', 'Delhi', 'Karnataka', 'Tamil Nadu'],
            'Mexico' => ['Mexico City', 'Jalisco', 'Nuevo León', 'Puebla'],
            'Italy' => ['Lombardy', 'Lazio', 'Campania', 'Sicily'],
            'Spain' => ['Madrid', 'Catalonia', 'Andalusia', 'Valencia'],
            'United Kingdom' => ['England', 'Scotland', 'Wales', 'Northern Ireland'],
            'Egypt' => ['Cairo', 'Alexandria', 'Giza', 'Luxor'],
            'Saudi Arabia' => ['Riyadh', 'Jeddah', 'Mecca', 'Medina'],
            // Add more countries and their states as needed
        ];

        foreach ($states as $countryName => $statesArray) {
            // Check if the country exists in the map
            if (isset($countryMap[$countryName])) {
                $country = $countryMap[$countryName];
                foreach ($statesArray as $stateName) {
                    State::create(['name' => $stateName, 'country_id' => $country->id]);
                }
            }
        }
    }
}
