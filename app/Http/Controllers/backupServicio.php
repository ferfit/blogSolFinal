<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.servicios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicios.create');
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
            'subtitulo'=>'nullable',
            'descripcion'=>'required',
            'imagen'=>'image',
            'precioEuro' => 'nullable',
            'precioPeso' => 'nullable',
            'estado' => 'required'
        ]);

        //obtenemos la ruta de la imagen
        $ruta_imagen = $request['imagen']->store('upload-posts','public');

        $producto = Servicio::create([
            'imagen' => $ruta_imagen,
            'titulo' => $data['titulo'],
            'descripcion' => $data['descripcion'],
            'titulo_en' => $data['titulo_en'],
            'descripcion_en' => $data['descripcion_en'],
            'slug_en' => Str::of($data['titulo_en'])->slug('-'),
            'titulo_it' => $data['titulo_it'],
            'descripcion_it' => $data['descripcion_it'],
            'slug_it' => Str::of($data['titulo_it'])->slug('-'),
            'estado' => $data['estado']
        ]);

        return redirect()->route('administracion.servicios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        
        return view('admin.servicios.edit',compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        //validamos los datos
        $data = request()->validate([
            'titulo'=>'required',
            'descripcion'=>'required',
            'imagen'=>'image',
            'titulo_en' => 'nullable',
            'descripcion_en' => 'nullable',
            'titulo_it' => 'nullable',
            'descripcion_it' => 'nullable',
            'estado' => 'required'
        ]);

        //cargamos los datos
        if($request['imagen']){
            $ruta_imagen = $request['imagen']->store('upload-posts','public');
            $servicio->imagen = $ruta_imagen;
        }

        $servicio->titulo = $data['titulo'];
        $servicio->descripcion = $data['descripcion'];

        $servicio->titulo_en = $data['titulo_en'];
        $servicio->descripcion_en = $data['descripcion_en'];
        $servicio->slug_en = Str::of($data['titulo_en'])->slug('-');

        $servicio->titulo_it = $data['titulo_it'];
        $servicio->descripcion_it = $data['descripcion_it'];
        $servicio->slug_it = Str::of($data['titulo_it'])->slug('-');

        $servicio->estado = $data['estado'];
        //guardamos
        $servicio->save();

        //redireccion
        return redirect()->route('administracion.servicios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('administracion.servicios.index'); 
    }
}
