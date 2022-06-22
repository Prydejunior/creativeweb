<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Sample 1: List all files in a directory
    //scandir
    $path = "../WEB";
    $result = scandir($path);
    var_dump($result);
    foreach($result as $dir){
        if($dir != "." && $dir != ".." ){
            echo $dir . PHP_EOL;
        }
    }

    //Remove . and ..
    $directory = array_diff($result, ['.','..']);
    var_dump($directory);
    foreach($directory as $dir){
        echo $dir . PHP_EOL;
    }





?>
</body>
</html>