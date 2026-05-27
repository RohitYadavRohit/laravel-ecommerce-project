<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $faker = Faker::create();
        for($i=1;$i<=100;$i++){
            $product = new Product();
            $product->product_title=$faker->words(3, true);
            $product->product_description=$faker->paragraph();
            $product->product_quantity=$faker->numberBetween(1, 100);
            $product->product_price=$faker->numberBetween(100, 5000);
            
             // image name only
            $product->product_image = '1779905940.jpg';
            $product->product_category=$faker->randomElement([
                        'Electronics',
                        'Fashion',
                        'Shoes',
                        'Books',
                        'Mobile'
                    ]);
            $product->save();

        }

    }
}
