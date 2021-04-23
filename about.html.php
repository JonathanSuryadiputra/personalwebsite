<html>
    <head>
        <title>About Me</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500&display=swap');
            body {
                color: white;
                padding: 0px;
                margin: auto;
            }
            main {
                height: 95%;
                display: flex;
                align-items: center;
            }
            h3 {
                font-family: 'JetBrains Mono', monospace;
                font-size: 30px;
                line-height: 1.75;
                margin: 0;
                margin-bottom: 10px;
            }
            p {
                font-family: 'JetBrains Mono', monospace;
                font-size: 18px;
                line-height: 1.75;
                margin: 0;
            }
            .aboutlink {
                color: #3B8686;
            }
            .background {
                background: rgb(59,134,134);
                background: linear-gradient(0deg, rgba(59,134,134,1) 0%, rgba(207,240,158,1) 100%);
            }
            .piccontainer {
                float: left;
                width: 40%;
            }
            .textcontainer {
                float: left;
                width: 60%;
            }
        </style>
    </head>
    <body>
        <header>
            <?php include('menubar.html'); ?>
        </header>
        <div class='background'>
            <main>
                <div class='piccontainer'>
                    <div style='padding-left: 125px;'>
                        <div style='border: solid; border-radius: 10px; width: 300px;'>
                            <img src='profilepic.jpg' width='300' style='position: relative; left: 30px; bottom: 30px; border-radius: 10px;'>
                        </div>
                    </div>
                </div>
                <div class='textcontainer'>
                    <div style='border-left: solid; padding: 50px 125px 50px 50px;'>
                        <h3>hello-world!<h3>
                        <p>
                            My name is Jonathan and I am currently a computer science student based in Ireland and I go to the Institute of Technology Carlow. I enjoy designing neat order and control structure of code and I have very high attention when it comes to even the smallest details. I have done one large project on campus and several small personal projects. Aside from programming I also enjoy drawing and painting illustration artworks in my spare time. I’ve built this website from scratch using HTML, JavaScript and PHP and it is hosted on AWS.
                        </p>
                    </div>
                </div>
            </main>
            <footer>
                <?php include('footerbar.html'); ?>
            </footer>
        </div>
    </body>
</html>