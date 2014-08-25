<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttcancelledTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attcancelled', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstname');
			$table->string('surname');
			$table->string('email');
      $table->string('organisation');
      $table->enum('hlavni_sal', array('-', 'hlavni-sal'));
      $table->enum('seminar', array('-', 's1', 's2', 's3'));
      $table->timestamp('registered_at');
      $table->timestamp('cancelled_at');
			$table->string('cancel_hash');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attcancelled');
	}

}
