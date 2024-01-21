<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 use App\Models\Post;

class PostController extends Controller
{
    public function index() {
    
        $products = DB::table('posts')->get();
        
         return view('posts.index', compact('products'));
   }
   public function show($id) {
    // URL'/products/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをproductsテーブルから取得し、変数$productに代入する
    $product = Post::find($id);

    return view('posts.show', compact('products'));
   }
}