<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        DB::table('orders')->insert([
                [
                    'customerId' => 2,
                    'id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
               ],
                [
                    'id' => 2,
                    'customerId' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 3,
                    'customerId' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 4,
                    'customerId' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 5,
                    'customerId' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 6,
                    'customerId' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 7,
                    'customerId' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 8,
                    'customerId' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 9,
                    'customerId' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 10,
                    'customerId' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ]
        );
    }
}
