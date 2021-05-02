<?php

namespace App\Http\Controllers;

use App\Models\Italiano;
use Illuminate\Http\Request;

class ItalianoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviciosItaliano = Italiano::paginate(5);

        return view('admin.servicios-italiano.index',compact('serviciosItaliano'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicios-italiano.create');
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

        $producto = Italiano::create([
            'imagen' => $ruta_imagen,
            'titulo' => $data['titulo'],
            'subtitulo' => $data['subtitulo'],
            'descripcion' => $data['descripcion'],
            'precioEuro' => $data['precioEuro'],
            'estado' => $data['estado']
        ]);

        return redirect()->route('administracion.servicios-italiano.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Italiano  $italiano
     * @return \Illuminate\Http\Response
     */
    public function show(Italiano $italiano)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Italiano  $italiano
     * @return \Illuminate\Http\Response
     */
    public function edit(Italiano $italiano)
    {
        return view('admin.servicios-italiano.edit',compact('italiano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Italiano  $italiano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Italiano $italiano)
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
            $italiano->imagen = $ruta_imagen;
        }

        $italiano->titulo = $data['titulo'];
        $italiano->subtitulo = $data['subtitulo'];
        $italiano->descripcion = $data['descripcion'];
        $italiano->precioEuro = $data['precioEuro'];    
        $italiano->estado = $data['estado'];

        //guardamos
        $italiano->save();

        //redireccion
        return redirect()->route('administracion.servicios-italiano.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Italiano  $italiano
     * @return \Illuminate\Http\Response
     */
    public function destroy(Italiano $italiano)
    {
        $italiano->delete();

        return redirect()->route('administracion.servicios-italiano.index'); 
    }
}
