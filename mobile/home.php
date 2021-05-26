<html>
	<head>
		<title>Jonathan Suryadiputra</title>
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
			}
			main {
				color: white;
			}
			h1 {
				font-family: 'Teko', sans-serif;
				font-size: 48px;
				line-height: 1;
			}
			h4 {
				font-family: 'JetBrains Mono', monospace;
				font-size: 16px;
				line-height: 0.5;
			}
			h4 i {
				color: #79BD9A;
				font-size: 60px;
			}
			.textcontainer {
				text-align: center;
				width: 100%;
			}
			.myname {
				height: 200px;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			.myroles {
				background-color: white;
				color: #0B486B;
				height: auto;
				display: flex;
				align-items: center;
				justify-content: center;
				padding-top: 20px;
				padding-bottom: 20px;
			}
			
			@media only screen and (min-width: 768px) {

			}
		</style>
		<script>
			function showNavPanel() {
				var navPanel = document.getElementById('navpanel');
				if (navPanel.style.display === 'none') {
					navPanel.style.display = 'block';
				}
				else {
					navPanel.style.display = 'none';
				}
			}
		</script>
	</head>
	<body>
		<header>
			<?php include('menubar.html'); ?>
		</header>
		<div class='background'>
			<main>
				<div class='textcontainer'>
					<div class='myname'>
						<h1>JONATHAN<br>SURYADIPUTRA</h1>
					</div>
					<div class='myroles'>
						<div>
							<h4><i class="fas fa-user-graduate"></i></h4>
							<h4>Student</h4><br>
							<h4><i class="fas fa-palette"></i></h4>
							<h4>Artist</h4><br>
							<h4><i class="fas fa-code"></i></h4>
							<h4>Software Engineer</h4><br>
							<h4><i class="fas fa-swatchbook"></i></h4>
							<h4>Illustrator</h4>
						</div>
					</div>
				</div>
			</main>
			<footer>
				<?php include('footerbar.html') ?>
			</footer>
		</div>
	</body>
</html>