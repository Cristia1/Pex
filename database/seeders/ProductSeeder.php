<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $path = public_path('images');

        for ($i = 0; $i < 500; $i++) {

            $imageUrl = $faker->imageUrl(640, 480);
            $contents = @file_get_contents($imageUrl);

            if ($contents === false) {
                Log::error("Failed to download image from $imageUrl");
                continue;
            }

            $fileName = $faker->uuid . '.jpg';

            if (!file_put_contents($path . '/' . $fileName, $contents)) {
                Log::error("Failed to save image to $path/$fileName");
                continue;
            }

            Product::create([
                'name' => 'Produs ' . $faker->unique()->numberBetween(1, 1000),
                'details' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 0, 999.99),
                'status' => $faker->numberBetween(0, 1),
                'image' => $fileName,
            ]);
        }
    }
}
