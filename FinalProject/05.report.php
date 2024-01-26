<!DOCTYPE html>
<html lang="en">
    <head>
        <title>developer: Joyce Wei</title>
        <?php 
            include "bootstrap.head.php"; 
            include "./utility/DBUtility.php";
            include "function.php";
            $dbutility = new DBUtility();
            $sql = "select id, symbol, issuerName, sharesValue 
                    from investments 
                    where companyId = 'C005' 
                    order by issuerName
                    limit 25";
            $rows = $dbutility->exacute($sql);

            $sql2 = "select id, company_name
                     from company_name 
                     where id = 'C005' ";
            $rowCompanyName = $dbutility->exacute($sql2);
            $manager = $rowCompanyName[0]["company_name"];
        ?>
    </head>
    <body>
        <div class="container">
            <h2><a href="./">Index</a></h2>
            <h4>Managed by: <?=$manager ?> </h4>
            <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
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

