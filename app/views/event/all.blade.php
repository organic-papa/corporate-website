@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerEvent', 'h1' => 'すべての記事一覧。イベント・ニュース'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/event">イベント・ニュース</a> > すべて</p>
		</div>
		<div class="mainRight clearfix">
			<div class="formmerSubContents">
				<h2 class="event-color">イベント・ニュース</h2>
			</div>
			<div class="articleTitle">
				<p><span>すべて</span>の記事一覧</p>
			</div>
			<div class="ContentsBox">
				<div class="ContentsMain">
					<a href="/event/4"><img src="/images/event/004.jpg" width="223" height="163"></a>
					<div class="ContentsIn">
						<p class="labelEvent">News</p>
						<p class="ContentsTitle"><a href="/event/4">有機野菜専門店「オーガニックパパ勝どき」がOPEN</a></p>
						<p class="ContentsText">太陽のマルシェ常設店のオーガニックパパが東京「勝どき」に八百屋をオープンします。自社農園・また全国各地から選りすぐりの有機野菜を揃えています。</p>
					</div>
				</div>
				<p class="ContentsLink"><a href="/event/4">続きを読む</a></p>
			</div>
			<div class="ContentsBox">
				<div class="ContentsMain">
					<a href="/event/3"><img src="/images/event/003.jpg" width="223" height="163"></a>
					<div class="ContentsIn">
						<p class="labelEvent">Event</p>
						<p class="ContentsTitle"><a href="/event/3">食養生セミナー・菜園づくりセミナーを行います</a></p>
						<p class="ContentsText">私たちは、人口が著しく自然減少する町の廃校や古民家、多用途の未使用施設を利用して、各種過敏症やアレルギーの 方々の転地療養施設を運営するプロジェクトを立上げ活動してきました。</p>
					</div>
				</div>
				<p class="ContentsLink"><a href="/event/3">続きを読む</a></p>
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

		@include('event._mainLeft', ['active' => 'eventAll'])

	</div>
</div>
<!--/main-->

@include('shares/footer')

@stop
