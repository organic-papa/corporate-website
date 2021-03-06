[[定期便のお申し込み]]

オーガニックパパ 直送便申し込みフォームよりお問合せがありました。
ご確認よろしくお願いいたします。


-------------------------------------------------
[ご希望のセット]
{{ MasterData::regularSetByCode($set_type) }}


[宅配回数]
{{ MasterData::deliveryCycleByCode($delivery_cycle) }}


[お支払い方法]
代金引換


[配達希望日]
第1希望日: {{ $first_choice }}
第2希望日: {{ $second_choice }}
第3希望日: {{ $third_choice }}


[配達時間帯]
{{ MasterData::deliveryTimeByCode($delivery_time) }}


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
{{ $note }}
-------------------------------------------------
