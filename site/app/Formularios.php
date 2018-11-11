<?php
#infoData#
namespace Marcus;

use Illuminate\Database\Eloquent\Model;

class Formularios extends Model
{
	protected $table = 'formularios'	;

	protected $primaryKey  = 'id';

	protected $fillable = array('id','nome','email','telefone','created_at','updated_at');

	//Put all your custom methods below and inside the custom tags
	//This custom tags will not be deleted after the generation
    #custom#
    
    #custom#
}
