<?php

namespace  Marcus\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Validator;
use Marcus\Formularios;
use Marcus\User;
use Mail;
use Marcus\Mail\EnviarEmailAdmin;


class FormulariosController extends Controller
{
    //


 	#custom#
	public function enviar(Request $request){
		$formulario = new Formularios($request->all());
		$admin = (User::all());
		$admin = $admin[0];
		Mail::to($admin->email)->send(new EnviarEmailAdmin($request,$admin));
		$formulario->save();
		return redirect()->action("HomeController@sucesso");

	}


	public function listar(){
		$formulario = Formularios::all();
		return view('admin.contato.listagem')->with('contatos',$formulario);
	}
    #custom#

}
