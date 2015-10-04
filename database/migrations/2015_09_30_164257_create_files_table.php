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
		Schema::create('files', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('property_id')->unsigned();
						$table->foreign('property_id')
				->references('id')
				->on('properties')
				->onDelete('cascade')
				->onUpdate('cascade');
			$table->string('menu');
			$table->string('activities');
			$table->string('drinks');
			$table->softDeletes();
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
		Schema::drop('files');
	}

}
