@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerEvent', 'h1' => 'オーガニックパパのイベント・ニュース最新情報'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="../../index.html">HOME</a> > <a href="../index.html">イベント・ニュース</a> > <a href="../news/index.html">マルシェ</a> > 太陽のマルシェに出店します。</p>
		</div>
		<div class="mainRight clearfix">
			<div class="productContents">
				<div class="howtoIn">
					<div class="howtoInIn clearfix">
						<div class="howtoHead clearfix">
							<p class="categoryTitle">マルシェ</p>
							<p class="categoryDay">2014/06/22</p>
						</div>
						<img src="/images/event/001.jpg" width="223" height="163" class="titlePhoto">
						<h2 class="articleH2">2014/6/24（火）、てんちかマルシェ出店します。</h2>
						<img src="/images/dot.png" width="708" height="8" class="dotLine">
						<div class="howtoMain">
							<img src="/images/event/event_photo01.jpg" width="234" height="312" class="ArticlePhoto">
							<p>九州の新鮮な野菜や果物、美味しい逸品など、食卓を豊かにする「メイド・イン・キュウシュウ」をテーマにした「てんちかマルシェ」を、6/23（月）～25（水）の3日間で開催致します。</p>
							<p>オーガニックパパも出店するので、ぜひお越しください！</p>
							<p>■開催日時　6/23（月）～25（水）11：00～19：00</p>
							<p>■開催場所　1番街イベントコーナー</p>
						</div>
					</div>
				</div>
			</div>
			<!--/subContents-->

			<div class="btnEc">
				<a href="https://organic-papa.sakura.ne.jp/post/mail/"><img src="../../images/BTN_ec.png" width="663" height="101"></a>
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
