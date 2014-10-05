<?php

namespace Traits\Validators;

trait RegularValidator
{
	protected function contactValidateRule()
	{
		$set = \MasterData::regularSets();
		$setIn = array_map(function($s) {
			return $s['key'];
		}, $set);

		$cycles = \MasterData::deliveryCycles();
		$cyclesIn = array_map(function($s) {
			return $s['key'];
		}, $cycles);

		$payments = \MasterData::payments();
		$paymentsIn = array_map(function($s) {
			return $s['key'];
		}, $payments);

		$times = \MasterData::deliveryTimes();
		$timesIn = array_map(function($s) {
			return $s['key'];
		}, $times);

		return [
			'set_type' => ['required', 'in:'.implode(',', $setIn)],
			'delivery_cycle' => ['required', 'in:'.implode(',', $cyclesIn)],
			//'payment' => ['required', 'in:'.implode(',', $paymentsIn)],
			'first_choice' => ['max:15'],
			'second_choice' => ['max:15'],
			'third_choice' => ['max:15'],
			'delivery_time' => ['in:'.implode(',', $timesIn)],
			'name01' => ['required', 'max:100'],
			'name02' => ['required', 'max:100'],
			'kana01' => ['required', 'max:100'],
			'kana02' => ['required', 'max:100'],
			'zip01' => ['required', 'regex:/^[0-9]{3}$/'],
			'zip02' =>  ['required', 'regex:/^[0-9]{4}$/'],
			'pref' => ['required', 'regex:/^[0-9]{2}$/'],
			'addr01' => ['required', 'max:100'],
			'addr02' => ['max:100'],
			'tel01' => ['required', 'regex:/^[0-9]{2,4}$/'],
			'tel02' => ['required', 'regex:/^[0-9]{2,4}$/'],
			'tel03' => ['required', 'regex:/^[0-9]{2,4}$/'],
			'email' => ['required', 'email', 'confirmed'],
			'email_confirmation' => ['required', 'email'],
			'note' => ['max: 1000'],
		];
	}

	protected function contactValidateMessage()
	{
		return [
			'set_type.required' => 'ご希望のセットを選択してください',
			'set_type.in' => 'ご希望のセットを選択してください',
			'delivery_cycle.required' => '宅配回数を選択してください',
			'delivery_cycle.in' => '宅配回数を選択してください',
			'first_choice.max' => '第一希望日を正しく入力してください',
			'second_choice.max' => '第二希望日を正しく入力してください',
			'third_choice.max' => '第三希望日を正しく入力してください',
			'delivery_time.required' => '配達時間帯を選択してください',
			'delivery_time.in' => '配達時間帯を選択してください',
			'name01.required' => '名前(性)を入力してください',
			'name01.max' => 'お名前(性)は100文字以内で入力してください',
			'name02.required' => 'お名前(名)を入力してください',
			'name02.max' => 'お名前(名)は100文字以内で入力してください',
			'kana01.required' => 'お名前(セイ)を入力してください',
			'kana01.max' => 'お名前(セイ)は100文字以内で入力してください',
			'kana02.required' => 'お名前(メイ)を入力してください',
			'kana02.max' => 'お名前(メイ)は100文字以内で入力してください',
			'zip01.required' => '郵便番号を入力してください',
			'zip01.regex' => '郵便番号を正しく入力してください',
			'zip02.required' => '郵便番号を入力してください',
			'zip02.regex' => '郵便番号を正しく入力してください',
			'pref.required' => '都道府県を選択してください',
			'pref.regex' => '都道府県を正しく選択してください',
			'addr01.required' => '市区町村 番地を入力してください',
			'addr01.max' => '市区町村 番地は100文字以内で入力してください',
			'addr02.max' => 'マンション名は100文字以内で入力してください',
			'tel01.required' => '電話番号を入力してください',
			'tel01.regex' => '電話番号を正しく入力してください',
			'tel02.required' => '電話番号を入力してください',
			'tel02.regex' => '電話番号を正しく入力してください',
			'tel03.required' => '電話番号を入力してください',
			'tel03.regex' => '電話番号を正しく入力してください',
			'email.required' => 'メールアドレスを入力してください',
			'email.email' => '正しいメールアドレスを入力してください',
			'email.confirmed' => 'メールアドレスとメールアドレス(確認)が一致しません',
			'email_confirmation.required' => 'メールアドレス(確認)を入力してください',
			'email_confirmation.email' => '正しいメールアドレスを入力してください',
			'note.max' => 'その他は1000文字以内で入力してください',
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
