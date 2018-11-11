<?php
#infoData#
namespace Marcus;

use Illuminate\Database\Eloquent\Model;

class Migrations extends Model
{
	protected $table = 'migrations'	;

	protected $primaryKey  = 'id';

	protected $fillable = array('id','migration','batch');
    public $timestamps = false;

	//Put all your custom methods below and inside the custom tags
	//This custom tags will not be deleted after the generation
    #custom#
    
    #custom#
}
