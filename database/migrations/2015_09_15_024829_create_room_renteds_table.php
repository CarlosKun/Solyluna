<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomRentedsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('room_renteds', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('begin_date');
			$table->integer('num_consumers');
			$table->date('end_date');
			$table->boolean('status');
			$table->mediumText('description');
			$table->softDeletes();
			$table->integer('consumer_id')->unsigned();
			$table->foreign('consumer_id')
				->references('id')
				->on('consumers')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('bedroom_id')->unsigned();
			$table->foreign('bedroom_id')
				->references('id')
				->on('bedrooms')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->integer('property_id')->unsigned();
			$table->foreign('property_id')
				->references('id')
				->on('properties')
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
		Schema::drop('room_renteds');
	}

}
