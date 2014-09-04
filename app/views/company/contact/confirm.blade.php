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
				{{ Form::open(['url' => '/company/contact/proc', 'class' => 'js-contact-form']) }}
					<table width="600" bgcolor="#cccccc" cellspacing="1" cellpadding="3" class="form_kakunin">
						<tr bgcolor=#ffffff>
							<td bgcolor=#eeeeee>お問合せ内容</td>
							<td>{{{ $inquiry }}}</td>
						</tr>
						<tr bgcolor=#ffffff>
							<td bgcolor=#eeeeee>法人・事業者名</td>
							<td>{{{ $params['company'] }}}</td>
						</tr>
						<tr bgcolor=#ffffff>
							<td bgcolor=#eeeeee>お名前</td>
							<td>{{{ $params['name'] }}}</td>
						</tr>
						{{--
						<tr bgcolor=#ffffff>
							<td bgcolor=#eeeeee>お名前（フリガナ）</td>
							<td>{{{ $params['name_kana'] }}}</td>
						</tr>
						--}}
						<tr bgcolor=#ffffff>
							<td bgcolor=#eeeeee>メールアドレス</td>
							<td>{{{ $params['email'] }}}</td>
						</tr>
						<tr bgcolor=#ffffff>
							<td bgcolor=#eeeeee>電話番号</td>
							<td>{{{ $params['tel'] }}}</td>
						</tr>
						<tr bgcolor=#ffffff>
							<td bgcolor=#eeeeee>その他</td>
							<td>{{ nl2br(e($params['body'])) }}</td>
						</tr>
					</table>
					<br />
					<input id="submit_button" type="button" name="confirm_prev_submit" value="前へ戻る" class="botton js-prev-button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input id="submit_button" type="button" name="confirm_next_submit" value="送信する" class="botton js-next-button">
					<input type="hidden" name="inquiry" value="{{ $params['inquiry'] }}">
					<input type="hidden" name="company" value="{{ $params['company'] }}">
					<input type="hidden" name="name" value="{{ $params['name'] }}">
					<input type="hidden" name="email" value="{{ $params['email'] }}">
					<input type="hidden" name="email_confirmation" value="{{ $params['email_confirmation'] }}">
					<input type="hidden" name="tel" value="{{ $params['tel'] }}">
					<input type="hidden" name="body" value="{{ $params['body'] }}">
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
	$('.js-prev-button').on('click', function() {
		var $form = $('.js-contact-form');
		$form.attr('action', '/company/contact').submit();
	});
	$('.js-next-button').on('click', function() {
		$('.js-contact-form').submit();
	});
});
</script>
@stop
