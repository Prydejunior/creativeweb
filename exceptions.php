<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function divide($x, $y)  {

        if($y <=0){
            throw new Exception("You Divided by zero ;");
        }

        $result = $x / $y;
        return $result;
    }

    try{
        //this is a error in this block
         echo $result = divide(1,7);

    }catch(Exception $e){
        //Jump to this block if try block has an error
        echo 'Caught Exception:' . $e->getMessage(). PHP_EOL;

    }



    ?>

    <?php

        function custom_error_handler($errno, $errstr){
            echo $errstr;
        }

        set_error_handler('custom_error_handler');
        echo (5 / 0);


        ?>

</body>
</html>