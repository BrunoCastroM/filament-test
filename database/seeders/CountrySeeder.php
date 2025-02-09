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
            ['name' => 'Brasil', 'code' => 'BR', 'phonecode' => '55'],
            ['name' => 'Estados Unidos', 'code' => 'US', 'phonecode' => '1'],
            ['name' => 'Portugal', 'code' => 'PT', 'phonecode' => '351'],
            ['name' => 'Argentina', 'code' => 'AR', 'phonecode' => '54'],
            ['name' => 'Canadá', 'code' => 'CA', 'phonecode' => '1'],
            ['name' => 'Japão', 'code' => 'JP', 'phonecode' => '81'],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
