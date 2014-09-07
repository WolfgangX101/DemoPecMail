<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mail_inviate', function(Blueprint $table)
		{
			$table->increments('id_mail');
			$table->boolean('confirmed_send');
			$table->timestamps();
			$table->string('to', 78);
			$table->string('object', 78);
			$table->string('text', 100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
