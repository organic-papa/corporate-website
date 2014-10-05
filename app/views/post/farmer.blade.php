@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerPost', 'h1' => 'オーガニックパパお野菜の直送、レシピ'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/post">お届けできるお野菜</a> > 提携農園について</p>
		</div>
		<div class="mainRight clearfix">
			<div class="productContents">
				<h2>提携農園について</h2>
				<div class="farmerIn clearfix">
					<h3>野菜を作ってくれている提携農家さんのご紹介</h3>
					<p>私達が、いつもお世話になってるステキなファーマーの皆様をご紹介いたします。安心できる食を追求して、手間をおしまず有機農業にチャレンジしてる仲間たちです。絶対に妥協しないファーマーのこだわりを、お客様の食卓へお届けします。みんなが同じ農法ではありませんが、同じ理念のもと大切に育ててくれてるお野菜たちです。</p>
					<ul>
						<li><img src="/images/farmmer/people/001.jpg" width="244" height="146"><p class="farmName">福岡県糸島市</p></li>
						<li><img src="/images/farmmer/people/002.jpg" width="244" height="146"><p class="farmName">鹿児島県伊佐市</p></li>
						<li><img src="/images/farmmer/people/003.jpg" width="244" height="146"><p class="farmName">宮崎県田</p></li>
						<li><img src="/images/farmmer/people/004.jpg" width="244" height="146"><p class="farmName">福岡県糸島市</p></li>
						<li><img src="/images/farmmer/people/005.jpg" width="244" height="146"><p class="farmName">鹿児島県南九州市頴娃町</p></li>
						<li><img src="/images/farmmer/people/006.jpg" width="244" height="146"><p class="farmName">福岡県糸島市</p></li>
						<li><img src="/images/farmmer/people/007.jpg" width="244" height="146"><p class="farmName">熊本県不知火町</p></li>
						<li><img src="/images/farmmer/people/008.jpg" width="244" height="146"><p class="farmName">福岡県糸島市</p></li>
						<li><img src="/images/farmmer/people/009.jpg" width="244" height="146"><p class="farmName">福岡県小郡市</p></li>
					</ul>
				</div>
			</div>
			<!--/subContents-->

			<div class="btnEc">
				<a href="/regular"><img src="/images/BTN_ec.png" width="663" height="101"></a>
			</div>

			<p id="back-top">
				<a href="#top"><span></span>&nbsp;</a>
			</p>
		</div><!--/mainRight-->


		@include('post._mainLeft', ['active' => 'postFarmer'])

	</div>
</div>
<!--/main-->

@include('shares/footer')

@stop
