<?php 

	$login_state = $_GET['login'];

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
		<div class="container">

			<?php if ($login_state == "1"): ?>
				<h1 class="text-center">Войти</h1>	

				<form class="login-form" action="acts/login.php" method="post">
					<input name="email" required class="form-control text-bg-dark" placeholder="Почта" type="text">
					<input name="password" required class="form-control text-bg-dark" placeholder="Пароль" type="text">
					<button type="submit" class="btn btn-outline-light me-2 mt-2">Войти</button>
					<p class="mt-1 reg"><a href="/login.php?login=2">Зарегистрироваться</a></p>
				</form>
			<?php else: ?>

				<h1 class="text-center">Зарегистрироваться</h1>	

				<form class="login-form" action="acts/register.php" method="post">
					<input name="first_name" required class="form-control text-bg-dark" placeholder="Имя" type="text">
					<input name="last_name" required class="form-control text-bg-dark" placeholder="Фамилия" type="text">
					<input name="email" required class="form-control text-bg-dark" placeholder="Почта" type="text">
					<input name="password" required class="form-control text-bg-dark" placeholder="Пароль" type="text">
					<button type="submit" class="btn btn-outline-light me-2 mt-2">Зарегистрироваться</button>
				</form>
			<?php endif; ?>
		</div>
	</main>
	
</body>
</html>