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
			}
			main {
				color: white;
				font-family: 'JetBrains Mono', monospace;
				font-size: 16px;
			}
			.textcontainer {
				padding-left: 20px;
				padding-right: 20px;
				padding-bottom: 30px;
				width: auto;
				height: auto;
				text-align: center;
			}
			.profilepiccontainer {
				height: 250px;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			@media only screen and (max-width: 600px) {

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
				<div class='profilepiccontainer'>
					<img src='profilepic.jpg' width='150px' style='border-radius: 50%;'>
				</div>
				<div class='textcontainer'>
					My name is Jonathan and I am currently a computer science student based in Ireland and I go to the Institute of Technology Carlow. I enjoy designing neat order and control structure of code and I have very high attention when it comes to even the smallest details.<br><br>I have done one large project on campus and several small personal projects. Aside from programming I also enjoy drawing and painting illustration artworks in my spare time. I’ve built this website from scratch using HTML, JavaScript and PHP and it is hosted on AWS.
				</div>
			</main>
			<footer>
				<?php include('footerbar.html') ?>
			</footer>
		</div>
	</body>
</html>