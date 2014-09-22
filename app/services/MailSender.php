<?php

class MailSender
{
	use Mail\User;
	use Mail\Admin;

	public function sendRegularApplication($data)
	{
		$this->sendRegularApplicationUser($data);
		$this->sendRegularApplicationAdmin($data);
	}
}
