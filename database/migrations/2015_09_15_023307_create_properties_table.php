<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('properties', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->date('available');
			$table->boolean('status');
			$table->integer('num_bedrooms');
			$table->string('slogan',30);
			$table->longText('description');
			$table->string('image');

			$table->integer('service_id')->unsigned();
			$table->foreign('service_id')
				->references('id')
				->on('services')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('country_id')->unsigned();
			$table->foreign('country_id')
				->references('id')
				->on('countries')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('state_id')->unsigned();
			$table->foreign('state_id')
				->references('id')
				->on('states')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('city_id')->unsigned();
			$table->foreign('city_id')
				->references('id')
				->on('cities')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('property_type_id')->unsigned();
			$table->foreign('property_type_id')
				->references('id')
				->on('property_types')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('realstate_id');

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
		Schema::drop('properties');
	}

}
