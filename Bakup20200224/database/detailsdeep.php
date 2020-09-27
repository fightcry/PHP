<!DOCTYPE html>
<html>
<center> <h3 class="guestbook-header"><br/>Zgloszenia BBI</h3> </center>
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

//----- przypisanie klasyfikacji----

$Opispytania1 = "Piktogramy: ";
$Opispytania2 = "Standard odzieży: ";
$Opispytania3 = "Jakość SOI: ";
$Opispytania4 = "Ergonomia pracy: ";
$Opispytania5 = "Ergonomia stanowiska: ";
$Opispytania6 = "Oświetlenie: ";
$Opispytania7 = "Porządek: ";
$Opispytania8 = "Organizacja: ";
$Opispytania9 = "Procedury: ";
$Opispytania10 = "Instruktaże: ";
$Opispytania11 = "Uwagi do ?????????";
$Opispytania12 = "Reakcja na rozwiązanie: ";
$Opispytania13 = "PPP/kreatywność";
$Opispytania14 = "Troska o kulturę BHP";
$Opispytania15 = "aaaa1";
$Opispytania16 = "aaaa1";
$Opispytania17 = "aaaa1";
$klasa1 = "LTI Ist - Wypadek ciezki";
$klasa2 = 'LTI IInd - wypadek przy pracy z L4';
$klasa3 = "MI - Uraz lekko, Skaleczenie";
$klasa4 = "NMI - Zdarzenie potencjalnie niebezpieczne";
$klasa5 = "PH - Warunki i zachowanie niebezpieczne";
$klasa6 = "PH - Warunki i zachowanie niebezpieczne";

//--------------------------- Konwersja 0/1 na TAK/NIE ----------

function ryzyko($argu) {
			if ($argu == "0") {
					echo '<span style="color: green"> Bezpieczne</spam>';
					} else {
						echo '<span style="color: red">Ryzykowne</spam>';
						}
			}

function akceptacja($argu) {
			if ($argu == "0") {
					echo '<span style="color: green"> Jest akceptacja</spam>';
					} else {
						echo '<span style="color: red"> Brak akceptacji</spam>';
						}
					}

//--------------------------Oznaczenie istniejącej klasyfikaci

function F_klasyfikacja($argu)
{
global $klasa1, $klasa2, $klasa3, $klasa4, $klasa5, $klasa6;


                        if ($argu == "1") {
                                        echo '<span style="color: green">', $klasa1, '</spam>';
					} 
				elseif ($argu == "2") {
							echo '<span style="color: green">', $klasa2, '</spam>';
							}
				elseif ($argu == "3") {
                                                        echo '<span style="color: green">', $klasa3, '</spam>';
                                                        }

				elseif ($argu == "4") {
                                                        echo '<span style="color: green">', $klasa4, '</spam>';
                                                        }

 				elseif ($argu == "5") {
                                                        echo '<span style="color: green">', $klasa5, '</spam>';
                                                        }
 				elseif ($argu == "6") {
                                                        echo '<span style="color: green">', $klasa6, '</spam>';
                                                        }

						else {
							echo '<span style="color: red"> Brak klasyfikacji</spam>';
                                		    }
}


//----------------Funkcja zapisujaca wartosc z klasyfikacji ----------------

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
//------------------------------------------------petla zczytujaca wartosci xml-------

        $xmlStr = file_get_contents($plik);
        $xml = new SimpleXMLElement($xmlStr);
        for ($i = 0; $i < $items->length; $i++) {
                                                echo $i, "<br>";
                                                echo $items->item($i)->nodeValue . "<br>";
                                                }
        $res = $xml->xpath("form/formid[.='{$wpisform}']/parent::*");
        foreach($xml->xpath('//form') as $item) {
                                                $row = simplexml_load_string($item->asXML());
                                                $v = $row->xpath("//formid[. ='{$wpisform}']");

                                               if($v[0]){
                                                        $xmlvar1 = $item->imie;
                                                        $xmlvar2 = $item->dzial;
                                                        $xmlvar3 = $item->ip;
                                                        $xmlvar4 = $item->temat;
                                                        $xmlvar5 = $item->pyt1;
                                                        $xmlvar6 = $item->pyt2;
                                                        $xmlvar7 = $item->pyt3;
                                                        $xmlvar8 = $item->pyt4;
                                                        $xmlvar9 = $item->pyt5;
                                                        $xmlvar10 = $item->pyt6;
                                                        $xmlvar11 = $item->pyt7;
                                                        $xmlvar12 = $item->pyt8;
                                                        $xmlvar13 = $item->pyt9;
                                                        $xmlvar14 = $item->pyt10;
                                                        $xmlvar15 = $item->pyt11;
                                                        $xmlvar16 = $item->pyt12;
                                                        $xmlvar17 = $item->pyt13;
                                                        $xmlvar18 = $item->pyt14;
                                                        $xmlvar19 = $item->obs1;
                                                        $xmlvar20 = $item->obs2;
                                                        $xmlvar21 = $item->obs3;
                                                        $xmlvar22 = $item->obs4;
                                                        $xmlvar23 = $item->obs5;
                                                        $xmlvar24 = $item->obs6;
                                                        $xmlvar25 = $item->obs7;
                                                        $xmlvar26 = $item->obs8;
                                                        $xmlvar27 = $item->obs9;
                                                        $xmlvar28 = $item->obs10;
                                                        $xmlvar29 = $item->obs11;
                                                        $xmlvar30 = $item->obs12;
                                                        $xmlvar31 = $item->obs13;
                                                        $xmlvar32 = $item->obs14;
                                                        $xmlvar33 = $item->obs15;
							$klasyfikacja2 = $item->klasyfikacja; //-- klasyfikacja2 wykorzystana przy zapisie wyboru
							}
						}
