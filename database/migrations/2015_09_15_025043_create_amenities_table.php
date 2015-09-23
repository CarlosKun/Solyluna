<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('amenities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('amenity');
			$table->enum('category', ['Special amenities', 'Services', 'Technology']);
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
		Schema::drop('amenities');
	}

}
