<html>
	<head>
		<title>My Coding Projects - Jonathan Suryadiputra</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel='stylesheet' href='https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Teko:wght@400&display=swap');
			@import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500&display=swap');
			body {
				padding: 0px;
				margin: auto;
				height: auto;
				font-family: 'JetBrains Mono', monospace;
				line-height: 1;
			}
			main {
				padding: 10px;
				color: white;
			}
			h1 {
				font-size: 28px;
			}
			h3 {
				font-size: 20px;
			}
			a.projectslink {
				color: #3B8686;
			}
			.projectcontainer {
				background-color: white;
				color: #0B486B;
				border-radius: 10px;
				padding: 15px;
				margin: 10px;
			}
			@media only screen and (min-width: 768px) {
				.projectcontainer {
					padding: 30px;
					margin: 20px;
				}

			}
		</style>
	</head>
	<body>
		<header>
			<?php include('menubar.html'); ?>
		</header>
		<?php include 'db.inc.php'; ?>
		<div class='background'>
			<main>
				<?php
				$sqlString = 'SELECT * FROM project ORDER BY projectId DESC';
				$queryResult = mysqli_query($connection,$sqlString);
				// echo out slides
				while ($row = mysqli_fetch_array($queryResult)) {
					echo    "<div class='projectcontainer'>
							<h1>" .$row['projectTitle'] . "</h1>
							<h3>Affiliation: ".$row['affiliation']. "</h3>
							<h3>Tools Used: ".$row['toolsUsed']. "</h3>
							<p>" .$row['projectDesc']. "</p>
							<h4><a class='githublink' href='" .$row['githubLink']. "' target='_blank'>GitHub <i class='im im-external-link' style='font-size: 15px; margin: 0px;'></i></a></h4>
							</div>";
				}
				?>
			</main>
			<footer>
				<?php include('footerbar.html') ?>
			</footer>
		</div>
	</body>
</html>