<?php $page_title = 'О компании Nerudpolis'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="page-title-section">
			<div class="container">
				<ul class="breadcrumbs light">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
				<div class="section-caption white text-only">
					<h1 class="sc-title">О компании Nerudpolis</h1>
				</div>
			</div>
		</div>
		<div class="inner-page-wrapper">
			<?php include('page-parts/about-section.inc.php'); ?>
			<?php include('page-parts/our-partners-section.inc.php'); ?>
			<section class="how-we-are-work-section section-default-bottom-padding">
				<div class="container">
					<div class="section-inner">
						<div class="left">
							<div class="section-caption">
								<h3 class="sc-title">Как мы работаем?</h3>
							</div>
							<ul class="tabs-nav">
								<li data-tab="#sand-delivery">Доставка песка</li>
								<li data-tab="#rubble-loading">Погрузка щебня</li>
								<li data-tab="#pouring-concrete">Заливка бетона</li>
							</ul>
							<div class="tabs-container">
								<div class="tab" id="sand-delivery">
									<div class="video-component">
										<div class="video-preview">
											<img src="img/backgrounds/video-preview.jpg" alt="">
										</div>
										<div class="video-player">
											<iframe src=""></iframe>
										</div>
										<div class="video-play-btn">
											<i class="icon-play"></i>
										</div>
									</div>
								</div>
								<div class="tab" id="rubble-loading">
									<div class="video-component">
										<div class="video-preview">
											<img src="img/backgrounds/video-preview.jpg" alt="">
										</div>
										<div class="video-player">
											<iframe src=""></iframe>
										</div>
										<div class="video-play-btn">
											<i class="icon-play"></i>
										</div>
									</div>
								</div>
								<div class="tab" id="pouring-concrete">
									<div class="video-component">
										<div class="video-preview">
											<img src="img/backgrounds/video-preview.jpg" alt="">
										</div>
										<div class="video-player">
											<iframe src=""></iframe>
										</div>
										<div class="video-play-btn">
											<i class="icon-play"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="consultation-card">
								<div class="card-icon">
									<i class="icon-person-big"></i>
								</div>
								<p class="card-caption">Иван Иванов</p>
								<p class="card-subcaption">Продавец-консультант</p>
								<p class="card-text">Наш консультант с радостью ответит на все ваши вопросы и поможет оформить заказ</p>
								<div class="card-phone">
									<a href="tel:89652054699" class="phone-link dark">8 (965) <span>205-46-99</span></a>
								</div>
								<div class="card-buttons">
									<button class="btn fullwidth" data-toggle="modal" data-target="#modal-call">Заказать звонок</button>
									<a href="#" target="_blank" class="btn btn-light btn-dark fullwidth">Скачать прайс</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php include('page-parts/reviews-section.inc.php'); ?>
			<section class="requisites-section section-default-paddings">
				<div class="container">
					<div class="section-caption">
						<h3 class="sc-title">Реквизиты</h3>
					</div>
					<div class="cards-list columns-2 sm-columns-1">
						<div class="item">
							<div class="bordered-block tpg-typography">
								<p>Проблема существования космологической сингулярности является одной из наиболее серьёзных проблем физической космологии. Дело в том, что никакие наши сведения о том, что произошло после Большого взрыва, не могут дать нам никакой информации о том, что происходило до этого. Попытки решения проблемы существования этой сингулярности идут в нескольких направлениях</p>
							</div>
						</div>
						<div class="item">
							<div class="bordered-block tpg-typography">
								<p>Проблема существования космологической сингулярности является одной из наиболее серьёзных проблем физической космологии. Дело в том, что никакие наши сведения о том, что произошло после Большого взрыва, не могут дать нам никакой информации о том, что происходило до этого. Попытки решения проблемы существования этой сингулярности идут в нескольких направлениях</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php include('page-parts/our-clients-section.inc.php'); ?>
		</div>
	</div>
<?php include('footer.php'); ?>