<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="bhp.css">
<center> <h3 class="guestbook-header"><br/>Zgloszenia BBI</h3> </center><body>

<?php
	$plik = $_GET['data'];
	$fileweek = substr($plik, 0, 2);
	$fileyear = substr($plik, 2, 4);
	$filemonth = substr($plik, 6, 2);
	$fileday = substr($plik, 8, 2);
	$fileList = glob('0820200219.xml');

	$xml=simplexml_load_file($plik) or die("Error: Cannot create object");
	foreach($xml->children() as $body) 
		{
		$count += substr_count($plik, "2");
		}

	foreach($fileList as $filename)
		{
		$count = 0;
		$count2 = 0;
		$myFile = $plik;
		$fh = fopen($myFile, 'r');
		while(!feof($fh))
			{
			$fr = fread($fh, 8192);
			$count += substr_count($fr, '<formid>');
			$countclass0 += substr_count($fr, '<klasyfikacja>BRAK</klasyfikacja>');
			$countclass1 += substr_count($fr, '<klasyfikacja>1</klasyfikacja>');
			$countclass2 += substr_count($fr, '<klasyfikacja>2</klasyfikacja>');
			$countclass3 += substr_count($fr, '<klasyfikacja>3</klasyfikacja>');
			$countclass4 += substr_count($fr, '<klasyfikacja>4</klasyfikacja>');
			$countclass5 += substr_count($fr, '<klasyfikacja>5</klasyfikacja>');
			$countclass5 += substr_count($fr, '<klasyfikacja>6</klasyfikacja>');
			}
		fclose($fh);
		}

//---------------- Koloryzowanie braku klasyfikacji

function F_klasyfikacjaRG($argu)
                                {
                        if ($argu == "BRAK") {
                                        echo '<div style="background-color:red; width:100%;">', $argu, '</div>';
                                        }

                                else {
                                        echo '<div style="background-color:lightgreen; width:100%;">', $argu, '</div>';;
                                     }
                                }
//-----------------------------------------------------




function f_listaXML()
	{
	global $xml, $plik;
	foreach($xml->children() as $body) {
					$link_address1 = $body->formid;
					$xmlvar1 = $body->imie;
                        	        $xmlvar2 = $body->dzial;
                                	$xmlvar3 = $body->ip;
                         		$xmlvar4 = $body->temat;
                        	        $xmlvar5 = $body->pyt1;
               				$xmlvar6 = $body->pyt2;
					$xmlvar7 = $body->pyt3;
	                                $xmlvar8 = $body->pyt4;
	                                $xmlvar9 = $body->pyt5;
	                                $xmlvar10 = $body->pyt6;
	                                $xmlvar11 = $body->pyt7;
	                                $xmlvar12 = $body->pyt8;
	                                $xmlvar13 = $body->pyt9;
	                                $xmlvar14 = $body->pyt10;
	                                $xmlvar15 = $body->pyt11;
	                                $xmlvar16 = $body->pyt12;
	                                $xmlvar17 = $body->pyt13;
	                                $xmlvar18 = $body->pyt14;
	                                $xmlvar19 = $body->obs1;
	                                $xmlvar20 = $body->obs2;
	                                $xmlvar21 = $body->obs3;
	                                $xmlvar22 = $body->obs4;
	                                $xmlvar23 = $body->obs5;
	                                $xmlvar24 = $body->obs6;
	                                $xmlvar25 = $body->obs7;
	                                $xmlvar26 = $body->obs8;
	                                $xmlvar27 = $body->obs9;
	                                $xmlvar28 = $body->obs10;
	                                $xmlvar29 = $body->obs11;
	                                $xmlvar30 = $body->obs12;
	                                $xmlvar31 = $body->obs13;
	                                $xmlvar32 = $body->obs14;
	                                $xmlvar33 = $body->obas15;
					$xmlvar34 = $body->godzina3;
					$klasyfikacja2 = $body->klasyfikacja;
					$xmlvar35 = $xmlvar5 + $xmlvar6 + $xmlvar7 + $xmlvar8 + $xmlvar9 + $xmlvar10 + $xmlvar11 + $xmlvar12 + $xmlvar13 + $xmlvar14;
					$xmlvar36 = $xmlvar15 + $xmlvar16 + $xmlvar17 + $xmlvar18;
					echo '<tr><td>', F_klasyfikacjaRG($klasyfikacja2), '</td>'; //klasyfikacja
					echo '<td>', $xmlvar35, '</td>'; //ryz
					echo '<td>', $xmlvar36, '</td>'; //akcept
					echo '<td>', $xmlvar34, '</td>'; //godz
					echo '<td>', $xmlvar1, '</td>'; //imie
					echo '<td>', $xmlvar2, '</td>'; //dzia
					echo '<td>', $xmlvar4, '</td>'; //tema
					echo '<td>', "<a href='detailsdeep.php?data=".$plik."&wpis=".$link_address1."'>EDYTUJ</a></td>"; //edycja
				}
			}
