@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerEvent', 'h1' => 'オーガニックパパのイベント・ニュース最新情報'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/event">イベント・ニュース</a> > <a href="/event/marche">マルシェ</a> > {{$event->breadcrumb}}</p>
		</div>
		<div class="mainRight clearfix">
			<div class="productContents">
				<div class="howtoIn">
					<div class="howtoInIn clearfix">
						<div class="howtoHead clearfix">
							<p class="categoryTitle">{{$event->category}}</p>
							<p class="categoryDay">{{$event->date}}</p>
						</div>
						<img src="{{$event->top_photo}}" width="223" height="163" class="titlePhoto">
						<h2 class="articleH2">{{$event->title}}</h2>
						<img src="/images/dot.png" width="708" height="8" class="dotLine">
						<div class="howtoMain">
							<img src="{{$event->body_photo}}" width="234" height="312" class="ArticlePhoto">
							{{ implode('', $event->body) }}
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
