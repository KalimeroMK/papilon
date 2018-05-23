<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->string('taksa');
			$table->string('image');
			$table->string('imagemedium');
			$table->string('imagethumb');
			$table->integer('category')->unsigned();
			$table->text('description', 65535);
			$table->integer('user_id')->unsigned();
			$table->integer('workflow_id');
			$table->text('hotelinfo', 65535);
			$table->string('recomend');
			$table->text('roominfo', 65535);
			$table->string('location');
			$table->text('price', 65535);
			$table->float('lat', 20, 10);
			$table->float('lng', 20, 10);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
