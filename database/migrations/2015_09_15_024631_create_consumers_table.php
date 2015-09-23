<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consumers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('prefix');
			$table->string('firs_name');
			$table->string('last_name');
			$table->string('full_name');
			$table->string('email')->unique();
			$table->string('telephone');
			$table->string('cellphone');
			$table->integer('zip_code');
			$table->mediumText('address');
			$table->mediumText('address2')->nullable();
			$table->string('name_card')->nullable();
			$table->integer('card_number')->nullable();
			$table->integer('month_card')->nullable();
			$table->integer('year_card')->nullable();
			$table->softDeletes();
			$table->integer('property_id')->unsigned();
			$table->foreign('property_id')
				->references('id')
				->on('properties')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('city_id')->unsigned();
			$table->foreign('city_id')
				->references('id')
				->on('cities')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('state_id')->unsigned();
			$table->foreign('state_id')
				->references('id')
				->on('states')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('country_id')->unsigned();
			$table->foreign('country_id')
				->references('id')
				->on('countries')
				->onDelete('cascade')
				->onUpdate('cascade');

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
		Schema::drop('consumers');
	}

}
