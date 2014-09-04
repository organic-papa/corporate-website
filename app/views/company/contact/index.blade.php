@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerCompany', 'h1' => 'オーガニックパパへのお問い合わせはこちらから'])

<!--/main-->

<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/company">企業情報</a> > お問合せ</p>
		</div>
			<div class="mainRight clearfix">
			<div class="formmerSubContents">
				<h2>お問合せ</h2>
				<p>オーガニックパパへのお問合せはこちらから</p>
			</div>
			<div class="contactForm">
				{{ Form::open(['url' => '/company/contact/confirm', 'class' => 'js-contact-form']) }}
					<table>
						<tr>
							<td>カテゴリー<br /><span class="requiredArea">【必須】</span></td>
							<td>
								<select name="inquiry" class="js-inquiry">
									<option value="">選択してください</option>
									@foreach ($inquiries as $inquiry)
									<option value="{{{ $inquiry['key'] }}}" @if ($params['inquiry'] == $inquiry['key'])selected="selected"@endif>{{{ $inquiry['value'] }}}</option>
									@endforeach
								</select>
								<p class="requiredArea js-error-msg">{{{ $messages->first('inquiry') }}}</p>
							</td>
						</tr>
						<tr>
							<td class="tdLeft">法人・事業者名</td>
							<td class="tdRight">
								<input type="text" class="js-company" size="40" name="company" value="{{{ $params['company'] }}}">
								<p class="requiredArea js-error-msg">{{{ $messages->first('company') }}}</p>
							</td>
						</tr>
						<tr>
							<td>お名前<br /><span class="requiredArea">【必須】</span></td>
							<td>
								<div id="checkText1">
									<input type="text" class="js-name" size="40" name="name" value="{{{ $params['name'] }}}">
									<p class="requiredArea js-error-msg">{{{ $messages->first('name') }}}</p>
								</div>
							</td>
						</tr>
						{{--
						<tr>
							<td>お名前（フリガナ）<br /><span class="requiredArea">【必須】</span></td>
							<td>
								<div id="checkText2">
									<input type="text" class="js-name-kana" size="40" name="name_kana" value="{{{ $params['name_kana'] }}}"><br />
									<p class="requiredArea js-error-msg">{{{ $messages->first('name_kana') }}}</p>
								</div>
							</td>
						</tr>
						--}}
						<tr>
							<td>メールアドレス<br /><span class="requiredArea">【必須】</span></td>
							<td>
								<div id="checkText3">
									<div>
										<input type="text" class="js-email" size="40" name="email" autocomplete="on" value="{{{ $params['email'] }}}"><br />
										<p class="requiredArea js-error-msg">{{{ $messages->first('email') }}}</p>
									</div>
									<br />確認のため、もう一度入力してください。<br />
									<div>
										<input type="text" class="js-email-confirmation" size="40" name="email_confirmation" autocomplete="on" value="{{{ $params['email_confirmation'] }}}"><br />
										<p class="requiredArea js-error-msg">{{{ $messages->first('email_confirmation') }}}</p>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>電話番号</td>
							<td>
								<input type="text" class="js-tel" size="40" name="tel" value="{{{ $params['tel'] }}}">
								<p>例：0312345678</p>
								<p class="requiredArea js-error-msg">{{{ $messages->first('tel') }}}</p>
							</td>
						</tr>
						<tr>
							<td>お問い合わせ内容<br /><span class="requiredArea">【必須】</span></td>
							<td>
								<textarea class="js-body" cols="39" rows="10" name="body" style="font-size:1.0em;">{{{ $params['body'] }}}</textarea>
								<p>※1,000文字以内で入力してください。</p>
								<p class="requiredArea js-error-msg">{{{ $messages->first('body') }}}</p>
							</td>
						</tr>
					</table>
					<input id="submit_button" type="submit" name="input_submit" value="確認する" class="botton">
					{{ Form::token(); }}
				{{ Form::close() }}
			</div>
			<p id="back-top">
				<a href="#top"><span></span>&nbsp;</a>
			</p>
		</div><!--/mainRight-->

		@include('company._mainLeft', ['active' => 'companyContact'])

	</div>
</div>
<!--/main-->

@include('shares/footer')

@stop


@section('end_script')
<script type="text/javascript">
$(function() {
	var $inquiry = $('.js-inquiry');
	var $company = $('.js-company');
	var $name = $('.js-name');
	var $email = $('.js-email');
	var $emailConfirm = $('.js-email-confirmation');
	var $tel = $('.js-tel');
	var $body = $('.js-body');


	$('.js-contact-form').on('submit', function() {
		$('.js-error-msg').empty();

		var requires = [
			$name, $email, $emailConfirm, $body
		];

		if ($inquiry.val() === '') {
			$inquiry.parent().find('.js-error-msg').text('選択してください');
		}

		_.each(requires, function($f) {
			if ($f.val() === '') {
				console.log($f.attr('name'));
				console.log($f.parent().find('.js-error-msg'));
				$f.parent().find('.js-error-msg').text('入力してください');
			}
		});

		var hasError = false;
		$('.js-error-msg').each(function() {
			if ($(this).text().length > 0) {
				$('html,body').animate({ scrollTop: $(this).position().top - 80 }, 'fast');
				hasError = true;
				return false;
			}
		});

		return !hasError;
	});
});
</script>
@stop
