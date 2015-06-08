<?php namespace Nutri;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {

	protected $fillable = [
		'codigo',
		'name',
		'price',
		'short_info',
		'description',
		'default_img',
		'currency',
		'estado'
	];

	public function scopeActivePaginator($q)
	{
		return $q->where('estado', 'A')->latest()->paginate(4, [
			'id',
			'codigo',
			'name',
			'price',
			'short_info',
			'default_img',
			'estado'
		]);
	}

	public function scopePaginator($q)
	{
		return $q->latest()->paginate(10, [
			'id',
			'codigo',
			'name',
			'price',
			'short_info',
			'default_img',
			'estado'
		]);
	}
}
