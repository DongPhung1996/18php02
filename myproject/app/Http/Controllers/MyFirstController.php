<?php

namespace App\Http\Controllers; //duong dan chua controller

use Illuminate\Http\Request; //su dung cac thu vien cua laravel hoac cac thu vien khac

class MyFirstController extends Controller
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

    public function getCategory() {
    	return view('categories');
    }

    public function getProduct() {
    	return view('products');
    }
}
