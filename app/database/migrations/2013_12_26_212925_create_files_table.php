<?php


use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {


  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('files', function ($table) {
      $table->increments('fid');
      $table->string('name');
      $table->text('body')->nullable();
      $table->string('path');
      $table->string('slug');
      $table->string('type');
      //$table->integer('user_id');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('files');
  }

}