<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('profiles', function(Blueprint $table) {
        $table->increments('id');
        $table->string('f_name');
        $table->string('m_name')->nullable();
        $table->string('l_name');
        $table->string('slug');
        $table->text('body')->nullable();
        $table->string('image')->nullable();
        $table->integer('user_id');
        $table->timestamps();
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('profiles');
  }

}
