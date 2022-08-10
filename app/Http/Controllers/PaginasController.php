<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PaginasController extends Controller
{
   public function index()
    {
   	$posts=Post::whereNotNull('fechaPublicacion')->where('fechaPublicacion','<=',Carbon::now())->get();
    return view('welcome',compact('posts'));
    } 

    public function ver($id){
    	// $post=Post::where('id','=',$id)->get();
    	$post=Post::find($id);
    	return view('verPost',compact('post'));
    }
}
