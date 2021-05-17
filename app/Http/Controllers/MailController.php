<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;





class MailController extends Controller
{
    public function getMail(Request $request){

        $data = request()->validate([
            'nombre'=>'required',
            'email'=>'required',
            'mensaje'=>'required'
        ]);

         /* $data = [
                    'name' => 'fernando',
                    'email' => 'ferfit16@gmail.com',
                    'mensaje' => 'Este es el cuerpo del mensaje'

                ]; */

                

        Mail::to('terapeutasolangemargot@gmail.com')->send(new TestMail($data));

        return redirect()->back()->with('formulario','ok') ;
    }
}
