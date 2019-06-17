<?php 
	$service = require __DIR__.DIRECTORY_SEPARATOR.'data.php'
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Loop 1 - Step 1</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="/styles.css" />
	</head>
	<body class="bg-polo-blue">
		<div class="panel">
			<div class="text-center">
				<div id="block_container" class="block-container">
					<?php foreach ($service as $title => $content) : ?>
						<div class="block" data-action="open-popup">
							<div class="content-line">
								<img src="<?= $content['img'] ?>" height="90px" class="media">
								<h2 class="title text-slate-blue text-uppercase"><?= $title ?></h2>
								<div class="content text-gray">
									<?= $content['description'] ?>
								</div>
							</div>
							<div class="price-line text-slate-blue">
								<span class="dollar">$</span>
								<span class="price"><?= $content['price']?><span class="month">/ month</span></span>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<div class="text-center">
				<div class="button bg-crayola-blue">
					Give feedback
				</div>
			</div>
		</div>
		<div id="popup" class="popup text-center">
			<div class="popup-body text-center">
				<h2>Confirmation</h2>
				<span class="cross" data-action="close-popup"></span>
				<div class="text-center">
					<div id="popup_content"></div>
				</div>
				<div class="text-center">
					<div class="button bg-crayola-blue">
						Confirm and pay
					</div>
				</div>
			</div>
			<div class="popup-background" data-action="close-popup">
		</div>
		<script src="/scripts.js"></script>
	</body>
</html>