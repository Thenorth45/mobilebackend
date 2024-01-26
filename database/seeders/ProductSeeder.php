<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
            'product_name' => 'iPhone 14',
            'product_type' => 1,
            'price' => 39900,
            'created_at' => Carbon::now()
        ],
        [
            'product_name' => 'Galaxy S20',
            'product_type' => 1,
            'price' => 25900,
            'created_at' => Carbon::now()
        ],
        [
            'product_name' => 'LG Smart TV',
            'product_type' => 2,
            'price' => 30900,
            'created_at' => Carbon::now()
        ],
        [
            'product_name' => 'Samsung Smart TV',
            'product_type' => 2,
            'price' => 40900,
            'created_at' => Carbon::now()
        ]
        ]
    );
    }
}
