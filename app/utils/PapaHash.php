<?php

class PapaHash {

	public static function blowfish($raw, $cost = 4) {
		// Blowfishのソルトに使用できる文字種
		$chars = array_merge(range('a', 'z'), range('A', 'Z'), ['.', '/']);

		// ソルトを生成（上記文字種からなるランダムな22文字）
		$salt = '';
		for ($i = 0; $i < 22; $i++) {
			$salt .= $chars[mt_rand(0, count($chars) - 1)];
		}

		// コストの前処理
		$costInt = intval($cost);
		if ($costInt < 4)
			$costInt = 4;
		else if ($costInt > 31)
			$costInt = 31;

		// 指定されたコストで Blowfish ハッシュを得る
		return crypt($raw, '$2y$' . sprintf('%02d', $costInt) . '$' . $salt);
	}

}
