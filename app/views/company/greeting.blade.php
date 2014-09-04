@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerCompany', 'h1' => 'オーガニックパパの主宰あいさつを紹介します'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/company">企業情報</a> > 主宰あいさつ</p>
		</div>
		<div class="mainRight clearfix">
			<div class="productContents">
				<div class="companyIn">
					<h2>主宰あいさつ</h2>
					<h3>オーガニックは、正しい知識を学び、実践する時代へ</h3>
					<img src="/images/yahiro.png" class="ArticlePhoto">
					<p>農と食のあり方をイメージすると大きな変化が生まれてきました。これまでのような経済性に直結した行為しか株式会社は実践できないとか、合理性を追求し続けなければ競争社会に生き残れないなどの考え方は、もはや古く違和感をもたれてある方も多いと思います。本物を追求すると手間がかかるのは当たり前、経済性が伴わなくても守るべきものが存在することを実感し、永続するビジョンを企業活動と重ねて考えることに価値を見出す企業トップとの出会いが後を絶ちません。時代の節目を感じております。<br /><br />そのおおもとは、昨今の夥しい数のアレルギー症状や原因不明の近代病、増加の一途を止められない成人病やうつ症状が、平然と存在し身近なものとなってしまったことに危機感を感じてのことではないかと考えます。<br /><br />
私たちは、自然なものをできるだけ手づくりで食べるあたり前の食習慣を基本に、また生態系に負荷をかけず、すべての生き物と調和のとれた農のあり方に自分たちの活動の根源を追求してきました。いま実践している事業や提供するサービスに、そのイメージから離れたものは一つもありません。これからも同じことです。<br /><br />

美味しいものを追求したら、自然とオーガニックなものになってしまうもの。豊かな食に満ち溢れた楽しい食卓のために、オーガニックは切り離せない考え方です。<br />
私たちは、平和なゴリラ社会を築くシルバーバックのようなリーダーを応援し続けていきます。子育てするパパとその家族のための会社です。</p>
					<p class="right">株式会社オーガニックパパ　主宰　八尋 健次</p>
					<img src="/images/dot.png" class="dot" height="8" width="708">
				</div>
			</div>
			<!--/subContents-->

			<div class="btnEc">
				<a href="https://organic-papa.sakura.ne.jp/post/mail/"><img src="/images/BTN_ec.png" width="663" height="101"></a>
			</div>

			<p id="back-top">
				<a href="#top"><span></span>&nbsp;</a>
			</p>

		</div><!--/mainRight-->

		@include('company._mainLeft', ['active' => 'companyGreeting'])

	</div>
</div>

<!--/main-->

@include('shares/footer')

@stop
