<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // BRASIL
        $brasil = Country::where('name', 'Brasil')->first();

        if ($brasil) {
            $statesBrasil = [
                // Região Sudeste
                ['country_id' => $brasil->id, 'name' => 'São Paulo'],
                ['country_id' => $brasil->id, 'name' => 'Rio de Janeiro'],
                ['country_id' => $brasil->id, 'name' => 'Minas Gerais'],
                ['country_id' => $brasil->id, 'name' => 'Espírito Santo'],

                // Região Sul
                ['country_id' => $brasil->id, 'name' => 'Paraná'],
                ['country_id' => $brasil->id, 'name' => 'Santa Catarina'],
                ['country_id' => $brasil->id, 'name' => 'Rio Grande do Sul'],

                // Região Nordeste (só alguns para exemplo)
                ['country_id' => $brasil->id, 'name' => 'Bahia'],
                ['country_id' => $brasil->id, 'name' => 'Pernambuco'],
                ['country_id' => $brasil->id, 'name' => 'Ceará'],

                // Região Norte (só alguns)
                ['country_id' => $brasil->id, 'name' => 'Amazonas'],
                ['country_id' => $brasil->id, 'name' => 'Pará'],

                // Região Centro-Oeste (só alguns)
                ['country_id' => $brasil->id, 'name' => 'Goiás'],
                ['country_id' => $brasil->id, 'name' => 'Mato Grosso'],
            ];
            State::insert($statesBrasil);
        }

        // ESTADOS UNIDOS
        $eua = Country::where('name', 'Estados Unidos')->first();

        if ($eua) {
            $statesEUA = [
                ['country_id' => $eua->id, 'name' => 'Califórnia'],
                ['country_id' => $eua->id, 'name' => 'Flórida'],
                ['country_id' => $eua->id, 'name' => 'Nova Iorque'],
                ['country_id' => $eua->id, 'name' => 'Texas'],
                ['country_id' => $eua->id, 'name' => 'Illinois'],
                ['country_id' => $eua->id, 'name' => 'Pensilvânia'],
            ];
            State::insert($statesEUA);
        }

        // PORTUGAL
        $portugal = Country::where('name', 'Portugal')->first();

        if ($portugal) {
            $statesPortugal = [
                ['country_id' => $portugal->id, 'name' => 'Lisboa'],
                ['country_id' => $portugal->id, 'name' => 'Porto'],
                ['country_id' => $portugal->id, 'name' => 'Braga'],
                ['country_id' => $portugal->id, 'name' => 'Coimbra'],
                ['country_id' => $portugal->id, 'name' => 'Aveiro'],
            ];
            State::insert($statesPortugal);
        }

        // ARGENTINA (exemplo)
        $argentina = Country::where('name', 'Argentina')->first();

        if ($argentina) {
            $statesArgentina = [
                ['country_id' => $argentina->id, 'name' => 'Buenos Aires'],
                ['country_id' => $argentina->id, 'name' => 'Córdoba'],
                ['country_id' => $argentina->id, 'name' => 'Santa Fé'],
            ];
            State::insert($statesArgentina);
        }

        // CANADÁ (exemplo)
        $canada = Country::where('name', 'Canadá')->first();

        if ($canada) {
            $statesCanada = [
                ['country_id' => $canada->id, 'name' => 'Ontário'],
                ['country_id' => $canada->id, 'name' => 'Quebec'],
                ['country_id' => $canada->id, 'name' => 'Colúmbia Britânica'],
            ];
            State::insert($statesCanada);
        }

        // JAPÃO (exemplo)
        $japao = Country::where('name', 'Japão')->first();

        if ($japao) {
            $statesJapao = [
                ['country_id' => $japao->id, 'name' => 'Tóquio'],
                ['country_id' => $japao->id, 'name' => 'Osaka'],
                ['country_id' => $japao->id, 'name' => 'Kyoto'],
            ];
            State::insert($statesJapao);
        }
    }
}
