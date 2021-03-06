<?php

namespace fjerbi\ultimateblog\Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,20) as $index) {
	        DB::table('categories')->insert([
                'name' => $faker->word,
                'slug' => $faker->slug,
                'image'=> $faker->image('public/storage/images',640,480, null, false),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
	    
	        ]);
    };
    }
}
