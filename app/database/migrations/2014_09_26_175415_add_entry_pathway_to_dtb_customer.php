<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEntryPathwayToDtbCustomer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// add column dtb_customer.entry_pathway(侵入経路)
		Schema::table('dtb_customer', function($table) {
			$table->integer('entry_pathway')->default(-1);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop column dtb_customer.entry_pathway(侵入経路)
		Schema::table('dtb_customer', function($table) {
			$table->dropColumn('entry_pathway');
		});
	}

}
