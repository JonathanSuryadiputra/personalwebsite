<html>
    <head>
        <title>Jonathan Suryadiputra</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Teko:wght@400&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500&display=swap');
            body {
                padding: 0px;
                margin: auto;
                color: white;
            }
            main {
                height: 85%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            h1 {
                font-family: 'Teko', sans-serif;
                font-size: 120px;
                line-height: 0;
                cursor: default;
            }
            h4 {
                font-family: 'JetBrains Mono', monospace;
                font-size: 30px;
                line-height: 0;
                cursor: default;
            }
            .background {
                background: rgb(59,134,134);
                background: linear-gradient(0deg, rgba(59,134,134,1) 0%, rgba(207,240,158,1) 100%);
            }
            .textcontainer {
                text-align: center;
                width: 100%;
            }
        </style>
        <script>
            function detectScreen() {
                if (screen.width <= 600) {
                    window.location.replace('underconst.html');
                }
            }
            window.onload = detectScreen();
        </script>
    </head>
    <body>
        <header>
            <?php include('menubar.html'); ?>
        </header>
        <div class='background'>
            <main>
                <div class='textcontainer'>
                    <h1>JONATHAN SURYADIPUTRA</h1>
                    <h4>Student * Artist * Software Engineer * Illustrator</h4>
                </div>
            </main>
            <footer>
                <?php include('footerbar.html'); ?>
            </footer>
        </div>
    </body>
</html>