<?php


class RegularOrder extends Eloquent {

	protected $table = 'regular_orders';

	protected $fillable = ['set_type', 'delivery_cycle', 'delivery_time',
		'first_choice', 'second_choice', 'third_choice', 'payment_type', 'note'];
}
