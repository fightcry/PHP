<html>
<link rel="stylesheet" type="text/css" href="bhp.css">
<center> <h3 class="guestbook-header"><br/>Zgloszenia BBI</h3> </center>
<body>
<button onclick="location.href='/database/BHP-List.php'" type="button"> Lista  </button>

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
		<center> <input type="text" name="temat" placeholder="Ilosc osob obserwowanych" required> </center>
		</td>
	</tr>
	</table>
<div class="opis">
Przed rozpoczęciem obserwacji udaj się na obserwowane stanowisko. Przedstaw i przywitaj się z pracownikiem. Powiedz, że przez kilka minut będziesz obserwował jego pracę. Następnie poprosisz o chwilę rozmowy, celem podsumowania tej obserwacji. Przypomnij na wstępie, że obserwacja jest anonimowa. Wypełniana karta posłuży zarejestrowaniu działań bezpiecznych lub ryzykownych, które będą przedmiotem podsumowania w rozmowie końcowej.<br>
		</div>
</table>
	<table style="width:90%">
	<tr>
		<td>
		<center>OBSERWUJ ZACHOWANIE PRACOWNIKA</center>
		</td>
		<td style="width:8%">
		<center> <p> Bezpieczne </p>
		</td>
		<td style="width:8%">
		<center> <p> Ryzykowne </p>
		</td>
		<td>
		<center> <p> ODNOTUJ ZAOBSERWOWANE ZACHOWANIA RYZYKOWNE / W PODSUMOWANIU ZAPROPONUJ ROZWIĄZANIA </center>
	</tr>
	<tr>
		<td>
		<br> Spójrz na oznaczenie stanowiska pracy oraz piktogramy nakazujące używanie  środków ochrony indywidualnej (ŚOI). Czy pracownik używa odpowiednich środków ochrony indywidualnej?
		</td>
		<td>
		<center> <input type="radio" name="pyt1" value="0" required> </center>
		</td>
		<td>
		<center> <input type="radio" name="pyt1" value="1" required> </center>
		</td>
		<td>
		<input type="text" name="obs1" placeholder="PROBLEM / PROPOZYCJA ROZWIĄZANIA" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		<br> Zwróć uwagę podczas obserwacji:  <br> <br>
		Czy pracownik nosi odzież roboczą zgodnie ze standardem (t-shirt i koszula flanelowa są włożone do ogrodniczek, bluza do pasa jest zapięta)?
		</td>
		<td>
		<center> <input type="radio" name="pyt2" value="0" required> <br> </center>
		</td>
		<td>
		<center> <input type="radio" name="pyt2" value="1" required> <br> </center>
		</td>
		<td>
		<input type="text" name="obs2" placeholder="PROBLEM / PROPOZYCJA ROZWIĄZANIA" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		<br> Czy środki ochrony indywidualnej (odzież robocza, obuwie, maseczki, półmaski, rękawice, stopery, nauszniki) są jakościowo w dobrym stanie?
		</td>
		<td>
		<center> <input type="radio" name="pyt3" value="0" required> <br> </center>
		</td>
		<td>
		<center> <input type="radio" name="pyt3" value="1" required> <br> </center>
		</td>
		<td>
		<input type="text" name="obs3" placeholder="PROBLEM / PROPOZYCJA ROZWIĄZANIA" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		<br> Czy pracownik stosuje ergonomiczną postawę podczas ręcznych prac transportowych (podczas pobierania i podnoszenia z poziomu posadzki ugina nogi w kolanach)?
		</td>
		<td>
		<center> <input type="radio" name="pyt4" value="0" required> <br> </center>
		</td>
		<td>
		<center> <input type="radio" name="pyt4" value="1" required> <br> </center>
		</td>
		<td>
		<input type="text" name="obs4" placeholder="PROBLEM / PROPOZYCJA ROZWIĄZANIA" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		<br> Czy stanowisko pracy jest ergonomiczne (podczas czynności pozycja stojąca wyprostowana, elementy i narzędzia w obrębie zasięgu dłoni, wysokość stołu roboczego odpowiednia, nie garbi się i nie nachyla nad maszyną, stołem roboczym)?
		</td>
		<td>
		<center> <input type="radio" name="pyt5" value="0" required> <br> </center>
		</td>
		<td>
		<center> <input type="radio" name="pyt5" value="1" required> <br> </center>
		</td>
		<td>
		<input type="text" name="obs5" placeholder="PROBLEM / PROPOZYCJA ROZWIĄZANIA" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		<br> Czy stanowisko pracy ma zapewnione odpowiednie oświetlenie (zapytaj pracownika czy ma w tym zakresie swoje uwagi)?
		</td>
		<td>
		<center> <input type="radio" name="pyt6" value="0" required> <br> </center>
		</td>
		<td>
		<center> <input type="radio" name="pyt6" value="1" required> <br> </center>
		</td>
		<td>
		<input type="text" name="obs6" placeholder="PROBLEM / PROPOZYCJA ROZWIĄZANIA" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		<br> Czy na stanowisku pracy jest porządek?  Jeśli nie ma porządku, wspólnie zaproponujcie rozwiązanie problemu.
		</td>
		<td>
		<center> <input type="radio" name="pyt7" value="0" required> <br> <center>
		</td>
		<td>
		<center> <input type="radio" name="pyt7" value="1" required> <br> </center>
		</td>
		<td>
		<input type="text" name="obs7" placeholder="PROBLEM / PROPOZYCJA ROZWIĄZANIA" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		<br> Czy organizacja pracy na stanowisku jest odpowiednia (zapytaj pracownika czy ma w tym zakresie swoje uwagi)?  W przypadku uwag i pomysłów, zachęć w rozmowie pracownika do zgłoszenia ich na tablicy wizualnego zarządzania (TWZ) 
		</td>
		<td>
		<center> <input type="radio" name="pyt8" value="0" required> <br> </center>
		</td>
		<td>
		<center> <input type="radio" name="pyt8" value="1" required> <br> </center>
		</td>
		<td>
		<input type="text" name="obs8" placeholder="PROBLEM / PROPOZYCJA ROZWIĄZANIA" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		<br> Czy pracownik przestrzega procedur bezpieczeństwa (np. osłony na maszynie nie są zdjęte; w momencie opuszczenia stanowiska pracy zabezpiecza/wyłącza maszynę)?
		</td>
		<td>
		<center> <input type="radio" name="pyt9" value="0" required> <br> </center>
		</td>
		<td>
		<center> <input type="radio" name="pyt9" value="1" required> <br> </center>
		</td>
		<td>
		<input type="text" name="obs9" placeholder="PROBLEM / PROPOZYCJA ROZWIĄZANIA" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		<br> Czy pracownik zapoznał się z instrukcjami stanowiskowymi (jego podpis powinien być na druku DR-02 w czerwonym segregatorze na stanowisku pracy)?
		</td>
		<td>
		<center> <input type="radio" name="pyt10" value="0" required> </center>
		</td>
		<td>
		<center> <input type="radio" name="pyt10" value="1" required> </center>
		</td>
		<td>
		<input type="text" name="obs10" placeholder="PROBLEM / PROPOZYCJA ROZWIĄZANIA" style="width:100%; height:80px">
		</td>
	</tr>
	</table>

