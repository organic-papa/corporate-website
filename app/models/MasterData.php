<?php

class MasterData
{
	/**
	 * お問い合わせ種別
	 */
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

	/**
	 * お問い合わせ種別をキーで取得
	 */
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

	/**
	 * 全都道府県と都道府県コード
	 */
	public static function prefectureCodes()
	{
		return [
			"01" => "北海道", "02" => "青森県",   "03" => "岩手県", "04" => "宮城県",
			"05" => "秋田県", "06" => "山形県",   "07" => "福島県", "08" => "茨城県",
			"09" => "栃木県", "10" => "群馬県",   "11" => "埼玉県", "12" => "千葉県",
			"13" => "東京都", "14" => "神奈川県", "15" => "新潟県", "16" => "富山県",
			"17" => "石川県", "18" => "福井県",   "19" => "山梨県", "20" => "長野県",
			"21" => "岐阜県", "22" => "静岡県",   "23" => "愛知県", "24" => "三重県",
			"25" => "滋賀県", "26" => "京都府",   "27" => "大阪府", "28" => "兵庫県",
			"29" => "奈良県", "30" => "和歌山県", "31" => "鳥取県", "32" => "島根県",
			"33" => "岡山県", "34" => "広島県",   "35" => "山口県", "36" => "徳島県",
			"37" => "香川県", "38" => "愛媛県",   "39" => "高知県", "40" => "福岡県",
			"41" => "佐賀県", "42" => "長崎県",   "43" => "熊本県", "44" => "大分県",
			"45" => "宮崎県", "46" => "鹿児島県", "47" => "沖縄県",
		];
	}

	/**
	 * 都道府県から都道府県コードを取得する
	 */
	public static function prefectureByName($name)
	{
		$code = '';
		$prefs = self::prefectureCodes();
		foreach ($prefs as $key => $val)
		{
			if ($name === $val)
			{
				$code = $key;
				break;
			}
		}

		return $key;
	}

	/**
	 * お問い合わせ種別
	 */
	public static function regularSets()
	{
		return [
			['key' => 1, 'value' => 'PAPAのミニセット（3,000円）'],
			['key' => 2, 'value' => 'PAPAセット（4,000円）'],
			['key' => 3, 'value' => 'PAPAのボリュームセット（5,000円）'],
		];
	}

}

