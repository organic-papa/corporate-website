<?php

namespace Observers;

class UserObserver {

	public function creating($model)
	{
		$id = \DB::table('dtb_customer_customer_id_seq')->insertGetId([]);
		$model->customer_id = $id;
	}

}
