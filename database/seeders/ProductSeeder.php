<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'price' => 555550,
                'name' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                'description' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                'thumbnail' => 'Banh da',
                'detail' => 'Sản phẩm được làm từ chất liệu an toàn cho trẻ nhỏ, nên quý phụ huynh hoàn toàn có thể yên tâm sẽ không gây ảnh hưởng đến sức khỏe của bé.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => 1
            ],
                [
                    'id' => 2,
                    'price' => 20000,
                    'name' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'description' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'thumbnail' => 'Banh da',
                    'detail' => 'Sản phẩm được làm từ chất liệu an toàn cho trẻ nhỏ, nên quý phụ huynh hoàn toàn có thể yên tâm sẽ không gây ảnh hưởng đến sức khỏe của bé.',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],
                [
                    'id' => 3,
                    'price' => 30000,
                    'name' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'description' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'thumbnail' => 'Banh da',
                    'detail' => 'Sản phẩm được làm từ chất liệu an toàn cho trẻ nhỏ, nên quý phụ huynh hoàn toàn có thể yên tâm sẽ không gây ảnh hưởng đến sức khỏe của bé.',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],
                [
                    'id' => 4,
                    'price' => 50000,
                    'name' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302A',
                    'description' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'thumbnail' => 'Banh da',
                    'detail' => 'Sản phẩm được làm từ chất liệu an toàn cho trẻ nhỏ, nên quý phụ huynh hoàn toàn có thể yên tâm sẽ không gây ảnh hưởng đến sức khỏe của bé.',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],
                [
                    'id' => 5,
                    'price' => 50000,
                    'name' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302X',
                    'description' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'thumbnail' => 'Banh da',
                    'detail' => 'Sản phẩm được làm từ chất liệu an toàn cho trẻ nhỏ, nên quý phụ huynh hoàn toàn có thể yên tâm sẽ không gây ảnh hưởng đến sức khỏe của bé.',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],
                [
                    'id' => 6,
                    'price' => 50000,
                    'name' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302XA',
                    'description' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'thumbnail' => 'Banh da',
                    'detail' => 'Sản phẩm được làm từ chất liệu an toàn cho trẻ nhỏ, nên quý phụ huynh hoàn toàn có thể yên tâm sẽ không gây ảnh hưởng đến sức khỏe của bé.',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],
                [
                    'id' => 7,
                    'price' => 50000,
                    'name' => 'Búp bê tóc dài và phụ kiện nhà bếp 630XAB',
                    'description' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'thumbnail' => 'Banh da',
                    'detail' => 'Sản phẩm được làm từ chất liệu an toàn cho trẻ nhỏ, nên quý phụ huynh hoàn toàn có thể yên tâm sẽ không gây ảnh hưởng đến sức khỏe của bé.',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],
                [
                    'id' => 8,
                    'price' => 50000,
                    'name' => 'Búp bê tóc dài và phụ kiện nhà bếp 630AAB',
                    'description' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'thumbnail' => 'Banh da',
                    'detail' => 'Sản phẩm được làm từ chất liệu an toàn cho trẻ nhỏ, nên quý phụ huynh hoàn toàn có thể yên tâm sẽ không gây ảnh hưởng đến sức khỏe của bé.',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],
                [
                    'id' => 9,
                    'price' => 50000,
                    'name' => 'Búp bê tóc dài và phụ kiện nhà bếp 6A02B',
                    'description' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'thumbnail' => 'Banh da',
                    'detail' => 'Sản phẩm được làm từ chất liệu an toàn cho trẻ nhỏ, nên quý phụ huynh hoàn toàn có thể yên tâm sẽ không gây ảnh hưởng đến sức khỏe của bé.',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],
                [
                    'id' => 10,
                    'price' => 50000,
                    'name' => 'Búp bê tóc dài và phụ kiện nhà bếp A02B',
                    'description' => 'Búp bê tóc dài và phụ kiện nhà bếp 6302B',
                    'thumbnail' => 'Banh da',
                    'detail' => 'Sản phẩm được làm từ chất liệu an toàn cho trẻ nhỏ, nên quý phụ huynh hoàn toàn có thể yên tâm sẽ không gây ảnh hưởng đến sức khỏe của bé.',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],
            ]
        );

    }
}
