<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        \Illuminate\Support\Facades\DB::table('categories')->insert([
                [
                    'id' => 1,
                    'price' => 50000,
                    'name' => 'Banh da',
                    'description' => 'Banh da',
                    'thumbnail' => 'Banh da',
                    'detail' => 'Banh da',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],
                [
                    'id' => 2,
                    'price' => 50000,
                    'name' => 'Banh da',
                    'description' => 'ngon',
                    'thumbnail' => 'haha',
                    'detail' => 'buon cuoi',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ]
            ]
        );
    }
}
