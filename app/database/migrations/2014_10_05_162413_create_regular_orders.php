<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegularOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create table inquiries;
		Schema::create('regular_orders', function($table) {
			$table->increments('id');
			$table->integer('customer_id');
			$table->integer('set_type');
			$table->integer('delivery_cycle');
			$table->integer('delivery_time')->nullable();
			$table->string('first_choice')->nullable();
			$table->string('second_choice')->nullable();
			$table->string('third_choice')->nullable();
			$table->integer('payment_type')->default(1);
			$table->text('note');
			$table->softDeletes();
			$table->timestamps();
		});

		// Rename inquiries.user_no => inquiries.customer_id;
		Schema::table('inquiries', function($table) {
			$table->renameColumn('user_no', 'customer_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('regular_orders');

		// Rename inquiries.user_no => inquiries.customer_id;
		Schema::table('inquiries', function($table) {
			$table->renameColumn('customer_id', 'user_no');
		});
	}

}
