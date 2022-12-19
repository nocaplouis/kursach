<?php $subject_page = True ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include("base.html") ?>
</head>
<body>
	<?php include("header.php") ?>

	<main class="mt-2">
		<div class="container">
			<?php $subjects = $db->get_subjects(); ?>
			<h1>Предметы</h1>
			<div class="subjects row mt-3 container">
				<?php foreach($subjects as $subject): ?>
					<a href="/subject.php?subject_id=<?php echo $subject[0]?>" class="mt-1 subject btn btn-outline-light"><?php echo $subject[1] ?></a>
				<?php endforeach; ?>
			</div>
			
		</div>	
	</main>
	
</body>
</html>