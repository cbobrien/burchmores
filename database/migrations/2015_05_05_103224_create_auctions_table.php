<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auctions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('location_id')->unsigned();
			$table->foreign('location_id')->references('id')->on('locations');	
			$table->datetime('auction_date');
			$table->string('auction_time');
			$table->string('auction_type');
			$table->string('file_path');
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
		Schema::drop('auctions');
	}

}
