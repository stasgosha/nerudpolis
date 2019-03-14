<?php $page_title = 'Главная'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="first-screen-section">
			<div class="container">
				<div class="section-inner">
					<h1 class="fss-caption">Доставим <br>нерудные материалы <br><span>точно в срок</span></h1>
					<div class="fss-features-list">
						<div class="item">
							<div class="item-icon">
								<i class="icon-road"></i>
							</div>
							<div class="item-text">Есть пропуска: <br>ТТК, СК, МКАД</div>
						</div>
						<div class="item">
							<div class="item-icon">
								<i class="icon-truck"></i>
							</div>
							<div class="item-text">Собственный автопарк cпецтехники</div>
						</div>
						<div class="item">
							<div class="item-icon">
								<i class="icon-hours-24"></i>
							</div>
							<div class="item-text">Доставка 24/7 по <br>Москве и области</div>
						</div>
						<div class="item">
							<div class="item-icon">
								<i class="icon-square-10"></i>
							</div>
							<div class="item-text">Минимальный <br>объём заказа</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="materials-section section-default-paddings">
			<div class="container">
				<div class="section-caption">
					<h3 class="sc-title">Нерудные материалы</h3>
				</div>
				<div class="cards-list columns-3 sm-columns-2 xs-columns-1">
					<div class="item">
						<div class="material-card">
							<div class="card-circle">
								<div class="card-image">
									<img src="img/materials/sand.jpg" alt="">
								</div>
								<div class="card-text">
									<p>от <span>635</span> руб</p>
								</div>
							</div>
							<a href="category.php" class="card-name">Песок</a>
						</div>
					</div>
					<div class="item">
						<div class="material-card">
							<div class="card-circle">
								<div class="card-image">
									<img src="img/materials/rubble.jpg" alt="">
								</div>
								<div class="card-text">
									<p>от <span>635</span> руб</p>
								</div>
							</div>
							<a href="category.php" class="card-name">Щебень</a>
						</div>
					</div>
					<div class="item">
						<div class="material-card">
							<div class="card-circle">
								<div class="card-image">
									<img src="img/materials/concrete.jpg" alt="">
								</div>
								<div class="card-text">
									<p>от <span>635</span> руб</p>
								</div>
							</div>
							<a href="category.php" class="card-name">Бетон</a>
						</div>
					</div>
					<div class="item">
						<div class="material-card">
							<div class="card-circle">
								<div class="card-image">
									<img src="img/materials/soil.jpg" alt="">
								</div>
								<div class="card-text">
									<p>от <span>635</span> руб</p>
								</div>
							</div>
							<a href="category.php" class="card-name">Чернозем</a>
						</div>
					</div>
					<div class="item">
						<div class="material-card">
							<div class="card-circle">
								<div class="card-image">
									<img src="img/materials/asphalt-crumb.jpg" alt="">
								</div>
								<div class="card-text">
									<p>от <span>635</span> руб</p>
								</div>
							</div>
							<a href="category.php" class="card-name">Асфальтная крошка</a>
						</div>
					</div>
					<div class="item">
						<div class="material-card">
							<div class="card-circle">
								<div class="card-image">
									<img src="img/materials/rent.jpg" alt="">
								</div>
								<div class="card-text">
									<p>от <span>635</span> руб</p>
								</div>
							</div>
							<a href="rent.php" class="card-name">Аренда спецтехники</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('page-parts/about-section.inc.php'); ?>
		<?php include('page-parts/our-partners-section.inc.php'); ?>
		<?php include('page-parts/car-park-section.inc.php'); ?>
		<?php include('page-parts/reviews-section.inc.php'); ?>
		<?php include('page-parts/how-we-are-work-section.inc.php'); ?>
		<?php include('page-parts/our-clients-section.inc.php'); ?>
		<section class="map-section">
			<div class="map"></div>
			<div class="container">
				<div class="contacts-card">
					<h4 class="card-caption">Контакты</h4>
					<div class="card-text">
						<p>125040, Москва, <br>ул. Пушкина, 3, стр. 12, оф. 12 <br><a href="mailto:mail@nerudpolis.ru">mail@nerudpolis.ru</a></p>
					</div>
					<div class="card-phone">
						<a href="tel:+74952011558" class="phone-link dark">+7 (495) <span>201-15-58</span></a>
					</div>
					<button class="btn fullwidth" data-toggle="modal" data-target="#modal-call">Заказать звонок</button>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>