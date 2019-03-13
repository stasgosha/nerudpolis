<?php $page_title = 'Попапы'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="page-title-section">
			<div class="container">
				<ul class="breadcrumbs light">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
				<div class="section-caption white text-only">
					<h1 class="sc-title">Попапы</h1>
				</div>
			</div>
		</div>
		<div class="inner-page-wrapper">
			<section class="section-default-bottom-padding">
				<div class="container">
					<button class="btn" data-toggle="modal" data-target="#modal-call">Обратный звонок</button>    
					<button class="btn" data-toggle="modal" data-target="#modal-request">Оформить заявку</button>    
					<button class="btn" data-toggle="modal" data-target="#modal-success">заявка отправлена!</button>
				</div>
			</section>
		</div>
	</div>
<?php include('footer.php'); ?>