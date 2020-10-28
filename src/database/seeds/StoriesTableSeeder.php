<?php

namespace fjerbi\ultimateblog\Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
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
	        DB::table('stories')->insert([
                'title' => $faker->word,
                'slug' => $faker->slug,
                'description' => $faker->description,
                'user_id' => User::all()->random()->user_id,
                'image'=> $faker->image('public/storage/images',640,480, null, false),
                'content' => $faker->paragraph,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
	    
	        ]);
    };
    }
    }

