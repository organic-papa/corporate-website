@extends('layouts.default')
<?php $title = '農園づくり | 誰でもできる有機農業なら【オーガニックパパ】' ?>
<?php $description = '「簡単で、快適で、安全な」作業で「経験や知識や勘」に頼らない、誰でもできる有機農業をコンセプトに、オーガニックパパは農園づくりをしています。九州野菜をメインとしたオーガニック野菜といえばオーガニックパパへ。'; ?>
<?php $keywords = 'オーガニック,無農薬野菜,有機農業,農園づくり'; ?>

@section('content')

@include('shares.header', ['active' => 'headerFarm', 'h1' => '誰でもできる有機農業の農園づくりコンセプト'])

<!--/main-->

<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/formmer">農園づくり</a> > 農園づくりのコンセプト</p>
		</div>
		<div class="mainRight clearfix">
			<div class="productContents">
				<h2> 農園づくりのコンセプト</h2>
				<img src="/images/product.jpg">
				<div class="formmerIn">
					<h3>Ecosystem compliance　〜生態系遵守〜</h3>
					<p>エコシステム全体が、高度に安定するしくみのサホートとなる間接的な働きかけを、圃場のエコシステムの中から見いだし、それを遵守し、ヒトはそのエコシステムの一部であるというスタンスで、進化的、継続的に働きかけることを目指します。その際、できるだけ圃場付近(半径20キロ圏内)で、無料もしくは安価に手に入る、人の生活構造から副次的に産出される余剰有機物や、その残さを、コンセプトの範囲内で積極的に活用していきます。</p>
					<h3>誰でもできる有機農業</h3>
					<img src="/images/organic_start.jpg" class="ArticlePhoto">
					<p>一般的には「きつい・きたない・きけん」というイメージで受け止められがちな農作業。<br />
そして「経験・知識・勘」にたよることの多い、標準化が難しいお野菜の有機栽培。<br />

私達は、これがもし、できるだけ「簡単で、快適で、安全な」作業で「経験や知識や勘」にたよらなくても「美しく、立派で、おいしいお野菜」の栽培が可能なら、きっと、もっとたくさんの方が「農業を職業にしてみようか」と検討するようになったり、すでに営農されてる方の日々の負担が、大幅に軽減されることにつながるのではないかと考えてきました。<br /><br />

そんな時間の中で、私達なりではありますが、できるだけ「簡単で、快適で、安全な」作業で「経験や知識や勘」にたよらなくても、美しく、立派で、おいしい農業スタイルが、できあがってきました。<br /><br />

「誰でもできる有機農業」<br /><br />

これからも、ずっと追い求めていきます。
</p>
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

		@include('farm._mainLeft', ['active' => 'farmProduct'])

	</div>
</div>
<!--/main-->

@include('shares/footer')

@stop
