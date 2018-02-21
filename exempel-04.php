<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 4</title>
</head>
<body>

<h1>Arrayer i PHP</h1>

<p>Detta är en array:</p>

<?php

// Skapa en array

$namn = array("Jan", "Christian");

// Lägg till ett element

$namn[] = "Hall";

// Indexering

echo "Jag heter $namn[0], $namn[1], $namn[2].";

echo "<h2>Iterera över en Array</h2>";

echo "<h3>While-satsen</h3>";

$i = 0;
while($i < count($namn)) {

    echo $namn[$i] . "<br>";
    $i++;

    // Eller
    // echo $namn [$i++]; iställer för två olika satser

}

echo "<h3>For-satsen</h3>";

for($i=0; $i<count($namn); $i++) {

    echo $namn[$i] . "<br>";

}

foreach($namn as $namn1) {

    echo $namn1 . "<br>"; // OBS! [] behövs ej.

}

echo "<h3>Funktionen print_r()</h3>";
echo "<pre>";
print_r($namn); // Echo behövs ej
echo "</pre>";

echo "<h3>Skriv ut en array som en HTML-lista</h3>";
echo "<table>";
echo "<table border = '1'";
echo "<tr><th>Namn</th></tr >";
foreach($namn as $namn1)
    echo "<tr><td>$namn1</tr></td>";
echo "</table>";

echo "<h3>Associative array i PHP</h3>";

// Skriv ut värdet.

$person = array("name" => "Christian", "age" => "33");
echo $person["name"] . " är " . $person['age'] . " år gammal ";

// Skriv ut nyckel och värde.

echo "<h3>Skriv ut en associativ array</h3>";

foreach($person as $key => $value)
    echo "Nyckel: $key, Värde: $value <br>";

// Skriv ut en associative array med print_r().    

echo "<h3>Skriv ut en associative array med print_r</h3>";

echo "<pre>";

print_r($person);

echo"</pre>";

// $_SERVER är en global associative array
// som innehåller allmän info om webbserver och dess miljö

echo "<h3>Skriv ut $_SERVER</h3>";
echo "<pre>";
print_r($_SERVER);
echo"</pre>";

echo "Min root är: ";
echo $_SERVER["DOCUMENT_ROOT"];

?>
    
</body>
</html>