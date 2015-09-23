<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateMemoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rate_memories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('memory_daily_rate');
			$table->float('memory_weekly_rate');
			$table->float('memory_monthly_rate');
			$table->integer('promotion_rate_memory');
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
		Schema::drop('rate_memories');
	}

}
