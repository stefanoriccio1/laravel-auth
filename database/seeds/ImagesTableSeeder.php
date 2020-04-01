<?php

use Illuminate\Database\Seeder;
use App\Image;
use Faker\Generator as Faker;


class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 20; $i++) {

        $newImage = new Image;
        $newImage->name = $faker->title;
        $newImage->path = $faker->imageUrl(640, 480);
        $newImage->save();
      }

    }
}
