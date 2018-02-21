<?php

define("PAGE_TITLE", "Exempel 7");
include 'header.php';

?>

<h2>Hämta data via URLen</h2>

<p>

<a href="?namn=Christian&age=33">Visa Christian</a> <br>
<a href="?namn=Gayathri&age=26">Visa Gayathri</a> <br>
<a href="?namn=Amelie&age=1">Visa Amelie</a>

</p>

<h3>Hej

<?php

/* Skicka namnet om det finns data att hämta från URLen
   annars (om data saknas) skicka en tom sträng. */

  echo $_GET['namn'] ?? '';

   if(isset($_GET['age'])) {

        echo "<br>Du är: " . $_GET['age'] . " år gammal.";

   }

// Skriv ut allt som finns i GET-Arrayen
print "<pre>";
print_r($_GET);
print "</pre>";

?>

</h3>

<?php include 'footer.php' ?>