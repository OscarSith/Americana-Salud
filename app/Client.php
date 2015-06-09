<?php namespace Nutri;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $table = 'clients';

	protected $fillable = [
		'nombres',
		'apellido',
		'telefono',
		'direccion',
		'correo',
	];
}
