<?php namespace Nutri;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {

	protected $fillable = [
		'product_id',
		'full_name',
		'telefono1',
		'telefono2',
		'direccion',
		'referencia',
		'pais',
		'ciudad',
		'cantidad'
	];

	public function add($values)
	{
		$this->fill($values);
		$this->product_id = session('product')->id;
		$this->cantidad = session('quanty');
		return $this->save();
	}
}
