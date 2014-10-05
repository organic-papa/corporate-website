@extends('layouts.default')

@section('content')

@include('shares.header', ['active' => 'headerPost', 'h1' => 'おいしいお野菜のレシピはこちら'])

<!--/main-->
<div id="main">
	<div class="mainIn clearfix">
		<div class="pan">
			<p><a href="/">HOME</a> > <a href="/post">お届けできるお野菜</a> > おいしいレシピ</p>
		</div>
		<div class="mainRight clearfix">
			<div class="productContents">
				<h2>おいしいレシピ</h2>

				@foreach ($recipes as $recipe)
				<div class="recipeIn">
					<h3 class="recipeTitle"><a href="/post/recipe/{{{ $recipe->id}}}">{{{ $recipe->name }}}</a></h3>
					<p class="day">{{{ $recipe->date }}}<p>
					<div class="recipe01 clearfix">
						<div class="recipeInfoLeft">
							<img src="{{{ $recipe->photo }}}">
						</div>
						<div class="recipeInfoRight">
							<p class="material">材料</p>
							<p>
							@foreach ($recipe->material as $material)
								★{{{ $material }}}<br />
							@endforeach
							</p>
						</div>
					</div>

					<h3 class="howToMake">作り方</h3>
					<div class="howToMakeList">
						<?php $index = 1; ?>
						@foreach ($recipe->how_to_make as $how_to_make)
							<p>［{{{ $index }}}］{{{ $how_to_make }}}</p>
							<?php $index++; ?>
						@endforeach
						@if ($recipe->note)
						<p>{{{ $recipe->note }}}</p>
						@endif
					</div>
				</div>
				<img src="/images/dot.png" class="dot" height="8" width="708">
				@endforeach

			</div>

			<div class="btnEc"><a href="/regular"><img src="/images/BTN_ec.png" width="663" height="101"></a></div>
				<p id="back-top">
					<a href="#top"><span></span>&nbsp;</a>
				</p>
			</div><!--/mainRight-->

			<div class="mainLeft">
				<div class="blogNav">
					<h3>最近の投稿</h3>
					<ul class="archive">
						@foreach ($recipes as $recipe)
							<li><a href="/post/recipe/{{{ $recipe->id }}}">{{{ $recipe->name }}}</a></li>
						@endforeach
					</ul>
				</div>
				<!--/mainLeft-->
			</div>
		</div>

@include('shares/footer')

@stop
