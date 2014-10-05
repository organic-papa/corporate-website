@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerFarm', 'h1' => 'グリーンハンドの体験農園・農園見学'])

<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/farm">農園づくり</a> > 新規就農をご検討の方へ</p>
		</div>
		<div class="mainRight clearfix">
			<div class="productContents">
				<h2>新規就農をご検討の方へ</h2>
				<img src="/images/new-formmer.jpg">
				<div class="formmerIn">
					<h3>グリーンハンドは、農業研修生を常時受入れております。</h3>
					<p>希望される方は、現在の状況や実践したい農業のスタイルをできるだけ詳しく教えてください。<br />もちろん、お逢いしてじっくり話を伺っても構いませんので、詳細なビジョンを共有しましょう。<br />家庭菜園やリハビリ、食育菜園のお考えの方も、お気軽に体験農園、農園見学をお問い合わせください。</p>
					<div class="btn02">
						<a href="/company/contact">お問合わせはこちら</a>
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

		@include('farm._mainLeft', ['active' => 'farmNewFarmers'])

	</div>
</div>

@include('shares/footer')

@stop
