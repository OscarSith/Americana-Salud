<?php namespace Nutri;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model {

	protected $table = 'products_images';

	protected $fillable = [
		'product_id',
		'img',
		'status'
	];

	public function scopePaginator($q, $product_id)
	{
		return $q->where('product_id', $product_id)->latest()->paginate(10, ['id', 'img', 'product_id', 'status']);
	}

	public function remove($id)
	{
		$producto = $this->findOrFail($id);
		$img = $producto->img;
		$rpta = $producto->delete();

		\File::delete(public_path('img/products/' . $img));
		return $rpta;
	}
}
