@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerPost', 'h1' => 'オーガニックパパお野菜の直送、レシピ'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > お届けできるお野菜</a></p>
		</div>
		<div class="mainRight clearfix">
			<div class="PostSubContents">
				<img src="/images/post-top.jpg" width="730" height="368">
				<h2>PAPA野菜の直送便</h2>
				<p class="center"><img src="/images/barance.png" width="713" height="197"></p>
				<p>旬のおいしい九州有機野菜を中心にした品揃えです。<br />全国各地の飲食店様や食品加工会社様、給食センター様などの<br />「<span class="red">事業者向けの卸業務</span>」と、お好みに応じて詰め合わせのリクエストが可能な<br />「<span class="red">個人様向けの宅配野菜</span>」の発送を承っております。</p>
				<p class="center"><a href="/regular"><img src="/images/Btn01.png" width="338" height="61"></a></p>
				<img src="/images/dot.png" width="708" height="8" class="dot">

				<h2>おいしいレシピ</h2>
				<p class="center"><img src="/images/post-01.jpg" width="630" height="201"></p>
				<p>PAPA野菜を美味しく食べるおすすめレシピを紹介します。</p>
				<p class="center"><a href="_recipe/index.html"><img src="/images/Btn02.png" width="338" height="61"></a></p>
				<img src="/images/dot.png" width="708" height="8" class="dot">

				<h2>「家庭の食育」販売中</h2>
				<p class="center"><a href="book.html"><img src="/images/kateino_shokuiku.jpg" width="350" height="448"></a></p>
				<p>「家庭の食育」を発行しました。</p>
				<p class="center"><a href="book.html"><img src="/images/Btn04.png" width="338" height="61"></a></p>
			</div>
			<!--/formmerSubContents-->

			<div class="btnEc">
				<a href="/regular"><img src="/images/BTN_ec.png" width="663" height="101"></a>
			</div>

			<p id="back-top">
				<a href="#top"><span></span>&nbsp;</a>
			</p>

		</div><!--/mainRight-->

		@include('post._mainLeft', ['active' => ''])

	</div>
</div>
<!--/main-->

@include('shares/footer')

@stop
