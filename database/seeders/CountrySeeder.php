<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [ 'name' => 'Brasil' ],
            [ 'name' => 'Estados Unidos' ],
            [ 'name' => 'Portugal' ],
            [ 'name' => 'Argentina' ],
            [ 'name' => 'Canadá' ],
            [ 'name' => 'Japão' ],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
