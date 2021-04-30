<html>
    <head>
        <title>My Artwork Gallery</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500&display=swap');
            body {
                color: white;
                font-family: 'JetBrains Mono', monospace;
                padding: 0px;
                margin: auto;
            }
            main {
                height: 90%;
                display: flex;
                align-items: center;
            }
            h1 {
                font-size: 50px;
                line-height: 0.25;
            }
            a.deviantartlink {
                color: #0B486B;
                transition: none;
            }
            a.deviantartlink:hover {
                color: #072D42;
            }
            .gallerylink {
                color: #3B8686;
            }
            .contents {
                position: relative;
                display: flex;
				align-items: center;
				justify-content: center;
            }
            .row {
                overflow-x: scroll;
                width: 100%;
                height: 50%;
                margin-left: 20px;
                margin-right: 20px;
                background-color: white;
                border-radius: 20px;
                padding: 10px;
            }
            .wrapper {
                display: flex;
                overflow: auto;
                align-items: center;
                height: 100%;
            }
            .artworkcard {
                position: relative;
                height: 325px;
                width: 325px;
                margin-left: 10px;
                margin-right: 10px;
                display: flex;
                border-radius: 10px;
                overflow: hidden;
            }
            .thumbnail {
                background-size: contain;
                background-repeat: no-repeat;
                width: 100%;
                height: 100%;
                opacity: 1;
                transition: filter 0.5s ease, opacity 0.5s ease;
            }
            .caption {
                left: 0;
                right: 0;
                padding: 15px;
                position: absolute;
                align-self: flex-end;
                color: #0B486B;
                opacity: 0;
                transition: opacity 0.5s ease;
            }
            .artworkcard:hover .caption {
                opacity: 1;
            }
            .artworkcard:hover .thumbnail {
                opacity: 0.3;
                filter: blur(10px);
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
                <div style='width: 100%;'>
                    <div style='text-align: center;'>
                        <h1>MY ARTWORKS</h1>
                    </div>
                    <div class='contents'>
                        <div class='row'>
                            <div class='wrapper'>
                                <?php
                                $sqlString = 'SELECT * FROM artwork ORDER BY artworkId DESC';
                                $queryResult = mysqli_query($connection,$sqlString);
                                // echo out slides
                                while ($row = mysqli_fetch_array($queryResult)) {
                                    echo    "<span>
                                                <div class='artworkcard'>
                                                    <div class='thumbnail' style='background-image: url(" .$row['thumbnailLink']. ");'></div>
                                                    <div class='caption'>
                                                        <b>" .$row['artworkTitle']. "</b><br>
                                                        Medium: " .$row['artworkMedium']. "<br>
                                                        <a class='deviantartlink' href='" .$row['deviantartLink']. "' target='_blank'>DeviantArt <i class='im im-external-link' style='font-size: 14px; margin: 0px;'></i></a>
                                                    </div>
                                                </div>
                                            </span>";
                                }
                                mysqli_close($connection);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <?php include('footerbar.html'); ?>
            </footer>
        </div>
    </body>
</html>