<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['name' => 'Áo thun nam', 'category' => 'ao-nam', 'description' => 'Áo thun nam mát mẻ', 'price' => 150000, 'image' => 'ao-thun-nam.jpg', 'active' => true],
            ['name' => 'Áo sơ mi nam', 'category' => 'ao-nam', 'description' => 'Áo sơ mi nam lịch lãm', 'price' => 250000, 'image' => 'ao-so-mi-nam.jpg', 'active' => true],
            ['name' => 'Quần jeans nam', 'category' => 'quan-nam', 'description' => 'Quần jeans nam phong cách', 'price' => 350000, 'image' => 'quan-jeans-nam.jpg', 'active' => true],
            ['name' => 'Quần kaki nam', 'category' => 'quan-nam', 'description' => 'Quần kaki nam thoải mái', 'price' => 280000, 'image' => 'quan-kaki-nam.jpg', 'active' => true],
            ['name' => 'Áo nam 1', 'category' => 'do-nam', 'description' => 'Áo nam đẹp', 'price' => 200000, 'image' => 'ao-nam-1.jpg', 'active' => true],
            ['name' => 'Quần nam 1', 'category' => 'do-nam', 'description' => 'Quần nam thời trang', 'price' => 300000, 'image' => 'quan-nam-1.jpg', 'active' => true],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}