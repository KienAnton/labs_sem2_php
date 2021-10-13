<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function demo(){
        $product = new Product();
        $product->name = 'Đồ chơi bóng bi lắc 6';
        $product->price = 500000;
        $product->description = 'dễ chơi';
        $product->thumbnail = 'https://sudospaces.com/babycuatoi/2021/06/3623-do-choi-ban-bong-da-bi-lac-cho-be-medium.jpg';
        $product->detail = 'detail';
        $product->created_at = Carbon::now();
        $product->updated_at = Carbon::now();
        $product->status = 1;
        $product->save();
    }

    public function demo1(){
        return Product::all();
    }

    // Xoa cung
    public function demo2(){
//        $product = Product::find(6);
//        $product->delete();
        return Product::withoutTrashed()-get();
    }

    // Xoa mem
    public function demo3(){
        $product = Product::find(3);
        $product->status = -1;
       // $product->deleted_at = Carbon::now();
        $product->save();
        return 'success';
    }

    public function demo4(){
        $product = Product::find(5);
        //$product->status = -1;
        //$product->updated_at = Carbon::now();
        $product->delete();
        return 'success';
    }
}
