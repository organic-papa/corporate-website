@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerFarm', 'h1' => '無農薬野菜・有機野菜のオーガニックパパの農園づくり'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > 農園づくり</a></p>
		</div>
		<div class="mainRight clearfix">
			<div class="formmerSubContents">
				<img src="/images/formmer-top.png" width="730" height="447">
				<h2>農園づくり</h2>
				<p>食から心と体の健康をサポート。<br />オーガニックパパで取り扱うオーガニック野菜は、<br />すべて完全なるトーレーサビリティ（生産者及び耕作法）を<br />実現しています。</p>
			</div>
			<!--/formmerSubContents-->
			<div class="formmerSubContents01">
				<a href="/farm/product"><img src="/images/formmer01.png" width="227" height="229"></a>
				<h3><a href="/farm/product">農園づくりのコンセプト</a></h2>
				<p>生態系遵守・誰でもできる有機農業</p>
			</div>
			<div class="formmerSubContents01">
				<a href="/farm/order_plantation"><img src="/images/formmer02.png" width="227" height="229"></a>
				<h3><a href="/farm/order_plantation">注文農園のススメ</a></h2>
				<p>有機農業は「土づくり」から。 </p>
			</div>
			<div class="formmerSubContents01">
				<a href="/farm/newfarmers"><img src="/images/formmer04.png" width="227" height="229"></a>
				<h3><a href="/farm/newfarmers">新規就農をご検討の方へ</a></h2>
				<p>グリーンハンドは、農業研修生を常時受入れております。</p>
			</div>
			<div class="btnEc">
				<a href="/regular"><img src="/images/BTN_ec.png" width="663" height="101"></a>
			</div>
			<p id="back-top">
				<a href="#top"><span></span>&nbsp;</a>
			</p>
		</div><!--/mainRight-->
		@include('farm._mainLeft', ['active' => ''])
	</div>
</div>
<!--/main-->

@include('shares/footer')

@stop
