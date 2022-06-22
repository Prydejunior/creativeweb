
    <?php
    include "HEADER.PHP";
    echo "<hi> control structure</h1>";
    echo "<h2> two condition structures</h2>";
    $x = 3;
    if ($x < 5) {
        echo $x + 5;
    } else {
        echo $x - 5;
    }
    echo "<h2> Two condition Display HTML Structure</h2>";
    $username = "Birdmann";
    $is_logged = true;
    if ($is_logged == true && isset($username)) {
        echo "<h1> Welcome $username</h1>";
    } else {
        echo "<h1> Welcome User</h1>";
    }

    echo "<h2> Three condition structures</h2>";
    $x = 5;
    if ($x < 5) {
        echo $x + 5;
    } else if ($x == 5) {
        echo "$x";
    } else {
        echo $x - 5;
    }

    echo "<h2> Switch Statements</h2>";
    $y = 10;
    switch ($y) {
        case 10:
            echo "Number is 10";
            break;
        case 20:
            echo "Number is 20";
            break;
            case 30:
            echo "Number is 30";
            break;
        default:
            echo "Number does not exist in our range";
            break;
    }
    echo "<h2> Switch Statements</h2>";
    $x = 5;
    switch ($x) {
        case 5:
            echo "Number is 5";
            break;
        case 10:
            echo "Number is 10";
            break;
            case 15:
            echo "Number is 15";
            break;
        default:
            echo "Number does not exist in our range";
            break;
    }

    echo "<h2> for loops <h2>";
    for($i=0; $i<=7; $i=$i+3) {
        echo"$i is the number i see now<br>";
    } 
    for($d=10; $d>1; $d--){
        echo "$d is the number i see now<br>";
    }

    echo "<h2>While Loops</h2>";
    $w=1;
    while($w>10){
      $w++;
      echo "$w is the number i see now";
    }


    echo "<h3> do while loops</h3>";
    $length = 10;
    $width = 2;
    do{
        echo "the area of a rectangle with dimension $length cm and $width is .$length*$width. cm2 <br>";
        $width++;
    }while($width != $length);

    echo "<h2>Break Statements and Nested Loops</h2>";
    echo "<h3>breaks</h3>";
    for ($count=0; $count < 10; $count++) {
        if($count == 7){
            break;
        }
        echo "The number i see now is $count <br>";
    }
    $day=1;
    $subject = 9;
    $mark = 30;
    
    for (; $day < 15; $day++) {
        while ($subject >= 5){
            if($subject ==  5){
                echo "You have failed with $subject <br>";
                break;
           }  
           else{
               do {
                   if ($mark ==70) {
                       echo "You have a B grade with $mark <br>";
                       break;
                     }else {
                         echo "Not good enough with $mark<br>";
                     }

                     $mark-=10;
                    }while ($mark >= 50);
                    }
                $subject--;
        }
    }
    $Limit = 10;
    $test = 1;

    $odd = even;
    While(test<limit){
        $result = test%2;
        if ($result==1){
            echo "test is an odd number".PHP_EOL;
        if($result==0){
            echo "test is an even number".PHP_EOL;
            test-- 
        }
    }


    echo "<h3> GoTo </h3>";
    $result=11;
    if ($result == 10){
        goto result_block;
    }

    exit('this is the end');
    result_block:
    echo "This is the output of the result".PHP_EOL;

    include "footer.php";
 
    ?>