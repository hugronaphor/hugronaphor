<?php

use Illuminate\Database\Migrations\Migration;

class CreateArtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('art', function ($table) {
      $table->increments('aid');
      $table->string('title');
      $table->text('body')->nullable();
      $table->string('url');
      $table->string('type');
      $table->string('author');
      $table->string('credit');
      $table->integer('image');
      $table->integer('order');
      //$table->integer('user_id');
      $table->string('slug');
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
		Schema::drop('art');
	}

}