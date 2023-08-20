<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{   
  
    public function index() {
       
        return view('index') ;
    }
    public function about() {
        $name = "Giang";
        $names = array('Hoang', 'Giang', 'Trang', 'Dung');
        // $name = [];
        return view('about', [
            'names' => $names,
        ]);
    }
}
