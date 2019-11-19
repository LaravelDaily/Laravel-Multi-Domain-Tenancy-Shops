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
        $product = Product::create([
            'id'            => '1',
            'name'          => 'Tasty Hand-Pulled Noodles',
            'description'   => 'Tasty Hand-Pulled Noodles is a 1950s style diner located in Madison, Wisconsin. Opened in 1946 by Mickey Weidman, and located just across the street from Camp Randall Stadium, it has become a popular game day tradition amongst many Badger fans. The diner is well known for its breakfast selections, especially the Scrambler, which is a large mound of potatoes, eggs, cheese, gravy, and a patrons’ choice of other toppings.',
            'price'         => 29.99,
            'created_by_id' => 2,
        ]);
        
        $product->addMediaFromUrl(public_path("images/featured1.jpg"))->toMediaCollection('main_photo');
        foreach(range(1,3) as $index)
        {
            $product->addMediaFromUrl(public_path("images/reserve-slide$index.jpg"))->toMediaCollection('additional_photos');
        }
    }
}
