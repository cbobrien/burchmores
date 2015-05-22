<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellCarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sell_cars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('city_id')->unsigned();
			$table->foreign('city_id')->references('id')->on('cities');
			$table->string('first_name');
			$table->string('surname');
			$table->string('telephone');
			$table->string('email');
			$table->string('make');
			$table->string('model');
			$table->string('year');
			$table->string('mileage');
			$table->string('colour');
			$table->string('registration');
			$table->text('comments');
			$table->text('image_path1');
			$table->text('image_path2');
			$table->text('image_path3');
			$table->text('image_path4');
			$table->text('image_path5');
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
		Schema::drop('sell_cars');
	}

}
