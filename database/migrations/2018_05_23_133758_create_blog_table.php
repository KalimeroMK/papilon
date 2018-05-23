<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('subtitle');
			$table->string('slug')->unique('slug');
			$table->string('image');
			$table->string('imagemedium');
			$table->string('imagethumb');
			$table->integer('country_id')->unsigned()->index('blog_country_id_foreign');
			$table->string('region_id');
			$table->text('description', 65535);
			$table->integer('creator')->unsigned()->index('blog_creator_foreign');
			$table->integer('user_id')->unsigned()->index('blog_user_id_foreign');
			$table->float('lat', 20, 10);
			$table->float('lng', 20, 10);
			$table->integer('workflow_id');
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
		Schema::drop('blog');
	}

}
