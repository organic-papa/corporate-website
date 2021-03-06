@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerEvent', 'h1' => 'マルシェの記事一覧。イベント・ニュース'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/event">イベント・ニュース</a> > マルシェ</p>
		</div>
		<div class="mainRight clearfix">
			<div class="formmerSubContents">
				<h2 class="event-color">イベントカレンダー</h2>
			</div>
			<div id='calendar' class="mt20 mb20"></div>
			<div class="formmerSubContents">
				<h2 class="event-color">イベント・ニュース</h2>
			</div>
			<div class="articleTitle">
				<p><span>マルシェ</span>の記事一覧</p>
			</div>
			<div class="ContentsBox">
				<div class="ContentsMain">
					<a href="/event/2"><img src="/images/event/002.jpg" width="223" height="163"></a>
					<div class="ContentsIn">
						<p class="labelEvent">Event</p>
						<p class="ContentsTitle"><a href="/event/2">2014/9/13(土)・14(日) 太陽のマルシェに出店します。</a></p>
						<p class="ContentsText">日本最大級の都市型マルシェが勝どきで開かれます。日本全国からこだわりの農家さんが集い、その時々に採れたフレッシュな旬の野菜や果物、加工品を、生産者との会話を楽しみながら購入できます。</p>
					</div>
				</div>
				<p class="ContentsLink"><a href="/event/2">続きを読む</a></p>
			</div>
			<div class="ContentsBox">
				<div class="ContentsMain">
					<a href="/event/1"><img src="/images/event/001.jpg" width="223" height="163"></a>
					<div class="ContentsIn">
						<p class="labelEvent">Event</p>
						<p class="ContentsTitle"><a href="/event/1">2014/6/24（火）、てんちかマルシェ出店します。</a></p>
						<p class="ContentsText">九州の新鮮な野菜や果物、美味しい逸品など、食卓を豊かにする「メイド・イン・キュウシュウ」をテーマにした「てんちかマルシェ」を、6/23（月）～25（水）の3日間で開催致します。</p>
					</div>
				</div>
				<p class="ContentsLink"><a href="/event/1">続きを読む</a></p>
			</div>
			<!--/ContentsBox-->

			<div class="btnEc">
				<a href="/regular"><img src="/images/BTN_ec.png" width="663" height="101"></a>
			</div>

			<p id="back-top">
				<a href="#top"><span></span>&nbsp;</a>
			</p>
		</div><!--/mainRight-->

		@include('event._mainLeft', ['active' => 'eventMarche'])

	</div>
</div>
<!--/main-->

@include('shares/footer')

@stop

@section('end_script')
	@include('event._fullcalendar')
@stop
