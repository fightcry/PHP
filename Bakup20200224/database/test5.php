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
$p_cnt = count($xml->form);
$para = $_POST["klasyf"];
$klawpis = 'klasyfikacja g="'.$wpisform.'"';

//----------------------------------------------------
// PODMIENIA WSZYSTKIE WPISY W KATEGORII
//---------------------------------
//if ($para > 0) {
//                        $dom = new DOMDocument();
//                        $dom->load($plik);
//			$response = $dom->getElementsByTagName("form[@id='1302']");
//	                  $response = $dom->getElementById('1302')->tagName;
//			foreach ($response as $node){
//							$node->nodeValue = $para;
// 				$response->nodeValue = "2";
//						  } 
//				$dom->save($plik);
//              }
//-------------------------------------------------------


//----------------------------------------------------
// PODMIENIA WSZYSTKIE WPISY W KATEGORII



//---------------------------------test 5 

if ($para > 0) {

        $xmlStr = file_get_contents($plik);
        $xml = new SimpleXMLElement($xmlStr);

        for ($i = 0; $i < $items->length; $i++) {
        echo $i, "<br>";
        echo $items->item($i)->nodeValue . "<br>";
}

        $res = $xml->xpath("form/formid[.='{$wpisform}']/parent::*");
        foreach($xml->xpath('//form') as $item)
        {
                $row = simplexml_load_string($item->asXML());
                $v = $row->xpath("//formid[. ='{$wpisform}']");
                if($v[0]){
                        $klasyfikacja2 = $item->klasyfikacja;
                        $item->klasyfikacja = $para;
                        $xml->saveXML($plik);

                        }
        }





                                                }
//                              $dom->save($plik);
 //             }
//-------------------------------------------------------


echo "-----<br>";
//printf('The <node> tag is defined on line %d', $xml->getElementsByTagName('klasyfikacja')->item(0)->getLineNo());
echo "-----<br>";
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

<table class="custom_class">
<tr><th>Pytanie</th><th>Komentarz</th></tr>

<?php
	$xmlStr = file_get_contents($plik);
	$xml = new SimpleXMLElement($xmlStr);
//	$formfilter = $wpisform;

	for ($i = 0; $i < $items->length; $i++) {
	echo $i, "<br>";
	echo $items->item($i)->nodeValue . "<br>";
}

	$res = $xml->xpath("form/formid[.='{$wpisform}']/parent::*");
	foreach($xml->xpath('//form') as $item) 
	{
		$row = simplexml_load_string($item->asXML());
		$v = $row->xpath("//formid[. ='{$wpisform}']");
		if($v[0]){
			echo "Imie: ", $item->imie; echo "<br>";
			echo "Dzial: ", $item->dzial; echo "<br>";
			echo "IP: ", $item->ip;echo "<br><br>";
			echo "Temat: ", $item->temat;echo "<br>";
			echo '<tr><td>', "pyt1: ", $item->pyt1, '</td><td>', "Komentarz: ", $item->obs1, "</td></tr>";
			echo '<tr><td>', "pyt2: ", $item->pyt2, '</td><td>', "Komentarz: ", $item->obs2, "</td></tr>";
			echo '<tr><td>', "pyt3: ", $item->pyt3, '</td><td>', "Komentarz: ", $item->obs3, "</td></tr>";
			echo '<tr><td>', "pyt4: ", $item->pyt4, '</td><td>', "Komentarz: ", $item->obs4, "</td></tr>";
			echo '<tr><td>', "pyt5: ", $item->pyt5, '</td><td>', "Komentarz: ", $item->obs5, "</td></tr>";
			echo '<tr><td>', "pyt6: ", $item->pyt6, '</td><td>', "Komentarz: ", $item->obs6, "</td></tr>";
			echo '<tr><td>', "pyt7: ", $item->pyt7, '</td><td>', "Komentarz: ", $item->obs7, "</td></tr>";
			echo '<tr><td>', "pyt8: ", $item->pyt8, '</td><td>', "Komentarz: ", $item->obs8, "</td></tr>";
			echo '<tr><td>', "pyt9: ", $item->pyt9, '</td><td>', "Komentarz: ", $item->obs9, "</td></tr>";
			echo '<tr><td>', "pyt10: ", $item->pyt10, '</td><td>', "Komentarz: ", $item->obs10, "</td></tr>";
			echo '<tr><td>', "pyt11: ", $item->pyt11, '</td><td>', "Komentarz: ", $item->obs11, "</td></tr>";
			echo '<tr><td>', "pyt12: ", $item->pyt12, '</td><td>', "Komentarz: ", $item->obs12, "</td></tr>";
			echo '<tr><td>', "pyt13: ", $item->pyt13, '</td><td>', "Komentarz: ", $item->obs13, "</td></tr>";
			echo '<tr><td>', "pyt14: ", $item->pyt14, '</td><td>', "Komentarz: ", $item->obs14, "</td></tr>";

			$klasyfikacja2 = $item->klasyfikacja;


			}
	}
?>

</table>
		</td>
		<td style="width:40%;text-align:left;vertical-align:top;padding-left:10px;font-size:12px;border-left: 2px solid black"> 

<?php
echo "<br>ilość wspisów ", $xml->count(), "<br>";
	foreach($xml->xpath('//form') as $item) 
		{
		$row = simplexml_load_string($item->asXML());
		$v = $row->xpath("//formid[. ='{$wpisform}']");
    		if($v[0])
			{
			echo "Aktualnie sklasyfikowane jako: ", $item->klasyfikacja, "   -   ", $para;
			echo "<br>aaaaa - ", $node ;
			echo $item->count();
		}
		}
//printf("%d offers.\n", $xml->form->count() );


echo '<form name="myform2" action="?data=', $plik, '&wpis=', $wpisform, '&action=save" method="post" >';
?>
				<table>
					<tr><th> ZAZNACZ  </th> <th> OPIS GRUPY </th></tr>
					<tr><td><input type ="radio" name="klasyf" value="1" required></input></td><td>LTI Ist - Wypadek ciezki<br></td></tr>
					<tr><td><input type ="radio" name="klasyf" value="2" required></input></td><td>LTI IInd - wypadek przy pracy z L4<br></td></tr>
					<tr><td><input type ="radio" name="klasyf" value="3" required></input></td><td>MI - Uraz lekko, Skaleczenie<br></td></tr>
					<tr><td><input type ="radio" name="klasyf" value="4" required></input></td><td>NMI - Zdarzenie potencjalnie niebezpieczne<br></td></tr>
					<tr><td><input type ="radio" name="klasyf" value="5" required></input></td><td>PH - Warunki i zachowanie niebezpieczne<br></td></tr>
					<tr><td><input type ="radio" name="klasyf" value="6" required></input></td><td>PH - Warunki i zachowanie niebezpieczne<br></td></tr>
				</table><br><br>
<input type="submit" name="submit" placeholder="Przeslij"> </input> 
</form>
                </td>
        </tr>
</table>
</body>
</html>
