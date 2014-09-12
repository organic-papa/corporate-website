@extends('layouts.default')

@section('content')

{{ Form::open(['url' => '/company/contact/confirm', 'class' => 'js-register-form']) }}
<table>
	<tbody>
		<tr>
			<td class="tdLeft">ご希望のセット<br><span class="requiredArea">【必須】</span></td>
			<td class="tdRight">
				<p id="spryselect_area">
					<select name="set" id="">
						<option value="" selected="">選択してください</option>
						<option value="1">PAPAのミニセット（3,000円）</option>
						<option value="2">PAPAセット（4,000円）</option>
						<option value="3">PAPAのボリュームセット（5,000円）</option>
					</select>
			</p></td>
		</tr>
		<tr>
			<td>宅配回数<br><span class="requiredArea">【必須】</span></td>
			<td>
				<select name="count" id="宅配回数">
					<option value="" selected="">選択してください</option>
					<option value="毎週">毎週</option>
					<option value="月2回">月2回</option>
					<option value="月1回">月1回</option>
					<option value="お試し1回限り">お試し1回限り</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>お支払方法<br><span class="requiredArea">【必須】</span></td>
			<td>
				<select name="pay" id="お支払方法">
					<option value="" selected="">選択してください</option>
					<option value="代金引換">代金引換</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>配達希望日</td>
			<td>第一希望日
				<p>
					<input type="text" size="10" name="first_wish" id="フリガナ2" autocomplete="on" value="">
					例：8月7日<br>
					<br>
					第二希望日
					</p><p><input type="text" size="10" name="second_wish" id="フリガナ" autocomplete="on" value="">
					例：8月10日<br><br>
					第三希望日
					</p><p><input type="text" size="10" name="third_wish" id="フリガナ" autocomplete="on" value="">
					例：8月20日<br><br>
				</p>
			</td>
		</tr>
		<tr>
			<td>配達時間帯</td>
			<td>
				<select name="time" id="配達時間帯">
					<option value="" selected="">選択してください</option>
					<option value="午前中">午前中</option>
					<option value="12時～14時">12時～14時</option>
					<option value="14時～16時">14時～16時</option>
					<option value="16時～18時">16時～18時</option>
					<option value="18時～20時">18時～20時</option>
					<option value="20時～21時">20時～21時</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>お名前<br><span class="requiredArea">【必須】</span></td>
			<td>
				<p id="checkText1">
					<input type="text" size="20" name="name01" autocomplete="on" value="">
					<input type="text" size="20" name="name02" autocomplete="on" value=""><br>
				</p>例：山田太郎
			</td>
		</tr>
		<tr>
			<td>お名前（フリガナ）<br><span class="requiredArea">【必須】</span></td>
			<td>
				<p id="checkText2">
					<input type="text" size="20" name="kana01" autocomplete="on" value="">
					<input type="text" size="20" name="kana02" autocomplete="on" value=""><br>
				</p>例：ヤマダ　タロウ
			</td>
		</tr>
		<tr>
			<td>住所<br><span class="requiredArea">【必須】</span></td>
			<td>
				<p id="checkText3">郵便番号<br>
					<input type="text" class="js-zip1" size="10" name="zip01" id="郵便番号1" autocomplete="on" value="">&nbsp;-&nbsp;
					<input type="text" class="js-zip2" size="10" name="zip02" id="郵便番号2" autocomplete="on" value=""><br>
					<input type="button" class="js-zip2add" value="Zip 2 Address">
				</p>
				<br>
				<p id="checkText4">住所<br>
					<select name="pref" class="js-pref">
						<option value="">選択してください</option>
						@foreach ($prefs as $code => $name)
						<option value="{{{ $code }}}">{{{ $name }}}</option>
						@endforeach
					</select>
					<br />
					<input type="text" size="40" name="addr01" autocomplete="on" value="" class="js-addr01"><br />
					<input type="text" size="40" name="addr02" autocomplete="on" value="" class="js-addr02"><br />
				</p>例：福岡県福岡市中央春吉1-14-5 春吉マンション101
			</td>
		</tr>
		<tr>
			<td>電話番号<br><span class="requiredArea">【必須】</span></td>
			<td>
				<p id="checkText5">
					<input type="text" size="10" name="tel01" autocomplete="on" value=""> -
					<input type="text" size="10" name="tel02" autocomplete="on" value=""> -
					<input type="text" size="10" name="tel03" autocomplete="on" value=""><br>
				</p>例：0312345678
			</td>
		</tr>
		<tr>
			<td>メールアドレス<br><span class="requiredArea">【必須】</span></td>
			<td>
				<p id="checkText6">
					<input type="text" size="40" name="email" autocomplete="on" value=""><br>
					<br>確認のため、もう一度入力してください。<br>
					<input type="text" size="40" name="email_confirmation" value=""><br>
				</p>
			</td>
		</tr>
		<tr>
			<td>その他</td>
			<td>
				<textarea cols="50" rows="5" name="other"></textarea>
				<p>※1,000文字以内で入力してください。</p>
			</td>
		</tr>
	</tbody>
</table>
<input type="button" class="js-submit" value="Send">
{{ Form::close() }}

@include('shares/footer')

@stop

@section('end_script')
<script type="text/javascript">
$(function() {
	var token = "{{{ csrf_token() }}}";

	$('.js-zip2add').on('click', function() {
		var data = {
			'_token': token,
			'zipcode': $('.js-zip1').val() + $('.js-zip2').val()
		};

		$.ajax({
			'type': 'GET',
			'url': '/home/zip2add',
			'data': data
		}).done(function(data) {
			$('.js-pref').val(data.code);
			$('.js-addr01').val(data.city + data.town);
		}).fail(function(data) {
			console.log(data);
		});
	});

	$('.js-submit').on('click', function() {
		var data = {};
		var $form = $('.js-register-form');
		$form.find(':input').each(function(elem) {
			data[$(this).attr('name')] = $(this).val();
		});

		$.ajax({
			'type': 'POST',
			'url': '/regular/register',
			'data': data
		}).done(function(msg, st, xhr) {
			console.log('done');
			console.log(msg, st);
		}).fail(function(xhr, st, error) {
			console.log('fail');
			console.log(xhr, st, error);
			var msg = eval('(' + xhr.responseText + ')');
			console.log(msg);
		});
	});

});
</script>
@stop
