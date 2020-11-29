<?php 
    session_start();
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TradEx</title>

        <link rel="stylesheet" href="./Css/style.css">
    </head>

    <body>
        <?php 
             if(isset($_SESSION['username'])){
                print('
                <nav class="nav-bar" id="new-nav">
                    <a class="nav-active-page" href="index.php">Home</a>
                    <a  href="stockindex.php">Index</a>
                    <a  href="crashcourse.php">Crash Course</a>
                    <a href="Login/logout.php">LogOut</a>
                    <div class="nav-animation"></div>
                </nav>'
                );
            }else{
                print('
                <nav class="nav-bar">
                    <a class="nav-active-page" href="index.php">Home</a>
                    <a href="Login/login.php">Login</a>
                    <div class="nav-animation"></div>
                </nav>'
                );
            }
        ?>

        <section id="section-1">
            <div><h1>TRADEX</h1></div>

            <img class="index-page-header" src="Assets/header1.jpg" alt="header">

            <div class="index-page-about">
                The aim of this web application is to increase awareness of investment securties listed on the Ghana Stock Exchange, to particularly new investors.
                <br>
                <strong>Getting started?</strong> Create your free account that will hook up with all the introductory information you would need on investment securities. With a personalizable collection of favorites, you can create your very own stock index of listed securities. 
                <br>
                <strong>Swipe down</strong> if you are only interested in viewing listed stocks.
            </div>

            <a id="next-section-button" href="#section-2">
            <span></span>
            </a>
        </section>

        <section id="section-2">
            
            <div class="securities-table">
                <table>
                    <?php include_once './TableHeading/stock-index-table.php'?>   
                     
                    <?php include_once 'listing.php';
                        $x = 0;

                        while($x < 10){
                            $stock = new Listing('abs', 'Abba Company Limited', 2003, 400000, 300, 200);
                            $stock->printhtml();
                            $x = $x+1;
                        }
                    ?>
                </table>
            </div>
        </section>

    </body>

</html>