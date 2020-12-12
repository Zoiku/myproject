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
                    <td><a class="add-stock" href="stockindex.php?symbol_to_insert={$this->symbol}"><img class="action-button" src="./Assets/add.png" alt="img"></a></td>
                </tr>
            EOT;
        }
    }
?>
