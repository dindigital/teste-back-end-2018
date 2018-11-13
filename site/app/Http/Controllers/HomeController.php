<?php

namespace Marcus\Http\Controllers;

use Illuminate\Http\Request;
use Marcus\Medicos;
use Marcus\Especialidades;
use Marcus\Formularios;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medicos::all();
         $medicoAleatorio = $medicos[mt_rand(0, count($medicos) - 1)];
        $dados_site = array(
            'medicos' => $medicos,
            'menu'=>true,
            'medicoAleatorio' =>  $medicoAleatorio
        );
        return view('site.index')->with($dados_site);
    }


    public function sucesso(){
        return view('site.appontment_success');
    }

   
}
