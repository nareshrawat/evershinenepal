<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->delete();
    	
        $faker = Faker::create();
    	foreach (range(1,25) as $index) {
	        DB::table('pages')->insert([
	            'title' => $faker->sentence,
	            'slug' => $faker->sentence,
	            'description' => $faker->paragraph,
	            'parent' => 0,
	            
	        ]);
        }
    }
}
