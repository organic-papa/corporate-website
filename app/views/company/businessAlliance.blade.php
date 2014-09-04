@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerCompany', 'h1' => 'オーガニックパパの業務提携のご案内を紹介します'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/company">企業情報</a> > 業務提携のご案内</p>
		</div>
		<div class="mainRight clearfix">
			<div class="productContents">
				<div class="companyIn">
					<h2>業務提携のご案内</h2>
					<h3>オーガニックは、日本の宝もの。必ず後世に遺そう！</h3>
						<p>現在、日本中で代々培われてきた優良な農地が後継者不足で耕作放棄されて久しくなります。これからは、さらに深刻です。日本の原風景である里山は、どこに向かっていくのでしょう。また、同様に醗酵文化も食習慣の変動に伴い、販売は著しく低迷し、伝承的技術は継承されず、多くの希少な発酵食品の製造元は、その幕を閉じようとしています。</p>
						<p>私たちオーガニックパパは、原材料からの本物志向を組み込み、商品力、販売力、管理力を強化し、貴重な伝統食を後世に遺すことに取り組み始めました。何としてでも遺したい一心で、経営譲渡をうけることもございます。有機農家と醗酵食品会社の固いパートナーシップが広がり、安定した経営がリレーできることを心より願っております。</p>
						<div class="btn02">
							<a href="/company/contact">業務提携のお問合わせはこちら</a>
						</div>
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

		@include('company._mainLeft', ['active' => 'companyBusinessAlliance'])

	</div>
</div>

<!--/main-->

@include('shares/footer')

@stop
