<html>
	<head>
		<title>About Me - Jonathan Suryadiputra</title>
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
			a.aboutlink {
				color: #3B8686;
			}
			.textcontainer {
				padding-left: 20px;
				padding-right: 20px;
				padding-bottom: 30px;
				width: auto;
				height: auto;
				text-align: center;
				font-family: 'JetBrains Mono', monospace;
			}
			.textcontainer h3 {
				font-size: 20px;
			}
			.textcontainer p {
				font-size: 16px;
			}
			.profilepiccontainer {
				height: 250px;
				display: flex;
				align-items: center;
				justify-content: center;
				padding-top: 20px;
			}
			@media only screen and (min-width: 600px) {
				.textcontainer h3 {
					font-size: 32px;
				}
			}
			@media only screen and (min-width: 768px) {
				main {
					height: 90%;
				}
				img.profilepic {
					width: 225px;
				}
				.textcontainer h3 {
					font-size: 24px;
				}
				.textcontainer p {
					padding-left: 40px;
					padding-right: 40px;
					font-size: 18px;
				}
				.profilepiccontainer {
					height: 300px;
				}
				@media only screen and (orientation: portrait) {
					.textcontainer h3 {
						font-size: 26px;
					}
					.textcontainer p {
						padding-left: 60px;
						padding-right: 60px;
						font-size: 20px;
					}
				}
			}
		</style>
	</head>
	<body>
		<header>
			<?php include('menubar.html'); ?>
		</header>
		<div class='background'>
			<main>
				<div class='profilepiccontainer'>
					<img class='profilepic' src='https://personalwebsite-components.s3-eu-west-1.amazonaws.com/profilepic.jpg' width='200px' style='border-radius: 50%;'>
				</div>
				<div class='textcontainer'>
					<h3><b>hello-world!</b></h3>
					<p id='aboutmetext'>
						My name is Jonathan and I am currently a computer science student based in Ireland and I go to the Institute of Technology Carlow. I enjoy designing neat order and control structure of code and I have very high attention when it comes to even the smallest details.<br><br>I have done one large project on campus and several small personal projects. Aside from programming I also enjoy drawing and painting illustration artworks in my spare time. I’ve built this website from scratch using HTML, JavaScript and PHP and it is hosted on AWS.
					</p>
				</div>
			</main>
			<footer>
				<?php include('footerbar.html') ?>
			</footer>
		</div>
	</body>
</html>