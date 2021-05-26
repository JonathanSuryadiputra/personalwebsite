<html>
	<head>
        <title>Contact Me! - Jonathan Suryadiputra</title>
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
			textarea {
                color: #0B486B;
                font-family: 'JetBrains Mono', monospace;
                font-size: 14px;
                position: relative;
                width: 100%;
                height: 100px;
                padding: 10px;
                border: none;
                border-radius: 5px;
                resize: none;
                margin-top: 5px;
            }
            input.textfield {
                color: #0B486B;
                font-family: 'JetBrains Mono', monospace;
                font-size: 14px;
				position: relative;
				width: 100%;
				height: 35px;
				padding: 10px;
                border: none;
                border-radius: 5px;
                margin-top: 5px;
			}
            input:focus {
                color: #0B486B;
                outline: none;
            }
            textarea:focus {
                color: #0B486B;
                outline: none;
            }
            button:focus {
                outline: none;
            }
			.submitbutton {
                display: flex;
				align-items: center;
				justify-content: center;
            }
            .submitbutton button {
                border: solid;
                border-color: white;
                border-width: 2.5px;
                border-radius: 5px;
                background-color: transparent;
                width: 100px;
                height: 35px;
                font-family: 'JetBrains Mono', monospace;
                font-size: 16px;
                color: white;
            }
            .submitbutton button:active {
                color: #3B8686;
                background-color: white;
            }
			.formcontainer {
				display: flex;
				align-items: center;
				width: 100%;
                height: 550px;
            }
			.formbox {
				width: 100%;
				height: auto;
			}
            a.contactlink {
                color: #3B8686;
            }
			@media only screen and (min-width: 768px) {
				.formcontainer {
					position: relative;
					height: 600px;
					justify-content: center;
                    bottom: -20px;
				}
				.formbox {
					border-style: solid;
					border-color: white;
					border-width: 3px;
					width: 400px;
					height: auto;
					border-radius: 15px;
					padding: 15px;
					font-size: 16px;
				}
                @media only screen and (orientation: landscape) {
					.formcontainer {
                        bottom: -35px;
					}
				}
                @media only screen and (orientation: portrait) {
					.formcontainer {
                        height: 650px;
					}
				}
			}
		</style>
		<script>
			function confirmCheck() {
                var response;
                response = confirm("Are you sure you want to send this message? Please check that the details entered and the message body are correct!");
                
                if(response) {
                    alert("Thank you for your message! I'll get back to you as soon as possible!");
                    return true;
                }
                else {
                    return false;
                }	
            }
		</script>
	</head>
	<body>
		<header>
			<?php include('menubar.html'); ?>
		</header>
		<?php include 'db.inc.php'; ?>
		<div class='background'>
			<main>
				<form method='POST' action='sendMessage.php' onsubmit='return confirmCheck()'>
                    <div class='formcontainer'>
                        <div class='formbox'>
                            <h2>LEAVE ME A MESSAGE!</h2>
                            
                            <!--input box name-->
                            <div class='inputbox'>
                                <label for='name'>Name</label><br>
                                <input class='textfield' type='text' name='name' id='name' required />
                            </div>
                            <br>
                            
                            <div class='inputbox'>
                                <label for='emailaddress'>Email Address</label><br>
                                <input class='textfield' type='email' name='emailaddress' id='emailaddress' required />
                            </div>
                            <br>

                            <div class='inputbox'>
                                <label for='subject'>Subject</label><br>
                                <input class='textfield' type='text' name='subject' id='subject' required />
                            </div>
                            <br>

                            <div class='inputbox'>
                                <label for='message'>Message</label><br>
                                <textarea name='message' id='message' required></textarea>
                            </div>
                            <br>
                            
                            <div class='submitbutton'>
                                <button type='submit'>Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
			</main>
			<footer>
				<?php include('footerbar.html') ?>
			</footer>
		</div>
	</body>
</html>