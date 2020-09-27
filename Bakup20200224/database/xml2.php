<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("0420200122.xml") or die("Error: Cannot create object");
foreach($xml->children() as $body) {
        echo $body->to . ", ";
        echo $body->dzial . ", ";
        echo $body->imie . ", ";
        echo $body->price . "<br>";
}
?>

</body>
</html>
