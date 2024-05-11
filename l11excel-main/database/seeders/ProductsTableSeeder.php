<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'name' => 'Product 1',
            'detail' => 'Detail 1',
            'price' => '100000',
            'image' => 'image1.jpg',
        ]);
        \App\Models\Product::create([
            'name' => 'Products 2',
            'detail' => 'Detail 2',
            'price' => '10000000',
            'image' => 'image2.jpg',
        ]); \App\Models\Product::create([
            'name' => 'Products 3',
            'detail' => 'Detail 3',
            'price' => '100000',
            'image' => 'image3.jpg',
        ]); \App\Models\Product::create([
            'name' => 'Products 4',
            'detail' => 'Detail 4',
            'price' => '10000',
            'image' => 'image4.jpg',
        ]); \App\Models\Product::create([
            'name' => 'Product 5',
            'detail' => 'Detail 5',
            'price' => '1000',
            'image' => 'image5.jpg',
        ]);//
    }
}
