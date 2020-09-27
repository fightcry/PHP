<?php

function wyswietl_powitanie() // deklaracja funkcji
{

if ($a =1)
	{
	echo "<br>klasyfikacja 1 <br>";
	} else {
		echo "<br>klasyfikacja inna <br>";
		}
echo "Proszę się zarejestrować.";  // instrukcje do wykonania
}

?>


<?php
$a = $i;
$doc = new DOMDocument;
$doc->load('0720200211.xml');

$items = $doc->getElementsByTagName('form');

for ($i = 0; $i < $items->length; $i++) {
echo wyswietl_powitanie() , "<br>", $i, "<br>";
    echo $items->item($i)->nodeValue . "<br>";
}

wyswietl_powitanie();

?>
