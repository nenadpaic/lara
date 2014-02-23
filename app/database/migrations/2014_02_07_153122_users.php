<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){

			$table->increments('uid');
			$table->string('email');
			$table->string('password');
			$table->string('adresa');
			$table->string('grad');
			$table->string('drzava');
			$table->string('telefon');
			$table->string('role');
			$table->integer('enabled')->default(0);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Shema::drop('users');
	}

}
