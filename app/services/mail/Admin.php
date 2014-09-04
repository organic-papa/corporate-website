<?php

namespace Mail;

trait Admin
{
	public function sendInquireForAdmin($data)
	{
		\Mail::send(['text' => 'emails.inquire'], $data, function($message) use ($data)
		{
	    $message->from($data['email'], $data['name'])
							->to(\Config::get('const.mail.papa_info'))
							->subject('オーガニックパパ メールフォーム');
		});
	}
}
