<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - Nerudpolis</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="header-top">
					<div class="container">
						<div class="header-inner">
							<div class="header-block">
								<a href="index.php" class="logo-block">
									<div class="block-image">
										<img src="img/logo.png" alt="">
									</div>
									<div class="block-text">Нерудные материалы и аренда техники</div>
								</a>
							</div>
							<div class="header-block d-none d-md-block">
								<ul class="header-nav">
									<li><a href="about.php">О компании</a></li>
									<li><a href="#">Услуги</a></li>
									<li><a href="prices.php">Цены</a></li>
									<li><a href="contacts.php">Контакты</a></li>
								</ul>
							</div>
							<div class="header-block d-none d-sm-block">
								<div class="header-contacts-block">
									<div class="item left">
										<a href="tel:+84957638102" class="phone-link">8 (495) <span>763-81-02</span></a>
										<a href="mailto:mail@nerudpolis.ru">mail@nerudpolis.ru</a>
									</div>
									<div class="item right">
										<button class="btn btn-small" data-toggle="modal" data-target="#modal-call">
											<i class="icon-bell"></i>
											<span>Заказать звонок</span>
										</button>
										<p>Работаем круглосуточно 24/7</p>
									</div>
								</div>
							</div>
							<div class="header-block d-md-none">
								<div class="menu-opener">
									<div class="bars">
										<div class="bar"></div>
										<div class="bar"></div>
										<div class="bar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="top-nav-line d-none d-md-block">
					<div class="container">
						<ul class="top-nav">
							<li><a href="category.php">Песок</a></li>
							<li><a href="#">Щебень</a></li>
							<li><a href="#">Бетон</a></li>
							<li><a href="#">Чернозем</a></li>
							<li><a href="#">Асфальтная крошка</a></li>
							<li><a href="rent.php">Аренда спецтехники</a></li>
						</ul>
					</div>
				</div>
			</header>