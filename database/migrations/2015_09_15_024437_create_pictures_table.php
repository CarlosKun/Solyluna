<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pictures', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image1');
			$table->string('image2');
			$table->string('image3');
			$table->string('image4');
			$table->string('image5');
			$table->string('image6');
			$table->string('image7');
			$table->string('image8');
			$table->string('image9');
			$table->integer('property_id')->unsigned();
			$table->foreign('property_id')
				->references('id')
				->on('properties')
				->onDelete('cascade')
				->onUpdate('cascade');
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
		Schema::drop('pictures');
	}

}
