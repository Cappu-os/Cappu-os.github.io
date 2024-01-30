<?php
$counterFile = 'counter.txt';

if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}

$count = file_get_contents($counterFile);
$count++;

file_put_contents($counterFile, $count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cappu Business Card</title>
	<link rel="stylesheet" href="./CSS/main.css">
	<link rel="stylesheet" href="./CSS/media.css">
</head>
<body>

	<header class="header">
		<div class="container">

           <!--Header navigation-->

		    <div class="header-nav">
			    <a href="#!" class="logo">Cappu</a>

			    <nav class="nav">
				    <ul class="nav-list">
					    <li class="nav-item"><a href="#!" class="nav-link active">Home</a></li>
					    <li class="nav-item"><a href="#!" class="nav-link">Works</a></li>
					    <li class="nav-item"><a href="#!" class="nav-link">Services</a></li>
					    <li class="nav-item"><a href="#!" class="nav-link">About</a></li>
					    <li class="nav-item"><a href="#!" class="nav-link">Contact</a></li>
				    </ul>
			    </nav>
		    </div>

			<!--Header content-->
			<div class="header-row">
				<div class="header-content">
					<h1 class="header-heading">Cappu<br> Mapper & Player</h1>
					<p>I’m a portrait, fashion and lifestyle photographer living In New York City. During my thirteen year tenure here. </p>
				</div>
				<div class="header-img">
					<img src="./img/header/Cappu.png" alt="">
				</div>
			</div>
		</div>
	</header>
	
	<section class="services">
		<div class="container">
			<div class="services-row">
				<div class="service-card">
					<img class="service-card-img" src="./img/services/Aim.png" alt="Aim">
					<h3 class="service-card-title">Aim</h3>
					<p>The most important form of skillset to confidentely comprehend everything the game has to offer.</p>
					
				</div>

				<div class="service-card">
					<img class="service-card-img" src="./img/services/Speed.png" alt="Speed">
					<h3 class="service-card-title">Speed</h3>
					<p>The most important form of skillset to confidentely comprehend everything the game has to offer.</p>
					
				</div>

				<div class="service-card">
					<img class="service-card-img" src="./img/services/Reading.png" alt="Reading">
					<h3 class="service-card-title">Reading</h3>
					<p>The most important form of skillset to confidentely comprehend everything the game has to offer.</p>
					
				</div>

			</div>
		</div>
	</section>

	<section class="portfolio">
		<div class="container">
			<div class="portfolio-title">
				<h2 class="title-1">Reviews</h2>
			</div>
		</div>
			<div class="reviews">
				<div class="review1">
					<div class="profile1">
						<a href="https://osu.ppy.sh/users/5155973/osu"><img src="./img/portfolio/Rizer.png" alt=""></a>
						<h3 class="profile1-name"><a href="https://osu.ppy.sh/users/5155973/osu" class="profile1-link">Rizer</a></h3>
					</div>

					<div class="profile1-review">
						<h3 class="profile1-review-title">"The most important form of skillset to confidentely comprehend everything the game has to offer."</h3>
					</div>
				</div>

				<div class="review1">
					<div class="profile1">
						<a href="https://osu.ppy.sh/users/5155973/osu"><img src="./img/portfolio/Rizer.png" alt=""></a>
						<h3 class="profile1-name"><a href="https://osu.ppy.sh/users/5155973/osu" class="profile1-link">Rizer</a></h3>
					</div>

					<div class="profile1-review">
						<h3 class="profile1-review-title">"The most important form of skillset to confidentely comprehend everything the game has to offer."</h3>
					</div>
				</div>

				<div class="review1">
					<div class="profile1">
						<a href="https://osu.ppy.sh/users/5155973/osu"><img src="./img/portfolio/Rizer.png" alt=""></a>
						<h3 class="profile1-name"><a href="https://osu.ppy.sh/users/5155973/osu" class="profile1-link">Rizer</a></h3>
					</div>

					<div class="profile1-review">
						<h3 class="profile1-review-title">"The most important form of skillset to confidentely comprehend everything the game has to offer."</h3>
					</div>
				</div>

				<div class="review1">
					<div class="profile1">
						<a href="https://osu.ppy.sh/users/5155973/osu"><img src="./img/portfolio/Rizer.png" alt=""></a>
						<h3 class="profile1-name"><a href="https://osu.ppy.sh/users/5155973/osu" class="profile1-link">Rizer</a></h3>
					</div>

					<div class="profile1-review">
						<h3 class="profile1-review-title">"The most important form of skillset to confidentely comprehend everything the game has to offer."</h3>
					</div>
				</div>

				<div class="review1">
					<div class="profile1">
						<a href="https://osu.ppy.sh/users/5155973/osu"><img src="./img/portfolio/Rizer.png" alt=""></a>
						<h3 class="profile1-name"><a href="https://osu.ppy.sh/users/5155973/osu" class="profile1-link">Rizer</a></h3>
					</div>

					<div class="profile1-review">
						<h3 class="profile1-review-title">"The most important form of skillset to confidentely comprehend everything the game has to offer."</h3>
					</div>
				</div>
			</div>	
	</section>
	
	<footer class="contacts">
		<div class="container">
			<div class="contacts-title">
				<h2 class="title1">Contacts</h2>
			</div>
			<div class="contacts-content">
				<p>Want to know more or just chat?<br> You are welcome!</p>
			</div>
			<div class="contacts-social">
				<a href="#!"><img src="./img/socials/Facebook.png" alt="Facebook"></a>
				<a href="#!"><img src="./img/socials/Instagram.png" alt="Instagram"></a>
				<a href="#!"><img src="./img/socials/Telegram.png" alt="Telegram"></a>
				<a href="#!"><img src="./img/socials/Whatsapp.png" alt="Whatsapp"></a>
			</div>
			<div class="contacts-footer">
				<p>Like me on<br> Facebook, Instagram, Telegram, Whatsapp</p>
			</div>
		</div>
	</footer>
	<div>
        <p>Total Visitors: <?php echo $count; ?></p>
    </div>

</body>
</html>
