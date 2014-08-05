<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstname');
			$table->string('surname');
			$table->string('email')->unique();
			$table->string('organisation');
			$table->timestamp('registered_date');
			$table->boolean('terms');
			$table->boolean('cancelled')->nullable();
			$table->timestamp('cancelled_date')->nullable();
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
		Schema::drop('attendees');
	}

}
