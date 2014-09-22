オーガニックパパ 直送便にお申し込みいただきありがとうございます。

以下の内容で申し込みを受付させていただきました。


-------------------------------------------------
[ご希望のセット]
{{ MasterData::regularSetByCode($set) }}


[宅配回数]
{{ MasterData::deliveryCycleByCode($cycle) }}


[お支払い方法]
{{ MasterData::paymentByCode($payment) }}


[配達希望日]
第1希望日: {{ $first_choice }}
第2希望日: {{ $second_choice }}
第3希望日: {{ $third_choice }}


[配達時間帯]
{{ MasterData::deliveryTimeByCode($time) }}


[お名前]
{{ $name01 }} {{ $name02 }}


[フリガナ]
{{ $kana01 }} {{ $kana02 }}


[住所]
〒 {{ $zip01 }}-{{ $zip02 }}
{{ MasterData::prefectureByCode($pref) }}{{ $addr01 }} {{ $addr02 }}


[電場番号]
{{ $tel01 }}-{{ $tel02 }}-{{ $tel03 }}


[メールアドレス]
{{ $email }}


[備考]
{{ $other }}
-------------------------------------------------
