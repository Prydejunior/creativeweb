<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings In Php</title>
</head>
<body>
   <h2>HEREDOC</h2> 
 <?php
   // This is here Doc
   $name= 'Brian';
   $race= 'Black';
   echo <<<DOC_LABEL
   These are the terms and conditions of using my site.
   I am a <strong> $race</strong> named <strong> $name</strong><br>
   First you must have internet and <strong> lots of internet</strong>
   Plenty mbs. The nrxt thing is to have a good computer and intelligence
    to follow <br>
   Sense is priceless and my client must be wise <br> to display text
    we use the echo tag and we " . " to seprate
   DOC_LABEL;
    // This is NOWDOC
    $name= 'Brian';
    $race= 'Black';
    echo <<<'DOC_LABEL'
    These are the terms and conditions of using my site.
    I am a <strong> $race</strong> named <strong> $name</strong><br>
    First you must have internet and <strong> lots of internet</strong>
    Plenty mbs. The nrxt thing is to have a good computer and intelligence
     to follow <br>
    Sense is priceless and my client must be wise <br> to display text
     we use the echo tag and we " . " to seprate text
    DOC_LABEL;

   echo "<h2>string lenghth</h2>";
   $greetings ="hi class";
   $string= "This is a string";
   $username= "thetechG";

   if (strlen($username)>=10) {
       echo " This is an invalid username"."<br>";
   }
   else {
       echo "Welcome $Username"."<br>";
   }

   echo strlen($greetings)."<br>";
   echo strlen($greetings).PHP_EOL;

   echo "<h2>string position</h2>";
   $text = "This is a sentence and we are looking for you in this sentence";
   $search = "T"; //case sensitive string
   $search1 = "You"; //case insentive string
   echo strpos($text,$search)."<br>;//this is case sensitive
   echo stripos($text,$search1)."<br>";//this is case insensitive 


   ?>
</body> 
</html>