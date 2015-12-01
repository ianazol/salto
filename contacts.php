<?php include('header.php'); ?>
<div class="container">
	<div class="page-title">Контакты</div>
	<div class="row contact-form-box">
		<div class="col s12 m8 l8 center">
			<div class="field">
				<input type="text" id="name" />
				<label for="name" class="textfield-placeholder">Ваше Имя</label>
			</div>
			<div class="field">
				<input type="email" id="email" />
				<label for="email" class="textfield-placeholder">Ваш email</label>
			</div>
			<div class="field">
				<textarea id="comment"></textarea>
				<label for="comment" class="textfield-placeholder">Напишите ваш вопрос</label>
			</div>
		</div>
		<button class="btn primary mediumwidth center">Отправить</button>
	</div>
	<div class="row contact-info-box">
		<div class="col s12 m2 l2 cont-email">
			<div class="item-title medium">E mail</div>
			<div class="color-text text-input small-text"><a href="mailto:salto@salto.pro">salto@salto.pro</a></div>
		</div>
		<div class="col s12 m3 l2 cont-tel">
			<div class="item-title medium">Телефон</div>
			<div class="color-text text-input small-text"><a href="telto:+78003000600">8&nbsp;800&nbsp;3000&nbsp;600</a></div>
		</div>
		<div class="col s12 m4 l5 cont-address">
			<div class="item-title medium">Адрес</div>
			<div class="color-text text-input small-text">Тюмень, ул. Республики</div>
		</div>
		<div class="col s12 m3 l3 social-box">
			<ul class="nostyle horizontal soc-list">
				<li class="soc-item"><a href="#" class="soc-link fb"><svg class="icon"><use xlink:href="#fb"/></svg></a></li>
				<li class="soc-item"><a href="#" class="soc-link tw"><svg class="icon"><use xlink:href="#tw"/></svg></a></li>
				<li class="soc-item"><a href="#" class="soc-link vk"><svg class="icon"><use xlink:href="#vk"/></svg></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="map-box" id="cont-map"></div>
<?php include('footer.php'); ?>