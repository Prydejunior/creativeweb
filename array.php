<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>
<?php

$names = ['PRYDE','TELLY','LEWIS']; 
var_dump($names).PHP_EOL;
echo "<br>";
print_r($names);

$Mix = ['PRYDE',20000, 5.5];
var_dump($Mix).PHP_EOL;
echo "<br>";
print_r($Mix);
echo "My name is $Mix[0].I earn $Mix[1]. and I pay $Mix[2] in taxes. $Mix[2]/100*$Mix[1]";

$arr= ['My', 'name', 'is', 'Neymarjr', 'and', 'we', 'are', 'four', 'of', 'us', 'in','class'];

echo "<br>$arr[10] $arr[11] $arr[5] $arr[6] $arr[7]  $arr[8] $arr[9] $arr[4] $arr[0] $arr[1] $arr[2] $arr[3]";
$info = ['My', 'name', 'is', 'Brian', 'and', 'Creative', 'is', 'a', 'good', 'School'];
// To---" Pryde is a good name and my school is creative
echo "<br>$info[3] $info[2] $info[7] $info[8] $info[1] $info[4]
 $info[0] $info[9] $info[6] $info[5]";
for ( $i=0; $i < count($info); $i++ ) {
    echo "<br> word $i: $info[$i] <br>";

}

foreach ($info as $Key) {
    echo "<br> Word $Key";
}
echo "<br>";
$array = [10];
$array[1] = [10,20,50]; 
$array[] = "Two";
$array[] = 3.0002;
$array[] = 3.0004;
// $array=[];
var_dump($array);




echo "<h3> Associative Arrays </h3>";
$userdetails = [
    "name" => "Pryde", 
    "age" => "24",
    "sex" => "male", 
    "email" => "enohnkomjunior@gmail.com",
    "address" => "molyko-buea",

];

$userdetails2 = [
    "name" => "Telly", 
    "age" => "24",
    "sex" => "male", 
    "email" => "telly@gmail.com",
    "address" => "Newtown-limbe",
];

$userdetails3 = [
    "name" => "Lewis", 
    "age" => "21",
    "sex" => "male", 
    "email" => "lewistilafe@gmail.com",
    "address" => "Dirty-South",

];

$userdetails4 = [
    "name" => "Birdman", 
    "age" => "24",
    "sex" => "male", 
    "email" => "birdmaneuro@gmail.com",
    "address" => "Bakweri town-Buea",
];

$userdetails5= [
    "name" => "Zola", 
    "age" => "10",
    "sex" => "male", 
    "email" => "smaczola@gmail.com",
    "addres  s" => "Bagdahd-Mutengene",
];

$userdetails6 = [
    "name" => "Monero", 
    "age" => "24",
    "sex" => "male", 
    "email" => "moneromoneyfocus@gmail.com",
    "address" => "Bakweri town-Buea",
];
?>
<table class="table">
    <!-- table heading -->
    <tr>
        <?php
        foreach(array_keys($userdetails) as $key) {
            echo "<th>$key</th>";
        }
        ?>
    </tr>
    <tr>

<?php
    foreach($userdetails as $value){
        echo "<td>$value</td>";
    }
    ?>
    </tr>
    <tr>

<?php
    foreach($userdetails2 as $value){
        echo "<td>$value</td>";
    }
    ?>
    </tr>
</table>

<h3>Multidimentional Arrays</h3>
<br>
    <h4>Index Multi Dimentional Arrays</h4>
    <?php
    $multi =[
        [1,2,3,4,5],
        [6,7,8,9,],
        [0,21,50,11]
    ];
var_dump($multi);
?>
<br>
<h4>Associatibe Multidimentional Arrays</h4>
<?php
$users = [
    $userdetails, $userdetails2, $userdetails3, $userdetails4, $userdetails5,$userdetails6
];
 ?>
 <table class="table">
     <tr>
         <?php
         foreach (array_keys($userdetails) as $key) {
             echo "<th>$key</th>";
         }
         ?>
     </tr>
     <?php foreach ($users as $user) { ?>
        <tr>
         <?php 
         foreach ($user as $value) {
             echo "<td>$value</td>";
         } 
         ?>
        </tr>
        <?php } ?>
     
 </table>


<?php


    //sort() and rsort()
    //Indexed Array
    $arr = [5, 2, 4, 3, 0,1];
    print_r($arr);
    sort($arr);
    print_r($arr);
    rsort($arr);
    print_r($arr);

    //assort() and arsort()
    //Associative array
    $arr3 = ["3" => "John", "1" => "Ajit", "2" => "Roger"];
    print_r($arr3);
    asort($arr3);
    print_r($arr3);


echo "<h2> Predifined Variables</h2> ";


// function sum($a,$b):int
// {
//     $ans=$a+$b;
//     return int
// } 

echo "<br>Result. sum(10, 20)";
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


$divider = function ($a,$b){
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

date_default_timezone_set('UTC');

echo date("l");

echo date('l jS \of F Y h:i:s A') ."<br>";

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000))."<br>";

echo date(DATE_RFC2822)."<br>";

echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))."<br>";



echo "<h3>AFRICAN TIME ZONES </h3>";


$display();


$userdetails = [
    "place" => "Time", 
    "Douala" => "",
];

$userdetails1 = [
    "place" => "Time", 
    "Ontario" => "",
];

$userdetails2 = [
    "place" => "Time", 
    "Kenya" => "",
];

$userdetails3 = [
    "place" => "Time", 
    "Newyork" => "",
];

$userdetails4 = [
    "place" => "Lagos", 
    "time" => "",
];

$userdetails = [
    "place" => "Douala", 
    "Douala" => "",
];
?>
<table class="table">
    <!-- table heading -->
    <tr>
        <?php
        foreach(array_keys($userdetails) as $key) {
            echo "<th>$key</th>";
        }
        ?>
    </tr>
    <tr>

<?php
    foreach($userdetails as $value){
        echo "<td>$value</td>";
    }
    ?>
    </tr>
    <tr>

<?php
    foreach($userdetails2 as $value){
        echo "<td>$value</td>";
    }
    ?>
    </tr>
</table>












?> 