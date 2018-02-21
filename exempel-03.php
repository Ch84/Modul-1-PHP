<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 3</title>
</head>
<body>

<h1>Stränghantering</h1>

<?php

// Visa varningar och felmeddelanden

ini_set("display_errors",1);

$fname = "Christian";
$lname = "Hall";
echo "$fname $lname";
echo "<br>";
echo '$fname $lname'; // OBS! Fel, variabelnamnen visas istället i webbläsare.

echo "<h2>Konkatenering</h2>";
echo $fname + $lname; // 0 och två varningar visas!
echo "<br>";
echo $fname . $lname;
echo "<br>";
echo $fname . " " . $lname . "<br>";
echo "<br";

echo "<h2>Escape-sekvenser</h2>";
echo "<p>Mitt förnamn är \"Christian\"</p>";
echo "<p>Mitt förnamn är 'Christian'</p>";
echo "<p>Mitt förnamn är \'Christian\'</p>"; // Fel!
echo "<p>Mitt förnamn är \'Christian\'</p>";

echo "<h2>Inbyggda funktioner i PHP</h2>";
$name = "jan christian hall";

echo strtoupper($name); // Manipulera sträng till versaler

echo "<br>";

echo strtolower($name); // Manipulera sträng till gemener

echo "<br>";

echo ucfirst($name); // Manipulera sträng till versaler på första bokstav

echo "<br>";

echo ucwords( strtolower($name)); // Visa alltid inledande stor bokstav i varje ord.

// eller

$namn = ucwords( strtolower($name));

echo "<br>";

echo $namn;

echo "<br>";

echo strrev($name); // Reverserar sträng

echo "<br>";

echo strlen($name); // Visar antal tecken på sträng

?>
    
</body>
</html>