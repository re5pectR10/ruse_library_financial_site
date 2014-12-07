<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function($table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('username', 50);
            $table->string('password', 50);
            $table->string('email', 50);
            $table->string('first_name', 50);
            $table->string('family_name', 50);
            $table->tinyInteger('user_type');
            $table->rememberToken();
            $table->timestamps();

            $table->unique('username');
            $table->unique('email');
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('users');
	}

}
