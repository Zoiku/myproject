<?php 
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: ./Login/logout.php");
    }
?>

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
                <a  class="nav-active-page" href="crashcourse.php">Crash Course</a>
                <ul>
                    <li><a href="#"><?php echo "{$_SESSION['username']}"; ?></a>
                        <ul><li><a id="account-logout" href="./Login/logout.php">Sign Out</a></li></ul>
                    </li>
                </ul>
            </nav>

        <section id="section-1">
            
            <div><h1>TRADEX</h1></div>

            <div class="s-i-page-header">
                <strong>HOW THE STOCK MARKET WORKS</strong>
                <hr>
                <p>A 6 video crash course to get you started on trading!</p>
            </div>

            <div id="crash-course-grid">
                <div id="video-1" class="video">
                    <iframe src="https://www.youtube.com/embed/ZCFkWDdmXG8?start=95" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="video-2" class="video">
                    <iframe src="https://www.youtube.com/embed/VvRKG4pghBA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="video-3" class="video">
                    <iframe src="https://www.youtube.com/embed/yIX6d79Q4aA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="video-4" class="video">
                    <iframe src="https://www.youtube.com/embed/BsZ3RUSDL8k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        
                </div>
                
                <div id="video-5" class="video">
                    <iframe src="https://www.youtube.com/embed/CMQLdJa64Wk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                </div>
            </div>
        </section>

        <?php include_once './Footer/footer.php'; ?>
    </body>

</html>
