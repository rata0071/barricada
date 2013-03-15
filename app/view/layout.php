<!doctype html>
<html land="es">
<head>
	<meta charset="UTF-8" />
	<title>Barricada</title>
	<meta name="description" content="Barricadas vs. policias, jugalo en la calle." />

	<link rel="stylesheet" href="<?= View::makeUri('/assets/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="<?= View::makeUri('/assets/css/font-awesome.min.css') ?>" />
	<link rel="stylesheet" href="<?= View::makeUri('/assets/css/ui-lightness/jquery-ui-1.10.0.custom.min.css') ?>" />
	<link rel="stylesheet" href="<?= View::makeUri('/assets/css/main.css') ?>" />
</head>
<body>
	<div class="container">
		<content>
		<?php foreach ( Flight::flash('message') as $message ) : ?>
			<div class="alert alert-<?= View::e($message['type']) ?>">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<i class="<?= isset($message['icon']) ? View::e('icon-'.$message['icon']) : 'icon-exclamation-sign' ?>"></i> <?= View::e($message['text']) ?>
			</div>
		<?php endforeach ?>
		<?php Flight::clearFlash('message') ?>
		<?= $content ?>
		</content>
	</div>

	<footer>
	</footer>

	<script src="<?= View::makeUri('/assets/js/jquery.js') ?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="<?= View::makeUri('/assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= View::makeUri('/assets/js/jquery-ui.js') ?>"></script>
	<script src="<?= View::makeUri('/assets/js/main.js') ?>"></script>
</body>
</html>
