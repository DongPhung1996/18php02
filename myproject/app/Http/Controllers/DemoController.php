<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class DemoController extends Controller
{
    public function getController() {
        echo 'Hello Laravel, My First Controller';
    }

    public function testController() {
        echo 'Hello, My first!';
    }

    public function getInfoUser($idUser) {
        return $idUser;
    }

    public function demoView() {
        return view('view_1', ['name'=>'Dong', 'email' => 'dongphung1996']);
    }

    public function queryDB() {
        $data = DB::table('products')->get();
        dd($data);
    }

    public function eloquent() {
        $products = Product::get();
        dd($products);
    }

    
}
