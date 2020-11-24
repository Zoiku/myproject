<?php 
    class Security{
        private $symbol;
        private $companyname;
        private $listedyear;
        private $statedcapital;
        private $issuedshares;
        private $authorisedshares;

        function __construct($symbol, $companyname, $listedyear, $statedcapital, $issuedshares, $authorisedshares){
            $this->symbol = $symbol;
            $this->companyname = $companyname;
            $this->listedyear = $listedyear;
            $this->statedcapital = $statedcapital;
            $this->issuedshares = $issuedshares;
            $this->authorisedshares = $authorisedshares;
        }
    }
?>