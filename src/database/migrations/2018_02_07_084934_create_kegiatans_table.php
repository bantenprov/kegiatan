<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('kegiatans', function(Blueprint $table) {
			$table->increments('id');
			$table->string('label', 255);
			$table->string('description', 255)->nullable();
			$table->date('tanggal_mulai');
			$table->date('tanggal_selesai');
			$table->timestamps();
			$table->softDeletes();
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
	public function down()
	{
		Schema::drop('kegiatans');
	}
}
