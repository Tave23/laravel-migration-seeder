<?php

use App\Holiday;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newHoliday = new Holiday();

            $newHoliday->address = $faker->streetAddress();
            $newHoliday->data_arrivo = $faker->date();
            $newHoliday->data_partenza = $faker->date();
            $newHoliday->stelle_hotel = $faker->numberBetween(1,5);
            $newHoliday->piscina = $faker->boolean(20);
            $newHoliday->volo_incluso = $faker->boolean(50);
            $newHoliday->descrizione = $faker->text(150);
            $newHoliday->prezzo = $faker->numberBetween(20,5000);
            $newHoliday->ultima_recensione = $faker->text(150);
            
        }
    }
}
