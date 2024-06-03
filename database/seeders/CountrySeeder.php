<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all continents at once
        $continents = Continent::all();

        // Create associative arrays for quick lookup
        $continentMap = $continents->keyBy('name');

        $northAmerica = Continent::where('name', 'North America')->first();
        $southAmerica = Continent::where('name', 'South America')->first();
        $europe = Continent::where('name', 'Europe')->first();
        $asia = Continent::where('name', 'Asia')->first();
        $africa = Continent::where('name', 'Africa')->first();
        $australia = Continent::where('name', 'Australia')->first();
        $antarctica = Continent::where('name', 'Antarctica')->first();

        $countries = [
            // North America
            ['name' => 'USA', 'continent' => 'North America'],
            ['name' => 'Canada', 'continent' => 'North America'],
            ['name' => 'Mexico', 'continent' => 'North America'],
            ['name' => 'Guatemala', 'continent' => 'North America'],
            ['name' => 'Belize', 'continent' => 'North America'],
            ['name' => 'El Salvador', 'continent' => 'North America'],
            ['name' => 'Honduras', 'continent' => 'North America'],
            ['name' => 'Nicaragua', 'continent' => 'North America'],
            ['name' => 'Costa Rica', 'continent' => 'North America'],
            ['name' => 'Panama', 'continent' => 'North America'],
            ['name' => 'Bahamas', 'continent' => 'North America'],
            ['name' => 'Cuba', 'continent' => 'North America'],
            ['name' => 'Jamaica', 'continent' => 'North America'],
            ['name' => 'Haiti', 'continent' => 'North America'],
            ['name' => 'Dominican Republic', 'continent' => 'North America'],
            ['name' => 'Saint Kitts and Nevis', 'continent' => 'North America'],
            ['name' => 'Antigua and Barbuda', 'continent' => 'North America'],
            ['name' => 'Saint Lucia', 'continent' => 'North America'],
            ['name' => 'Saint Vincent and the Grenadines', 'continent' => 'North America'],
            ['name' => 'Barbados', 'continent' => 'North America'],
            ['name' => 'Grenada', 'continent' => 'North America'],
            ['name' => 'Trinidad and Tobago', 'continent' => 'North America'],

            // South America
            ['name' => 'Argentina', 'continent' => 'South America'],
            ['name' => 'Bolivia', 'continent' => 'South America'],
            ['name' => 'Brazil', 'continent' => 'South America'],
            ['name' => 'Chile', 'continent' => 'South America'],
            ['name' => 'Colombia', 'continent' => 'South America'],
            ['name' => 'Ecuador', 'continent' => 'South America'],
            ['name' => 'Guyana', 'continent' => 'South America'],
            ['name' => 'Paraguay', 'continent' => 'South America'],
            ['name' => 'Peru', 'continent' => 'South America'],
            ['name' => 'Suriname', 'continent' => 'South America'],
            ['name' => 'Uruguay', 'continent' => 'South America'],
            ['name' => 'Venezuela', 'continent' => 'South America'],

            // Europe
            ['name' => 'Albania', 'continent' => 'Europe'],
            ['name' => 'Andorra', 'continent' => 'Europe'],
            ['name' => 'Armenia', 'continent' => 'Europe'],
            ['name' => 'Austria', 'continent' => 'Europe'],
            ['name' => 'Azerbaijan', 'continent' => 'Europe'],
            ['name' => 'Belarus', 'continent' => 'Europe'],
            ['name' => 'Belgium', 'continent' => 'Europe'],
            ['name' => 'Bosnia and Herzegovina', 'continent' => 'Europe'],
            ['name' => 'Bulgaria', 'continent' => 'Europe'],
            ['name' => 'Croatia', 'continent' => 'Europe'],
            ['name' => 'Cyprus', 'continent' => 'Europe'],
            ['name' => 'Czech Republic', 'continent' => 'Europe'],
            ['name' => 'Denmark', 'continent' => 'Europe'],
            ['name' => 'Estonia', 'continent' => 'Europe'],
            ['name' => 'Finland', 'continent' => 'Europe'],
            ['name' => 'France', 'continent' => 'Europe'],
            ['name' => 'Georgia', 'continent' => 'Europe'],
            ['name' => 'Germany', 'continent' => 'Europe'],
            ['name' => 'Greece', 'continent' => 'Europe'],
            ['name' => 'Hungary', 'continent' => 'Europe'],
            ['name' => 'Iceland', 'continent' => 'Europe'],
            ['name' => 'Ireland', 'continent' => 'Europe'],
            ['name' => 'Italy', 'continent' => 'Europe'],
            ['name' => 'Kazakhstan', 'continent' => 'Europe'],
            ['name' => 'Kosovo', 'continent' => 'Europe'],
            ['name' => 'Latvia', 'continent' => 'Europe'],
            ['name' => 'Liechtenstein', 'continent' => 'Europe'],
            ['name' => 'Lithuania', 'continent' => 'Europe'],
            ['name' => 'Luxembourg', 'continent' => 'Europe'],
            ['name' => 'Malta', 'continent' => 'Europe'],
            ['name' => 'Moldova', 'continent' => 'Europe'],
            ['name' => 'Monaco', 'continent' => 'Europe'],
            ['name' => 'Montenegro', 'continent' => 'Europe'],
            ['name' => 'Netherlands', 'continent' => 'Europe'],
            ['name' => 'North Macedonia', 'continent' => 'Europe'],
            ['name' => 'Norway', 'continent' => 'Europe'],
            ['name' => 'Poland', 'continent' => 'Europe'],
            ['name' => 'Portugal', 'continent' => 'Europe'],
            ['name' => 'Romania', 'continent' => 'Europe'],
            ['name' => 'Russia', 'continent' => 'Europe'],
            ['name' => 'San Marino', 'continent' => 'Europe'],
            ['name' => 'Serbia', 'continent' => 'Europe'],
            ['name' => 'Slovakia', 'continent' => 'Europe'],
            ['name' => 'Slovenia', 'continent' => 'Europe'],
            ['name' => 'Spain', 'continent' => 'Europe'],
            ['name' => 'Sweden', 'continent' => 'Europe'],
            ['name' => 'Switzerland', 'continent' => 'Europe'],
            ['name' => 'Turkey', 'continent' => 'Europe'],
            ['name' => 'Ukraine', 'continent' => 'Europe'],
            ['name' => 'United Kingdom', 'continent' => 'Europe'],
            ['name' => 'Vatican City', 'continent' => 'Europe'],

            // Asia
            ['name' => 'Afghanistan', 'continent' => 'Asia'],
            ['name' => 'Armenia', 'continent' => 'Asia'],
            ['name' => 'Azerbaijan', 'continent' => 'Asia'],
            ['name' => 'Bahrain', 'continent' => 'Asia'],
            ['name' => 'Bangladesh', 'continent' => 'Asia'],
            ['name' => 'Bhutan', 'continent' => 'Asia'],
            ['name' => 'Brunei', 'continent' => 'Asia'],
            ['name' => 'Cambodia', 'continent' => 'Asia'],
            ['name' => 'China', 'continent' => 'Asia'],
            ['name' => 'Cyprus', 'continent' => 'Asia'],
            ['name' => 'Georgia', 'continent' => 'Asia'],
            ['name' => 'India', 'continent' => 'Asia'],
            ['name' => 'Indonesia', 'continent' => 'Asia'],
            ['name' => 'Iran', 'continent' => 'Asia'],
            ['name' => 'Iraq', 'continent' => 'Asia'],
            ['name' => 'Israel', 'continent' => 'Asia'],
            ['name' => 'Japan', 'continent' => 'Asia'],
            ['name' => 'Jordan', 'continent' => 'Asia'],
            ['name' => 'Kazakhstan', 'continent' => 'Asia'],
            ['name' => 'Kuwait', 'continent' => 'Asia'],
            ['name' => 'Kyrgyzstan', 'continent' => 'Asia'],
            ['name' => 'Laos', 'continent' => 'Asia'],
            ['name' => 'Lebanon', 'continent' => 'Asia'],
            ['name' => 'Malaysia', 'continent' => 'Asia'],
            ['name' => 'Maldives', 'continent' => 'Asia'],
            ['name' => 'Mongolia', 'continent' => 'Asia'],
            ['name' => 'Myanmar', 'continent' => 'Asia'],
            ['name' => 'Nepal', 'continent' => 'Asia'],
            ['name' => 'North Korea', 'continent' => 'Asia'],
            ['name' => 'Oman', 'continent' => 'Asia'],
            ['name' => 'Pakistan', 'continent' => 'Asia'],
            ['name' => 'Palestine', 'continent' => 'Asia'],
            ['name' => 'Philippines', 'continent' => 'Asia'],
            ['name' => 'Qatar', 'continent' => 'Asia'],
            ['name' => 'Saudi Arabia', 'continent' => 'Asia'],
            ['name' => 'Singapore', 'continent' => 'Asia'],
            ['name' => 'South Korea', 'continent' => 'Asia'],
            ['name' => 'Sri Lanka', 'continent' => 'Asia'],
            ['name' => 'Syria', 'continent' => 'Asia'],
            ['name' => 'Taiwan', 'continent' => 'Asia'],
            ['name' => 'Tajikistan', 'continent' => 'Asia'],
            ['name' => 'Thailand', 'continent' => 'Asia'],
            ['name' => 'Timor-Leste', 'continent' => 'Asia'],
            ['name' => 'Turkey', 'continent' => 'Asia'],
            ['name' => 'Turkmenistan', 'continent' => 'Asia'],
            ['name' => 'United Arab Emirates', 'continent' => 'Asia'],
            ['name' => 'Uzbekistan', 'continent' => 'Asia'],
            ['name' => 'Vietnam', 'continent' => 'Asia'],
            ['name' => 'Yemen', 'continent' => 'Asia'],

            // Africa
            ['name' => 'Algeria', 'continent' => 'Africa'],
            ['name' => 'Angola', 'continent' => 'Africa'],
            ['name' => 'Benin', 'continent' => 'Africa'],
            ['name' => 'Botswana', 'continent' => 'Africa'],
            ['name' => 'Burkina Faso', 'continent' => 'Africa'],
            ['name' => 'Burundi', 'continent' => 'Africa'],
            ['name' => 'Cabo Verde', 'continent' => 'Africa'],
            ['name' => 'Cameroon', 'continent' => 'Africa'],
            ['name' => 'Central African Republic', 'continent' => 'Africa'],
            ['name' => 'Chad', 'continent' => 'Africa'],
            ['name' => 'Comoros', 'continent' => 'Africa'],
            ['name' => 'Congo', 'continent' => 'Africa'],
            ['name' => 'Democratic Republic of the Congo', 'continent' => 'Africa'],
            ['name' => 'Djibouti', 'continent' => 'Africa'],
            ['name' => 'Egypt', 'continent' => 'Africa'],
            ['name' => 'Equatorial Guinea', 'continent' => 'Africa'],
            ['name' => 'Eritrea', 'continent' => 'Africa'],
            ['name' => 'Eswatini', 'continent' => 'Africa'],
            ['name' => 'Ethiopia', 'continent' => 'Africa'],
            ['name' => 'Gabon', 'continent' => 'Africa'],
            ['name' => 'Gambia', 'continent' => 'Africa'],
            ['name' => 'Ghana', 'continent' => 'Africa'],
            ['name' => 'Guinea', 'continent' => 'Africa'],
            ['name' => 'Guinea-Bissau', 'continent' => 'Africa'],
            ['name' => 'Ivory Coast', 'continent' => 'Africa'],
            ['name' => 'Kenya', 'continent' => 'Africa'],
            ['name' => 'Lesotho', 'continent' => 'Africa'],
            ['name' => 'Liberia', 'continent' => 'Africa'],
            ['name' => 'Libya', 'continent' => 'Africa'],
            ['name' => 'Madagascar', 'continent' => 'Africa'],
            ['name' => 'Malawi', 'continent' => 'Africa'],
            ['name' => 'Mali', 'continent' => 'Africa'],
            ['name' => 'Mauritania', 'continent' => 'Africa'],
            ['name' => 'Mauritius', 'continent' => 'Africa'],
            ['name' => 'Morocco', 'continent' => 'Africa'],
            ['name' => 'Mozambique', 'continent' => 'Africa'],
            ['name' => 'Namibia', 'continent' => 'Africa'],
            ['name' => 'Niger', 'continent' => 'Africa'],
            ['name' => 'Nigeria', 'continent' => 'Africa'],
            ['name' => 'Rwanda', 'continent' => 'Africa'],
            ['name' => 'São Tomé and Príncipe', 'continent' => 'Africa'],
            ['name' => 'Senegal', 'continent' => 'Africa'],
            ['name' => 'Seychelles', 'continent' => 'Africa'],
            ['name' => 'Sierra Leone', 'continent' => 'Africa'],
            ['name' => 'Somalia', 'continent' => 'Africa'],
            ['name' => 'South Africa', 'continent' => 'Africa'],
            ['name' => 'South Sudan', 'continent' => 'Africa'],
            ['name' => 'Sudan', 'continent' => 'Africa'],
            ['name' => 'Tanzania', 'continent' => 'Africa'],
            ['name' => 'Togo', 'continent' => 'Africa'],
            ['name' => 'Tunisia', 'continent' => 'Africa'],
            ['name' => 'Uganda', 'continent' => 'Africa'],
            ['name' => 'Zambia', 'continent' => 'Africa'],
            ['name' => 'Zimbabwe', 'continent' => 'Africa'],

            // Australia/Oceania
            ['name' => 'Australia', 'continent' => 'Oceania'],
            ['name' => 'Fiji', 'continent' => 'Oceania'],
            ['name' => 'Kiribati', 'continent' => 'Oceania'],
            ['name' => 'Marshall Islands', 'continent' => 'Oceania'],
            ['name' => 'Micronesia', 'continent' => 'Oceania'],
            ['name' => 'Nauru', 'continent' => 'Oceania'],
            ['name' => 'New Zealand', 'continent' => 'Oceania'],
            ['name' => 'Palau', 'continent' => 'Oceania'],
            ['name' => 'Papua New Guinea', 'continent' => 'Oceania'],
            ['name' => 'Samoa', 'continent' => 'Oceania'],
            ['name' => 'Solomon Islands', 'continent' => 'Oceania'],
            ['name' => 'Tonga', 'continent' => 'Oceania'],
            ['name' => 'Tuvalu', 'continent' => 'Oceania'],
            ['name' => 'Vanuatu', 'continent' => 'Oceania'],

            // Antarctica (not typically used, but included for completeness)
            ['name' => 'Antarctica', 'continent' => 'Antarctica']
        ];

        foreach ($countries as $country) {
            $continent = $continentMap[$country['continent']];
            $newCountry = Country::create(['name' => $country['name'], 'continent_id' => $continent->id]);
            $countryMap[$country['name']] = $newCountry->id;
        }
    }
}
