<?php

namespace  Marcus\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Validator;
use Marcus\Especialidades;

class EspecialidadesController extends Controller
{
    //


 	#custom#
	public function indexAdmin(){
		$especialidades = Especialidades::all();

		return view('admin.especialidades.listagem')->with('especialidades',$especialidades);	
	}

	public function cadastrar(){

		return view('admin.especialidades.cadastrar');
	}

	public function inserir(Request $request){

		$nome_especialidade = $request->get('especialidade');
		$especialidade = Especialidades::where('especialidade', '=', $nome_especialidade)->count();
		if($especialidade > 0 ){
			return view('admin.especialidades.cadastrar')->with('erro','Especialidade já cadastrada');
		}else{
			$especialidade = new Especialidades($request->all());
			$especialidade->save();
			return redirect()->action('EspecialidadesController@indexAdmin');
		}
	}

	

    #custom#

}