?>

<button onclick="location.href='../bhp.php'" type="button"> Formularz</button>
<button onclick="location.href='BHP-List.php'" type="button"> Lista </button>
<table class="custom_class">
        <tr>
		<?php echo "<th> Rok:</th><th> miesiac:</th><th> Dzien:</th><th> Tydzien:</th><th> Klasyfikacja:</th>"?>
	</tr><tr></tr><tr>
		<?php echo '</td><td>', $fileyear, '</td><td>', $filemonth, '</td><td>', $fileday, '</tdh><td>', $fileweek, '</td><td>', F_klasyfikacja($klasyfikacja2), '</td>' ?>
        </tr>
</table>


<table class="custom_class">
	<tr>
		<th>
		</th>
	</tr>
	<tr>
		<th>
			PIRAMIDA
		</th>
		<th>
			Modyfikuj klasyfikację
		</th>
	</tr>
	<tr>
		<td>

<table class="custom_class">
<tr><th>Pytanie</th><th>Status</th><th>Komentarz</th></tr>

<?php
							echo "Imie: ", $xmlvar1,  "<br>";
							echo "Dzial: ", $item->dzial; echo "<br>";
							echo "IP: ", $item->ip;echo "<br><br>";
							echo "Temat: ", $item->temat;echo "<br>";
							echo '<tr><td>', $Opispytania1, '</td><td>', ryzyko($xlmvar5), '</td><td>', $xmlvar19, "</td></tr>";
							echo '<tr><td>', $Opispytania2, '</td><td>', ryzyko($xmlvar6), '</td><td>', $xmlvar20, "</td></tr>";
							echo '<tr><td>', $Opispytania3, '</td><td>', ryzyko($xmlvar7), '</td><td>', $xmlvar21, "</td></tr>";
							echo '<tr><td>', $Opispytania4, '</td><td>', ryzyko($xmlvar8), '</td><td>', $xmlvar22, "</td></tr>";
							echo '<tr><td>', $Opispytania5, '</td><td>', ryzyko($xmlvar9), '</td><td>', $xmlvar23, "</td></tr>";
							echo '<tr><td>', $Opispytania6, '</td><td>', ryzyko($xmlvar10), '</td><td>', $xmlvar24, "</td></tr>";
							echo '<tr><td>', $Opispytania7, '</td><td>', ryzyko($xmlvar11), '</td><td>', $xmlvar25, "</td></tr>";
							echo '<tr><td>', $Opispytania8, '</td><td>', ryzyko($xmlvar12), '</td><td>', $xmlvar26, "</td></tr>";
							echo '<tr><td>', $Opispytania9, '</td><td>', ryzyko($xmlvar13), '</td><td>', $xmlvar27, "</td></tr>";
							echo '<tr><td>', $Opispytania10, '</td><td>', ryzyko($xmlvar14), '</td><td>', $xmlvar28, "</td></tr>";
							echo '<tr><td>', $Opispytania11, '</td><td>', akceptacja($xmlvar15), '</td><td>', $xmlvar29, "</td></tr>";
							echo '<tr><td>', $Opispytania12, '</td><td>', akceptacja($xmlvar16), '</td><td>', $xmlvar30, "</td></tr>";
							echo '<tr><td>', $Opispytania13, '</td><td>', akceptacja($xmlvar17), '</td><td>', $xmlvar31, "</td></tr>";
							echo '<tr><td>', $Opispytania14, '</td><td>', akceptacja($xmlvar18), '</td><td>', $xmlvar31, "</td></tr>";
							$klasyfikacja2 = $item->klasyfikacja; //-- klasyfikacja2 wykorzystana przy zapisie wyboru
?>

</table>
		</td>
		<td style="width:40%;text-align:left;vertical-align:top;padding-left:10px;font-size:12px;border-left: 2px solid black"> 

<?php

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
