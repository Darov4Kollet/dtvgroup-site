<?php

file_get_contents('https://dtv.bitrix24.kz/pub/form.php?view=frame&form_id=12&widget_user_lang=ru&sec=6o4lwo&r=1603367246284', false, stream_context_create([
		'http' => [
			'method' => 'POST',
			'header' => 'Content-Type: application/x-www-form-urlencoded',
			'content' => http_build_query([
				'CONTACT_NAME' => $_POST['CONTACT_NAME'],
				'CONTACT_PHONE' => $_POST['CONTACT_PHONE'],
				'CONTACT_EMAIL' => $_POST['CONTACT_EMAIL']
			])
		]
	]));
?>

<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="refresh" content="3;URL=index.html">
		<title>DTV Group - Рекламное агентство полного цикла</title>
		<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/app.css">
	</head>
	<body>
		<noscript class="noscript">Для полной функциональности этого сайта необходимо включить JavaScript. Вот <a href="https://enable-javascript.com/ru/">инструкции, как включить JavaScript в вашем браузере</a>.</noscript>
		<!-- begin: app -->
		<div id="app">
			<!-- begin: navbar -->
			<div class="navbar">
				<a href="index.html" class="navbar__logo">
					<img src="images/logo.png" alt="" class="navbar__logo-img">
				</a>
				<div class="navbar__burger">
					<div class="navbar__burger-line"></div>
					<div class="navbar__burger-line"></div>
					<div class="navbar__burger-line"></div>
				</div>
			</div>
			<!-- end: navbar -->
			<!-- begin: info -->
			<div class="info is-page">
				<div class="info__name">Вы успешно оставили заявку!</div>
				<div class="info__desc">Вы успешно оставили заявку!<br>Наши менеджеры скоро свяжутся с Вами!</div>
			</div>
			<!-- end: info -->
			<!-- begin: order -->
			<div class="order">
				<form method="post" action="https://dtv.bitrix24.kz/pub/form.php?view=frame&form_id=12&widget_user_lang=ru&sec=6o4lwo&r=1603367246284" class="order__content">
					<input type="text" class="order__control" placeholder="Ваше имя..." name="CONTACT_NAME">
					<!-- <input type="text" class="order__control" placeholder="Ваш телефон..." name="CONTACT_PHONE"> -->
					<input type="text" class="order__control" placeholder="Ваш E-Mail..." name="CONTACT_EMAIL">
					<button class="order__button_block" type="submit">Оставить заявку</button>
				</form>
				<div class="order__trigger">
					<div class="order__trigger-desc">Я согласен на обработку моих персональных данных.</div>
				</div>
			</div>
			<!-- end: order -->
			<!-- begin: footer -->
			<div class="footer">
				<div class="footer__container">
					<div class="footer__mark">
						<a href="index.html" class="footer__logo">
							<img src="images/logo.png" alt="" class="footer__logo-img">
						</a>
						<div class="footer__copyright">© Все права защищены. <a href="#">Пользовательское соглашение</a>.</div>
					</div>
					<div class="footer__contacts">
						<div class="footer__contact is-email">info@example.com</div>
						<div class="footer__contact is-phone">+7 771 206 5290</div>
						<div class="footer__contact is-address">Адрес: г. Алматы, ул. Аль-Фараби 53В (1 этаж)</div>
					</div>
				</div>
			</div>
			<!-- end: footer -->
			<!-- begin: menu -->
			<div class="menu">
				<div class="menu__items">
					<a href="#" class="menu__item">О нас</a>
					<a href="#" class="menu__item">Услуги</a>
					<a href="#" class="menu__item">Контакты</a>
				</div>
				<div class="menu__close">
					<div class="menu__close-line"></div>
					<div class="menu__close-line"></div>
				</div>
			</div>
			<!-- end: menu -->
		</div>
		<!-- end: app -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>