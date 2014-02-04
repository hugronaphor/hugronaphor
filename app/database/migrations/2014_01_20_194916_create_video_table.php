<?php

use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('video', function ($table) {
      $table->increments('vid');
      $table->string('title');
      $table->text('body')->nullable();
      $table->string('url');
      $table->string('type');
      $table->string('author');
      $table->string('year');
      $table->integer('image');
      //$table->integer('user_id');
      $table->integer('width');
      $table->integer('height');
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
    Schema::drop('video');
	}

}