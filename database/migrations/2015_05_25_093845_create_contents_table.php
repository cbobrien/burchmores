<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration {

	public function up()
	{
		Schema::create('contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('page');
			$table->string('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contents');
	}

}
