<?php

namespace Mail;

trait User
{
	/**
	 * 定期便申し込みメールを管理者に送信
	 */
	public function sendRegularApplicationUser($data)
	{
		\Mail::queue(['text' => 'emails.regular_apply'], $data, function($message) use ($data)
		{
			$message->from(\Config::get('const.mail.papa_takuhai'), '')
							->to($data['email'])
							->subject('申し込みいただきありがとうございます');
		});
	}
}
