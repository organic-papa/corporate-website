<?php

namespace Traits\Masters;

trait RegularService
{
	/**
	 * 定期便セット種別
	 */
	public static function regularSets()
	{
		return [
			['key' => 1, 'value' => 'PAPAのミニセット（3,000円）'],
			['key' => 2, 'value' => 'PAPAセット（4,000円）'],
			['key' => 3, 'value' => 'PAPAのボリュームセット（5,000円）'],
		];
	}

	/**
	 * セットコードからセット名を取得する
	 */
	public static function regularSetByCode($code)
	{
		return \MasterData::getNameByCode(self::regularSets(), $code);
	}

	/**
	 * 配達サイクル
	 */
	public static function deliveryCycles()
	{
		return [
			['key' => 1, 'value' => '毎週'],
			['key' => 2, 'value' => '月2回'],
			['key' => 3, 'value' => '月1回'],
			['key' => 4, 'value' => 'お試し1回限り'],
		];
	}

	/**
	 * 配達回数コードから配達回数を取得する
	 */
	public static function deliveryCycleByCode($code)
	{
		return \MasterData::getNameByCode(self::deliveryCycles(), $code);
	}

	/**
	 * 配達時間
	 */
	public static function payments()
	{
		return [
			['key' => 1, 'value' => '代金引換', 'default' => true],
		];
	}

	/**
	 * 支払い方法コードより、支払い方法を取得する
	 */
	public static function paymentByCode($code)
	{
		return \MasterData::getNameByCode(self::payments(), $code);
	}

	/**
	 * 配達時間
	 */
	public static function deliveryTimes()
	{
		return [
			['key' => 1, 'value' => '午前中'],
			['key' => 2, 'value' => '12時～14時'],
			['key' => 3, 'value' => '14時～16時'],
			['key' => 4, 'value' => '16時～18時'],
			['key' => 5, 'value' => '18時～20時'],
			['key' => 6, 'value' => '20時～21時'],
		];
	}

	/**
	 * 支払い方法コードより、支払い方法を取得する
	 */
	public static function deliveryTimeByCode($code)
	{
		return \MasterData::getNameByCode(self::deliveryTimes(), $code);
	}
}

