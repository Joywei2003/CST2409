<?php
    class Stock
    {
        private $rank;  
        private $symbol; 
        private $company;  
        private $quant; 
        private $saAuthors; 
        private $wallStreet; 
        private $marketCap;

        public function __construct($rank, $symbol, $company, $quant, $saAuthors, $wallStreet, $marketCap)
        {
            $this->rank = $rank;
            $this->symbol = $symbol;
            $this->company = $company;
            $this->quant = $quant;
            $this->saAuthors = $saAuthors;
            $this->wallStreet = $wallStreet;
            $this->marketCap = $marketCap;
        }

        function get_rank()
        {
            return $this->rank;
        }
        function get_symbol()
        {
            return $this->symbol;
        }
        function get_company()
        {
            return $this->company;
        }
        function get_quant()
        {
            return $this->quant;
        }
        function get_saAuthors()
        {
            return $this->saAuthors;
        }
        function get_wallStreet()
        {
            return $this->wallStreet;
        }
        function get_marketCap()
        {
            return $this->marketCap;
        }
    }
?>