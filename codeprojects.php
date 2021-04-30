<html>
    <head>
        <title>My Coding Projects</title>
        <link rel='stylesheet' href='https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css'>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500&display=swap');
            * {box-sizing:border-box}
            body {
                color: white;
                padding: 0px;
                margin: auto;
            }
            main {
                height: 95%;
                display: flex;
				align-items: center;
				justify-content: center;
            }
            a.githublink {
                color: #0B486B;
                transition: none;
            }
            a.githublink:hover {
                color: #072D42;
            }
            .projectslink {
                color: #3B8686;
            }
            .slideshowcontainer {
                width: 70%;
                height: 70%;
            }
            .slideshow {
                width: 100%;
                height: 100%;
                position: relative;
                margin: auto;
            }
            .slide {
                background-color: white;
                color: #0B486B;
                font-family: 'JetBrains Mono', monospace;
                padding: 75px;
                width: 100%;
                height: 100%;
                border-radius: 10px;
                display: none;
            }
            .prev, .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                margin-top: -22px;
                padding: 16px;
                color: #bbb;
                font-weight: bold;
                font-size: 18px;
                transition: 0.5s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }
            .prev:hover, .next:hover {
                color: #bbb;
                background-color: rgba(113,113,113,0.8);
            }
            .dot {
                cursor: pointer;
                height: 10px;
                width: 10px;
                margin: 0 2px;
                background-color: white;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.25s ease;
            }
            .active, .dot:hover {
                background-color: #bbb;
            }
        </style>
    </head>
    <body>
        <header>
            <?php include('menubar.html'); ?>
        </header>
        <div class='background'>
            <?php include 'db.inc.php'; ?>
            <main>
                <div class='slideshowcontainer'>
                    <div class='slideshow'>
                        <?php
                        $sqlString = 'SELECT * FROM project ORDER BY projectId DESC';
                        $queryResult = mysqli_query($connection,$sqlString);
                        $rowCount = 0;
                        while ($row = mysqli_fetch_array($queryResult)) {
                            echo    "<div class='slide'>
                                        <h1>" .$row['projectTitle']. "</h1>
                                        <h3>Affiliation: " .$row['affiliation']. "</h3>
                                        <h3>Tools Used: " .$row['toolsUsed']. "</h3>
                                        <p>
                                            " .$row['projectDesc']. "
                                        </p>
                                        <h4><a class='githublink' href='" .$row['githubLink']. "' target='_blank'>GitHub <i class='im im-external-link' style='font-size: 15px; margin: 0px;'></i></a></h4>
                                    </div>";
                            $rowCount++;
                        }
                        ?>
                        <a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
                        <a class='next' onclick='plusSlides(1)'>&#10095;</a>
                    </div>
                    <br>
                    <div style='text-align:center'>
                        <?php
                        for ($i = 1; $i <= $rowCount; $i++) {
                            echo "<span class='dot' onclick='currentSlide(" .$i. ")'></span>";
                        }
                        mysqli_close($connection);
                        ?>
                    </div>
                </div>
                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }
        
                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName('slide');
                        var dots = document.getElementsByClassName('dot');
                        if (n > slides.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = slides.length
                        }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = 'none';
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(' active', '');
                        }
                        slides[slideIndex-1].style.display = 'block';
                        dots[slideIndex-1].className += ' active';
                    }
                </script>
            </main>
            <footer>
                <?php include('footerbar.html'); ?>
            </footer>
        </div>
    </body>
</html>