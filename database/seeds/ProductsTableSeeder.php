<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(2,3) as $id)
        {
            foreach(range(1,3) as $index)
            {
                $product = Product::create([
                    'name'          => $faker->sentence(4),
                    'description'   => $faker->paragraph(4),
                    'price'         => $faker->randomFloat(2, 0, 100),
                    'created_by_id' => $id,
                ]);
            
                $product->addMediaFromUrl(public_path("images/featured$index.jpg"))->toMediaCollection('main_photo');
                foreach($faker->randomElements(range(1,3), 3) as $index)
                {
                    $product->addMediaFromUrl(public_path("images/reserve-slide$index.jpg"))->toMediaCollection('additional_photos');
                }
            }
        }
    }
}
