<!DOCTYPE>
<HTml>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>History</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" style=" border: 1px solid black;
        position: absolute;
        left: 400px;
        top: 50px;
        height: 500px;
        width: 600px;
        border-radius: 20px;">
        <div style="position:absolute; left:15px;">

        <h2>Page 2 [Transaction History]</h2>
        <h2>Digital Wallet</h2>
        <div style="color:blue">

            <span>1. <a href="Home-page.php">Home</a></span>
            <span>2. <a href="Transaction.php">Transaction History</a></span>
        </div>
        <h2 >Total Records :</h2>
        <div>
        <table style="border: 1px solid black;width:100%">
            <tr>
                <th>Transaction Category</th>
                <th>To</th>
                <th>Amount</th>
                <th>Transfered on</th>
            </tr>

            <?php 
            
            $data=file_get_contents("input.txt");
            $tempData=json_decode($data);
            if(!empty($tempData))
            {
                    foreach($tempData as $tempObject)
                {
                echo "<tr>";
                    echo "<td>". $tempObject->transactionCategory . "</td>" ."<td>" . $tempObject->to . "</td>" ."<td>".$tempObject->amount . "</td>"."<td>".$tempObject->transferedOn."</td>";
                echo " </tr>";
                    
                    
                }
            }
            

            ?>
            
        </table>
  
        
        </div>
        </div>
        

        
        
        </form>
    </body>

</HTml>