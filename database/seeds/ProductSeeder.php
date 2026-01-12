<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'title' => 'Nike Air Max',
                'slug' => 'nike-air-max',
                'summary' => 'Classic comfort and style.',
                'description' => 'The Nike Air Max delivers timeless style and cushioned comfort.',
                'photo' => '/storage/photos/1/mjns.jpg',
                'stock' => 50,
                'size' => 'M,L,XL',
                'condition' => 'new',
                'status' => 'active',
                'price' => 120.00,
                'discount' => 10.00,
                'is_featured' => 1,
                'cat_id' => 1, // Men's Fashion
                'brand_id' => 2, // Nike
            ],
            [
                'title' => 'Adidas Running Shoes',
                'slug' => 'adidas-running-shoes',
                'summary' => 'Lightweight running shoes.',
                'description' => 'Perfect for your daily run.',
                'photo' => '/storage/photos/1/mjns.jpg',
                'stock' => 30,
                'size' => 'S,M,L',
                'condition' => 'hot',
                'status' => 'active',
                'price' => 90.00,
                'discount' => 5.00,
                'is_featured' => 1,
                'cat_id' => 2, // Women's Fashion
                'brand_id' => 1, // Adidas
            ],
            [
                'title' => 'Kids T-Shirt',
                'slug' => 'kids-t-shirt',
                'summary' => 'Colorful t-shirt for kids.',
                'description' => 'Soft cotton fabric.',
                'photo' => '/storage/photos/1/mjns.jpg',
                'stock' => 100,
                'size' => 'S,M',
                'condition' => 'default',
                'status' => 'active',
                'price' => 25.00,
                'discount' => 0.00,
                'is_featured' => 0,
                'cat_id' => 3, // Kid's
                'brand_id' => 6, // Brand
            ],
            [
                'title' => 'Men Jeans',
                'slug' => 'men-jeans',
                'summary' => 'Stylish denim jeans.',
                'description' => 'Comfortable fit.',
                'photo' => '/storage/photos/1/mjns.jpg',
                'stock' => 40,
                'size' => '30,32,34',
                'condition' => 'new',
                'status' => 'active',
                'price' => 55.00,
                'discount' => 15.00,
                'is_featured' => 1,
                'cat_id' => 5, // Jeans pants
                'brand_id' => 4, // Prada
            ],
            [
                'title' => 'Summer Dress',
                'slug' => 'summer-dress',
                'summary' => 'Light and breezy.',
                'description' => 'Perfect for summer days.',
                'photo' => '/storage/photos/1/mjns.jpg',
                'stock' => 20,
                'size' => 'S,M,L',
                'condition' => 'hot',
                'status' => 'active',
                'price' => 45.00,
                'discount' => 5.00,
                'is_featured' => 1,
                'cat_id' => 2, // Women's Fashion
                'brand_id' => 6, // Brand
            ],
            [
                'title' => 'Casual Hoodie',
                'slug' => 'casual-hoodie',
                'summary' => 'Warm and cozy hoodie.',
                'description' => 'Great for chilly evenings.',
                'photo' => '/storage/photos/1/mjns.jpg',
                'stock' => 60,
                'size' => 'M,L,XL',
                'condition' => 'default',
                'status' => 'active',
                'price' => 35.00,
                'discount' => 0.00,
                'is_featured' => 0,
                'cat_id' => 1, // Men's Fashion
                'brand_id' => 2, // Nike
            ],
            [
                'title' => 'Leather Jacket',
                'slug' => 'leather-jacket',
                'summary' => 'Premium leather jacket.',
                'description' => 'Adds a cool vibe to any outfit.',
                'photo' => '/storage/photos/1/mjns.jpg',
                'stock' => 10,
                'size' => 'L,XL',
                'condition' => 'new',
                'status' => 'active',
                'price' => 250.00,
                'discount' => 20.00,
                'is_featured' => 1,
                'cat_id' => 1, // Men's Fashion
                'brand_id' => 4, // Prada
            ],
            [
                'title' => 'Running Shorts',
                'slug' => 'running-shorts',
                'summary' => 'Breathable running shorts.',
                'description' => 'Stay cool while you run.',
                'photo' => '/storage/photos/1/mjns.jpg',
                'stock' => 80,
                'size' => 'S,M,L',
                'condition' => 'default',
                'status' => 'active',
                'price' => 20.00,
                'discount' => 0.00,
                'is_featured' => 0,
                'cat_id' => 2, // Women's Fashion
                'brand_id' => 1, // Adidas
            ],
            [
                'title' => 'Kids Sneakers',
                'slug' => 'kids-sneakers',
                'summary' => 'Durable sneakers for kids.',
                'description' => 'Built to last.',
                'photo' => 'https://via.placeholder.com/300',
                'stock' => 45,
                'size' => 'S,M',
                'condition' => 'new',
                'status' => 'active',
                'price' => 40.00,
                'discount' => 5.00,
                'is_featured' => 1,
                'cat_id' => 3, // Kid's
                'brand_id' => 2, // Nike
            ],
            [
                'title' => 'Graphic T-Shirt',
                'slug' => 'graphic-t-shirt',
                'summary' => 'Cool graphic print.',
                'description' => 'Express yourself.',
                'photo' => 'https://via.placeholder.com/300',
                'stock' => 100,
                'size' => 'S,M,L,XL',
                'condition' => 'hot',
                'status' => 'active',
                'price' => 18.00,
                'discount' => 0.00,
                'is_featured' => 1,
                'cat_id' => 4, // T-shirt's
                'brand_id' => 6, // Brand
            ]
        ];

        foreach ($products as $product) {
            // Check if product exists to avoid duplicates
            $exists = DB::table('products')->where('slug', $product['slug'])->exists();
            if (!$exists) {
                $product['created_at'] = now();
                $product['updated_at'] = now();
                DB::table('products')->insert($product);
            }
        }
    }
}
