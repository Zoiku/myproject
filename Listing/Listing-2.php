<?php 
    class ListingV2 extends Listing{

        public function __construct($symbol, $company, $industry, $totalCapital, $email, $website, $totalShares, $currentPrice){
            parent::__construct($symbol, $company, $industry, $totalCapital, $email, $website, $totalShares, $currentPrice);
            
            $this->html = <<<EOT
                <tr>
                    <td>{$this->symbol}</td>
                    <td>{$this->company}</td>
                    <td>{$this->industry}</td>
                    <td>{$this->totalCapital}</td>
                    <td><a href='mailto:{$this->email}'>{$this->email}</a></td>
                    <td><a href='https://{$this->website}' target='__blank'>{$this->website}</a></td>
                    <td>{$this->totalShares}</td>
                    <td>{$this->currentPrice}</td>
                    <td><a href="add-stock-index.php?symbol={$this->symbol} & company={$this->company} & capital={$this->totalCapital} & shares={$this->totalShares} & price={$this->currentPrice}"><img class="add-button" src="./Assets/add.png" alt="img"></a></td>
                </tr>
            EOT;
        }
    }
?>
