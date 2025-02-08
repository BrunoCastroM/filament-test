<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //  BRASIL
        //  SÃO PAULO
        $saoPaulo = State::where('name', 'São Paulo')->first();
        if ($saoPaulo) {
            $citiesSaoPaulo = [
                ['state_id' => $saoPaulo->id, 'name' => 'São Paulo'],
                ['state_id' => $saoPaulo->id, 'name' => 'Campinas'],
                ['state_id' => $saoPaulo->id, 'name' => 'Santos'],
                ['state_id' => $saoPaulo->id, 'name' => 'Sorocaba'],
                ['state_id' => $saoPaulo->id, 'name' => 'São José dos Campos'],
                ['state_id' => $saoPaulo->id, 'name' => 'Ribeirão Preto'],
                ['state_id' => $saoPaulo->id, 'name' => 'Guarulhos'],
                ['state_id' => $saoPaulo->id, 'name' => 'Osasco'],
            ];
            City::insert($citiesSaoPaulo);
        }

        //  RIO DE JANEIRO
        $rioDeJaneiro = State::where('name', 'Rio de Janeiro')->first();
        if ($rioDeJaneiro) {
            $citiesRio = [
                ['state_id' => $rioDeJaneiro->id, 'name' => 'Rio de Janeiro'],
                ['state_id' => $rioDeJaneiro->id, 'name' => 'Niterói'],
                ['state_id' => $rioDeJaneiro->id, 'name' => 'Nova Iguaçu'],
                ['state_id' => $rioDeJaneiro->id, 'name' => 'Duque de Caxias'],
                ['state_id' => $rioDeJaneiro->id, 'name' => 'Petrópolis'],
                ['state_id' => $rioDeJaneiro->id, 'name' => 'Volta Redonda'],
                ['state_id' => $rioDeJaneiro->id, 'name' => 'Campos dos Goytacazes'],
            ];
            City::insert($citiesRio);
        }

        //  MINAS GERAIS
        $minasGerais = State::where('name', 'Minas Gerais')->first();
        if ($minasGerais) {
            $citiesMinas = [
                ['state_id' => $minasGerais->id, 'name' => 'Belo Horizonte'],
                ['state_id' => $minasGerais->id, 'name' => 'Uberlândia'],
                ['state_id' => $minasGerais->id, 'name' => 'Contagem'],
                ['state_id' => $minasGerais->id, 'name' => 'Juiz de Fora'],
                ['state_id' => $minasGerais->id, 'name' => 'Betim'],
                ['state_id' => $minasGerais->id, 'name' => 'Montes Claros'],
            ];
            City::insert($citiesMinas);
        }

        //  ESPÍRITO SANTO
        $espiritoSanto = State::where('name', 'Espírito Santo')->first();
        if ($espiritoSanto) {
            $citiesEspiritoSanto = [
                ['state_id' => $espiritoSanto->id, 'name' => 'Vitória'],
                ['state_id' => $espiritoSanto->id, 'name' => 'Vila Velha'],
                ['state_id' => $espiritoSanto->id, 'name' => 'Serra'],
                ['state_id' => $espiritoSanto->id, 'name' => 'Cariacica'],
                ['state_id' => $espiritoSanto->id, 'name' => 'Guarapari'],
            ];
            City::insert($citiesEspiritoSanto);
        }

        //  PARANÁ
        $parana = State::where('name', 'Paraná')->first();
        if ($parana) {
            $citiesParana = [
                ['state_id' => $parana->id, 'name' => 'Curitiba'],
                ['state_id' => $parana->id, 'name' => 'Londrina'],
                ['state_id' => $parana->id, 'name' => 'Maringá'],
                ['state_id' => $parana->id, 'name' => 'Ponta Grossa'],
                ['state_id' => $parana->id, 'name' => 'Cascavel'],
                ['state_id' => $parana->id, 'name' => 'Foz do Iguaçu'],
            ];
            City::insert($citiesParana);
        }

        //  SANTA CATARINA
        $santaCatarina = State::where('name', 'Santa Catarina')->first();
        if ($santaCatarina) {
            $citiesSantaCatarina = [
                ['state_id' => $santaCatarina->id, 'name' => 'Florianópolis'],
                ['state_id' => $santaCatarina->id, 'name' => 'Joinville'],
                ['state_id' => $santaCatarina->id, 'name' => 'Blumenau'],
                ['state_id' => $santaCatarina->id, 'name' => 'Criciúma'],
                ['state_id' => $santaCatarina->id, 'name' => 'Chapecó'],
                ['state_id' => $santaCatarina->id, 'name' => 'Itajaí'],
            ];
            City::insert($citiesSantaCatarina);
        }

        //  RIO GRANDE DO SUL
        $rioGrandeDoSul = State::where('name', 'Rio Grande do Sul')->first();
        if ($rioGrandeDoSul) {
            $citiesRioGrandeDoSul = [
                ['state_id' => $rioGrandeDoSul->id, 'name' => 'Porto Alegre'],
                ['state_id' => $rioGrandeDoSul->id, 'name' => 'Caxias do Sul'],
                ['state_id' => $rioGrandeDoSul->id, 'name' => 'Canoas'],
                ['state_id' => $rioGrandeDoSul->id, 'name' => 'Pelotas'],
                ['state_id' => $rioGrandeDoSul->id, 'name' => 'Santa Maria'],
            ];
            City::insert($citiesRioGrandeDoSul);
        }

        //  BAHIA
        $bahia = State::where('name', 'Bahia')->first();
        if ($bahia) {
            $citiesBahia = [
                ['state_id' => $bahia->id, 'name' => 'Salvador'],
                ['state_id' => $bahia->id, 'name' => 'Feira de Santana'],
                ['state_id' => $bahia->id, 'name' => 'Vitória da Conquista'],
                ['state_id' => $bahia->id, 'name' => 'Itabuna'],
                ['state_id' => $bahia->id, 'name' => 'Ilhéus'],
            ];
            City::insert($citiesBahia);
        }

        //  PERNAMBUCO
        $pernambuco = State::where('name', 'Pernambuco')->first();
        if ($pernambuco) {
            $citiesPernambuco = [
                ['state_id' => $pernambuco->id, 'name' => 'Recife'],
                ['state_id' => $pernambuco->id, 'name' => 'Olinda'],
                ['state_id' => $pernambuco->id, 'name' => 'Jaboatão dos Guararapes'],
                ['state_id' => $pernambuco->id, 'name' => 'Caruaru'],
                ['state_id' => $pernambuco->id, 'name' => 'Petrolina'],
            ];
            City::insert($citiesPernambuco);
        }

        //  CEARÁ
        $ceara = State::where('name', 'Ceará')->first();
        if ($ceara) {
            $citiesCeara = [
                ['state_id' => $ceara->id, 'name' => 'Fortaleza'],
                ['state_id' => $ceara->id, 'name' => 'Sobral'],
                ['state_id' => $ceara->id, 'name' => 'Juazeiro do Norte'],
                ['state_id' => $ceara->id, 'name' => 'Caucaia'],
                ['state_id' => $ceara->id, 'name' => 'Maracanaú'],
            ];
            City::insert($citiesCeara);
        }

        //  AMAZONAS
        $amazonas = State::where('name', 'Amazonas')->first();
        if ($amazonas) {
            $citiesAmazonas = [
                ['state_id' => $amazonas->id, 'name' => 'Manaus'],
                ['state_id' => $amazonas->id, 'name' => 'Parintins'],
                ['state_id' => $amazonas->id, 'name' => 'Itacoatiara'],
                ['state_id' => $amazonas->id, 'name' => 'Manacapuru'],
            ];
            City::insert($citiesAmazonas);
        }

        //  PARÁ
        $para = State::where('name', 'Pará')->first();
        if ($para) {
            $citiesPara = [
                ['state_id' => $para->id, 'name' => 'Belém'],
                ['state_id' => $para->id, 'name' => 'Ananindeua'],
                ['state_id' => $para->id, 'name' => 'Santarém'],
                ['state_id' => $para->id, 'name' => 'Marabá'],
                ['state_id' => $para->id, 'name' => 'Castanhal'],
            ];
            City::insert($citiesPara);
        }

        //  GOIÁS
        $goias = State::where('name', 'Goiás')->first();
        if ($goias) {
            $citiesGoias = [
                ['state_id' => $goias->id, 'name' => 'Goiânia'],
                ['state_id' => $goias->id, 'name' => 'Aparecida de Goiânia'],
                ['state_id' => $goias->id, 'name' => 'Anápolis'],
                ['state_id' => $goias->id, 'name' => 'Rio Verde'],
            ];
            City::insert($citiesGoias);
        }

        //  MATO GROSSO
        $matoGrosso = State::where('name', 'Mato Grosso')->first();
        if ($matoGrosso) {
            $citiesMatoGrosso = [
                ['state_id' => $matoGrosso->id, 'name' => 'Cuiabá'],
                ['state_id' => $matoGrosso->id, 'name' => 'Várzea Grande'],
                ['state_id' => $matoGrosso->id, 'name' => 'Rondonópolis'],
                ['state_id' => $matoGrosso->id, 'name' => 'Sinop'],
            ];
            City::insert($citiesMatoGrosso);
        }

        //  ESTADOS UNIDOS
        //  CALIFÓRNIA
        $california = State::where('name', 'Califórnia')->first();
        if ($california) {
            $citiesCalifornia = [
                ['state_id' => $california->id, 'name' => 'Los Angeles'],
                ['state_id' => $california->id, 'name' => 'San Francisco'],
                ['state_id' => $california->id, 'name' => 'San Diego'],
                ['state_id' => $california->id, 'name' => 'Sacramento'],
                ['state_id' => $california->id, 'name' => 'San Jose'],
                ['state_id' => $california->id, 'name' => 'Fresno'],
            ];
            City::insert($citiesCalifornia);
        }

        //  FLÓRIDA
        $florida = State::where('name', 'Flórida')->first();
        if ($florida) {
            $citiesFlorida = [
                ['state_id' => $florida->id, 'name' => 'Miami'],
                ['state_id' => $florida->id, 'name' => 'Orlando'],
                ['state_id' => $florida->id, 'name' => 'Tampa'],
                ['state_id' => $florida->id, 'name' => 'Jacksonville'],
                ['state_id' => $florida->id, 'name' => 'St. Petersburg'],
                ['state_id' => $florida->id, 'name' => 'Fort Lauderdale'],
            ];
            City::insert($citiesFlorida);
        }

        //  NOVA IORQUE
        $novaIorque = State::where('name', 'Nova Iorque')->first();
        if ($novaIorque) {
            $citiesNovaIorque = [
                ['state_id' => $novaIorque->id, 'name' => 'Nova Iorque (NYC)'],
                ['state_id' => $novaIorque->id, 'name' => 'Buffalo'],
                ['state_id' => $novaIorque->id, 'name' => 'Rochester'],
                ['state_id' => $novaIorque->id, 'name' => 'Albany'],
                ['state_id' => $novaIorque->id, 'name' => 'Syracuse'],
            ];
            City::insert($citiesNovaIorque);
        }

        //  TEXAS
        $texas = State::where('name', 'Texas')->first();
        if ($texas) {
            $citiesTexas = [
                ['state_id' => $texas->id, 'name' => 'Houston'],
                ['state_id' => $texas->id, 'name' => 'Dallas'],
                ['state_id' => $texas->id, 'name' => 'Austin'],
                ['state_id' => $texas->id, 'name' => 'San Antonio'],
                ['state_id' => $texas->id, 'name' => 'Fort Worth'],
                ['state_id' => $texas->id, 'name' => 'El Paso'],
            ];
            City::insert($citiesTexas);
        }

        //  ILLINOIS
        $illinois = State::where('name', 'Illinois')->first();
        if ($illinois) {
            $citiesIllinois = [
                ['state_id' => $illinois->id, 'name' => 'Chicago'],
                ['state_id' => $illinois->id, 'name' => 'Aurora'],
                ['state_id' => $illinois->id, 'name' => 'Naperville'],
                ['state_id' => $illinois->id, 'name' => 'Joliet'],
                ['state_id' => $illinois->id, 'name' => 'Springfield'],
                ['state_id' => $illinois->id, 'name' => 'Rockford'],
            ];
            City::insert($citiesIllinois);
        }

        //  PENSILVÂNIA
        $pensilvania = State::where('name', 'Pensilvânia')->first();
        if ($pensilvania) {
            $citiesPensilvania = [
                ['state_id' => $pensilvania->id, 'name' => 'Filadélfia'],
                ['state_id' => $pensilvania->id, 'name' => 'Pittsburgh'],
                ['state_id' => $pensilvania->id, 'name' => 'Allentown'],
                ['state_id' => $pensilvania->id, 'name' => 'Erie'],
                ['state_id' => $pensilvania->id, 'name' => 'Reading'],
                ['state_id' => $pensilvania->id, 'name' => 'Scranton'],
            ];
            City::insert($citiesPensilvania);
        }

        //  PORTUGAL
        //  LISBOA
        $lisboa = State::where('name', 'Lisboa')->first();
        if ($lisboa) {
            $citiesLisboa = [
                ['state_id' => $lisboa->id, 'name' => 'Lisboa'],
                ['state_id' => $lisboa->id, 'name' => 'Sintra'],
                ['state_id' => $lisboa->id, 'name' => 'Cascais'],
                ['state_id' => $lisboa->id, 'name' => 'Oeiras'],
                ['state_id' => $lisboa->id, 'name' => 'Loures'],
                ['state_id' => $lisboa->id, 'name' => 'Amadora'],
            ];
            City::insert($citiesLisboa);
        }

        //  PORTO
        $porto = State::where('name', 'Porto')->first();
        if ($porto) {
            $citiesPorto = [
                ['state_id' => $porto->id, 'name' => 'Porto'],
                ['state_id' => $porto->id, 'name' => 'Vila Nova de Gaia'],
                ['state_id' => $porto->id, 'name' => 'Matosinhos'],
                ['state_id' => $porto->id, 'name' => 'Maia'],
                ['state_id' => $porto->id, 'name' => 'Gondomar'],
            ];
            City::insert($citiesPorto);
        }

        //  BRAGA
        $braga = State::where('name', 'Braga')->first();
        if ($braga) {
            $citiesBraga = [
                ['state_id' => $braga->id, 'name' => 'Braga'],
                ['state_id' => $braga->id, 'name' => 'Guimarães'],
                ['state_id' => $braga->id, 'name' => 'Barcelos'],
                ['state_id' => $braga->id, 'name' => 'Vila Nova de Famalicão'],
            ];
            City::insert($citiesBraga);
        }

        //  COIMBRA
        $coimbra = State::where('name', 'Coimbra')->first();
        if ($coimbra) {
            $citiesCoimbra = [
                ['state_id' => $coimbra->id, 'name' => 'Coimbra'],
                ['state_id' => $coimbra->id, 'name' => 'Figueira da Foz'],
                ['state_id' => $coimbra->id, 'name' => 'Cantanhede'],
            ];
            City::insert($citiesCoimbra);
        }

        //  AVEIRO
        $aveiro = State::where('name', 'Aveiro')->first();
        if ($aveiro) {
            $citiesAveiro = [
                ['state_id' => $aveiro->id, 'name' => 'Aveiro'],
                ['state_id' => $aveiro->id, 'name' => 'Ílhavo'],
                ['state_id' => $aveiro->id, 'name' => 'Ovar'],
            ];
            City::insert($citiesAveiro);
        }

        //  ARGENTINA
        $buenosAires = State::where('name', 'Buenos Aires')->first();
        if ($buenosAires) {
            $citiesBuenosAires = [
                ['state_id' => $buenosAires->id, 'name' => 'Buenos Aires'],
                ['state_id' => $buenosAires->id, 'name' => 'La Plata'],
                ['state_id' => $buenosAires->id, 'name' => 'Mar del Plata'],
                ['state_id' => $buenosAires->id, 'name' => 'Bahía Blanca'],
            ];
            City::insert($citiesBuenosAires);
        }

        $cordoba = State::where('name', 'Córdoba')->first();
        if ($cordoba) {
            $citiesCordoba = [
                ['state_id' => $cordoba->id, 'name' => 'Córdoba'],
                ['state_id' => $cordoba->id, 'name' => 'Villa Carlos Paz'],
                ['state_id' => $cordoba->id, 'name' => 'Río Cuarto'],
            ];
            City::insert($citiesCordoba);
        }

        $santaFe = State::where('name', 'Santa Fé')->first();
        if ($santaFe) {
            $citiesSantaFe = [
                ['state_id' => $santaFe->id, 'name' => 'Santa Fe'],
                ['state_id' => $santaFe->id, 'name' => 'Rosario'],
                ['state_id' => $santaFe->id, 'name' => 'Rafaela'],
            ];
            City::insert($citiesSantaFe);
        }

        //  CANADÁ
        $ontario = State::where('name', 'Ontário')->first();
        if ($ontario) {
            $citiesOntario = [
                ['state_id' => $ontario->id, 'name' => 'Toronto'],
                ['state_id' => $ontario->id, 'name' => 'Ottawa'],
                ['state_id' => $ontario->id, 'name' => 'Mississauga'],
                ['state_id' => $ontario->id, 'name' => 'Brampton'],
                ['state_id' => $ontario->id, 'name' => 'Hamilton'],
            ];
            City::insert($citiesOntario);
        }

        $quebec = State::where('name', 'Quebec')->first();
        if ($quebec) {
            $citiesQuebec = [
                ['state_id' => $quebec->id, 'name' => 'Montreal'],
                ['state_id' => $quebec->id, 'name' => 'Quebec City'],
                ['state_id' => $quebec->id, 'name' => 'Laval'],
                ['state_id' => $quebec->id, 'name' => 'Gatineau'],
            ];
            City::insert($citiesQuebec);
        }

        $columbiaBritanica = State::where('name', 'Colúmbia Britânica')->first();
        if ($columbiaBritanica) {
            $citiesColumbiaBritanica = [
                ['state_id' => $columbiaBritanica->id, 'name' => 'Vancouver'],
                ['state_id' => $columbiaBritanica->id, 'name' => 'Victoria'],
                ['state_id' => $columbiaBritanica->id, 'name' => 'Surrey'],
                ['state_id' => $columbiaBritanica->id, 'name' => 'Burnaby'],
            ];
            City::insert($citiesColumbiaBritanica);
        }

        //  JAPÃO
        $toquio = State::where('name', 'Tóquio')->first();
        if ($toquio) {
            $citiesToquio = [
                ['state_id' => $toquio->id, 'name' => 'Tóquio'],
                ['state_id' => $toquio->id, 'name' => 'Hachioji'],
                ['state_id' => $toquio->id, 'name' => 'Tama'],
            ];
            City::insert($citiesToquio);
        }

        $osaka = State::where('name', 'Osaka')->first();
        if ($osaka) {
            $citiesOsaka = [
                ['state_id' => $osaka->id, 'name' => 'Osaka'],
                ['state_id' => $osaka->id, 'name' => 'Sakai'],
                ['state_id' => $osaka->id, 'name' => 'Hirakata'],
            ];
            City::insert($citiesOsaka);
        }

        $kyoto = State::where('name', 'Kyoto')->first();
        if ($kyoto) {
            $citiesKyoto = [
                ['state_id' => $kyoto->id, 'name' => 'Kyoto'],
                ['state_id' => $kyoto->id, 'name' => 'Uji'],
                ['state_id' => $kyoto->id, 'name' => 'Kameoka'],
            ];
            City::insert($citiesKyoto);
        }
    }
}
