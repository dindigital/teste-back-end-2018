<?php

namespace  Marcus\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Validator;
use Marcus\Formularios;
use Marcus\User;
use Mail;
use Log;
use Marcus\Mail\EnviarEmailAdmin;


class FormulariosController extends Controller
{
    //


 	#custom#
	public function enviar(Request $request){
		$formulario = new Formularios($request->all());
		$formulario->save();
		$admin = (User::all());
		$admin = $admin[0];
		$email_admin = config('MAIL_USERNAME');
		try{
			Mail::to($admin->email)->send(new EnviarEmailAdmin($request,$admin,$email_admin));
		}catch(\Exception $e){
			Log::critical('Erro no envio do email');
		}
		return redirect()->action("HomeController@sucesso");

	}


	public function listar(){
		$formulario = Formularios::all();
		return view('admin.contato.listagem')->with('contatos',$formulario);
	}
    #custom#

}
