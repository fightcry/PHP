
<html>
<link rel="stylesheet" type="text/css" href="../fin.css">
<center> <h3 class="guestbook-header"><br/>WNIOSKI ZAKUPOWE</h3> </center>
<body>
<button onclick="location.href='/fin/fin-lista.php'" type="button"> Lista  </button>

	<form name="myform" action="?action=save" method="post" >

	<table>
	<tr>
		<td>
		<input type="text" name="imie" placeholder="Imie i nazwisko">
		</td>
		<td>
        	<center> <input type="text" name="dzial" placeholder="Symbol stanowiska" required> </center>
		</td>
        	<td>
		<center> <input type="text" name="temat" placeholder="TEST" required> </center>
		</td>
	</tr>
	</table>
<div class="opis">
Wszystkie wnioski zakupowe musza byc składane przez kierownika lub managera działu (Z wyjątkiem IT).<br>		</div>
</table>






	<table style="width:90%">
	<tr>
		<td>
		<center>Pytanie</center>
		</td>
		<td style="width:25%">
		<center> <p> Odpowiedz </p>
		</td>
	</tr>


	<tr>
		<td>
		<br> Czy przedmiot wniosku jest ujęty w budecie?
		</td>
		<td>
		<center>	<input type="radio" name="pyt1" value="0" required>TAK
				<input type="radio" name="pyt1" value="1" required>NIE 
		</center>
		</td>
	</tr>
	<tr>
		<td>
		<br> Miesiąc w budzecie 
		</td>
		<td><center> 
		<select id="miesiac" name="pyt2">
		<option value="1">01. Styczeń</option>
		<option value="2">02. Luty</option>
		<option value="3">03. Fiat</option>
		<option value="4">04. Kwiecień</option>
                <option value="5">05. Maj</option>
                <option value="6">06. Czerwiec</option>
                <option value="7">07. Lipiec</option>
                <option value="8">08. Sierpień</option>
                <option value="9">09. Wrzesień</option>
                <option value="10">10. Październik</option>
                <option value="11">11 Listopad</option>
                <option value="12">12 Grudzień</option>
		</center></td>
  </select>
</td>

	 <tr>
                <td>
                <br> Miesiac realizacji zakupu 
                </td>
                <td><center>
                <select id="miesiac" name="pyt3">
                <option value="1">01. Styczeń</option>
                <option value="2">02. Luty</option>
                <option value="3">03. Fiat</option>
                <option value="4">04. Kwiecień</option>
                <option value="5">05. Maj</option>
                <option value="6">06. Czerwiec</option>
                <option value="7">07. Lipiec</option>
                <option value="8">08. Sierpień</option>
                <option value="9">09. Wrzesień</option>
                <option value="10">10. Październik</option>
                <option value="11">11 Listopad</option>
                <option value="12">12 Grudzień</option>
                </center></td></tr>
	<tr>
		<td>
		<br> Kwota PLN
		</td>
		<td>
		<center> <input type="number" name="pyt4"style="width:100%; height:80px"> <br> </center>
		</td>
	</tr>
	<tr>
		<td>
		<br> Przedmiot wniosku
		</td>
		<td>
		<center><input type="text" name="pyt5"style="width:100%; height:80px"> <br></center>
		</td>
	</tr>
	<tr>
                <td>
                <br> Uzasadnie - specjalista w dziedzinie (IT/MAI)
                </td>
                <td>
 	        <center><input type"text" name="pyt6"style="width:100%; height:80px">"<br></center>
		</td>

	</tr>
	<tr>
		<td>
		<br> Szef dzialu
		</td>
		<td>
		<center>
	        <input type="radio" name="pyt7" value="0" required>TAK
	        <input type="radio" name="pyt7" value="1" required>NIE
		</center>
		</td>
	</tr>
	<tr>
                <td>
                <br> Dyrektor Finansowy
                </td>
                <td>
                <center>
                <input type="radio" name="pyt8" value="0" required>TAK
                <input type="radio" name="pyt8" value="1" required>NIE
                </center>
                </td>

	</tr>
	<tr>
                <td>
                <br> Miesiac zakupu
                </td>
                <td><center>
                <select id="miesiac" name="pyt9">
                <option value="1">01. Styczeń</option>
                <option value="2">02. Luty</option>
                <option value="3">03. Fiat</option>
                <option value="4">04. Kwiecień</option>
                <option value="5">05. Maj</option>
                <option value="6">06. Czerwiec</option>
                <option value="7">07. Lipiec</option>
                <option value="8">08. Sierpień</option>
                <option value="9">09. Wrzesień</option>
                <option value="10">10. Październik</option>
                <option value="11">11 Listopad</option>
                <option value="12">12 Grudzień</option>
                </center></td></tr>

	</tr>
	<tr>
                <td>
                <br>Odmowa - uzasadnienie 
                </td>
                <td>
                <center><input type"text" name="pyt10"style="width:100%; height:80px"><br></center>
                </td>

	</tr>
        <tr>
                <td>
                <br> Data autoryzacji faktury
                </td>
                <td>
                <center><input type"date" name="pyt11"style="width:100%; height:80px"><br></center>
                </td>

        </tr>
        <tr>
                <td>
                <br>Dostawca
                </td>
                <td>
                <center><input type"text" name="pyt12"style="width:100%; height:80px"><br></center>
                </td>

        </tr>
        <tr>
                <td>
                <br>Numer faktury
                </td>
                <td>
                <center><input type"text" name="pyt13"style="width:100%; height:80px"><br></center>
                </td>

        </tr>
        <tr>
                <td>
                <br>Kwota PLN
                </td>
                <td>
                <center><input type"number" name="pyt14"style="width:100%; height:80px"><br></center>
                </td>

        </tr>
        <tr>
                <td>
                <br>Uwagi
                </td>
                <td>
                <center><input type"text" name="pyt5"style="width:100%; height:80px"><br></center>
                </td>

        </tr>

	</table>

	<br> <center> <input type="submit" name="submit" placeholder="Przeslij">  </input>  </center>
	</form>
