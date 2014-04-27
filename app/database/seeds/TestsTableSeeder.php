<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TestsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Test::create([
                "user_id" => $faker->randomDigit,
                "title" => $faker->sentence(4),
                "description" => $faker->text(),
                "created_at" => $faker->dateTimeBetween('now', '+7 days'),
                "updated_at" => $faker->dateTimeBetween('+7 days', '+20 days')
			]);
		}
	}

}