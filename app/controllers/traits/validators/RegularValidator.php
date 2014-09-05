<?php

namespace Traits\Validators;

trait ContactValidator
{
	protected function contactValidateRule()
	{
		$inquiries = \MasterData::contactInquiries();
		$inquiriesIn = array_map(function($inq) {
			return $inq['key'];
		}, $inquiries);

		return [
			'inquiry' => ['required', 'in:'.implode(',', $inquiriesIn)],
			'company' => ['max:100'],
			'name' => ['required', 'max:100'],
			'email' => ['required', 'email', 'confirmed'],
			'email_confirmation' => ['required', 'email'],
			'tel' => ['regex:/^[0-9]{9,12}$/'],
			'body' => ['required', 'max:1000'],
		];
	}

	protected function contactValidateMessage()
	{
		return [
			'inquiry.required' => 'お問合せ内容を選択してください',
			'inquiry.in' => 'お問合せ内容を選択してください',
			'company.max' => '法人・事業者名は100文字以内で入力してください',
			'name.required' => 'お名前を入力してください',
			'name.max' => 'お名前は100文字以内で入力してください',
			'email.required' => 'メールアドレスを入力してください',
			'email.email' => '正しいメールアドレスを入力してください',
			'email.confirmed' => 'メールアドレスとメールアドレス(確認)が一致しません',
			'email_confirmation.required' => 'メールアドレス(確認)を入力してください',
			'email_confirmation.email' => '正しいメールアドレスを入力してください',
			'tel.regex' => '電話番号は数字にて入力してください',
			'body.required' => 'お問い合わせ内容を入力してください',
			'body.max' => 'お問い合わせ内容は1000文字以内で入力してください',
		];
	}

	protected function contactValidate()
	{
		return \Validator::make(\Input::all(),
			$this->contactValidateRule(),
			$this->contactValidateMessage()
		);
	}
}
