<?php $self_subject = True ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include("base.html") ?>
</head>
<body class="center">
	<?php include("header.php") ?>

	<?php if ($user_info["group_id"] == 0): ?>
		<?php $groups = $db->get_groups(); ?>
		<main class="center">
			<div class="container">
				<h1 class="text-center">К какой группе вы относитесь!</h1>	

				<form class="login-form" action="acts/select_group.php" method="post">
					<input required value="<?php echo $user_info['id'] ?>" type="" name="user_id" class="hiding-input">
					<select name="group_id" id="" class="form-control text-bg-dark">
						<?php foreach($groups as $group): ?>
							<option value="<?php echo $group[0] ?>"><?php echo $group[1] ?></option>
						<?php endforeach; ?>
					</select>
					<button type="submit" class="btn btn-outline-light me-2 mt-2">Подтвердить</button>
				</form>
			</div>
		</main>
	<?php else: ?>
		<main class="mt-2">
			<div class="container">
				<?php 
					$group_info = $db->get_group_info($user_info["group_id"]);
					$exams = $db->get_examns_by_group_id($user_info["group_id"]);
				?>
				<h1>Расписание для группы: <?php echo $group_info["name"] ?></h1>
				<hr>
				<div class="info mt-4">
					<?php foreach($exams as $exam): ?>
						<?php $subject_info =  $db->get_subject_by_id($exam[1])?>
						<div class="exam-info mb-1">
							<h4>Предмет: <?php echo $subject_info["name"] ?></h4>
							<h5>Дата проведения: <?php echo $exam[3] ?></h5>
						</div>
					<?php endforeach; ?>
				</div>
				
			</div>
		</main>
	<?php endif; ?>
	
</body>
</html>