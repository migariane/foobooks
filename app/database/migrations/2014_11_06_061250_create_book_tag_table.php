<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	# Create pivot table connecting `books` and `tags`
	public function up() 
	{
		Schema::create('book_tag', function($table) {

			# AI, PK
			# none needed

			# General data...
			$table->integer('book_id')->unsigned();
			$table->integer('tag_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('book_id')->references('id')->on('books');
			$table->foreign('tag_id')->references('id')->on('tags');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book_tag');
	}

}
