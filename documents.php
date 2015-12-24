<?php include('header.php'); ?>
<div class="container">
	<div class="row documents">
		<div class="filter col s12 m12 l10 center">
			<div class="select-box hide-on-med-and-up">
				<select id="documents-sel">
					<option selected value="v0">Документы</option>
					<option value="v1">Лицензии</option>
					<option value="v2">Благодарности</option>
					<option value="v3">Награды</option>
				</select>
				<div class="triangle"></div>
			</div>
			<div class="select-synh hide-on-small-only" data-select="documents-sel">
				<ul class="filter-list">
					<li>
						<input type="radio" checked value="v0" name="documents-rad" id="documents-rad-v0"/>
						<label for="documents-rad-v0">Документы</label>
					</li>
					<li class="divider"></li>
					<li>
						<input type="radio" value="v1" name="documents-rad" id="documents-rad-v1"/>
						<label for="documents-rad-v1">Лицензии</label>
					</li>
					<li class="divider"></li>
					<li>
						<input type="radio" value="v2" name="documents-rad" id="documents-rad-v2"/>
						<label for="documents-rad-v2">Благодарности</label>
					</li>
					<li class="divider"></li>
					<li>
						<input type="radio" value="v3" name="documents-rad" id="documents-rad-v3"/>
						<label for="documents-rad-v3">Награды</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="documents-list col s12 m12 l9 center no-padding clearfix">
			<div class="col s12 m4 l3">
				<div class="document-item bordered-box yellow">
					<a href="#.pdf" class="item-link" target="_blank">
						<div class="item-icon"><svg class="icon"><use xlink:href="#pdf"/></svg></div>
						<div class="item-name">Технические нормы безопасности при укладке</div>
						<div class="hover-icon"><svg class="icon"><use xlink:href="#download"/></svg></div>
					</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="document-item bordered-box blue">
					<a href="#.doc" class="item-link" target="_blank">
						<div class="item-icon"><svg class="icon"><use xlink:href="#doc"/></svg></div>
						<div class="item-name">Требования к основанию</div>
						<div class="hover-icon"><svg class="icon"><use xlink:href="#download"/></svg></div>
					</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="document-item bordered-box green">
					<a href="#.docx" class="item-link" target="_blank">
						<div class="item-icon"><svg class="icon"><use xlink:href="#docx"/></svg></div>
						<div class="item-name">Благодарности</div>
						<div class="hover-icon"><svg class="icon"><use xlink:href="#download"/></svg></div>
					</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="document-item bordered-box red">
					<a href="#.xls" class="item-link" target="_blank">
						<div class="item-icon"><svg class="icon"><use xlink:href="#xls"/></svg></div>
						<div class="item-name">Технические нормы безопасности при укладке</div>
						<div class="hover-icon"><svg class="icon"><use xlink:href="#download"/></svg></div>
					</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="document-item bordered-box red">
					<a href="#.xlsx" class="item-link" target="_blank">
						<div class="item-icon"><svg class="icon"><use xlink:href="#xlsx"/></svg></div>
						<div class="item-name">Технические нормы безопасности при укладке</div>
						<div class="hover-icon"><svg class="icon"><use xlink:href="#download"/></svg></div>
					</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="document-item bordered-box violet">
					<a href="#.ppt" class="item-link" target="_blank">
						<div class="item-icon"><svg class="icon"><use xlink:href="#ppt"/></svg></div>
						<div class="item-name">Награды</div>
						<div class="hover-icon"><svg class="icon"><use xlink:href="#download"/></svg></div>
					</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="document-item bordered-box violet">
					<a href="#.pptx" class="item-link" target="_blank">
						<div class="item-icon"><svg class="icon"><use xlink:href="#pptx"/></svg></div>
						<div class="item-name">Награды</div>
						<div class="hover-icon"><svg class="icon"><use xlink:href="#download"/></svg></div>
					</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="document-item bordered-box violet">
					<a href="#.zip" class="item-link" target="_blank">
						<div class="item-icon"><svg class="icon"><use xlink:href="#zip"/></svg></div>
						<div class="item-name">Награды</div>
						<div class="hover-icon"><svg class="icon"><use xlink:href="#download"/></svg></div>
					</a>
				</div>
			</div>
			<div class="col s12 m4 l3">
				<div class="document-item bordered-box violet">
					<a href="#.rar" class="item-link" target="_blank">
						<div class="item-icon"><svg class="icon"><use xlink:href="#rar"/></svg></div>
						<div class="item-name">Награды</div>
						<div class="hover-icon"><svg class="icon"><use xlink:href="#download"/></svg></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>