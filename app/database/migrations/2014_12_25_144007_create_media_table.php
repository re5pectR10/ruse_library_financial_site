<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('media', function($table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('title', 200);
            $table->string('description', 500);
            $table->string('date', 20);
            $table->string('link', 250);
            $table->string('extension', 10);
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
        Schema::drop('media');
    }

}
