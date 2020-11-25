<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crash Course</title>

        <link rel="stylesheet" href="./Css/style.css">
    </head>

    <body>
        <nav class="nav-bar" id="new-nav">
            <a  href="index.php">Home</a>
            <a  href="stockindex.php">Index</a>
            <a class="nav-active-page" href="crashcourse.php">Crash Course</a>
            <a href="Login/logout.php">LogOut</a>

            <div class="nav-animation"></div>
        </nav>

        <section id="section-1">
            
            <div><h1>TRADEX</h1></div>

            <div class="s-i-page-header">
                <strong>HOW DOES A STOCK MARKET WORK?</strong>
                <hr>
                <p>A 4 video crash course to get you started on trading!</p>
            </div>

            <div id="crash-course-grid">
                <div id="video-1" class="video">
                    <iframe src="https://www.youtube.com/embed/7EUbrFLef7M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="video-2" class="video">
                    <iframe src="https://www.youtube.com/embed/fn3y1hNVgA4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="video-3" class="video">
                    <iframe src="https://www.youtube.com/embed/DF23jO8Y0n0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="video-4" class="video">
                    <iframe src="https://www.youtube.com/embed/GnJCOof2HJk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </body>
</html>