<?php include('header.php'); ?>
<div class="container">
	<div class="page-title">Резиновая крошка</div>
	<div class="row product-box">
		<div class="col s12 m6 l5 offset-l1">
			<div class="product-img"><img src="images/content/products/kroshka.jpg" /></div>
		</div>
		<div class="col s12 m6 l5">
			<div class="product-info">
				<p class="product-desc">
					Современное покрытие изготовленное из мягкой резиновой крошки. Представляет собой цельное покрытие из резиновой крошки,которое невозможно оторвать от основания. Поглащает удары при падении.
				</p>
				<p class="color-thumbs"><span class="medium">Цвет:</span> <img src="images/colors/blue.png"/> <img src="images/colors/yellow.png"/></p>
				<p class="product-price"><span class="medium">Цена:</span> 300р. за 1 кг.</p>
				<button class="btn primary mediumwidth">узнать цену</button>
			</div>
		</div>
	</div>
</div>
<div class="sale-box">
	<div class="container">
		<div class="sale-box-title center-align">Скидка 30%</div>
		<div class="sale-box-text center-align">При заказе крупной партии от 30 кг скидка 30%<br/> на резиновую крошку</div>
	</div>
</div>
<div class="container">
	<div class="order-form-box">
		<form novalidate>
			<div class="box-title center-align">Заказать продукт</div>
			<div class="box-note-text center-align">Если вы хотите приобрести резиновуб крошку, оставте заявку в этой форме</div>
			<div class="row">
				<div class="col s12 m6 l10 center">
					<div class="col s12 m6 l5">
						<div class="field">
							<input type="text" id="name" required />
							<label for="name" class="textfield-placeholder">Ваше Имя</label>
							<span class="error-text error-required">Пожалуйста, введите ваше имя.</span>
						</div>
						<div class="field">
							<input type="tel" id="tel" required />
							<label for="tel" class="textfield-placeholder">Ваш телефон</label>
							<span class="error-text error-required">Пожалуйста, введите ваш номер.</span>
							<span class="error-text error-pattern">Номер телефона должен содержать 11 цифр</span>
						</div>
						<div class="field">
							<input type="email" id="email" required />
							<label for="email" class="textfield-placeholder">Ваш email</label>
							<span class="error-text error-required">Пожалуйста, введите ваш email.</span>
							<span class="error-text error-pattern">Email должен быть в формате ___@___.__</span>
						</div>
					</div>
					<div class="col s12 m6 l5">
						<div class="field">
							<textarea id="comment"></textarea>
							<label for="comment" class="textfield-placeholder">Опишите вашу задачу</label>
						</div>
					</div>
				</div>
			</div>
			<input type="submit" class="btn primary mediumwidth center" value="Отправить"/>
		</form>
	</div>
</div>
<div class="price-form-box bg darker">
	<div class="container">
		<div class="row">
			<div class="col s12 m11 l7 center">
				<div class="box-title center-align">Получить прайс&#8209;лист</div>
				<div class="box-note-text center-align">Если вы хотите узнать цену на продукцию, оставте свой контактный Email и мы пришлем вам прайс лист</div>
				<div class="clearfix">
					<div class="col s12 m8 l5 no-padding">
						<div class="field">
							<input type="email" id="price" />
							<label for="price" class="textfield-placeholder">Ваш email</label>
						</div>
					</div>
					<div class="col s12 m3 l2 no-padding right-align">
						<button class="btn primary mediumwidth">Отправить</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="relative-prod-box">
		<div class="box-title center-align">Сопутствующие товары</div>
		<div class="row">
			<div class="col s12 m6 l6">
				<div class="rel-product-item">
					<div class="product-img"><a class="img-link" href="#"><img src="images/content/products/kley.jpg"/></a></div>
					<div class="product-name center-align"><a href="#">Клей</a></div>
				</div>
			</div>
			<div class="col s12 m6 l6">
				<div class="rel-product-item">
					<div class="product-img"><a class="img-link" href="#"><img src="images/content/products/pigment.jpg"/></a></div>
					<div class="product-name center-align"><a href="#">Пигмент</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>