<?php

class MasterData
{
	public static function contactInquiries()
	{
		return [
			['key' => 1, 'value' => 'お野菜について'],
			['key' => 2, 'value' => '企業農園について'],
			['key' => 3, 'value' => '業務提携について'],
			['key' => 4, 'value' => '新規就農について'],
			['key' => 5, 'value' => 'イベント・活動・取材について'],
			['key' => 6, 'value' => 'その他'],
		];
	}

	public static function contactInquiryByKey($key)
	{
		if (!$key) return '';

		$inquiries = self::contactInquiries();
		foreach ($inquiries as $inquiry)
		{
			if ($inquiry['key'] == $key)
			{
				return $inquiry['value'];
			}
		}

		return '';
	}
}
