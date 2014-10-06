<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css" />
</head>
<body>

<h1>Basic guitar chords</h1>
<br> <br> <br>

<?php
$raw = file_get_contents("chords.json");
$json = json_decode($raw, true);

foreach ($json as $chord => $value) {
   echo $chord . " chord";
   echo "<br> <br>";
   $str = 6;
   foreach ($value as $strings => $strval) {
      echo "string " . $str . ": "; 
      echo $strval . "<br>";
      $str--;
   }
   echo "<br> <br>";
}
?>

</body>
</html>

