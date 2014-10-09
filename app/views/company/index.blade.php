@extends('layouts.default')
<?php $title = '企業情報 | オーガニックパパ'; ?>
<?php $description = 'オーガニックパパの企業情報です。九州野菜をメインとしたオーガニック野菜といえばオーガニックパパへ。'; ?>
<?php $keywords = 'オーガニックパパ,会社概要'; ?>

@section('content')

@include('shares.header', ['active' => 'headerCompany', 'h1' => 'オーガニックパパの会社情報について'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > 企業情報</a></p>
		</div>
		<div class="mainRight clearfix">
			<div class="formmerSubContents">
				<h2>企業情報</h2>
				<p>オーガニックパパの会社概要です。</p>
			</div>
			<div class="formmerSubContents01">
				<a href="/company/summary"><img src="/images/company02.png" width="227" height="229"></a>
				<h3><a href="/company/summary">会社概要</a></h3>
				<p>株式会社オーガニックパパとグリーンハンドの概要です</p>
			</div>
			<div class="formmerSubContents01">
				<a href="/company/greeting"><img src="/images/company01.png" width="227" height="229"></a>
				<h3><a href="/company/greeting">主宰あいさつ</a></h3>
				<p>オーガニックは、正しい知識を学び、実践する時代へ</p>
			</div>
			<div class="formmerSubContents01">
				<a href="/company/business_alliance"><img src="/images/company03.png" width="227" height="229"></a>
				<h3><a href="/company/business_alliance">業務提携のご案内</a></h3>
				<p>オーガニックは、日本の宝もの。必ず後世に遺そう！</p>
			</div>
			<div class="formmerSubContents01">
				<a href="/company/contact"><img src="/images/company04.png" width="227" height="229"></a>
				<h3><a href="/company/contact">お問合わせ</a></h3>
				<p>オーガニックパパへのお問合わせはこちら</p>
			</div>
			<img src="/images/dot.png" width="708" height="8" class="dot">
			<div class="btnEc">
				<a href="/regular"><img src="/images/BTN_ec.png" width="663" height="101"></a>
			</div>

			<p id="back-top">
				<a href="#top"><span></span>&nbsp;</a>
			</p>
		</div><!--/mainRight-->

		@include('company._mainLeft', ['active' => ''])

	</div>
</div>
<!--/main-->

@include('shares/footer')

@stop
