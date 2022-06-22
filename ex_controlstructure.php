 <?php
require_once "config.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Party Table</h2>
    <table>
        <tr>
            <th>Number</th>
            <th>Parity</th>
        </tr>
    
     <?php
           
         require_once "config.php";
         for ($counter =0; $counter <= Config\MAX_NUMBERS; $counter++) {
             $result = $counter %2;
             echo "<tr>";
             echo "<td>$counter</td>";
             if ($result== 0) {
                 echo "<td>Even</td>";
                 echo "</tr>";
             }
            else{
                echo "<td>Odd</td>";
                echo "<tr>";


            }
         }
         ?>
 </table>
</body>
</html>