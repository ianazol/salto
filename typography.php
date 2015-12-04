<?php include('header.php'); ?>
<div class="carousel fullwidth">
	<div class="carousel-inner">
		<div class="carousel-item" style="background-image: url('images/content/blog/detail-slide-1.jpg');"></div>
		<div class="carousel-item" style="background-image: url('images/content/blog/detail-slide-1.jpg');"></div>
	</div>
	<div class="carousel-controlls">
		<button class="prev"><svg class="icon"><use xlink:href="#arr"/></svg></button>
		<button class="next"><svg class="icon"><use xlink:href="#arr"/></svg></button>
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
	<div class="video-box">
		<iframe src="https://www.youtube.com/embed/ls8B3Y5OKhQ" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="row">
		<div class="col s12 m12 l9 center">
			<h1 class="center-align">Механизированная укладка</h1>
			<p>Производство и монтаж производится непосредственно на стадионе. Покрытие  укладывается механизированным способом, для обеспечения высокой скорости укладки без ущерба качеству. Полиуретановое связующее в сочетании с высокопрочным резиновым гранулятом образует стойкое соединение, улучшающее изностойкость покрытия.</p>
			<h2 class="center-align">Технология укладки покрытий из резиновой крошки</h2>
			<p><a href="#">Покрытия «Сальто»</a> предназначены для детских площадок. Мягкие и безопасные покрытия из резиновой либо каучуковой крошки уже стали стандартом в мире домостроения. Покрытие обладает самыми необходимыми свойствами для того, чтобы детям и их родителям было комфортно проводить время на детской площадке.</p>
			<div class="row">
				<div class="col s12 m6 l4">
					<h3>Срок экслопатации резиновых покрытий</h3>
					<p>Покрытия «Сальто» предназначены для детских площадок. Мягкие и безопасные покрытия из резиновой либо каучуковой крошки уже стали стандартом в мире домостроения.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 l4">
					<ul>
						<li>Покрытия «Сальто» предназначены для детских площадок.</li>
						<li>Полиуретановое связующее</li>
						<li>Краситель </li>
						<li>Праймер «Refeton 45»</li>
					</ul>
				</div>
				<div class="col s12 m6 l4">
					<ol>
						<li>Покрытия «Сальто» предназначены для детских площадок.</li>
						<li>Полиуретановое связующее</li>
						<li>Краситель </li>
						<li>Праймер «Refeton 45»</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<br/></br/></br>
</div>
<?php include('footer.php'); ?>