<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="bhp.css">
<body>

<?php
$plik = $_GET['data'];
$wpisform = $_GET['wpis'];
$fileweek = substr($plik, 0, 2);
$fileyear = substr($plik, 2, 4);
$filemonth = substr($plik, 6, 2);
$fileday = substr($plik, 8, 2);
$xml=simplexml_load_file($plik) or die("Error: Cannot create object");
$p_cnt = count($xml->body);
echo $p_cnt,' <br>';
echo $plik, '<br>';
echo $wpisform, '<br>';;


?>

<button onclick="location.href='../bhp.php'" type="button"> Formularz</button>
<button onclick="location.href='BHP-List.php'" type="button"> Lista </button>
<table class="custom_class">
	<tr>
		<th> <?php echo ' Rok:', $fileyear, ' miesiac:', $filemonth, ' Dzien:',$fileday, ' tydzien:',$fileweek; ?>
		</th>
	</tr>
	<tr>
		<th>
			PIRAMIDA
		</th>
		<th>
			WPISY
		</th>
	</tr>
	<tr>
		<td>
<?php

$xmlStr = file_get_contents($plik);
$xml = new SimpleXMLElement($xmlStr);
$formfilter = $wpisform;
// seach records by tag value:
// find all book records with price higher than 40$
//$res = $xml->xpath("form/id[.='{$formfilter}']/parent::*");
$res = $xml->xpath("form/formid[.='{$formfilter}']/parent::*");
//print_r($res);

echo "<br><br> start <br> <br>";

foreach($xml->xpath('//form') as $item) {

    $row = simplexml_load_string($item->asXML());
//    $v = $row->xpath('//formid[. ="1405"]');
    $v = $row->xpath("//formid[. ='{$formfilter}']");
    if($v[0]){
	echo "Imie: ", print $item->imie;echo "<br>";
	echo "Dzial: ", print $item->dzial;echo "<br>";
	echo "Temat: ", print $item->temat;echo "<br>";
	echo "IP: ", print $item->ip;echo "<br>";
	echo "pyt1: ", print $item->pyt1;echo "<br>";
	echo "pyt2: ", print $item->pyt2;echo "<br>";
	echo "pyt3: ", print $item->pyt3;echo "<br>";
	echo "pyt4: ", print $item->pyt4;echo "<br>";
	echo "pyt5: ", print $item->pyt5;echo "<br>";
	echo "pyt6: ", print $item->pyt6;echo "<br>";
	echo "pyt7: ", print $item->pyt7;echo "<br>";
	echo "pyt8: ", print $item->pyt8;echo "<br>";
	echo "pyt9: ", print $item->pyt9;echo "<br>";
	echo "pyt10: ", print $item->pyt10;echo "<br>";
        echo "pyt11: ", print $item->pyt11;echo "<br>";
        echo "pyt12: ", print $item->pyt12;echo "<br>";
        echo "pyt13: ", print $item->pyt13;echo "<br>";
        echo "pyt14: ", print $item->pyt14;echo "<br>";
		}
}


echo '<br><br>', $formfilter, '<br>';
?>

		</td>
		<td style="width:40%;text-align:left;vertical-align:top;padding-left:10px;font-size:9px;border-left: 2px solid black"> 
			test
		</td>
	</tr>
</table>
</body>
</html>
