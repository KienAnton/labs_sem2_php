<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
