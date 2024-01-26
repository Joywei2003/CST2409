<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="format.css">
        <link rel="stylesheet" href="format-custom.css">
    </head>
    <body>
        <h2>Stock Rankings <span class="developer">Developer Joyce Wei</span></h2>
        <?php 
            include 'function.php';
            $ranking = get("ranking", 15);
        ?>
        <form>
            <label>ranking: </label> <input class="number" type="number" name="ranking" value="<?= $ranking ?>" />
            <label>market cap in billions</label> 
            <select name="marketCapComparison">
                <option value="gt">greater than</option>
                <option value="lt">less than</option>        
            </select>      
            &nbsp;
            <input class="number" type="number" step="0.01" name="marketCap" value="0" />
            <input type="submit" value="query" />
        </form>
        <br/>
        <p><ol>
            <li>Companies with a market cap less than or equal to .15 billion dollars will be highligted (red).</li>
            <li>Companies with a market cap greater than or equal to 40 billion dollars will be highligted (green).</li>
        </ol></p>
        <table>
          <thread> 
            <tr>
                <th>Rank</th>
                <th>Symbol</th>
                <th>Company</th>
                <th>Quant</th>
                <th>Sa Authors</th>
                <th>Wall Street</th>
                <th>Market Cap in Billions</th>
            </tr> 
          </thread>
          <tbody>
            <?php
                $file =fopen("./data/TopStocks.csv","r");
                $count = 0;
                $row = fgetcsv($file);
                while(! feof($file))
                {
                    $row = fgetcsv($file);
                    $rank = $row[0];
                    $symbol = $row[1];
                    $company = $row[2];
                    $quant = $row[3];
                    $saAuthors = $row[4];
                    $wallStreet = $row[5];
                    $marketCap = money_in_billions($row[6]);
                    $trclass = "";
                    
                    if($marketCap <= 0.15){
                        $trclass = "high-light-red";
                    }
                    elseif($marketCap >= 40){
                        $trclass ="high-light";
                    }
                    else{
                        $trclass = "";
                    }
            ?>    
                    <tr class="<?= $trclass?> ">
                        <td><?= $rank ?></td>
                        <td><?= $symbol ?></td>
                        <td><?= $company ?></td>
                        <td class="number"><?= qpa($quant) ?></td>
                        <td class="number"><?= qpa($saAuthors) ?></td>
                        <td class="number"><?= qpa($rank) ?></td>
                        <td class="number" ><?= ($marketCap) ?></td>
                    </tr>
            <?php
                    $count++;
                    if($count >= $ranking){
                        break;
                    }
                }
                fclose($file);
            ?> 
        </tbody>
        </table>
    </body>
</html>
