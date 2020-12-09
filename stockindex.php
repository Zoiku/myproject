<?php 
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: ./Login/logout.php");
    }

    include_once './Loading-Page/loading-page.php';
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Stock Index</title>

        <link rel="stylesheet" href="./Css/style.css">
        
        <script src="./JQuery/jquery-3.5.1.js"></script>
        <script src="./JS/script.js"></script>
    </head>

    <body>
        <div class="loaded-page">
            <nav class="nav-bar" id="new-nav">
                <a  href="index.php">Home</a>
                <a class="nav-active-page" href="stockindex.php">Index</a>
                <a  href="crashcourse.php">Crash Course</a>
                <ul>
                    <li><a href="#"><?php echo "{$_SESSION['username']}"; ?></a>
                        <ul><li><a id="account-logout" href="./Login/logout.php">Sign Out</a></li></ul>
                    </li>
                </ul>
            </nav>

            <section id="section-1">
                <div><h1>TRADEX</h1></div>
                
                <div class="s-i-page-header">
                    <strong>MY STOCK INDEX</strong>
                    <hr>
                    <p>Build your very own Stock Index!</p>
                </div>

                <div class="securities-table" id="s-i-page-table">
                    <table>
                        <?php 
                            include './Database-Connection/connection.php';
                            include_once './Listing/Listing-1.php';
                            include_once './Listing/Listing-2.php'; 
                            include_once './Listing/Listing-3.php';

                            include_once './TableHeading/stock-index-table.php';
                            $username = $_SESSION['username'];
                            
                            if(isset($_GET['symbol_to_insert'])){
                                $symbol = $_GET['symbol_to_insert'];
                            
                                $myindex_insert_sql = "SELECT * FROM `myindex` WHERE username='$username' and symbol='$symbol'";
                                $myindex_insert_result = mysqli_query($conn, $myindex_insert_sql);
                                $myindex_insert_result_check = mysqli_num_rows($myindex_insert_result);
                            
                                if($myindex_insert_result_check == 0){
                                    $sql = "INSERT INTO `myindex`(`username`, `symbol`) VALUES ('$username', '$symbol')";
                                    $result = mysqli_query($conn, $sql);
                                    $symbol = NULL;
                                } 
                            }
                            
                            if(isset($GET['symbol_to_delete'])){
                                $symbol = $GET['symbol_to_delete'];

                                $myindex_delete_sql = "DELETE FROM `myindex` WHERE username = '$username' and symbol='$symbol' LIMIT 1";
                                $myindex_delete_result = mysqli_query($conn, $myindex_delete_sql);
                                $myindex_delete_result_check = mysqli_num_rows($myindex_delete_result);                            
                            }

                            $gseEndpoint_1_URL = "https://dev.kwayisi.org/apis/gse/equities/";
                            $gseEndpoint_1_JSON = file_get_contents($gseEndpoint_1_URL);
                            $gseEndpoint_1_DECODE = json_decode($gseEndpoint_1_JSON);

                            $myindex_read_sql = "SELECT symbol FROM `myindex` WHERE username='$username'";
                            $myindex_read_result = mysqli_query($conn, $myindex_read_sql);
                            $myindex_read_result_check = mysqli_num_rows($myindex_read_result);
                            
                            if($myindex_read_result_check > 0){
                                $num_stocks = 0;
                                $direct_stock_index = 0;
                                $indirect_stock_index = 0;

                                while($rows = mysqli_fetch_assoc($myindex_read_result)){
                                    foreach($gseEndpoint_1_DECODE as $data){
                                        include './Api-Data/apiData.php';
                                        
                                        if($rows['symbol'] === $symbol){                                        
                                            $security = new ListingV3($symbol, $name, $industry, $capital, $email, $website, $shares, $price);
                                            $security->printhtml();
                                            $num_stocks += 1;
                                            $direct_stock_indext = $direct_stock_indext + $price; 
                                        }
                                    }
                                    $indirect_stock_index = $direct_stock_index/$num_stocks;
                                }
                            }else {
                                ListingV3::empty();
                            }                                           
                        ?>  
                    </table>
                </div>
            </section>

            <section id="section-2">
                <div class="securities-table">
                    <table>
                        <?php 
                            include_once './TableHeading/stock-home-2-table.php' ;

                            foreach($gseEndpoint_1_DECODE as $data){
                            include './Api-Data/apiData.php';
                                $security = new ListingV2($symbol, $name, $industry, $capital, $email, $website, $shares, $price);
                                $security->printhtml();
                            }
                        ?>
                    </table>
                </div>
            </section>

            <?php include_once './Footer/footer.php'; ?>
        </div>
    </body>
</html>

