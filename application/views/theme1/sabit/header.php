<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

     <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#000000">
	<link rel="manifest" href="manifest.json">
	<title><?=$ayar['title']?></title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&subset=latin-ext" rel="stylesheet">
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	
	
	<?php 
		$js[] =base_url('assets/theme1/js/jquery.min.js');
		$j = css_js($js,'.js','v0.1');
		$css[] =base_url('assets/theme1/css/bootstrap.min.css');
		$css[] =base_url('assets/theme1/css/style.css');
		$c = css_js($css,'.css','v0.3');
	?>
	<link rel="stylesheet" href="<?=$c?>">
	<script src="<?=$j?>"></script>
</head>
<body>
<div id="container">
	<div class="container outer">
		<header id="header" class="navbar">
			<div class="row">
				<div class="col-md-3 col-xs-12">
					<div class="navbar-header">
						<button aria-controls="bs-navbar" aria-expanded="false" class="collapsed navbar-toggle" data-target="#bs-navbar" data-toggle="collapse" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a href="/" class="navbar-brand">
							<img src="<?=$ayar['logo']?>" />
						</a>
					</div>
				</div>
				<div class="col-md-9 text-right hidden-xs">
					<div style="margin: 9px 0">
					<?=$ayar['reklam']['ust']?>
					</div>
				</div>
			</div>
			<nav class="navbar-collapse collapse" id="bs-navbar">
				<ul class="nav navbar-nav">
					<li><a href="/" target='_self' class="">ANASAYFA</a></li>
					<li><a href="http://wlelexusbet.adsrv.eacdn.com/C.ashx?btag=a_5544b_1152c_&amp;affid=4075&amp;siteid=5544&amp;adid=1152&amp;c=" target='_blank' class="">SPOR BAHİSLERİ</a></li>
					<li><a href="http://wlelexusbet.adsrv.eacdn.com/C.ashx?btag=a_5544b_1152c_&amp;affid=4075&amp;siteid=5544&amp;adid=1152&amp;c=" target='_blank' class="">CANLI BAHİS</a></li>
					<li><a href="http://wlelexusbet.adsrv.eacdn.com/C.ashx?btag=a_5544b_1152c_&amp;affid=4075&amp;siteid=5544&amp;adid=1152&amp;c=" target='_blank' class="">CANLI CASINO</a></li>
					<li><a href="http://wlelexusbet.adsrv.eacdn.com/C.ashx?btag=a_5544b_1152c_&amp;affid=4075&amp;siteid=5544&amp;adid=1152&amp;c=" target='_blank' class="">CASINO</a></li>
					<li><a href="http://wlelexusbet.adsrv.eacdn.com/C.ashx?btag=a_5544b_1152c_&amp;affid=4075&amp;siteid=5544&amp;adid=1152&amp;c=" target='_blank' class="">POKER</a></li>
					<li><a href="http://wlelexusbet.adsrv.eacdn.com/C.ashx?btag=a_5544b_1152c_&amp;affid=4075&amp;siteid=5544&amp;adid=1152&amp;c=" target='_blank' class="">PROMOSYONLAR</a></li>
					<li><a href="/haberler" target="_self">HABERLER</a></li>
					<li class="video"><a href="/macOzetleri" target="_self">MAÇ ÖZETLERİ</a></li>
				</ul>
			</nav>
		</header>