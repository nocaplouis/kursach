<?php 

	$error = $_GET["error"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include("base.html") ?>
</head>
<body class="center">

	<?php include("header.php") ?>

	<main class="center">
		<div class="container text-center">
			<svg width="100" height="100" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
			<circle style="fill:#D75A4A;" cx="25" cy="25" r="25"/>
			<polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,34 25,25 34,16 
				"/>
			<polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,16 25,25 34,34 
				"/>
			</svg>

			<h1>ОШИБКА</h1>
			<?php if ($error == "1"): ?>
				<p>Такой пользователь уже существует!</p>
			<?php elseif ($error == "2"): ?>
				<p>Такого пользователя не существует!</p>
			<?php elseif ($error == "3"): ?>
				<p>Не правильный пароль!</p>
			<?php endif; ?>
		</div>
	</main>
	
</body>
</html>