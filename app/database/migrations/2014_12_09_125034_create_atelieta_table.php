<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtelietaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('atelieta', function($table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->Integer('user_id')->unsigned();
            $table->string('title', 50);
            $table->string('description', 500);
            $table->text('content');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('atelieta');
	}

}
