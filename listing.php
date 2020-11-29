<?php 
    class Listing{
        private $symbol;
        private $company;
        private $listedYear;
        private $statedCapital;
        private $issuedShares;
        private $autorisedShares;
        public $html;

        function __construct($symbol, $company, $listedYear, $statedCapital, $issuedShares, $autorisedShares){
            $this->symbol = $symbol;
            $this->company = $company;
            $this->listedYear = $listedYear;
            $this->statedCapital = $statedCapital;
            $this->issuedShares = $issuedShares;
            $this->authorisedShares = $autorisedShares;

            $this->html = <<<EOT
                <tr>
                    <td style="text-transform: uppercase;">{$this->symbol}</td>
                    <td>{$this->company}</td>
                    <td>{$this->listedYear}</td>
                    <td>{$this->statedCapital}</td>
                    <td>{$this->issuedShares}</td>
                    <td>{$this->authorisedShares}</td>
                    <td><a href="">read more</a></td>
                </tr>
            EOT;
        }

        function printhtml(){
            echo "{$this->html}";
        }
    }

?>