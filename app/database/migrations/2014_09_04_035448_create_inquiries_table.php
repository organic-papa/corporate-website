<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create table inquiries;
		Schema::create('inquiries', function($table) {
			$table->increments('id');
			$table->integer('user_no')->nullable();
			$table->integer('category');
			$table->string('company');
			$table->string('name');
			$table->string('email');
			$table->string('tel');
			$table->text('body');
			$table->softDeletes();
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
		Schema::dropIfExists('inquiries');
	}

}
