<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'dtb_customer';

	protected $fillable = ['name01', 'name02', 'kana01', 'kana02', 'zip01', 'zip02',
		'pref', 'addr01', 'addr02', 'email', 'tel01', 'tel02', 'tel03', 'entry_pathway'];

	const CREATED_AT = 'create_date';
	const UPDATED_AT = 'update_date';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * 侵入経路
	 */
	protected static $entryPathways = [
		['name' => 'fb', 'value' => 1],
		['name' => 'marche', 'value' => 2],
		['name' => 'unknown', 'value' => -1],
	];

	/**
	 * 初期登録時に自動設定されるカラムの定義
	 */
	public function setDefaultValues()
	{
		$this->status = 1; // 1: 仮会員  2: 本会員
		$this->salt = substr(sha1(time()), 0, 12);
		$this->password = $this->buildHashPassword($this->salt);
		$this->buy_times = 0;
		$this->buy_total = 0;
		$this->point = 0;
		$this->secret_key = $this->buildSecretKey();
	}

	/**
	 * ハッシュ化したパスワードを生成する
	 */
	public function buildHashPassword($salt)
	{
		$algos = \Config::get('const.eccube.password_hash_algos');
		$magic = \Config::get('const.eccube.auth_magic');
		return hash_hmac($algos, $this->password . ':' . $magic, $this->salt);
	}

	/**
	 * dtb_customer.secret_keyを生成する
	 */
	public function buildSecretKey()
	{
		return PapaHash::blowfish(time());
	}

	/**
	 * 侵入経路名から侵入経路コードを取得する
	 */
	public static function entryPathwayByName($name)
	{
		foreach (self::$entryPathways as $path)
		{
			if ($path['name'] == $name)
			{
				return $path['value'];
			}
		}

		return -1;
	}
}

User::observe(new \Observers\UserObserver);
