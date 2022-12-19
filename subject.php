<?php $subject_id =  $_GET['subject_id']?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include("base.html") ?>
</head>
<body class="center">
	<?php include("header.php");
	$subject_name = $db->get_subject_by_id($subject_id)["name"];
	$exams = $db->get_exams_by_subject($subject_id);
	?>

	<main class="mt-2">
		<div class="container">
			<h3>Экзамены по предменту: <?php echo $subject_name ?> </h3>
			<hr>
			<?php if ($exams): ?>
				<div class="info mt-4">
					<?php foreach($exams as $exam): ?>
						<?php $group_info =  $db->get_group_info($exam[2])?>
						<div class="exam-info mb-1">
							<h4>Группа: <?php echo $group_info["name"] ?></h4>
							<h5>Дата проведения: <?php echo $exam[3] ?></h5>
						</div>
					<?php endforeach; ?>
				</div>
			<?php else: ?>
				<h4>По данному предмету не запланировано никаких экзаменов!</h4>
			<?php endif; ?>
		</div>
	</main>
	
</body>
</html>