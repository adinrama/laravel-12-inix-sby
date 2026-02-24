<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        $data = [
            [
                // produk 1
                'no'=>1,
                'name'=>'Sepatu Adidas',
                'price'=>1500000
            ],
            [
                // produk 2
                'no'=>2,
                'name'=>'Laptop ROG',
                'price'=>28000000
            ],
            [
                // produk 3
                'no'=>3,
                'name'=>'Laptop ACER',
                'price'=>19500000
            ],
            [
                // produk 4
                'no'=>4,
                'name'=>'Koper',
                'price'=>800000
            ]
        ];
        return view('pages.product', ['products'=>$data]);
    }
}
