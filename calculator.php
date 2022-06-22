 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calculator(int $a, int $b, string $operation )
        {
            $operation =strtolower($operation);

            switch ($operation) {
                case 'add':
                    $result = $a + $b;
                    break;
                case 'sub':
                    $result =$a - $b;
                    break;
                case 'multiple':
                    $result = $a * $b;
                    break;
                case 'divide':
                    $result = $a / $b;
                    echo "Divide: $result";
                    break;
                default:
                    $result = $a + $b;
                    echo "Add: $result";
                    $result= $a - $b;


            }
        calculator(1,3,'add');

       }



       ?>




</body>
</html>