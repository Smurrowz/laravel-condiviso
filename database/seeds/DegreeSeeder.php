<?php

use App\Degree;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {

            $d = new Degree();

            $d->name = "Corso di " . $faker->words(rand(2, 4), true);
            $d->level = $faker->randomElement(['triennale', 'magistrale']);
            $d->address = $faker->address();
            $d->email = $faker->email();
            $d->website = 'https://' . $faker->url();

            $d->save();
        }
    }
}
