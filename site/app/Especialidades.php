<?php
#infoData#
namespace Marcus;

use Illuminate\Database\Eloquent\Model;

class Especialidades extends Model
{
	protected $table = 'especialidades'	;

	protected $primaryKey  = 'id';

	protected $fillable = array('id','especialidade','created_at','updated_at');


	public function medicos(){

		return $this->hasMany('App\Medicos');
	}
	//Put all your custom methods below and inside the custom tags
	//This custom tags will not be deleted after the generation
    #custom#
    
    #custom#
}
