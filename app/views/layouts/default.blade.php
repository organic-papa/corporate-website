<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>{{{ isset($title) ? $title : 'オーガニック、有機農業、無農薬野菜、九州野菜なら【オーガニックパパ】' }}}</title>
<meta name="description" content="{{{ isset($description) ? $description : '九州の無農薬野菜・有機野菜を全国各地にお届けするオーガニックパパです。また、有機農場をサポートするため、農園新設工事の受託も行っています。' }}}" />
<meta name="keywords" content="{{{ isset($keywords) ? $keywords: 'オーガニック,無農薬野菜,有機野菜,九州野菜,オーガニックパパ,有機農場,受託' }}}" />
<link href="/css/short.css" rel="stylesheet">
<link href="/common/css/reset.css" rel="stylesheet">
<link href="/common/css/common.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<meta http-equiv="Content-Type" content="text/html">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/common/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="/common/js/jquery.easie.js"></script>
<script type="text/javascript" src="/common/js/jquery.animate.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js"></script>

@include('shares.ga')
</head>

<body>

@section('content')
@show

@section('end_script')
@show

</body>
</html>
