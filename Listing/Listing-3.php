<?php 
    class ListingV3 extends Listing{

        public function __construct($symbol, $company, $industry, $totalCapital, $email, $website, $totalShares, $currentPrice){
            parent::__construct($symbol, $company, $industry, $totalCapital, $email, $website, $totalShares, $currentPrice);
            
            $this->html = <<<EOT
                <tr>
                    <td>{$this->symbol}</td>
                    <td>{$this->company}</td>
                    <td>{$this->industry}</td>
                    <td>{$this->totalCapital}</td>
                    <td><a href='mailto:{$this->email}'>{$this->email}</a></td>
                    <td>{$this->totalShares}</td>
                    <td>{$this->currentPrice}</td>
                    <td><a href="stockindex.php?symbol_to_delete={$this->symbol}"><img class="action-button" src="./Assets/delete_button.png" alt="img"></a></td>
                </tr>
            EOT;
        }

        public static function empty(){
            echo "
                <tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td><a><img class='action-button' src='./Assets/delete_button.png' alt='img'></a></td>
                </tr>
                ";
        }   
    }
?>