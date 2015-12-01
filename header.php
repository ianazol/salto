<!DOCTYPE html>
<html>
<head>
	<title>Сальто</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,300,300italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<!--link rel="shortcut icon" href="favicon.ico" type="image/x-icon"-->
	<!--link rel="shortcut icon" href="favicon.png" type="image/png"-->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="js/modernizr-custom.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/angular.js"></script>
	<script src="js/content-app.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/svg-lib.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="template_styles.css" />
</head>
<body>
<div id="svg-placeholder" class="hide"></div>
<div class="layout">
<div class="page">
	<div class="header-wrapper">
		<div class="container header">
			<div class="menu-box">
				<button class="btn-menu btn btn-icon">
					<svg class="icon"><use xlink:href="#menu"/></svg>
					<span class="hide-on-med-and-down btn-text">Меню</span>
				</button>
				<ul class="h-small-menu hide-on-med-and-down">
					<li class="h-small-menu-item"><a href="#" class="h-small-menu-link">Документы</a></li>
					<li class="h-small-menu-item"><a href="#" class="h-small-menu-link red">Прайс-лист</a></li>
				</ul>
			</div>
			<div class="logo-box">
				<a class="img-link logo" href="home.php"><svg class="icon"><use xlink:href="#logo"/></svg></a>
			</div>
			<div class="geo-box hide-on-med-and-down">
				Тюмень
			</div>
			<div class="phone-box">
				<a href="callto:+78003000600" class="nostyle phone-link">8&nbsp;800&nbsp;3000&nbsp;600</a>
			</div>
			<div class="search-box">
				<button class="search-btn btn btn-icon right"><svg class="icon"><use xlink:href="#search"/></svg></button>
				<div class="search-field-box">
					<input type="text" class="search inputtext" id="h-search" />
					<label for="h-search" class="textfield-placeholder">Поиск</label>
				</div>
			</div>
			<div class="btn-box hide-on-small-only">
				<button class="btn">оставить заявку</button>
			</div>
		</div>
	</div>
	<div class="workarea-wrapper">
		<div class="workarea">