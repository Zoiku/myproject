<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Stock Index</title>

        <link rel="stylesheet" href="./Css/style.css">
    </head>
    
    <body>
        <nav class="nav-bar" id="new-nav">
            <a  href="index.php">Home</a>
            <a class="nav-active-page" href="stockindex.php">Index</a>
            <a  href="crashcourse.php">Crash Course</a>
            <a href="Login/logout.php">LogOut</a>

            <div class="nav-animation"></div>
        </nav>

        <section id="section-1">
            <div><h1>TRADEX</h1></div>
            
            <div class="s-i-page-header">
                <strong>MY STOCK INDEX</strong>
                <hr>
                <p>Favorite your prefered stocks and build your very own Stock Index!</p>
            </div>

            <div class="securities-table" id="s-i-page-table">
                <table>
                    <?php include './TableHeading/stock-index-table.php' ?>
                    
                    <tr>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td><a href="#"><img class="delete_button" src="./Assets/delete_button.png" alt=""></a></td>
                    </tr>
                </table>
            </div>
        </section>

        <section id="section-2">
            <div class="securities-table">
                <table>
                    <?php include './TableHeading/stock-listing-table.php' ?>

                    <tr>
                        <td>AADs</td>
                        <td>AngloGold Ashanti Depository Shares</td>
                        <td>2004</td>
                        <td>US $3.364.000.000</td>
                        <td>0.98</td>
                        <td>400.000.000</td>
                        <td><a href="#">more</a></td>
                        <td><a href="#"><img class="favorite-button" src="./Assets/add.png" alt=""></a></td>
                    </tr>

                    <tr>
                        <td>AGA</td>
                        <td>AngloGold Ashanti Limited Development Bank</td>
                        <td>2004</td>
                        <td>ZAR 49,721,223,077.55</td>
                        <td>406.69</td>
                        <td>600.000.000</td>
                        <td><a href="">more</a></td>
                        <td><a href=""><img class="favorite-button" src="./Assets/add.png" alt=""></a></td>
                    </tr>
                </table>
            </div>
        </section>

    </body>
</html>