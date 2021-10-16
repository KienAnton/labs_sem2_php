<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
                [
                    'order_id' => 1,
                    'product_id' => 2,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 2,
                    'product_id' => 3,
                    'quantity' => 20,
                    'unit_price' => 300000
                ],
                [
                    'order_id' => 3,
                    'product_id' => 4,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 4,
                    'product_id' => 5,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 5,
                    'product_id' => 6,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 6,
                    'product_id' => 7,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 7,
                    'product_id' => 8,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 8,
                    'product_id' => 1,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 9,
                    'product_id' => 10,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 10,
                    'product_id' => 10,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 10,
                    'product_id' => 8,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 10,
                    'product_id' => 7,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 10,
                    'product_id' => 6,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 10,
                    'product_id' => 5,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 10,
                    'product_id' => 4,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 10,
                    'product_id' => 3,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 10,
                    'product_id' => 2,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 10,
                    'product_id' => 1,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 1,
                    'product_id' => 3,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 1,
                    'product_id' => 4,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 1,
                    'product_id' => 5,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 1,
                    'product_id' => 6,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 1,
                    'product_id' => 7,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 8,
                    'product_id' => 2,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 8,
                    'product_id' => 3,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 8,
                    'product_id' => 4,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 8,
                    'product_id' => 5,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 8,
                    'product_id' => 6,
                    'quantity' => 20,
                    'unit_price' => 200000
                ],
                [
                    'order_id' => 8,
                    'product_id' => 8,
                    'quantity' => 20,
                    'unit_price' => 200000
                ], [
                    'order_id' => 7,
                    'product_id' => 1,
                    'quantity' => 20,
                    'unit_price' => 200000
                ]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
