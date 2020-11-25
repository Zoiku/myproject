<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

        <link rel="stylesheet" href="./Css/style.css">
    </head>

    <body>
   
        <nav class="nav-bar">
            <a class="nav-active-page" href="index.php">Home</a>
            <a href="Login/login.php">Login</a>

            <div class="nav-animation"></div>
        </nav>

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
                    <th>Symbol</th>
                    <th>Company</th>
                    <th>Listed Year</th>
                    <th>Stated Capital</th>
                    <th>Issued Shares</th>
                    <th>Autorised Shares</th>
                    <th></th>
                    
                    <tr>
                        <td>AADs</td>
                        <td>AngloGold Ashanti Depository Shares</td>
                        <td>2004</td>
                        <td>US $3.364.000.000</td>
                        <td>0.98</td>
                        <td>400.000.000</td>
                        <td><a href="">more</a></td>
                    </tr>

                    <tr>
                        <td>AGA</td>
                        <td>AngloGold Ashanti Limited Development Bank</td>
                        <td>2004</td>
                        <td>ZAR 49,721,223,077.55</td>
                        <td>406.69</td>
                        <td>600.000.000</td>
                        <td><a href="">more</a></td>
                    </tr>
                </table>
            </div>
        </section>


        <footer>

        </footer>
    </body>
</html>