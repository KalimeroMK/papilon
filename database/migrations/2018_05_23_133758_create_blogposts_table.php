<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogpostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogposts', function(Blueprint $table)
		{
			$table->integer('id')->unsigned();
			$table->string('title');
			$table->string('subtitle');
			$table->string('slug');
			$table->string('image');
			$table->string('imagemedium');
			$table->string('imagethumb');
			$table->string('imagedescription');
			$table->string('imageauthor');
			$table->string('imagelink');
			$table->string('credit');
			$table->string('originallink');
			$table->integer('country_id')->unsigned();
			$table->integer('blog_id')->unsigned();
			$table->integer('sourcepartner_id')->unsigned();
			$table->text('description', 65535);
			$table->integer('creator')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->float('lat', 20, 10);
			$table->float('lng', 20, 10);
			$table->integer('workflow_id')->unsigned();
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
		Schema::drop('blogposts');
	}

}
