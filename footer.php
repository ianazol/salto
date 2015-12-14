		</div> <!-- /.workarea -->
	</div><!-- /.workarea-wrapper -->
	<div class="footer-wrapper">
		<div class="footer container">
			<div class="copy-box">
				&copy; 2015 Salto
			</div>
			<div class="dev-box right-align">
				Разработка сайта <a href="http://legacystudio.ru" target="_blank">Legacy</a>
			</div>
		</div>
	</div>
</div> <!-- /.page -->
<div class="modal-dark-bg dark-bg"></div>
<div class="modal big-modal" id="order-form">
	<button class="btn btn-icon btn-close btn-close-modal"><svg class="icon"><use xlink:href="#cross"/></svg></button>
	<div class="modal-inner">
		<div class="order-form-box">
			<form novalidate>
				<div class="box-title center-align">Оставить заявку</div>
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
								<textarea id="comment" required></textarea>
								<label for="comment" class="textfield-placeholder">Опишите вашу задачу</label>
								<span class="error-text error-required">Пожалуйста, опишите вашу задачу.</span>
							</div>
						</div>
					</div>
				</div>
				<input type="submit" class="btn primary mediumwidth center" value="Отправить"/>
				<!--button class="btn primary mediumwidth center">Отправить</button-->
			</form>
		</div>
	</div>
</div>
<!-- ответы форм -->
<div class="modal small-modal" id="success-form">
	<button class="btn btn-icon btn-close btn-close-modal"><svg class="icon"><use xlink:href="#cross"/></svg></button>
	<div class="modal-inner">
		<div class="modal-title center-align">Ваша заявка успешно отправлена!</div>
		<button class="btn primary mediumwidth center btn-close-modal">Назад</button>
	</div>
</div>
<div class="modal small-modal" id="error-form">
	<button class="btn btn-icon btn-close btn-close-modal"><svg class="icon"><use xlink:href="#cross"/></svg></button>
	<div class="modal-inner">
		<div class="modal-title center-align">Извините, не удалось отправить!</div>
		<div class="modal-text center-align">Повторите попытку позже.</div>
		<button class="btn primary mediumwidth center btn-close-modal">Назад</button>
	</div>
</div>
<!-- /ответы форм -->
</div> <!-- /.layout -->
</body>
</html>