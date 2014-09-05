@extends('layouts.default')

@section('content')

{{ Form::open(['url' => '/company/contact/confirm', 'class' => 'js-contact-form']) }}
<table>
	<tbody>
		<tr>
			<td class="tdLeft">ご希望のセット<br><span class="requiredArea">【必須】</span></td>
			<td class="tdRight">
				<p id="spryselect_area">
					<select name="set" id="ご希望のセット">
						<option value="" selected="">選択してください</option>
						<option value="PAPAのミニセット（3,000円）">PAPAのミニセット（3,000円）</option>
						<option value="PAPAセット（4,000円）">PAPAセット（4,000円）</option>
						<option value="PAPAのボリュームセット（5,000円）">PAPAのボリュームセット（5,000円）</option>
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
					<input type="text" size="40" name="name" id="お名前" autocomplete="on" value=""><br>
				</p>例：山田太郎
			</td>
		</tr>
		<tr>
			<td>お名前（フリガナ）<br><span class="requiredArea">【必須】</span></td>
			<td>
				<p id="checkText2">
					<input type="text" size="40" name="kana" id="フリガナ" autocomplete="on" value=""><br>
				</p>例：ヤマダ　タロウ
			</td>
		</tr>
		<tr>
			<td>住所<br><span class="requiredArea">【必須】</span></td>
			<td>
				<p id="checkText3">郵便番号<br>
					<input type="text" class="js-zip1" size="10" name="zip1" id="郵便番号1" autocomplete="on" value="">&nbsp;-&nbsp;
					<input type="text" class="js-zip2" size="10" name="zip2" id="郵便番号2" autocomplete="on" value=""><br>
					<input type="button" class="js-zip2add" value="Zip 2 Address">
				</p>
				<br>
				<p id="checkText4">住所<br>
					<input type="text" size="40" name="address" id="住所" autocomplete="on" value=""><br>
				</p>例：福岡県福岡市中央春吉1-14-5 春吉マンション101
			</td>
		</tr>
		<tr>
			<td>電話番号<br><span class="requiredArea">【必須】</span></td>
			<td>
				<p id="checkText5">
					<input type="text" size="40" name="tel" id="電話番号" autocomplete="on" value=""><br>
				</p>例：0312345678
			</td>
		</tr>
		<tr>
			<td>メールアドレス<br><span class="requiredArea">【必須】</span></td>
			<td>
				<p id="checkText6">
					<input type="text" size="40" name="mail" id="メールアドレス" autocomplete="on" value=""><br>
					<br>確認のため、もう一度入力してください。<br>
					<input type="text" size="40" name="mail_confirm" id="メールアドレス" autocomplete="on" value=""><br>
				</p>
			</td>
		</tr>
		<tr>
			<td>その他</td>
			<td>
				<textarea cols="50" rows="5" name="other" id="その他"></textarea>
				<p>※1,000文字以内で入力してください。</p>
			</td>
		</tr>
	</tbody>
</table>
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
			console.log(data);
		}).fail(function(data) {
			console.log(data);
		});
	});
});
</script>
@stop
