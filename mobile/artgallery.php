<html>
	<head>
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
				line-height: 1.5;
			}
			main {
				padding: 10px;
				color: white;
			}
			a.portfoliolink {
				color: #3B8686;
			}
			.artworkcard {
				padding: 10px;
			}
			.thumbnail {
				background-size: contain;
                background-repeat: no-repeat;
				border-radius: 10px 10px 0px 0px;
				width: 320px;
				height: 320px;
				overflow: hidden;
			}
			.caption {
				background-color: white;
				color: #0B486B;
				border-radius: 0px 0px 10px 10px;
				width: 300px;
				height: auto;
				padding: 10px;
			}
			.caption b {
				font-size: 18px;
			}
			@media only screen and (min-width: 600px) {
				h1 {
					font-size: 40px;
				}
				.thumbnail {
					background-size: contain;
					background-repeat: no-repeat;
					border-radius: 10px 10px 0px 0px;
					width: 475px;
					height: 475px;
					overflow: hidden;
				}
				.caption {
					background-color: white;
					color: #0B486B;
					border-radius: 0px 0px 10px 10px;
					width: 455px;
					height: auto;
					padding: 10px;
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
				<div style='display: flex; justify-content: center;'>
					<div style='display: block;'>
						<div style='text-align: center;'>
							<h1>MY ARTWORKS</h1>
						</div>
						<?php
						$sqlString = 'SELECT * FROM artwork ORDER BY artworkId DESC';
						$queryResult = mysqli_query($connection,$sqlString);
						// echo out slides
						while ($row = mysqli_fetch_array($queryResult)) {
							echo    "<div class='artworkcard'>
										<div class='thumbnail' style='background-image: url(" .$row['thumbnailLink']. ");'></div>
										<div class='caption'>
											<b>" .$row['artworkTitle']. "</b><br>
											Medium: " .$row['artworkMedium']. "<br>
											<a class='deviantartlink' href='" .$row['deviantartLink']. "' target='_blank'>DeviantArt <i class='im im-external-link' style='font-size: 14px; margin: 0px;'></i></a>
										</div>
									</div>";
						}
						?>
					</div>
				</div>
			</main>
			<footer>
				<?php include('footerbar.html') ?>
			</footer>
		</div>
	</body>
</html>