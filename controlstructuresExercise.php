<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <table align="left" border="2" cellpadding="3" cellspacing="3">
        <?php
        for ($tablerow=1; $tablerow <=10 ; $tablerow++) {
            echo '<tr>';
            for ($i=0; $i<=10; $i++) {
                echo "<td> $tablerow * $i = ". ($tablerow * $i). "</td>";
            }
            echo '</tr>';
        }
          
        
        ?>
    </table>
</body>
</html>