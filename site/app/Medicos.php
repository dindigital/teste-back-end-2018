<?php
#infoData#
namespace Marcus;

use Illuminate\Database\Eloquent\Model;

class Medicos extends Model
{
	protected $table = 'medicos'	;

	protected $primaryKey  = 'id';

	protected $fillable = array('id','nome','especialidade','celular','descricao','foto','created_at','updated_at');

	//Put all your custom methods below and inside the custom tags
	//This custom tags will not be deleted after the generation
    #custom#
    public function especialidadeMedico(){
    	return $this->belongsTo("Marcus\Especialidades",'especialidade');
    }
    #custom#
}
