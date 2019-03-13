		</div>
		<footer class="footer">
			<div class="container">
				<div class="footer-line footer-top">
					<div class="footer-block">
						<h5 class="footer-caption">Меню:</h5>
						<ul class="footer-nav">
							<li><a href="about.php">О компании</a></li>
							<li><a href="prices.php">Прайс-лист</a></li>
							<li><a href="#">Доставка и оплата</a></li>
							<li><a href="rent.php">Аренда спецтехники</a></li>
							<li><a href="contacts.php">Контакты</a></li>
						</ul>
					</div>
					<div class="footer-block">
						<h5 class="footer-caption">Песок:</h5>
						<ul class="footer-nav">
							<li><a href="product.php">Песок карьерный</a></li>
							<li><a href="#">Песок речной</a></li>
							<li><a href="#">Песок сеяный</a></li>
							<li><a href="#">Отсев песка</a></li>
							<li><a href="#">Пескогрунт</a></li>
						</ul>
					</div>
					<div class="footer-block">
						<h5 class="footer-caption">Щебень:</h5>
						<ul class="footer-nav">
							<li><a href="#">Щебень гранитный</a></li>
							<li><a href="#">Щебень гравийный</a></li>
							<li><a href="#">Щебень известковый</a></li>
							<li><a href="#">Щебень бетонный</a></li>
						</ul>
					</div>
					<div class="footer-block">
						<ul class="footer-nav bolder">
							<li><a href="#">Асфальтная крошка</a></li>
							<li><a href="#">Грунт</a></li>
							<li><a href="#">Чернозем</a></li>
							<li><a href="#">Бетон</a></li>
						</ul>
					</div>
					<div class="footer-block">
						<a href="index.php" class="logo-block">
							<div class="block-image">
								<img src="img/logo.png" alt="">
							</div>
						</a>
						<div class="footer-contacts">
							<p>ул. Скаковая, 3, стр. 12, оф. 12 <br>125040, Москва <br>e-mail: <a href="mailto:7638102@mail.ru">7638102@mail.ru</a></p>
						</div>
						<a href="tel:+74952011558" class="phone-link">+7 (495) <span>201-15-58</span></a>
					</div>
				</div>
				<div class="footer-line footer-bottom">
					<div class="footer-block">
						<p>Nerudpolis <?= date('Y'); ?></p>
					</div>
					<div class="footer-block text-center">
						<p>Вся продукция сертифицирована</p>
					</div>
					<div class="footer-block flex-right">
						<a href="https://webolution.ru" target="_blank" class="webolution">
							<img src="img/webolution.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<nav id="menu" class="panel">
		<div class="panel-inner">
			<ul class="panel-nav">
				<li><a href="about.php">О компании</a></li>
				<li><a href="#">Услуги</a></li>
				<li><a href="prices.php">Цены</a></li>
				<li><a href="contacts.php">Контакты</a></li>
			</ul>
			<ul class="panel-nav">
				<li><a href="category.php">Песок</a></li>
				<li><a href="#">Щебень</a></li>
				<li><a href="#">Бетон</a></li>
				<li><a href="#">Чернозем</a></li>
				<li><a href="#">Асфальтная крошка</a></li>
				<li><a href="rent.php">Аренда спецтехники</a></li>
			</ul>
			<div class="panel-content">
				<a href="tel:+84957638102" class="phone-link">8 (495) <span>763-81-02</span></a>
				<a href="mailto:mail@nerudpolis.ru">mail@nerudpolis.ru</a>
				<button class="btn btn-small" data-toggle="modal" data-target="#modal-call">
					<i class="icon-bell"></i>
					<span>Заказать звонок</span>
				</button>
			</div>
		</div>
	</nav>
	<div class="modal fade narrow" tabindex="-1" role="dialog" id="modal-call">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="icon icon-close"></i>
					</div>
					<p class="modal-caption">Обратный звонок</p>
					<form action="#" class="modal-form form">
						<div class="form-row">
							<div class="form-field">
								<input type="text" class="input-field" placeholder="Ваше имя*">
							</div>
						</div>
						<div class="form-row">
							<div class="form-field">
								<input type="tel" class="input-field" placeholder="Телефон*">
							</div>
						</div>
						<div class="modal-button">
							<button type="submit" class="btn fullwidth">Жду звонка!</button>
						</div>
						<div class="modal-footer">
							<p class="note">Нажимая на кнопку «Жду звонка», вы даете <br>согласие на обработку персональных данных</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade narrow" tabindex="-1" role="dialog" id="modal-request">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="icon icon-close"></i>
					</div>
					<p class="modal-caption">Оформить заявку</p>
					<form action="#" class="modal-form form">
						<div class="form-row">
							<div class="form-field">
								<input type="text" class="input-field" placeholder="Ваше имя*">
							</div>
						</div>
						<div class="form-row">
							<div class="form-field">
								<input type="tel" class="input-field" placeholder="Телефон*">
							</div>
						</div>
						<div class="form-row">
							<div class="form-field">
								<textarea class="textarea" placeholder="Когда вам перезвонить и что вас интересует?"></textarea>
							</div>
						</div>
						<div class="modal-button">
							<button type="submit" class="btn fullwidth">Жду звонка!</button>
						</div>
						<div class="modal-footer">
							<p class="note">Нажимая на кнопку «Жду звонка», вы даете <br>согласие на обработку персональных данных</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade narrow" tabindex="-1" role="dialog" id="modal-success">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="icon icon-close"></i>
					</div>
					<p class="modal-caption">заявка отправлена!</p>
					<div class="success">
						<div class="success-image">
							<img src="img/sended.png" alt="">
						</div>
						<div class="success-message">
							<p>Наш консультант скоро свяжется с Вами, ответит на все вопросы и поможет оформить заказ</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
	<script defer src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script defer src="js/bootstrap.bundle.min.js"></script>
	<script defer src="js/bigSlide.min.js"></script>
	<script defer src="js/scripts.js"></script>
	<?php // wp_footer(); ?>
</body>
</html>