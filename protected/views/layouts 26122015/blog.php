<html>
	<head>
		
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Vfy.me is an Art And Tech  Studio dedicated to incorporate The Latest  Visual Inventions in form of services for Architects And Designers, Our Team is a Mix Of Architects, Designer, 3D Artists and Developers, Our Business is founded in  Beirut - Lebanon And operates from Bandung - Indonesia ">

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
		
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/slides/jquery.slides.min.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog.css" type="text/css" />
		
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/modernizr.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jcarousel.transitions.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jcarousel.transitions.css">
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jquery.jcarousel.min.js"></script>

		<!-- slider of pik -->
		<!--
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.touchwipe.min.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/styles/bottom.css" type="text/css" />
		<!-- end of slider -->

		
        
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/slipry/dist/slippry.css" type="text/css" />

		<!-- news -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/news/jquery.smartmarquee.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/news/jquery.smartmarquee.css" type="text/css" />

		
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor-simple/ckeditor.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/adapter.js"></script>
		
		<!-- responsive slider -->
		<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/respon/responsiveslides.css">
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/respon/responsiveslides.js"></script>
		 -->
		<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog-mobile400.css" type="text/css" media="only screen and (max-width: 399px) and (min-width: 10px)" /> -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog-mobile.css" type="text/css" media="only screen and (max-width: 768px) and (min-width: 10px)" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog-tab.css" type="text/css" media="only screen and (max-width: 960px) and (min-width: 768px)" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog-computer.css" type="text/css" media="only screen and (min-width: 960px) and (max-width: 10000px)" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/left-menu.css" type="text/css" />

	</head>
	<style>
	
	</style>
	
	

	<body>

	<div id="menu-form">

	</div>

	<header>
		<div id="header-center">
			<div id="menu-icon"></div>
			<div id="menu">
				<ul>
					<li><a href="<?php echo Yii::app()->createUrl('site/index') ?>">HOME</a></li>
					<li><a href="#">|</a></li>
					<li><a style="color:red" href="#">ALL</a></li>
					<li><a href="#">DESIGN</a></li>
					<li><a href="#">BUSINESS</a></li>
					<li ><a class="active" href="#" >DIGITIZATION</a></li>
				</ul>
			</div>
		</div>
		<a class="logo" href="<?php echo Yii::app()->createUrl('blog/index') ?>">
			<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png">
		</a>

	</header>

	<div id="wrapper">
		<?php  echo $content;?>
	</div>

	</body>
	<html>	