<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        DB::table('customers')->insert([
                [
                    'id' => 1,
                    'name' => 'Nguyen Kien',
                    'address' => 'Dong Da, Ha Noi',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 2,
                    'name' => 'Nguyen Cuong',
                    'address' => 'Ba Dinh, Ha Noi',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 3,
                    'name' => 'Nguyen Chanh',
                    'address' => 'Tay Ho, Ha Noi',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 4,
                    'name' => 'Nguyen Xien',
                    'address' => 'Tay Ho, Ha Noi',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 5,
                    'name' => 'Hoang Chanh',
                    'address' => 'Tay Ho, Ha Noi',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ]
        );
    }
}
