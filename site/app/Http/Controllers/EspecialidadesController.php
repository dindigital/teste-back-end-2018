<?php

namespace  Marcus\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Validator;
use Marcus\Especialidades;
use Marcus\Medicos;
use Marcus\Http\Requests\EpecialidadesRequest;

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

	public function inserir(EpecialidadesRequest $request){
		
		$especialidade = new Especialidades($request->all());
		$especialidade->save();
		return redirect()->action('EspecialidadesController@indexAdmin');
		
	}


	public function excluir(Request $request){
		$id = $request->get('especialidade');
		$medicosComEspecialidade = Medicos::where('especialidade', '=', $id)->count();


		if($medicosComEspecialidade >= 1){

			$data=[
				'status'=>'0',
				'msg'=>'Especialidade sendo utilizada'
			];

		}else{
			$destroy = Especialidades::destroy($id);
			if ($destroy){
				$data=[
					'status'=>'1',
					'msg'=>'ok'
				];
			}else{
				$data=[
					'status'=>'0',
					'msg'=>'Falha ao excluir a especialidade'
				];
			}
		}

		return response()->json($data);

    #custom#

	}
}
