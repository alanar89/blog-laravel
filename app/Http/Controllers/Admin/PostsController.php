<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Categoria;
use App\Tag;
use Carbon\Carbon;

class PostsController extends Controller
{
   
   public function index()
    {
    	$posts=Post::all();
        return view('admin.post.index',compact('posts'));
    }

      public function alta()
    {
    	$categorias=Categoria::all();
    	$tags=Tag::all();
        return view('admin.post.alta',compact('categorias','tags'));
    }

        public function guardar(request $request)
    {
    	$this->validate($request,[
    		'titulo'=>'required'


    		]);
    	$post= new Post;
        $post->titulo=$request->titulo;
          $post->vistaPrevia=$request->fragmento;
            $post->cuerpo=$request->contenido;
             $post->fechaPublicacion=Carbon::parse($request->fecha);
               $post->categoria_id=$request->categoria;
               $post->save();
               $post->tags()->attach($request->etiquetas); 
               return back()->with('flash','publicacion creada');
    }
}
