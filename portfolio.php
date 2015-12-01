<?php include('header.php'); ?>
<div class="container">
	<div class="page-title">Портфолио</div>
	<div class="row portfolio">
		<div class="filter col s12 m12 l10 center">
			<div class="select-box hide-on-med-and-up">
				<select id="portfolio-sel">
					<option selected value="v0">Все</option>
					<option value="v1">Детские площадки</option>
					<option value="v2">Спортивные площадки</option>
					<option value="v3">Стадионы</option>
					<option value="v4">Загородные дома</option>
				</select>
				<div class="triangle"></div>
			</div>
			<div class="select-synh hide-on-small-only" data-select="portfolio-sel">
				<ul class="filter-list">
					<li>
						<input type="radio" checked value="v0" name="portfolio-rad" id="portfolio-rad-v0"/>
						<label for="portfolio-rad-v0">Все</label>
					</li>
					<li class="divider"></li>
					<li>
						<input type="radio" value="v1" name="portfolio-rad" id="portfolio-rad-v1"/>
						<label for="portfolio-rad-v1">Детские площадки</label>
					</li>
					<li class="divider"></li>
					<li>
						<input type="radio" value="v2" name="portfolio-rad" id="portfolio-rad-v2"/>
						<label for="portfolio-rad-v2">Спортивные площадки</label>
					</li>
					<li class="divider"></li>
					<li>
						<input type="radio" value="v3" name="portfolio-rad" id="portfolio-rad-v3"/>
						<label for="portfolio-rad-v3">Стадионы</label>
					</li>
					<li class="divider"></li>
					<li>
						<input type="radio" value="v4" name="portfolio-rad" id="portfolio-rad-v4"/>
						<label for="portfolio-rad-v4">Загородные дома</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="portfolio-list col s12 m12 l9 center no-padding clearfix">
			<div class="col s12 m4 l3">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-1.jpg');">
					<a href="#" class="item-title">Загородный дом в Москве</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-2.jpg');">
					<a href="#" class="item-title">Детская площадка в загородном доме</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-3.jpg');">
					<a href="#" class="item-title">Спортивная площадка</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-4.jpg');">
					<a href="#" class="item-title">Загородный дом</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-5.jpg');">
					<a href="#" class="item-title">Загородный дом</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-6.jpg');">
					<a href="#" class="item-title">Спортивная площадка</a>
				</div>
			</div>
			<div class="col s12 m4 l3 hide-on-small-only">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-7.jpg');">
					<a href="#" class="item-title">Детская площадка</a>
				</div>
			</div>
			<div class="col s12 m4 l3 hide-on-small-only">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-8.jpg');">
					<a href="#" class="item-title">Детская площадка</a>
				</div>
			</div>
			<div class="col s12 m4 l3 hide-on-small-only">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-9.jpg');">
					<a href="#" class="item-title">Спортивная площадка</a>
				</div>
			</div>
			<div class="col s12 m4 l3 hide-on-small-only">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-10.jpg');">
					<a href="#" class="item-title">Спортивная площадка</a>
				</div>
			</div>
			<div class="col s12 m4 l3 hide-on-small-only">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-11.jpg');">
					<a href="#" class="item-title">Детская площадка</a>
				</div>
			</div>
			<div class="col s12 m4 l3 hide-on-small-only">
				<div class="portfolio-item" style="background-image:url('images/content/portfolio/case-12.jpg');">
					<a href="#" class="item-title">Детская площадка</a>
				</div>
			</div>
		</div>
		<div class="col s12 hide-on-med-and-up center"><button class="btn primary fullwidth">посмотреть еще</button></div>
	</div>
<?php include('footer.php'); ?>