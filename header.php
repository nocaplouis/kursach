<?php 
	if(!isset($_COOKIE['email'])){$auth = NULL;}else{$auth =$_COOKIE['email'];}

	include("db/db.php");
	$db = new MySQlither();

	if ($auth){
		$user_info = $db->get_user_info($_COOKIE["email"]);
	}
?>

<header>
	<div class="intert d-flex flex-column flex-shrink-0 p-3 text-bg-dark">
		<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
			<img class="bi pe-none me-2" src="img/schedule.svg" alt="" style="width: 60px;height: 52px;">
			<span class="fs-4">Расписание</span>
		</a>
		<hr>
		<ul class="nav nav-pills flex-column mb-auto">
			<li class="nav-item">
				<a href="/" class="nav-link <?php if(isset($main_page)){echo "active";}else{echo "text-white";} ?>" aria-current="page">
					<svg class="bi pe-none me-2" fill="#fff" width="24" height="24" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 330.242 330.242" style="enable-background:new 0 0 330.242 330.242;" xml:space="preserve">
						<path d="M324.442,129.811l-41.321-33.677V42.275c0-6.065-4.935-11-11-11h-26c-6.065,0-11,4.935-11,11v14.737l-55.213-44.999
						c-3.994-3.254-9.258-5.047-14.822-5.047c-5.542,0-10.781,1.782-14.753,5.019L5.8,129.81c-6.567,5.351-6.173,10.012-5.354,12.314
						c0.817,2.297,3.448,6.151,11.884,6.151h19.791v154.947c0,11.058,8.972,20.053,20,20.053h62.5c10.935,0,19.5-8.809,19.5-20.053
						v-63.541c0-5.446,5.005-10.405,10.5-10.405h42c5.238,0,9.5,4.668,9.5,10.405v63.541c0,10.87,9.388,20.053,20.5,20.053h61.5
						c11.028,0,20-8.996,20-20.053V148.275h19.791c8.436,0,11.066-3.854,11.884-6.151C330.615,139.822,331.009,135.161,324.442,129.811z"
						/>
					</svg>
						Главная
					</a>
			</li>
			<li>
				<a href="/subjects.php" class="nav-link <?php if(isset($subject_page)){echo "active";}else{echo "text-white";} ?>">
					<svg class="bi pe-none me-2" fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="24" height="24" viewBox="0 0 54.483 54.483" style="enable-background:new 0 0 54.483 54.483;"
						xml:space="preserve">
						<path d="M29.77,35.434h16.077v2.336H29.77V35.434z M29.77,32.2h16.077v-2.336H29.77V32.2z M37.802,24.165H29.77V26.5h8.032V24.165z
						M37.802,17.899H29.77v2.336h8.032V17.899z M29.77,43.308h16.077v-2.336H29.77V43.308z M54.483,10.152v39.005H26.561v0.055
						l-0.236-0.055H0V10.152h2.327v-4.88l22.134,4.88H54.483z M52.454,28.277h-0.771h-1.976v2.755h1.976h0.771V28.277z M4.665,12.952
						v29.036l19.561,4.317V12.952V12.49l-10.609-2.34L4.665,8.175v1.974V12.952z M13.618,46.358L3.497,44.123v2.235H13.618z
						M26.561,46.358h21.121V12.954h-2.689V26.79l-2.835-2.628l-2.829,2.628V12.954H26.563v33.404H26.561z M22.359,16.529l-10.736-3.575
						l-3.765-1.253l-0.419,1.253l-0.325,0.962l14.5,4.828L22.359,16.529z M22.359,22.79l-14.5-4.828l-0.739,2.217l14.501,4.828
						L22.359,22.79z M22.359,29.049l-14.5-4.829l-0.739,2.217l14.501,4.829L22.359,29.049z M22.359,35.311l-14.5-4.824l-0.739,2.215
						l14.501,4.824L22.359,35.311z M22.359,40.854l-14.5-4.831L7.119,38.24l14.501,4.829L22.359,40.854z"/>
					</svg>
					Предметы
				</a>
			</li>
			<?php if ($auth): ?>
				<li>
					<a href="/self_shedule.php" class="nav-link <?php if(isset($self_subject)){echo "active";}else{echo "text-white";} ?>">
						<svg class="bi pe-none me-2" fill="#fff" width="24" height="24" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" class="icon">
							<path d="M928 224H768v-56c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v56H548v-56c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v56H328v-56c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v56H96c-17.7 0-32 14.3-32 32v576c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V256c0-17.7-14.3-32-32-32zM424 688c0 4.4-3.6 8-8 8H232c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h184c4.4 0 8 3.6 8 8v48zm0-136c0 4.4-3.6 8-8 8H232c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h184c4.4 0 8 3.6 8 8v48zm374.5-91.3l-165 228.7a15.9 15.9 0 0 1-25.8 0L493.5 531.2c-3.8-5.3 0-12.7 6.5-12.7h54.9c5.1 0 9.9 2.5 12.9 6.6l52.8 73.1 103.7-143.7c3-4.2 7.8-6.6 12.9-6.6H792c6.5.1 10.3 7.5 6.5 12.8z"/>
						</svg>
						Личное расписание
					</a>
				</li>
			<?php endif; ?>
		</ul>
		<hr>

		<?php if($auth): ?>
			<div class="dropdown">
				<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
					<svg class="rounded-circle me-2" width="48px" height="48px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="38" height="38" fill="white" fill-opacity="0.01"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M24 23C26.7614 23 29 20.7614 29 18C29 15.2386 26.7614 13 24 13C21.2386 13 19 15.2386 19 18C19 20.7614 21.2386 23 24 23Z" fill="#2F88FF" stroke="black" stroke-width="4" stroke-linejoin="round"/>
					<path d="M10.022 38.332C10.3657 33.1206 14.7016 29 20 29H28C33.2914 29 37.6229 33.1097 37.9767 38.3113" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>

					<strong><?php echo $user_info["first_name"] ?></strong>
				</a>
				<ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="">
					<li><a class="dropdown-item" href="acts/relog.php">Выйти</a></li>
				</ul>
			</div>
		<?php else: ?>
			<a href="/login.php?login=1" class="btn btn-outline-light me-2">Войти</a>
		<?php endif; ?>
	</div>
</header>