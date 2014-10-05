@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerCompany', 'h1' => 'オーガニックパパの会社概要を紹介します'])

<!--/main-->

<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/company">企業情報</a> > 会社概要</p>
		</div>
		<div class="mainRight clearfix">
			<div class="productContents">
				<div class="companyIn">
					<h2>会社概要</h2>
					<ul id="tab">
						<li class="select">オーガニックパパ</li>
						<li>グリーンハンド</li>
					</ul>
					<div class="content_wrap">
						<table>
							<tr>
								<td>会社名</td>
								<td>株式会社オーガニックパパ</td>
							</tr>
							<tr>
								<td>代表者</td>
								<td>代表取締役兼CEO　竹尾 昌大</td>
							</tr>
							<tr>
								<td>住　所</td>
								<td>〒810-0003　福岡県福岡市中央区春吉1-14-5</td>
							</tr>
							<tr>
								<td>電話番号</td>
								<td>092-737-7311</td>
							</tr>
							<tr>
								<td>F A X</td>
								<td>092-737-7322</td>
							</tr>
							<tr>
								<td>メール</td>
								<td>info@organic-papa.com</td>
							</tr>
							<tr>
								<td>facebook</td>
								<td><a href="https://www.facebook.com/organicpapa" target="_blank">https://www.facebook.com/organicpapa</a></td>
							</tr>
						</table>
					</div>
					<div class="content_wrap disnon">
						<table>
							<tr>
								<td>会社名</td>
								<td>グリーンハンド株式会社（農業生産法人）</td>
							</tr>
							<tr>
								<td>代表者</td>
								<td>代表取締役　八尋 健次</td>
							</tr>
							<tr>
								<td>住　所</td>
								<td>〒810-0003　福岡県福岡市中央区春吉1-14-5</td>
							</tr>
							<tr>
								<td>電話番号</td>
								<td>092-737-7311</td>
							</tr>
							<tr>
								<td>F A X</td>
								<td>092-737-7322</td>
							</tr>
							<tr>
								<td>メール</td>
								<td>info@organic-papa.com</td>
							</tr>
							<tr>
								<td>facebook</td>
								<td><a href="https://www.facebook.com/greenhandfarm" target="_blank">https://www.facebook.com/greenhandfarm</a></td>
							</tr>
						</table>
					</div>
					<img src="/images/dot.png" class="dot" height="8" width="708">
				</div>
			</div>
			<!--/subContents-->

			<div class="btnEc">
				<a href="/regular"><img src="/images/BTN_ec.png" width="663" height="101"></a>
			</div>
		</div><!--/mainRight-->

		@include('company._mainLeft', ['active' => 'companySummary'])

	</div>
</div>

<!--/main-->

@include('shares/footer')

@stop


@section('end_script')
<script type="text/javascript">
$(function() {
	$("#tab li").click(function() {
		var num = $("#tab li").index(this);
		$(".content_wrap").addClass('disnon');
		$(".content_wrap").eq(num).removeClass('disnon');
		$("#tab li").removeClass('select');
		$(this).addClass('select')
	});
});
</script>
@stop