<div class="opis">Gdy zakończysz obserwację, poczekaj aż pracownik zakończy czynności. Następnie podejmij rozmowę z pracownikiem i przekaż mu swoje spostrzeżenia. W prostych słowach powiedz co zauważyłeś. Zaproponuj lub wspólnie ustalcie rozwiązanie do każdego zaobserwowanego problemu. Odnotuj propozycje rozwiązania. Po skończonej obserwacji podziękuj za obserwację i zaangażowanie pracownika. Nie zapomnij udzielić pochwały jeśli uważasz, że wynika to z obserwacji. Pożegnaj się z pracownikiem. Następnie wypełnij dalszą część karty. Przekreśl nieodpowiednią odpowiedź i zapisz ewentualne uwagi. Przekaż kartę do działu BHP. <br> <br>
</div>
	<table style="width:90%">
	<tr>
		<td style="width:20%">
		Reakcja pracownika na wskazanie działań ryzykownych
		</td>
		<td style="width=8%">
		<center> JEST AKCEPTACJA <br>
		<input type="radio" name="pyt11" value="0" required> </center>
		</td>
		<td style="width=8%">
		<center> BRAK AKCEPTACJI <br>
		<input type="radio" name="pyt11" value="1" required> </center>
		</td>
		<td>
		<input type="text" name="obs11" placeholder="UWAGI:" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		Reakcja pracownika na propozycję rozwiązania
		</td>
		<td>
		<center> JEST AKCEPTACJA <br>
		<input type="radio" name="pyt12" value="0" required> </center>
		</td>
		<td>
		<center> BRAK AKCEPTACJI <br>
		<input type="radio" name="pyt12" value="1" required> </center>
		<td>
		<input type="text" name="obs12" placeholder="UWAGI:" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		Kreatywność pracownika i jego propozycje (czy w ostatnim czasie zgłaszał pomysły PPP).
		</td>
		<td>
		<center> JEST <br>
		<input type="radio" name="pyt13" value="0" required> </center>
		</td>
		<td>
		<center> BRAK <br>
		<input type="radio" name="pyt13" value="1" required> </center>
		</td>
		<td>
		<input type="text" name="obs13" placeholder="UWAGI:" style="width:100%; height:80px">
		</td>
	</tr>
	<tr>
		<td>
		Troska o bezpieczeństwo współpracowników w zakładzie pracy.
        	</td>
		<td>
		<center> JEST <br>
		<input type="radio" name="pyt14" value="0" required> </center>
		</td>
		<td>
		<center> BRAK <br>
		<input type="radio" name="pyt14" value="1" required> </center>
		</td>
		<td>
		<input type="text" name="obs14" placeholder="UWAGI:" style="width:100%; height:80px">
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
$filename = "database/$datazapisu.xml";
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
$obs1 = $_POST["obs1"]; $obs2 = $_POST["obs2"]; $obs3 = $_POST["obs3"]; $obs4 = $_POST["obs4"]; $obs5 = $_POST["obs5"]; $obs6 = $_POST["obs6"]; $obs7 = $_POST["obs7"];
$obs8 = $_POST["obs8"]; $obs9 = $_POST["obs9"]; $obs10 = $_POST["obs10"]; $obs11 = $_POST["obs11"]; $obs12 = $_POST["obs12"]; $obs13 = $_POST["obs13"]; $obs14 = $_POST["obs14"];

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
file_put_contents($filename, "<form id=$godzina>\n<formid>$godzina2</formid>\n<godzina3>$godzina3</godzina3>\n<imie>$imie</imie>\n<dzial>$dzial</dzial>\n<temat>$temat</temat>\n<data>$data</data>\n<ip>$IP</ip>\n<pyt1>$pyt1</pyt1><obs1>$obs1</obs1>\n<pyt2>$pyt2</pyt2><obs2>$obs2</obs2>\n<pyt3>$pyt3</pyt3><obs3>$obs3</obs3>\n<pyt4>$pyt4</pyt4><obs4>$obs4</obs4>\n<pyt5>$pyt5</pyt5><obs5>$obs5</obs5>\n<pyt6>$pyt6</pyt6><obs6>$obs6</obs6>\n<pyt7>$pyt7</pyt7><obs7>$obs7</obs7>\n<pyt8>$pyt8</pyt8><obs8>$obs8</obs8>\n<pyt9>$pyt9</pyt9><obs9>$obs9</obs9>\n<pyt10>$pyt10</pyt10><obs10>$obs10</obs10>\n<pyt11>$pyt11</pyt11><obs11>$obs11</obs11>\n<pyt12>$pyt12</pyt12><obs12>$obs12</obs12>\n<pyt13>$pyt13</pyt13><obs13>$obs13</obs13>\n<pyt14>$pyt14</pyt14><obs14>$obs14</obs14>\n<klasyfikacja>BRAK</klasyfikacja>\n</form>\n</body>", \FILE_APPEND);
}
else {
$fp = fopen($filename, 'w');
fwrite($fp, implode('', $lines));
fclose($fp);
file_put_contents($filename, "<?xml version=$ccc?>\n<body>\n<form id=$godzina>\n<formid>$godzina2</formid>\n<godzina3>$godzina3</godzina3>\n<imie>$imie</imie>\n<dzial>$dzial</dzial>\n<temat>$temat</temat>\n<data>$data</data>\n<ip>$IP</ip>\n<pyt1>$pyt1</pyt1><obs1>$obs1</obs1>\n<pyt2>$pyt2</pyt2><obs2>$obs2</obs2>\n<pyt3>$pyt3</pyt3><obs3>$obs3</obs3>\n<pyt4>$pyt4</pyt4><obs4>$obs4</obs4>\n<pyt5>$pyt5</pyt5><obs5>$obs5</obs5>\n<pyt6>$pyt6</pyt6><obs6>$obs6</obs6>\n<pyt7>$pyt7</pyt7><obs7>$obs7</obs7>\n<pyt8>$pyt8</pyt8><obs8>$obs8</obs8>\n<pyt9>$pyt9</pyt9><obs9>$obs9</obs9>\n<pyt10>$pyt10</pyt10><obs10>$obs10</obs10>\n<pyt11>$pyt11</pyt11><obs11>$obs11</obs11>\n<pyt12>$pyt12</pyt12><obs12>$obs12</obs12>\n<pyt13>$pyt13</pyt13><obs13>$obs13</obs13>\n<pyt14>$pyt14</pyt14><obs14>$obs14</obs14><klasyfikacja>BRAK</klasyfikacja>\n\n</form>\n</body>", \FILE_APPEND);
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
