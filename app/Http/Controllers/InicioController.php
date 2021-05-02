<?php


namespace App\Http\Controllers;
use App\Models\Servicio;
use App\Models\Ingle;
use App\Models\Italiano;
use App\Models\Post;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    

    public function inicio(){
        
        $terapiasEspañol = Servicio::where('estado', 1)
                                    ->take(4)
                                    ->get();

        $terapiasTotales = Servicio::where('estado', 1)
                                    ->get();
                            
        $posts = Post::orderBy('id', 'desc')->take(3)
                      ->get();
        return view('index',compact('terapiasEspañol','terapiasTotales','posts'));
    }

    public function terapias(){
        $terapiasEspañol = Servicio::where('estado', 1)
                                    ->get();
        return view('terapias',compact('terapiasEspañol'));
    }

    public function blog(){
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('blog',compact('posts'));
    }

    public function post(Post $post)
    {  
        return view('post',compact('post'));
    }


    /* metodos idioma ingles */

    public function inicioIngles(){
        
        $terapiasEspañol = Ingle::where('estado', 1)
                                    ->take(4)
                                    ->get();

        $terapiasTotales = Ingle::where('estado', 1)
                                    ->get();
                            
        $posts = Post::orderBy('id', 'desc')->take(3)
                      ->get();
        return view('ingles.index',compact('terapiasEspañol','terapiasTotales','posts'));
    }

    public function terapiasIngles(){
        $terapiasEspañol = Ingle::where('estado', 1)
                                    ->get();
        return view('ingles.terapias',compact('terapiasEspañol'));
    }

    public function blogIngles(){
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('ingles.blog',compact('posts'));
    }

    public function postIngles(Post $post)
    {  
        return view('ingles.post',compact('post'));
    }

    /* metodos idioma italiano */

    public function inicioItaliano(){
        
        $terapiasEspañol = Italiano::where('estado', 1)
                                    ->take(4)
                                    ->get();

        $terapiasTotales = Italiano::where('estado', 1)
                                    ->get();
                            
        $posts = Post::orderBy('id', 'desc')->take(3)
                      ->get();
        return view('italiano.index',compact('terapiasEspañol','terapiasTotales','posts'));
    }

    public function terapiasItaliano(){
        $terapiasEspañol = Italiano::where('estado', 1)
                                    ->get();
        return view('italiano.terapias',compact('terapiasEspañol'));
    }

    public function blogItaliano(){
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('italiano.blog',compact('posts'));
    }

    public function postItaliano(Post $post)
    {  
        return view('italiano.post',compact('post'));
    }


    /* formulario */

    public function formulario(Request $request){
        
        $data = request()->validate([
            'nombre'=>'required',
            'email'=>'required',
            'mensaje'=>'required'

        ]);

        $destinatario = 'ferfit16@gmail.com';
        $from = 'SolangeMargot@terapeutasolangemargot.com';
        $nombre = $data['nombre'];
        $email = $data['email'];
        $mensaje = $data['mensaje'];

        $contenido = "Nombre: " . $nombre .  "\nEmail: " . $email . "\nMensaje: " . $mensaje;

        $asunto = "Mensaje nuevo";

        $headers = "From: ".$from;

        mail($destinatario, $asunto, $contenido, $headers);

        return view('index');
    }
}
