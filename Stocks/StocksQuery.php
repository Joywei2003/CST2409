<?php
    class StockQuery 
    {
        public function find_all()
        {
            include('./Stocks.php');
            $file =fopen("./data/TopStocks.csv","r");
            $count = 0;

            $rows = [];
            $current_row = fgetcsv($file);
            while(! feof($file))
            {
                $current_row = fgetcsv($file);
                $rank = $current_row[0];
                $symbol = $current_row[1];
                $company = $current_row[2];
                $quant = $current_row[3];
                $saAuthors = $current_row[4];
                $wallStreet = $current_row[5];
                $marketCap = (float)$current_row[6]/1_000_000_000;

                $aStock = new Stock($rank,$symbol,$company,$quant,$saAuthors,$wallStreet,$marketCap);
                $rows[] = $aStock;
            }
            fclose($file);
            return $rows;
        }
    }

?> 