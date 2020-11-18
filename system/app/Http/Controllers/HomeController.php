<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showindex(){
		return view('index');
	}


	function showlog(){
		return view('log');
	}

	function showproduk(){
		return view('produk');
	}

}