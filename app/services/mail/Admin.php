<?php

namespace Mail;

trait Admin
{
	/**
	 * お問い合わせメールを管理者に送信する
	 */
	public function sendInquireAdmin($data)
	{
		\Mail::queue(['text' => 'emails.admin.inquire'], $data, function($message) use ($data)
		{
			$message->from($data['email'], $data['name'])
							->to(\Config::get('const.mail.papa_info'))
							->subject('オーガニックパパ メールフォーム');
		});
	}

	/**
	 * 定期便申し込みメールを管理者に送信
	 */
	public function sendRegularApplicationAdmin($data)
	{
		\Mail::queue(['text' => 'emails.admin.regular_apply'], $data, function($message) use ($data)
		{
			$message->from($data['email'], "{$data['name01']} {$data['name02']}")
							->to(\Config::get('const.mail.papa_takuhai'))
							->subject('オーガニックパパ 直送便申し込みフォーム');
		});
	}
}
