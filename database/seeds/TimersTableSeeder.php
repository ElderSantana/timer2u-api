<?php

use Illuminate\Database\Seeder;
Use App\Timer;

class TimersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Timer::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Timer::create([
                'description' => 'description of the time',
                'time' => '01:02:53',
            ]);
        }
    }
}
