<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
echo "<h2> Predifined Variables</h2> ";



function sum($a,$b)
{
    $ans=$a+$b;
    return $ans;
}

echo "<br>Result". sum(10, 20);
function even_array($limit){
    $even_arr=[];
    for ($i=0; $i < $limit; $i++) {
        if($i%2==0){
            $even_arr[]=$i;
        }
    }
return $even_arr;
}

var_dump(even_array(10));


$divider = function ($a,$b) {
    $divide = $a/ $b;
    echo "<br>This is a function";
    return $divide;
};

echo "<br>Result ". $divider(10,2). "<br>";

$message = "Hello World";
$display = function() use ($message) {
    echo $message;
};
$display();
?>

<h2>World Clock Table </h2>
<?php $data = DateTimeZone::listIdentifiers(DateTimeZone::AFRICA);

?>

<table class ="table">
    <tr>
        <th>Place</th>
        <th>Time</th>
    </tr>
<tr>
 <?php
 for ($i =0; $i < count($data); $i++) {
    echo '<tr>';
    $dateTime = new DateTime('now', new DateTimeZone("$data[$i]"));
    //$dateTime = new DateTime('now', new DateTimeZone("Africa/Abidjan")); when i =0
    echo " <td>$data[$i]</td>";
    echo " <td>" . $dateTime->format("Y-m-d H:i A"). "</td>";
    echo ' </tr>';
 }
 ?>

$chita = $date->setTimezone(new DateTimeZone('Asia/Chita'));
echo "<h2>Chita: ". $date->format('Y-m-d H:i A') . "</h2>";
?>
</tr>
<tr>
    <?php

$dateTime = new DateTime('now',new DateTimeZone('Asia/Kolkata'));
echo "<h2Kolkata: ".$dateTime->format('Y-m-d H:i A'). "</h2>";
?>
</tr>
<tr>
    <?php

// $datepacific = date_create($date, timezone_open(*Pacific/Naura*));
// echo date_format($datepacific, 'H:i:s a') . "\n";
?>
</tr>

// $dateLagos = date_create($date, timezone_open(*Pacific/Nauru*));
// echo date_format($datepacific, 'H:i:s a'). "\n";
// echo "The date of today is : $date2";


$result = 0;
function sum3 ($a, $b, $c, &$answer){
    $answer = $a + $b + $c;
    // echo "<br> This is a function";
    return $answer;
};

sum3(1,3,7,$result);

echo "<br>Result ". $result . "<br>";

include "footer.php"
?>