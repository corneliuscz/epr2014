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
      $table->enum('hlavni_sal', array('-', 'hlavni-sal'));
      $table->enum('seminar', array('-', 's1', 's2', 's3'));
      $table->boolean('terms');
			$table->string('cancel_hash');
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
