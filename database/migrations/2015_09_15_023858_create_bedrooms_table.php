<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBedroomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bedrooms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('bedroom_asigned');
			$table->boolean('status');
			$table->string('size_metrics');
			$table->integer('beds');
			$table->mediumText('description');
			$table->string('image');
			$table->softDeletes();
			$table->integer('property_id')->unsigned();
			$table->foreign('property_id')
				->references('id')
				->on('properties')
				->onDelete('cascade');
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
		Schema::drop('bedrooms');
	}

}
