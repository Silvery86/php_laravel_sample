<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        // $title = 'Laravel Course App';
        // $x = 1;
        // $y = 2;
        // return view('products.index', compact('title', 'x', 'y')); // Cach 1 co the truyen nhieu bien

        // $name = 'Giang';
        // return view('products.index') -> with ('name', $name); // Cach 2 chi co the truyen 1 bien
        print_r(route('products'));
        return view('products.index');
    }

    public function about() {
        return 'This is about page';
    }

    public function detail($productName, $id) {
        return "Product name :".$productName." product's id = ".$id;

        // $phones = [
        //     'iphone 15' => 'iphone 15',
        //     'samsung' => 'samsung'
        // ];

        // return view('products.index',[
        //     'product' => $phone[$productName] ?? 'unknown product',
        // ]);
    }
}
