<!DOCTYPE html>
<html>
<body>

<?php 
dsfgsdfg[][][]skldjnsdnf
// load the data and delete the line from the array 
$lines = file('0420200122.xml'); 
$last = sizeof($lines) - 1 ; 
unset($lines[$last]); 

// write the new data to the file 
$fp = fopen('0420200122.xml', 'w'); 
fwrite($fp, implode('', $lines)); 
fclose($fp); 

?>
</body>
</html>
