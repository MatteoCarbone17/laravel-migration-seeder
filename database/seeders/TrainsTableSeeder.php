<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  $table->id();
    //         $table->string('agency', 255);
    //         $table->string('departure_station', 255);
    //         $table->string('arrival_station', 255);
    //         $table->dateTime('departure_time');
    //         $table->dateTime('arrival_time');
    //         $table->string('train_code', 255);
    //         $table->tinyInteger('cab');
    //         $table->boolean('on_time');
    //         $table->boolean('delayed');
    //         $table->timestamps();

    public function run(Faker $faker)
    {
         for ($i = 0; $i < 25 ; $i++) { 
           $new_train_object = new Train();
           $new_train_object->agency = $faker->word();
           $new_train_object->departure_station = $faker->word();
           $new_train_object->arrival_station = $faker->word();
           $new_train_object->departure_time = $faker->dateTime();
           $new_train_object->arrival_time = $faker->dateTime();
           $new_train_object->train_code = $faker->word();
           $new_train_object->cab = $faker->randomDigit();
           $new_train_object->on_time = $faker->boolean();
           $new_train_object->delayed = $faker->boolean();
           $new_train_object->save();
         }
    }
}
