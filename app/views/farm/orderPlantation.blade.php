@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerFarm', 'h1' => '有機農業のための農園つくり（農園新設工事）受託'])

<!--/main-->

<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/farm">農園づくり</a> > 注文農園のススメ</p>
		</div>
		<div class="mainRight clearfix">
			<div class="productContents">
				<h2>注文農園のススメ</h2>
				<div class="formmerIn">
					<h3>注文農園のススメ</h3>
					<img src="../images/order_plantation.jpg" class="ArticlePhoto">
					<p>私たちは、お客様の様々なニーズに合わせて、農園新設工事を受託する企業です。<br />
すなわち、「のうえん屋」です。今は、同業者とお会いしたことがありませんが、これからは増えてくるでしょう。<br /><br />

せっかく農業やるなら、感動的に美味しくて、とてもやさしくて、元気で自然な野菜たちをつくりたいのは当然のことです。<br />
そんなお野菜を自分も食べたいし、家族にも大切なに人も食べさせたい思いで、有機農業や家庭菜園にチャレンジされる方が増え続けてます。<br />
とくに震災以降、急速に個人でも一般企業でも食のあり方は見直され、有機農業への参入意向は高まるばかりです。<br />
しかし、有機農業をいざ実践してみると様々障壁にぶつかることに驚かれるでしょう。<br /><br />

農薬や肥料を一切使用せず、元気で美味しい野菜づくりは、とてつもなく難しいのです。<br />
ヒトの時間や手間は、想像できないくらい費やした結果、ほんのわずかしか収穫できないなんて、至極あたり前のはなしで、何年かけても、どんなに専門書を購入しても、有機農業セミナーに何十回参加しても、できないものはできない。<br />
ましてや事業化して採算を合わせようと思うと、成功例はほとんどないのが現状です。<br />
そのような現実はあるものの、諦めることなくチャレンジしてほしいと願っております。それ程の価値のある行為だと信じております。<br />
難しいチャレンジだからこそ、事前にしっかりと具体的な計画を立てた上で、ビジョンを明確にし、ゴールを設定していく必要性があります。<br />
構想が固まれば、いよいよ実践です。<br /><br />

有機農業の始まりは、「土づくり」からスタートすることを心よりおすすめします。<br />
これから有機農業をはじめる畑は、それに適した環境になってないことが大半ですので、のちの莫大な作業を生み出す要因を出来るだけ事前に解消し、しっかりとした農園整備工事を終えてから作付けを始めることが必要不可欠です。<br /><br />

そのような農園整備を作付け前に行った畑は、以下のように良好な農園環境に向かっていきます。</p>
					<p class="textCom">有機農業は「土づくり」から。</h4>
					<p class="textCom">作付け前に、しっかりと土づくりをした場合のメリット</p>
					<p class="textCom"><img src="../images/arrow-down.png"></p>
					<p class="textCom"><img src="../images/order_plantation2.jpg"></p>
					<p class="textCom">そのような環境でできたお野菜たちは</p>
					<p class="textCom"><img src="../images/arrow-down.png"></p>
					<p class="textCom"><img src="../images/order_plantation3.jpg"></p>
					<p>いいことばかりですね。<br />このように、まずは計画をしっかり立てて、事前に農園整備工事を行うことで、<br />楽しいファーム運営が現実のものとなります。<br />
				</div>
			</div>
			<!--/subContents-->

			<div class="btnEc">
				<a href="https://organic-papa.sakura.ne.jp/post/mail/"><img src="../images/BTN_ec.png" width="663" height="101"></a>
			</div>
			<p id="back-top">
				<a href="#top"><span></span>&nbsp;</a>
			</p>
		</div><!--/mainRight-->

		@include('farm._mainLeft', ['active' => 'farmOrderPlantation'])

	</div>
</div>
<!--/main-->

@include('shares/footer')

@stop
