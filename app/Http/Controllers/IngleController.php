<?php

namespace App\Http\Controllers;

use App\Models\Ingle;
use Illuminate\Http\Request;

class IngleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviciosIngles = Ingle::paginate(5);
        return view('admin.servicios-ingles.index', compact('serviciosIngles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicios-ingles.create');
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
            'imagen'=>'image|required',
            'precioEuro' => 'nullable',
            'estado' => 'required'
        ]);

        //obtenemos la ruta de la imagen
        $ruta_imagen = $request['imagen']->store('upload-posts','public');

        $producto = Ingle::create([
            'imagen' => $ruta_imagen,
            'titulo' => $data['titulo'],
            'subtitulo' => $data['subtitulo'],
            'descripcion' => $data['descripcion'],
            'precioEuro' => $data['precioEuro'],
            'estado' => $data['estado']
        ]);

        return redirect()->route('administracion.servicios-ingles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingle  $ingle
     * @return \Illuminate\Http\Response
     */
    public function show(Ingle $ingle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingle  $ingle
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingle $ingle)
    {
        return view('admin.servicios-ingles.edit', compact('ingle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingle  $ingle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingle $ingle)
    {
        //validamos los datos
        $data = request()->validate([
            'titulo'=>'required',
            'subtitulo'=>'nullable',
            'descripcion'=>'required',
            'imagen'=>'image',
            'precioEuro' => 'nullable',
            'estado' => 'required'
        ]);

        //cargamos los datos
        if($request['imagen']){
            $ruta_imagen = $request['imagen']->store('upload-posts','public');
            $ingle->imagen = $ruta_imagen;
        }

        $ingle->titulo = $data['titulo'];
        $ingle->subtitulo = $data['subtitulo'];
        $ingle->descripcion = $data['descripcion'];
        $ingle->precioEuro = $data['precioEuro'];    
        $ingle->estado = $data['estado'];

        //guardamos
        $ingle->save();

        //redireccion
        return redirect()->route('administracion.servicios-ingles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingle  $ingle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingle $ingle)
    {
        $ingle->delete();

        return redirect()->route('administracion.servicios-ingles.index'); 
    }
}
