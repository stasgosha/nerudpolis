<?php $page_title = 'Контакты'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="page-title-section no-margin">
			<div class="container">
				<ul class="breadcrumbs light">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
				<div class="section-caption white text-only">
					<h1 class="sc-title">Контакты</h1>
				</div>
			</div>
		</div>
		<div class="inner-page-wrapper">
			<section class="map-section map-2-points">
				<div class="map"></div>
				<div class="container">
					<div class="contacts-card">
						<h4 class="card-caption">Контакты</h4>
						<div class="card-text">
							<p class="with-line">125040, Москва, <br>ул. Пушкина, 3, стр. 12, оф. 12</p>
							<p class="with-line">125040, Москва, <br>ул. Пушкина, 3, стр. 12, оф. 12</p>
						</div>
						<div class="card-phone">
							<a href="tel:+74952011558" class="phone-link dark">+7 (495) <span>201-15-58</span></a>
							<a href="mailto:mail@nerudpolis.ru" class="card-email">mail@nerudpolis.ru</a>
						</div>
						<button class="btn fullwidth" data-toggle="modal" data-target="#modal-call">Заказать звонок</button>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php include('footer.php'); ?>