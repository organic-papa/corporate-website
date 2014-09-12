<?php

namespace Traits\Validators;

trait RegularValidator
{
	protected function contactValidateRule()
	{
		$inquiries = \MasterData::contactInquiries();
		$inquiriesIn = array_map(function($inq) {
			return $inq['key'];
		}, $inquiries);

		$set = \MasterData::regularSets();
		$setIn = array_map(function($s) {
			return $s['key'];
		}, $set);

		return [
			'set' => ['required', 'in:'.implode(',', $setIn)],
			'count' => [],
			'pay' => [],
			'first_choice' => [],
			'second_choice' => [],
			'third_choice' => [],
			'time' => [],
			'name01' => ['required', 'max:100'],
			'name02' => ['required', 'max:100'],
			'kana01' => ['max:100'],
			'kana02' => ['max:100'],
			'zip01' => ['required', 'regex:/^[0-9]+$/'],
			'zip02' =>  ['required', 'regex:/^[0-9]+$/'],
			'pref' => ['required', 'regex:/^[0-9]{2}$/'],
			'addr01' => ['required', 'max:100'],
			'addr02' => ['max:100'],
			'tel01' => ['regex:/^[0-9]+$/'],
			'tel02' => ['regex:/^[0-9]+$/'],
			'tel03' => ['regex:/^[0-9]+$/'],
			'email' => ['required', 'email', 'confirmed'],
			'email_confirmation' => ['required', 'email'],
			'other' => ['max: 1000'],
		];
	}

	protected function contactValidateMessage()
	{
		return [
			'email.required' => 'メールアドレスを入力してください',
			'email.email' => '正しいメールアドレスを入力してください',
			'email.confirmed' => 'メールアドレスとメールアドレス(確認)が一致しません',
			'email_confirmation.required' => 'メールアドレス(確認)を入力してください',
			'email_confirmation.email' => '正しいメールアドレスを入力してください',
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
