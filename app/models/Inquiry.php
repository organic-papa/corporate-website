<?php

class Inquiry extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'inquiries';
	protected $fillable = ['category', 'company', 'name', 'email', 'tel', 'body'];
}
