<?php

class MailSender
{
	use Mail\User;
	use Mail\Admin;

	public function sendRegularApplication($data)
	{
		$this->sendRegularApplicationAdmin($data);
	}
}
