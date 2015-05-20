<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceEnquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_enquiries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('city_id')->unsigned();
			$table->foreign('city_id')->references('id')->on('cities');
			$table->string('first_name');
			$table->string('surname');
			$table->string('telephone');
			$table->string('work_telephone');
			$table->string('email');
			$table->string('requirements');
			$table->text('comments');
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
		Schema::drop('finance_enquiries');
	}

}
