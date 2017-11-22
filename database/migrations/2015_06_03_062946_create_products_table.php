<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('codigo', 10)->unique();
			$table->string('name', 125);
			$table->decimal('price', 10, 2);
			$table->string('short_info', 255);
			$table->text('description');
			$table->string('default_img', 255);
			$table->char('currency', 1)->default('S');
			$table->char('estado', 1)->default('A');
			$table->nullableTimestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
