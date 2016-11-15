<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('name');
			$table->timestamp('date_birthday');
			$table->text('home');
			$table->text('education');
			$table->text('specialty');
			$table->text('experience');
			$table->text('salary');
			$table->timestamp('created_at');
			$table->timestamp('updated_at');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumes');
	}

}
