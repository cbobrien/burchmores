<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enquiries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('auction_id')->unsigned();
			$table->foreign('auction_id')->references('id')->on('auctions');
			$table->string('first_name');
			$table->string('surname');
			$table->string('telephone');
			$table->string('email');
			$table->text('message');
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
		Schema::drop('enquiries');
	}

}
