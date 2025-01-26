<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransportUnit;
use Illuminate\Support\Str;

class TransportUnitsSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $units = [];

        for ($i = 0; $i < 30000; $i++) {
            $datatype = $faker->randomElement(['Trailer', 'Truck']);
            $name = $datatype === 'Trailer'
                ? $this->generateTrailerName($faker)
                : $this->generateTruckName($faker);

            $units[] = [
                'name' => $name,
                'datatype' => $datatype,
            ];
        }

        // Insert all at once for efficiency
        TransportUnit::insert($units);
    }

    private function generateTrailerName($faker)
    {
        $adjectives = ['Heavy-Duty', 'Flatbed', 'Refrigerated', 'Double Axle', 'Expandable', 'Enclosed'];
        $trailerTypes = ['Carrier', 'Hauler', 'Transporter', 'Freightmaster', 'LoadKing', 'CargoMate'];

        return $faker->randomElement($adjectives) . ' ' . $faker->randomElement($trailerTypes);
    }

    private function generateTruckName($faker)
    {
        $brands = ['Volvo', 'Mack', 'Peterbilt', 'Kenworth', 'Freightliner', 'Scania', 'MAN', 'DAF'];
        $models = ['X-Series', 'Eagle', 'Globetrotter', 'Commander', 'Titan', 'Roadmaster'];

        return $faker->randomElement($brands) . ' ' . $faker->randomElement($models);
    }
}
