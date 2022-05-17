<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FederalEntity;
use App\Models\Municipality;
use App\Models\Zipcode;
use App\Models\Settlement;

class Zipcodes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        try {
            $federalEntity = FederalEntity::create([
                'name' => "Nuevo León",
                'code' => "10",
                'key' => 5
            ]);

            $municipality = Municipality::create([
                "name" => "Guadalupe",
                "key" => 4,
                "federal_entity" => $federalEntity->id
            ]);

            $zipcode = Zipcode::create([
                'locality' => "Casa blanca",
                'zip_code' => "67162",
                'federal_entity' => $federalEntity->id,
                'municipality' => $municipality->id
            ]);

            $zone_type = array("Urbano", "Rural", "Semiurbano");
            for ($i = 0; $i < 10; $i++) {

                $settlement = Settlement::create([
                    "key" => rand(1, 100),
                    "zone_type" => $zone_type[rand(0, 3)],
                    "settlement_type" => 1,
                    "municipality" => $municipality->id,
                    "zip_code" => $zipcode->id
                ]);

                unset($settlement);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
