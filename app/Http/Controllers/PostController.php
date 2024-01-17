<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
    
        $products = DB::table('posts')->get();
        
         // 変数$productsをproducts/index.blade.phpファイルに渡す
         return view('posts.index', compact('products'));
        
   }
}