</body>
</html>



<?php
$datazapisu = date("WYmd");
//$filename = "database/0520200129.xml";
$filename = "fin/$datazapisu.xml";
//$datazapisu = date("WYmd");
$imie = $_POST["imie"];
$godzina = date('"Gi"');
$godzina2 = date('Gi');
$godzina3 = date('G:i');
$dzial = $_POST["dzial"];
$temat = $_POST["temat"];
$opis = $_POST["opis"];
$data = date("d-m-Y  G:i");
$IP = $_SERVER["REMOTE_ADDR"];
$ccc = '"1.0"';

$pyt1 = $_POST["pyt1"]; $pyt2 = $_POST["pyt2"]; $pyt3 = $_POST["pyt3"]; $pyt4 = $_POST["pyt4"]; $pyt5 = $_POST["pyt5"]; $pyt6 = $_POST["pyt6"]; $pyt7 = $_POST["pyt7"];
$pyt8 = $_POST["pyt8"]; $pyt9 = $_POST["pyt9"]; $pyt10 = $_POST["pyt10"]; $pyt11 = $_POST["pyt11"]; $pyt12 = $_POST["pyt12"]; $pyt13 = $_POST["pyt13"]; $pyt14 = $_POST["pyt14"];
$pyt1 = $_POST["pyt15"];

//$pyt1 = $_POST["pyt1"]; $pyt2 = $_POST["pyt2"]; $pyt3 = $_POST["pyt3"]; $pyt4 = $_POST["pyt4"]; $pyt5 = $_POST["pyt5"]; $pyt6 = $_POST["pyt6"]; $pyt7 = $_POST["pyt7"];
//$pyt8 = $_POST["pyt8"]; $pyt9 = $_POST["pyt9"]; $pyt10 = $_POST["pyt10"]; $pyt11 = $_POST["pyt11"]; $pyt12 = $_POST["pyt12"]; $pyt13 = $_POST["pyt13"]; $pyt14 = $_POST["pyt14"];
//$obs1 = $_POST["obs1"]; $obs2 = $_POST["obs2"]; $obs3 = $_POST["obs3"]; $obs4 = $_POST["obs4"]; $obs5 = $_POST["obs5"]; $obs6 = $_POST["obs6"]; $obs7 = $_POST["obs7"];
//$obs8 = $_POST["obs8"]; $obs9 = $_POST["obs9"]; $obs10 = $_POST["obs10"]; $obs11 = $_POST["obs11"]; $obs12 = $_POST["obs12"]; $obs13 = $_POST["obs13"]; $obs14 = $_POST["obs14"];

