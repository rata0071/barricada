<h1><i class="icon-star"></i> BARRICADA <i class="icon-star"></i></h1>
<p>Jugalo en la calle</p>

<div class="row-fluid">

<div class="span8">
<div id="mapa" style="width: 600px; height:400px">
</div>
</div>

<div class="span4">
	<form action="<?= View::makeUri('/agregar') ?>" method="post">
	<div class="row-fluid">
		<div class="span6">
		<img src="<?= View::makeUri('/assets/img/policia.png') ?>" border="0" alt="Policía" title="Policía" />
		<input type="checkbox" name="tipo" value="policia" />
		</div>

		<div class="span6">
		<img src="<?= View::makeUri('/assets/img/barricada.png') ?>" border="0" alt="Barricada" title="Barricada" />
		<input type="checkbox" name="tipo" value="barricada" checked="checked" />
		</div>
	</div>

<br />
<br />

	<input type="hidden" name="lat" id="lat" />
	<input type="hidden" name="lng" id="lng" />

	<div class="row-fluid">
		<div class="span12">
                <div class="input-prepend"><span class="add-on"><i class="icon-calendar"></i> Fecha </span><input type="date" name="fecha" id="fecha" class="input-small" /></div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
                <div class="input-prepend"><span class="add-on"><i class="icon-time"></i> Hora </span>
			<select name="hora" class="input-small">
				<?php for ( $i=0; $i < 24; $i++ ) : ?>
				<option value="<?= $i ?>" <?= ($i == date('H') ) ? 'selected="selected"' : '' ?> ><?= $i ?></option>
				<?php endfor ?>
			</select>
		</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
	                <div class="input-prepend"><span class="add-on"><i class="icon-off"></i> Duración </span>
			<select name="duracion" class="input-small">
				<?php for ( $i=0; $i < 12; $i++ ) : ?>
				<option value="<?= $i ?>" <?= ($i == 6 ) ? 'selected="selected"' : '' ?> ><?= $i ?></option>
				<?php endfor ?>
			</select>
		</div>
		</div>
		
	</div>

	<div class="row-fluid">
		<input type="submit" value="Publicar" class="btn btn-danger" />
	</div>

	</form>
</div>

</div>

<iframe width="450" scrolling="no" height="450" frameborder="0" src="http://www.youtube.com/embed/zZJ41rwScAc?theme=light&color=white&hl=es_ES&autoplay=1" marginheight="0" marginwidth="0" allowtransparency="true"></iframe>

<script>
//<!--
var markers = [
<?php foreach ( model_barricada::getCurrent() as $barricada ) : ?>
{'tipo':'<?= $barricada->tipo ?>', 'lat':<?= $barricada->lat ?>, 'lng':<?= $barricada->lng ?>},
<?php endforeach ?>
];
//-->
</script>
