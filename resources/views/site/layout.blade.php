<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- saved from url=(0014)about:internet -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="_token" content="{!! csrf_token() !!}"/>

	<meta name="description" content="JobLeadChina 是一家专业的外籍人才招聘平台。企业能快速通过平台，发布、更新招聘信息，与求职者直接沟通。同时，平台上所有发布职位企业均是通过认证企业，大大提高外籍人才就业安全性。">
	<meta name="description" content="JobLeadChina is a recruitment platform in connecting job opportunities in China with foreign talents. Through JobLeadChina, enterprises can post jobs, evaluate resumes, communicate with candidates directly. All things become easy.">

	<meta name="robots" content="index,follow,noodp">
	<meta name="googlebot" content="index,follow,noodp" />
	<meta name="baiduspider" content="index,follow,noodp" />
	<meta name="theme-color" content="#694c9c">
	<meta name="subject" content="专业的外籍人才招聘网站,Post Job For Free">

	<meta name="baidu-site-verification" content="MMDWlmfM47" />
	<meta name="google-site-verification" content="TM68wCUPycoY1QY9IlBg-xcqUkcHo7PK4EqKdZOmMMs" />
	<meta name="baidu-site-verification" content="hQp6j4gwOh" />

	<link rel="shortcut icon" type="image/x-icon">
	<link rel="icon" type="image/x-icon">


	<title>JobLeadChina |@yield('page_title')| Find job in China | 招聘外籍人才, 招聘外国人, 人事代理 </title>

	<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
	<!-- polyfiller file to detect and load polyfills -->
	<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>


	<script>
		webshims.setOptions('waitReady', false);
		webshims.setOptions('forms-ext', {types: 'date'});
		webshims.polyfill('forms forms-ext');
	</script>

	<script>
		(function(){
			var bp = document.createElement('script');
			var curProtocol = window.location.protocol.split(':')[0];
			if (curProtocol === 'https'){
				bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
			}
			else{
				bp.src = 'http://push.zhanzhang.baidu.com/push.js';
			}
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(bp, s);
		})();
	</script>


	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "//hm.baidu.com/hm.js?c6c4b754d625a58bc03add45318067b6";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hm, s);
		})();
	</script>

	{!! Html::style('css/app.css') !!}
	{!! Html::script('js/app.js') !!}
	{!! Html::script('js/search_bar.js') !!}
	{!! Html::script('js/previewUploadFile.js') !!}
	{!! Html::script('js/upload_resume.js') !!}


</head>

<body>

<div class="content_container">

	<div class="navbar_container">
		@include('site.navbar')
	</div>

	<div class="jb_content">
		@yield('content')
	</div>

</div>

@include('site.footer')

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
{{--<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}

@yield('scripts')

</body>
</html>