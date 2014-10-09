@extends('layouts.default')
<?php $title = '企業情報 | お問い合わせ | オーガニックパパ'; ?>
<?php $description = 'オーガニックパパの会社概要（お問い合わせ）です。九州野菜をメインとしたオーガニック野菜といえばオーガニックパパへ。'; ?>
<?php $keywords = 'オーガニックパパ,会社情報,お問い合わせ'; ?>

@section('content')

@include('shares.header', ['active' => 'headerCompany', 'h1' => 'オーガニックパパへのお問い合わせはこちらから'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="http://organic-papa.com/index.html">HOME</a> > <a href="http://organic-papa.com/company/index.html">企業情報</a> > お問合せ</p>
		</div>
			<div class="mainRight clearfix">
				<div class="formmerSubContents">
					<h2>お問合せ</h2>
					<p>オーガニックパパへのお問合せ</p>
				</div>
				<div class="contactForm">
					<p>ありがとうございました。送信は無事に終了しました。</p><br /><br /><br />
				</div>
				 <p id="back-top">
					<a href="#top"><span></span>&nbsp;</a>
				</p>
			</div><!--/mainRight-->

		@include('company._mainLeft', ['active' => 'companyContact'])

	</div>
</div>
<!--/main-->

@include('shares/footer')
