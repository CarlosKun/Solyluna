<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateAssistingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rate_assistings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('assisting_daily_rate');
			$table->float('assisting_weekly_rate');
			$table->float('assisting_monthly_rate');
			$table->integer('promotion_rate_assisting');
			$table->softDeletes();
			$table->integer('bedroom_id')->unsigned();
			$table->foreign('bedroom_id')
				->references('id')
				->on('bedrooms')
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
		Schema::drop('rate_assistings');
	}

}
