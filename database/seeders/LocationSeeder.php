<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = new Location();
        $locations->name = "Instituto Tecnológico de Aguascalientes";
        $locations->description = "Institución con orientación a licenciaturas en ingeniería";
        $locations->address = "Av. Adolfo López Mateos #1801 Ote. Fracc. Bona Gens, C.P. 20256 Aguascalientes, Ags., México.";
        $locations->category_id = 1;
        $locations->save();
    }
}
