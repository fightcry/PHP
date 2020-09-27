<html>
<link rel="stylesheet" type="text/css" href="bhp.css">
<center> <h3 class="guestbook-header"><br/>Zgloszenia BBI</h3> </center><body>
<body>
<button onclick="location.href='../bhp.php'" type="button"> Formularz</button>
<button onclick='$roczek=15' type="button">2019</button>
<table class="custom_class">

<?php
$topicklasa1 = "LTI 1st";
$topicklasa2 = "LTI 2nd";
$topicklasa3 = "MI";
$topicklasa4 = "NMI";
$topicklasa5 = "PH";
$topicklasa0 = "Brak klasyfikacji";


//---------------- Koloryzowanie braku klasyfikacji

function F_klasyfikacjaRG($argu)
				{
global $count2;

                        if ($argu == 0) {
                                        echo '<div style="background-color:lightgreen; width:100%;">', $count2, '</div>';
                                        }

                                else {
                                        echo '<div style="background-color:red; width:100%;">', $count2, '</div>';;
                                     }
				}
//-----------------------------------------------------

echo F_klasyfikacjaRG(0);


echo "<tr><th>PLIK</th><th>Tydzień</th><th>Rok</th><th>Miesiac</th><th>Dzien</th><th>Ilosc Wpisow</th><th>", $topicklasa0, "</th><th>", $topicklasa1,'</th><th>', $topicklasa2, '</th><th>', $topicklasa3, '</th><th>', $topicklasa4, '</th><th>', $topicklasa5, '</th><th>Zobacz</th></tr>';
$fileList = glob('??????????.xml');
foreach($fileList as $filename){
$fileweek = substr($filename, 0, 2);
$fileyear = substr($filename, 2, 4);
$filemonth = substr($filename, 6, 2);
$fileday = substr($filename, 8, 2);

$count = 0;
$klasa1 = 0;
$klasa2 = 0;
$klasa3 = 0;
$klasa4 = 0;
$klasa5 = 0;
$klasa6 = 0;
$count2 = 0;
$myFile = $filename;
$fh = fopen($myFile, 'r');
while(!feof($fh)){
$fr = fread($fh, 8192);
$count += substr_count($fr, '<formid>');
$count2 += substr_count($fr, '<klasyfikacja>BRAK</klasyfikacja>');
$klasa1 += substr_count($fr, '<klasyfikacja>1</klasyfikacja>');
$klasa2 += substr_count($fr, '<klasyfikacja>2</klasyfikacja>');
$klasa3 += substr_count($fr, '<klasyfikacja>3</klasyfikacja>');
$klasa4 += substr_count($fr, '<klasyfikacja>4</klasyfikacja>');
$klasa5 += substr_count($fr, '<klasyfikacja>5</klasyfikacja>');

}
fclose($fh);
echo $roczek;
echo '<tr><td>', $filename, '</td><td>', $fileweek,'</td><td>',  $fileyear ,'</td><td>',  $filemonth,'</td><td>',  $fileday, '</td><td>', $count, ' </td><td>', F_klasyfikacjaRG($count2), '</td><td>', $klasa1, '</td><td>', $klasa2, '</td><td>', $klasa3, '</td><td>', $klasa4, '</td><td>', $klasa5, '</td><td><a href=details.php?data=', $filename, ' > ZOBACZ </a><BR></td></tr>';
}
?>
</table>
</body>
</html>