?>

<br>
<button onclick="location.href='../bhp.php'" type="button"> Formularz</button>
<button onclick="location.href='BHP-List.php'" type="button"> Lista </button>

<table class="custom_class">
	<tr>

		<th>
			<?php echo ' Rok:', $fileyear, ' miesiac:', $filemonth, ' Dzien:',$fileday, ' tydzien:',$fileweek; ?>
		</th>
	</tr>
	<tr>
		<th>
			PIRAMIDA Bezpieczeństwa
		</th>
		<th>
			WPISY
		</th>

	<tr>
		<td>
			<table>
				<tr>

              				<td>
               					 bla bla
              				</td>
                			<td>
               					 Rocznie
                			</td>
                			<td>
                				Miesięcznie
               				</td>
					<td>
						dfgh
					</td>
				</tr>
				<tr>
					<th width="200px" align="center">
						<div class="trapez trapez-1">
							LTI1st</br>Wypadek ciezki
						</div>
					</th>
					<th width="100px" align="center">
						<div class="trapezOpis">
							<?php echo $body->dzial . ",,,,,,, ";?>
						</div>
					</th>
					<th width="100px" align="center">
						<div class="trapezOpis">
							522
						</div>
					</th>
				</tr>
				<tr>
					<th align="center">
						<div class="trapez trapez-2">
							LTI IInd</br>wypadek przy pracy z L4
						</div>
					</th>
					<th width="100px" align="center">
						<div class="trapezOpis">
							0
						</div>
					</th>
					<th width="200px" align="center">
						<div class="trapezOpis">
						 	test
						</div>
					</th>
				</tr>
				<tr>
					<th align="center">
						<div class="trapez trapez-3">
							MI</br>Uraz lekko, Skaleczenie
						</div>
					</th>
					<th width="100px" align="center">
						<div class="trapezOpis">
							31
						</div>
					 </th>
					<th width="200px" align="center">
						<div class="trapezOpis">
							 17
						</div>
					</th>
				</tr>
				<tr>
					<th align="center">
						<div class="trapez trapez-4">
							NMI</br> Zdarzenie potencjalnie niebezpieczne
						</div>
					</th>
					<th width="100px" align="center">
						<div class="trapezOpis">
							55
						</div>
					</th>
					<th width="200px" align="center">
						<div class="trapezOpis">
							test
						</div>
					</th>
				</tr>
				<tr>
					<th align="center">
						<div class="trapez trapez-5">
							PH</br>Warunki i zachowanie niebezpieczne
						</div>
					</th>
					<th width="100px" align="center">
						<div class="trapezOpis">
							12
						</div>
					</th>
					<th width="200px" align="center">
						 <div class="trapezOpis">
							test
						 </div>
					 </th>
				</tr>
			</table>
		</td>
		<td style="width:40%;text-align:left;vertical-align:top;padding-left:10px;font-size:12px;border-left: 2px solid black">
			<table width=100%>
				<tr>
					<th>
						 Klasyfikacja
					</th>
					<th>
						Ryzykowne
					</th>
					<th>
						Brak akceptacji
					</th>
					<th>
						Godzina
					</th>
					<th>
						Imie
					</th>
					<th>
						Dział
					</th>
					<th>
						Temat
					</th>
					<th>
						Edycja
					</th>
				</tr>
					<?php
						f_listaXML();
					?>
			</table>
		</td>
	</tr>
</table>

</body>
</html>
