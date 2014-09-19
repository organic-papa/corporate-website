@extends('layouts.default')

@section('content')
<div id="wrapper">
	@include('shares.home_header')

	<!--/main-->
	<div id="main">
		<div class="mainIn clearfix">
			<div class="mainRight">
				<div class="ContentsBox">
					<div class="ContentsMain">
						<a href="/farm/order_plantation"><img src="images/farmmer/001.jpg" width="223" height="163"></a>
						<div class="ContentsIn">
							<p class="labelformmerme">farmmer</p>
							<p class="ContentsTitle"><a href="/farm/order_plantation">注文農園のススメ</a></p>
							<p class="ContentsText">私たちは、お客様の様々なニーズに合わせて、農園新設工事を受託する企業です。すなわち、「のうえん屋」です。今は、同業者とお会いしたことがありませんが、</p>
						</div>
					</div>
					<p class="ContentsLink"><a href="/farm/order_plantation">続きを読む</a></p>
				</div>
				<!--/ContentsBox-->

				<div class="ContentsBox">
					<div class="ContentsMain">
						<a href="/farm/product"><img src="/images/farmmer/002.jpg" width="223" height="163"></a>
							<div class="ContentsIn">
							<p class="labelformmerme">farmmer</p>
							<p class="ContentsTitle"><a href="/farm/product">農園づくりのコンセプト</a></p>
							<p class="ContentsText">エコシステム全体が、高度に安定するしくみのサホートとなる間接的な働きかけを、圃場のエコシステムの中から見いだし、それを遵守し、ヒトはそのエコシステムの一部であるというスタンスで、</p>
						</div>
					</div>
					<p class="ContentsLink"><a href="/farm/product">続きを読む</a></p>
				</div>
				<!--/ContentsBox-->

				<div class="ContentsBox">
					<div class="ContentsMain">
						<a href="/post/mail/"><img src="/images/pos-papap.jpg" width="223" height="163"></a>
						<div class="ContentsIn">
							<p class="labelVegetables">vegetables</p>
							<p class="ContentsTitle"><a href="/post/mail/">無農薬・有機栽培　オーガニックパパのお野菜直送便</a></p>
							<p class="ContentsText">旬のおいしい九州有機野菜を中心にした品揃えです。全国各地の飲食店様や食品加工会社様、給食センター様などの「事業者向けの卸業務」と、</p>
						</div>
					</div>
					<p class="ContentsLink"><a href="/post/mail/">続きを読む</a></p>
				</div>
				<!--/ContentsBox-->
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
				<!--/ContentsBox-->
				<div class="ContentsBox">
					<div class="ContentsMain"><a href="/post/recipe/8"><img src="/images/post/008.jpg" width="223" height="163"></a>
						<div class="ContentsIn">
							<p class="labelVegetables">vegetables</p>
							<p class="ContentsTitle"><a href="/post/recipe/8">人参ポタージュ</a></p>
							<p class="ContentsText">材料<br />★人参…3個★玉ねぎ…2個★塩…小さじ2★豆乳…500cc★胡椒…少々<br />作り方<br />①玉ねぎも人参もスライスする。</p>
						</div>
					</div>
					<p class="ContentsLink"><a href="/post/recipe/8">続きを読む</a></p>
				</div>
				<!--/ContentsBox--><div class="ContentsBox">
					<div class="ContentsMain">
						<a href="/post/book"><img src="/images/kateino_shokuiku-small.jpg" width="223" height="163"></a>
						<div class="ContentsIn">
							<p class="labelVegetables">vegetables</p>
							<p class="ContentsTitle"><a href="/post/book">「家庭の食育」を出版しました。</a></p>
							<p class="ContentsText">服部幸應さん監修の「家庭の食育」をオーガニックパパより出版致しました。食育の全てはわかる完全保存版です！</p>
						</div>
					</div>
					<p class="ContentsLink"><a href="/post/book">続きを読む</a></p>
				</div>
				<!--/ContentsBox-->

				{{--
				<div class="news clearfix">
					<div class="newsTitle">
						<p>What's<br />NEW</p>
					</div>
					<div class="newsList">
						<dl class="clearfix">
							<dt>2014/2/2</dt><dd>東京都勝どきで開催される「太陽のマルシェ」に出店します。皆様ぜひ遊びに来てください。</dd>
							<dt>2014/2/2</dt><dd>「太陽のマルシェ」に出店します。皆様ぜひ遊びに来てください。</dd>
							<dt>2014/2/2</dt><dd>東京都勝どきで開催される「太陽のマルシェ」に出店します。皆様ぜひ遊びに来てください。</dd>
							<dt>2014/2/2</dt><dd>「太陽のマルシェ」に出店します。皆様ぜひ遊びに来てください。</dd>
							<dt>2014/2/2</dt><dd>東京都勝どきで開催される「太陽のマルシェ」に出店します。皆様ぜひ遊びに来てください。</dd>
							<dt>2014/2/2</dt><dd>東京都勝どきで開催される「太陽のマルシェ」に出店します。皆様ぜひ遊びに来てください。</dd>
							<dt>2014/2/2</dt><dd>東京都勝どきで開催される「太陽のマルシェ」に出店します。皆様ぜひ遊びに来てください。</dd>
							<dt>2014/2/2</dt><dd>東京都勝どきで開催される「太陽のマルシェ」に出店します。皆様ぜひ遊びに来てください。</dd>
							<dt>2014/2/2</dt><dd>東京都勝どきで開催される「太陽のマルシェ」に出店します。皆様ぜひ遊びに来てください。</dd>
						</dl>
					</div>
				</div>
				--}}

				<div class="pickup clearfix">
					<div class="pickupBoxL clearfix">
						<h2>農園新設工事を受託します！</h2>
						<div class="pickupPhoto">
							<a href="/farm/order_plantation"><img src="/images/contentsImages2.jpg" width="100px"></a>
						</div>
						<div class="pickupText">
							<p>私たちは、お客様の様々なニーズに合わせて、農園新設工事を受託する企業です。すなわち、「のうえん屋」で</p>
							<p class="pickupLink"><a href="/farm/order_plantation">続きを読む</a></p>
						</div>
					</div><!--/pickupBoxL-->
					<div class="pickupBoxR clearfix">
						<h2>グリーンハンドは農業研修生を常時受入れ…</h2>
						<div class="pickupPhoto">
							<a href="/farm/newfarmers"><img src="/images/contentsImages.jpg" width="100px"></a>
						</div>
						<div class="pickupText">
							<p>希望される方は、現在の状況や実践したい農業のスタイルをできるだけ詳しく教えてください。</p>
							<p class="pickupLink"><a href="/farm/newfarmers">続きを読む</a></p>
						</div>
					</div><!--/pickupBoxR-->
				</div><!--/pickup-->
				<div class="btnEc">
					<a href="/post/mail/"><img src="/images/BTN_ec.png" width="663" height="101"></a>
				</div>
				<div class="likebox">
					<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Forganicpapa&amp;width=732&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=145812885627490" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:732px; height:290px;" allowTransparency="true"></iframe>
				</div>

				<p id="back-top">
					<a href="#top"><span></span>&nbsp;</a>
				</p>
			</div><!--/mainRight-->
			<div class="mainLeft">
				<a href="/post/mail/"><img src="/images/ban_ec.jpg" width="225" height="208"></a>
				<ul>
					<li class="lNav01top"><a href="/farm">農園づくり</a></li>
					<li class="lNav02top"><a href="/post">お届けできるお野菜</a></li>
					<li class="lNav03top"><a href="/event">イベント・ニュース</a></li>
					<li class="lNav04top"><a href="/company">企業情報</a></li>
				</ul>
				<a href="/post/recipes"><img src="/images/ban_re.jpg" width="225" height="208"></a>
				<div class="leftBanner">
					<h3>「家庭の食育」発売中！</h3>
					<a href="/post/book"><img src="/images/kateino_shokuiku.jpg" width="350"></a>
					<p>服部幸應さん監修「家庭の食育」を発売しました。</p>
					<p class="rLink"><a href="/post/book">＞続きを読む</a></p>
				</div>
				<div class="infoBanner">
					<h3>オーガニックパパへの<br />お問合わせ先</h3>
					<div class="infoBannerIn">
						<p class="infoBannerTel">092-737-7311</p>
						<p>営業時間10:00～19:00</p>
					</div>
				</div>
			</div>
			<!--/mainLeft-->
		</div>
	</div>
	<!--/main-->

	@include('shares/footer')
</div>
@stop
