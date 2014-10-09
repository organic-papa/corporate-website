@extends('layouts.default')
<?php $title = '服部幸應さん監修の「家庭の食育」 | オーガニックパパ'; ?>
<?php $description = '服部幸應さん監修の「家庭の食育」 本を販売しております。食育に興味がある方、食育を知りたい方は愛読してください。九州野菜をメインとしたオーガニック野菜といえばオーガニックパパへ。'; ?>
<?php $keywords = 'オーガニック,オーガニック,食育,服部幸應'; ?>

@section('content')

@include('shares.header', ['active' => 'headerPost', 'h1' => '服部幸應さん監修の「家庭の食育」販売中'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/post">お届けできるお野菜</a> > 書籍出版「家庭の食育」</p>
		</div>

		<div class="mainRight clearfix">
			<div class="productContents">
				<h2>書籍出版「家庭の食育」</h2>
				<div class="formmerIn">
					<h3>「家庭の食育」を出版しました。</h3>
					<p>服部幸應さん監修の「家庭の食育」をオーガニックパパより出版致しました。<br />食育の全てはわかる完全保存版です！</p>
					<div class="bookInfo clearfix">
						<h3>食育のすべてがわかる完全保存版「家庭の食育」　監修：服部幸應</h3>
						<div class="bookInfoLeft">
							<p>「食育基本法」が制定された2005年から、8年が経過しました。
2011年より小学校の学習指導要領に「食育の時間」が、また、2012年からは中学校に、そして2013年から高等学校の授業にも入るようになりました。<br /><br />

内閣府による第二次食育推進計画（2011~2015年）では、「周知から実践へ」をコンセプトに、現状プロジェクトが推進されています。<br />
そして2014年からは第三次計画の準備がスタートします。<br />
近年の大きな出来事として、2011年の東日本大震災がありました。その未會有の震災以降、食の安全や健康ばかりでなく、家族や仲間と一緒に食を通して時間を共有する「共食」についても重要視されるようになりました。<br />
「食育」とは、単に健康で良いものを食べることではありません。<br />
人の身体を健全に育み、日本ｎの未来をも作るものだとわたしたちは考えます。<br /><br />

そしていま、わたしたちが伝えたい事。<br />
それは「食育」という言葉や概念を伝える段階が終わり、実践の時代へと変化したということです。<br />
家族で囲む食卓や食を通して、未来を担う“こころをもった人”を育てることが、現代社会で最も必要とされ、同時に私たちの役割でもあるのではないでしょうか。<br /><br />
「食育」はいま、実践の時代へ。</p>
						</div>
						<div class="bookInfoRight">
							<img src="/images/kateino_shokuiku.jpg" width="240">
						</div>
					</div>
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


		@include('post._mainLeft', ['active' => 'postBook'])

	</div>
</div>
<!--/main-->

@include('shares/footer')

@stop
