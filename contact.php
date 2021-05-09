<html>
    <head>
        <title>Contact Me! - Jonathan Suryadiputra</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500&display=swap');
            body {
                padding: 0px;
                margin: auto;
            }
            main {
                height: 100%;
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
            .contactlink {
                color: #3B8686;
            }
            .formcontainer {
                font-family: 'JetBrains Mono', monospace;
                font-size: 18px;
                position: relative;
                height: 100%;
                display: flex;
				align-items: center;
				justify-content: center;
            }
            .formbox {
                border-style: solid;
				border-color: white;
				border-width: 4px;
				width: 425px;
				height: auto;
				border-radius: 15px;
				padding: 20px;
				font-size: 20px;
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
                <?php include('footerbar.html'); ?>
            </footer>
        </div>
    </body>
</html>