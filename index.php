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
                print("
                    <nav class='nav-bar' id='new-nav'>
                        <a  class='nav-active-page' href='index.php'>Home</a>
                        <a  href='stockindex.php'>Index</a>
                        <a  href='crashcourse.php'>Crash Course</a>
                        <ul>
                            <li><a href='#'>Hey {$_SESSION['username']}!</a>
                                <ul><li><a id='account-logout' href='./Login/logout.php'>Sign Out</a></li></ul>
                            </li>
                        </ul>
                    </nav>"
                );
            }else{
                print('
                <nav class="nav-bar">
                    <a class="nav-active-page" href="index.php">Home</a>
                    <a href="./Login/login.php">Login</a>
                </nav>'
                );
            }
        ?>

        <section id="section-1">
            <div><h1>TRADEX</h1></div>

            <img class="index-page-header" src="Assets/header1.jpg" alt="header">

            <div class="index-page-about">
                The aim of this web application is to increase awareness of investment securties listed on the Ghana Stock Exchange, to particularly new investors.<br>
                <strong>Getting started?</strong> Create your free account that will hook up with all the introductory information you would need on investment securities. With a personalizable collection of favorites, you can create your very own stock index of listed securities.<br>
                <strong>Swipe down</strong> if you are only interested in viewing listed stocks.
            </div>
            
            <a id="next-section-button" href="#section-2"><span></span></a>
        </section>

        <section id="section-2">
            <div class="securities-table">
                <table>
                    <?php 
                        include_once './TableHeading/stock-home-table.php'; 
                        include_once './Listing/Listing-1.php';  

                        $gseEndpoint_1_URL = "https://dev.kwayisi.org/apis/gse/equities/";
                        $gseEndpoint_1_JSON = file_get_contents($gseEndpoint_1_URL);
                        $gseEndpoint_1_DECODE = json_decode($gseEndpoint_1_JSON);

                        foreach($gseEndpoint_1_DECODE as $data){
                            include './Api-Data/apiData.php';

                            $security = new Listing($symbol, $name, $industry, $capital, $email, $website, $shares, $price);
                            $security->printhtml();
                        }
                    ?>
                </table>
            </div>
        </section>

    </body>

</html>