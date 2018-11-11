<?php

namespace  Marcus\Http\Controllers;

use DB;
use Marcus\Http\Requests\MedicoRequest;
use Validator;
use Marcus\Medicos;
use Marcus\Especialidades;
    use Marcus\Http\Resources\ResourceMedicos;

class MedicosController extends Controller
{
    //


 	#custom#
	public function indexAdmin(){
		$medicos = Medicos::all();
		return view('admin.medicos.listagem')->with('medicos',$medicos);	
	}

	public function show($id = null){
		if($id != null){
			$medicos = array(Medicos::find($id));
		}else{
		$medicos = Medicos::all();
		}
		foreach($medicos as &$medico){
			$medico->especialidade = ($medico->especialidadeMedico->especialidade);
			$medico->foto  = url("storage/{$medico->foto}");
		}		

			return new ResourceMedicos($medicos);
	}


	public function dadosMedico($id){
		$medico = Medicos::find($id);
		if($medico){

		return view('site.doctor')->with('medico',$medico);
		}else{
			return redirect()->action("HomeController@index");
		}
	}

	public function cadastrar(){
		$especialidades =  Especialidades::all();
		return view('admin.medicos.cadastrar')->with('especialidades',$especialidades);
	}

	public function inserir(MedicoRequest $request)
	{

		$upload  = $this->inserirImagem($request);
		if( $upload === false){
			$especialidades =  Especialidades::all();
			return redirect()->back()->with('especialidades',$especialidades)->withInput(); 
		}else{
			$medico = new Medicos($request->all());
			$medico['foto'] = ($upload);
			$medico->save();
			return redirect()->action('MedicosController@indexAdmin');
		}
	}


	public function inserirImagem(MedicoRequest $request)
	{

    // Define o valor default para a variável que contém o nome da imagem 
		$nameFile = null;

    // Verifica se informou o arquivo e se é válido
		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			$permissoes_permitidas = array('jpg','gif','png','jpeg'); 
        // Define um aleatório para o arquivo baseado no timestamps atual
			$name = uniqid(date('HisYmd'));
        // Recupera a extensão do arquivo
			$extension = $request->image->extension();
			if(!in_array($extension,$permissoes_permitidas)){
				$upload = false;
			}else{
        // Define finalmente o nome
				$nameFile = "{$name}.{$extension}";

        // Faz o upload:
				$upload = $request->image->storeAs('medicos', $nameFile);
			}
        // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
        // Verifica se NÃO deu certo o upload (Redireciona de volta)
			if ( !$upload ){
				return false;
			}else{
				return $upload;
			}
		}else{
			return false;
		}
	}
    #custom#

}
