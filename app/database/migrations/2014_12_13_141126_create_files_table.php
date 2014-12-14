<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('atelieta_files', function($table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->Integer('atelie_id')->unsigned();
            $table->string('name', 200);
            $table->string('extension', 10);
            $table->timestamps();

            $table->foreign('atelie_id')->references('id')->on('atelieta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('atelieta_files');
    }

}
