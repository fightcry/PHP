<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="bhp.css">
<body>

<?php
$xml=simplexml_load_file("0420200122.xml");
echo $xml->getName() . "<br>";

foreach($xml->children() as $child)
  {
  echo $child->getName() . ": " . $child . "<br>";
  }






/*
$fileList = glob("0420200122.xml");
foreach($fileList as $filename){
$fileweek = substr($filename, 0, 2);
$fileyear = substr($filename, 2, 4);
$filemonth = substr($filename, 6, 2);
$fileday = substr($filename, 8, 10);

$count = 0;
$myFile = $filename;
$fh = fopen($myFile, 'r');
while(!feof($fh)){
$fr = fread($fh, 8192);
$count += substr_count($fr, '<body>');
/*echo $count;*/

echo "1111";
?>


<table>
<tr>
	<th width="200px" align="center">
		<div class="trapez trapez-1">LTI1st</br>Wypadek ciezki</div>
	</th>
	<th width="100px" align="center"><div class="trapezOpis"> test </div> </th>
<th width="100px" align="center"> test </th>
</tr>
<tr>
	<th align="center"> 
		<div class="trapez trapez-2">LTI IInd</br>wypadek przy pracy z L4</div>
	</th>
<th width="200px" align="center"> <div class="trapezOpis"> test </div>  </th>
</tr>
<tr>
	<th align="center"> 
		<div class="trapez trapez-3">MI</br>Uraz lekko, Skaleczenie</div>
	</th>
<th width="200px" align="center"> <div class="trapezOpis"> test </div>  </th>
</tr>
<tr>
	<th align="center"> 
		<div class="trapez trapez-4">NMI</br> Zdarzenie potencjalnie niebezpieczne</div>
	</th>
<th width="200px" align="center"> <div class="trapezOpis"> test </div>  </th>
</tr>
<tr>
	<th align="center"> 
		<div class="trapez trapez-5">PH</br>Warunki i zachowanie niebezpieczne</div>
	</th>
<th width="200px" align="center"> <div class="trapezOpis"> test </div>  </th>
</tr>
</table>
</body>
</html>