if(isset( $_POST['submit'] ))
{
$lines = file($filename);
$last = sizeof($lines) - 1 ;
unset($lines[$last]);

//write the new data to the file

if (file_exists($filename)) {
$fp = fopen($filename, 'w');
fwrite($fp, implode('', $lines));
fclose($fp);
file_put_contents($filename, "<aaa>Szlak trafia czlowieka</aaa>\n</form>\n</body>", \FILE_APPEND);
file_put_contents($filename, "<form id=$godzina>\n<formid>$godzina2</formid>\n<godzina3>$godzina3</godzina3>\n<imie>$imie</imie>\n<dzial>$dzial</dzial>\n<temat>$temat</temat>\n<data>$data</data>\n<ip>$IP</ip>\n<pyt1>$pyt1</pyt1><obs1>$obs1</obs1>\n<pyt2>$pyt2</pyt2><obs2>$obs2</obs2>\n<pyt3>$pyt3</pyt3><obs3>$obs3</obs3>\n<pyt4>$pyt4</pyt4><obs4>$obs4</obs4>\n<pyt5>$pyt5</pyt5><obs5>$obs5</obs5>\n<pyt6>$pyt6</pyt6><obs6>$obs6</obs6>\n<pyt7>$pyt7</pyt7><obs7>$obs7</obs7>\n<pyt8>$pyt8</pyt8><obs8>$obs8</obs8>\n<pyt9>$pyt9</pyt9><obs9>$obs9</obs9>\n<pyt10>$pyt10</pyt10><obs10>$obs10</obs10>\n<pyt11>$pyt11</pyt11><obs11>$obs11</obs11>\n<pyt12>$pyt12</pyt12><obs12>$obs12</obs12>\n<pyt13>$pyt13</pyt13><obs13>$obs13</obs13>\n<pyt14>$pyt14</pyt14><obs14>$obs14</obs14>\n<klasyfikacja g=$godzina>BRAK2</klasyfikacja>\n</form>\n</body>", \FILE_APPEND);
}
else {
$fp = fopen($filename, 'w');
fwrite($fp, implode('', $lines));
fclose($fp);
//file_put_contents($filename, "pierwsza linia", \FILE_APPEND);
file_put_contents($filename, "<?xml version=$ccc?>\n<body>\n<form id=$godzina>\n<formid>$godzina2</formid>\n<godzina3>$godzina3</godzina3>\n<imie>$imie</imie>\n<dzial>$dzial</dzial>\n<temat>$temat</temat>\n<data>$data</data>\n<ip>$IP</ip>\n<pyt1>$pyt1</pyt1><obs1>$obs1</obs1>\n<pyt2>$pyt2</pyt2><obs2>$obs2</obs2>\n<pyt3>$pyt3</pyt3><obs3>$obs3</obs3>\n<pyt4>$pyt4</pyt4><obs4>$obs4</obs4>\n<pyt5>$pyt5</pyt5><obs5>$obs5</obs5>\n<pyt6>$pyt6</pyt6><obs6>$obs6</obs6>\n<pyt7>$pyt7</pyt7><obs7>$obs7</obs7>\n<pyt8>$pyt8</pyt8><obs8>$obs8</obs8>\n<pyt9>$pyt9</pyt9><obs9>$obs9</obs9>\n<pyt10>$pyt10</pyt10><obs10>$obs10</obs10>\n<pyt11>$pyt11</pyt11><obs11>$obs11</obs11>\n<pyt12>$pyt12</pyt12><obs12>$obs12</obs12>\n<pyt13>$pyt13</pyt13><obs13>$obs13</obs13>\n<pyt14>$pyt14</pyt14><obs14>$obs14</obs14><klasyfikacja id=$godzina>BRAK2</klasyfikacja>\n\n</form>\n</body>", \FILE_APPEND);
}
}
echo "1";
echo $filename2;
//$fp = fopen("database/$datazapisu.xml", 'w');
//fwrite($fp, implode('', $lines));
//fclose($fp);
//file_put_contents("database/$datazapisu.xml", "<form id=$godzina>\n<formid>$godzina2</formid>\n<godzina3>\n<imie>$imie</imie>\n<dzial>$dzial</dzial>\n<temat>$temat</temat>\n<data>$data</data>\n<ip>$IP</ip>\n<pyt1>$pyt1</pyt1><obs1>$obs1</obs1>\n<pyt2>$pyt2</pyt2><obs2>$obs2</obs2>\n<pyt3>$pyt3</pyt3><obs3>$obs3</obs3>\n<pyt4>$pyt4</pyt4><obs4>$obs4</obs4>\n<pyt5>$pyt5</pyt5><obs5>$obs5</obs5>\n<pyt6>$pyt6</pyt6><obs6>$obs6</obs6>\n<pyt7>$pyt7</pyt7><obs7>$obs7</obs7>\n<pyt8>$pyt8</pyt8><obs8>$obs></obs8>\n<pyt9>$pyt9</pyt9><obs9>$obs9</obs9>\n<pyt10>$pyt10</pyt10><obs10>$obs10</obs10>\n<pyt11>$pyt11</pyt11><obs11>$obs11</obs11>\n<pyt12>$pyt12</pyt12><obs12>$obs12</obs12>\n<pyt13>$pyt13</pyt13><obs13>$obs13</obs13>\n<pyt14>$pyt14</pyt14><obs14>$obs14</obs14>\n</form>\n</body>", \FILE_APPEND);
//}
?>
