<!DOCTYPE html>
<html lang="en">
    <head>
        <title>developer: Joyce Wei</title>
        <?php 
            include "bootstrap.head.php"; 
            include "./utility/DBUtility.php";
            include "function.php";
            
            $companyId = get("companyId", 'A001');
            $dbutility = new DBUtility();
            $sql = "select id, symbol, issuerName, sharesValue 
                    from investments 
                    where companyId = '$companyId' AND sharesValue > 5
                    order by issuerName
                    limit 25";
            $rows = $dbutility->exacute($sql);

            $sql2 = "select id, company_name
                     from company_name 
                     where id = '$companyId ' ";
            $rowCompanyName = $dbutility->exacute($sql2);
            $manager = $rowCompanyName[0]["company_name"];
        ?>
    </head>
    <body>
        <div class="container">
            <h2><a href="./custom-index.php">Index</a></h2>
            <h4>Managed by: <?=$manager ?> </h4>        
            <table class="table">
              <thead>
                    <tr>
                        <th>ID</th>
                        <th>Symbol</th>
                        <th>Issuer Name</th>
                        <th>Shares Value</th>
                    </tr>
              </thead>      
              <tbody>
                    <?php foreach($rows as $currentRow){ ?>
                        <tr>
                            <td><?=$currentRow["id"]?></td>
                            <td><?=$currentRow["symbol"]?></td>
                            <td><?=$currentRow["issuerName"]?></td>
                            <td class="money" ><?=money($currentRow["sharesValue"])?></td>
                         </tr>
                    <?php } ?>
              </tbody>
            </table>
        </div>
    </body>
</html>

