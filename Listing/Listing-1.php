<?php 
    class Listing{
        public $symbol;
        public $company;
        public $industry;
        public $totalCapital;
        public $email;
        public $website;
        public $totalShares;
        public $currentPrice;
        public $html;

        function __construct($symbol, $company, $industry, $totalCapital, $email, $website, $totalShares, $currentPrice){
            $this->symbol = $symbol;
            $this->company = $company;
            $this->industry = $industry;
            $this->totalCapital = $totalCapital;
            $this->email = $email;
            $this->website = $website;
            $this->totalShares = $totalShares;
            $this->currentPrice = $currentPrice;
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
                </tr>
            EOT;
        }

        function printhtml(){
            echo "{$this->html}";
        }
    }
?>
            




