<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("0420200122.xml");
echo $xml->getName() . "<br>";
 
foreach($xml->children() as $child)
  {
  echo $child->getName() . ": " . $child . "<br>";
  }
?>

</body>
</html>
