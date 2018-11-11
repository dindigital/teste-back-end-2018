<?php
#infoData#
namespace Marcus;

use Illuminate\Database\Eloquent\Model;

class PasswordResets extends Model
{
	protected $table = 'password_resets'	;

	protected $primaryKey  = 'email';

	protected $fillable = array('email','token','created_at');
    public $timestamps = false;

	//Put all your custom methods below and inside the custom tags
	//This custom tags will not be deleted after the generation
    #custom#
    
    #custom#
}
