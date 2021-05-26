<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Servicio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validamos los datos
        $data = request()->validate([
            'titulo'=>'required',
            'contenido'=>'required',
            'imagen'=>'required|image',
            'titulo_en' => 'nullable',
            'contenido_en' => 'nullable',
            'titulo_it' => 'nullable',
            'contenido_it' => 'nullable'
        ]);

        //obtenemos la ruta de la imagen
        $ruta_imagen = $request['imagen']->store('upload-posts','public');

        $producto = Post::create([
            'imagen' => $ruta_imagen,
            'titulo' => $data['titulo'],
            'contenido' => $data['contenido'],
            'titulo_en' => $data['titulo_en'],
            'contenido_en' => $data['contenido_en'],
            'slug_en' => Str::of($data['titulo_en'])->slug('-'),
            'titulo_it' => $data['titulo_it'],
            'contenido_it' => $data['contenido_it'],
            'slug_it' => Str::of($data['titulo_it'])->slug('-'),
        ]);

        return redirect()->route('administracion.posts.index');

    }

    
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //validamos los datos
        $data = request()->validate([
            'titulo'=>'required',
            'contenido'=>'required',
            'imagen'=>'nullable|image',
            'titulo_en' => 'nullable',
            'contenido_en' => 'nullable',
            'titulo_it' => 'nullable',
            'contenido_it' => 'nullable'
        ]);

        //asignamos los valores
        $post->titulo= $data['titulo'];
        $post->contenido= $data['contenido'];

        $post->titulo_en= $data['titulo_en'];
        $post->contenido_en= $data['contenido_en'];
        $post->slug_en= Str::of($data['titulo_en'])->slug('-');

        $post->titulo_it= $data['titulo_it'];
        $post->contenido_it= $data['contenido_it'];
        $post->slug_it= Str::of($data['titulo_it'])->slug('-');
        
       
        //si el usuario sube una nueva imagen
        if(request('imagen')){
            $ruta_imagen = $request['imagen']->store('upload-productos','public');
            //asignamos la imagen 
            $post->imagen = $ruta_imagen;
        }
        $post->save();

        return redirect()->route('administracion.posts.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        
        $post->delete();

        return redirect()->route('administracion.posts.index'); 
    }
}
