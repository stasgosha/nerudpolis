<?php $page_title = 'Цены'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="page-title-section" style="background-image: url(img/backgrounds/sand-bg.jpg);">
			<div class="container">
				<ul class="breadcrumbs light">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
				<div class="section-caption white text-only">
					<h1 class="sc-title">Цены</h1>
				</div>
			</div>
		</div>
		<div class="inner-page-wrapper">
			<section class="prices-section section-default-bottom-padding">
				<div class="container">
					<ul class="tabs-nav wrap">
						<li data-tab="#sand">Песок</li>
						<li data-tab="#rubble">Щебень</li>
						<li data-tab="#concrete">Бетон</li>
						<li data-tab="#soil">Чернозем</li>
						<li data-tab="#ground">Грунт</li>
						<li data-tab="#rent">Аренда спецтехники</li>
						<li data-tab="#snow-removal">Вывоз снега</li>
						<li data-tab="#ground-removal">Вывоз грунта</li>
					</ul>
					<div class="tabs-container">
						<div class="tab" id="sand">
							<div class="scrollable-container">
								<div class="scrollable-container-inner">
									<table class="table prices-table">
										<tr>
											<th>Наименование</th>
											<th>10 м<sup>3</sup></th>
											<th>15 м<sup>3</sup></th>
											<th>20 м<sup>3</sup></th>
											<th>от 100 м<sup>3</sup></th>
											<th>от 500 м<sup>3</sup></th>
											<th class="text-center">Рассчитать</th>
										</tr>
										<tr>
											<td>Песок карьерный</td>
											<td>от 3 610 р.</td>
											<td>от 2 880 р.</td>
											<td>от 2 150 р.</td>
											<td>от 1 890 р.</td>
											<td>от 1 850 р.</td>
											<td class="table-center">
												<button class="btn animate-on-hover">Заказать</button>
											</td>
										</tr>
										<tr>
											<td>Песок карьерный</td>
											<td>от 3 610 р.</td>
											<td>от 2 880 р.</td>
											<td>от 2 150 р.</td>
											<td>от 1 890 р.</td>
											<td>от 1 850 р.</td>
											<td class="table-center">
												<button class="btn animate-on-hover">Заказать</button>
											</td>
										</tr>
										<tr>
											<td>Песок карьерный</td>
											<td>от 3 610 р.</td>
											<td>от 2 880 р.</td>
											<td>от 2 150 р.</td>
											<td>от 1 890 р.</td>
											<td>от 1 850 р.</td>
											<td class="table-center">
												<button class="btn animate-on-hover">Заказать</button>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="tab" id="rubble"></div>
						<div class="tab" id="concrete"></div>
						<div class="tab" id="soil"></div>
						<div class="tab" id="ground"></div>
						<div class="tab" id="rent"></div>
						<div class="tab" id="snow-removal"></div>
						<div class="tab" id="ground-removal"></div>
					</div>
					<div class="info-block">
						<div class="block-icon">
							<i class="icon-warning"></i>
						</div>
						<div class="block-content">
							<p>Цены указаны в рублях с НДС 20% и доставкой. Внимание! Данный прайс-лист не является публичной офертой поскольку не содержит существенных условий договора поставки, а именно — конкретный адрес доставки, время и особые условия. Каждая доставка строительного песка по Москве и МО рассчитывается индивидуально, поэтому цены могут меняться как в большую, так и в меньшую сторону.</p>
						</div>
					</div>
				</div>
			</section>
			<?php include('page-parts/factors-section.inc.php'); ?>
			<?php include('page-parts/order-steps-section.inc.php'); ?>
			<?php include('page-parts/order-section.inc.php'); ?>
		</div>
	</div>
<?php include('footer.php'); ?>