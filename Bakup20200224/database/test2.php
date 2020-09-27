<?php
$plik = "0720200214.xml";
$wpisform = "1217";

// load the document
// the root node is <info/> so we load it into $info
$xmlStr = file_get_contents($plik);
$info = simplexml_load_file($xmlStr);


       for ($i = 0; $i < $items->length; $i++) {
       echo $i, "<br>";
       echo $items->item($i)->nodeValue . "<br>";

        $res = $info->xpath("form/formid[.='{$wpisform}']/parent::*");
        foreach($info->xpath('//form') as $item)
        {
                $row = simplexml_load_string($item->asXML());
                $v = $row->xpath("//formid[. ='{$wpisform}']");
                if($v[0]){
                        echo "Imie: ", $item->imie; echo "<br>";
			}
	}


// save the updated document
//$info->form->klasyfikacja = "ddddaaaa";
//$info->saveXML($plik);
echo "12";

?>


//<?php
//$plik = "0720200214.xml";

//$info = simplexml_load_file($plik);

//$info->form->klasyfikacja = "ddddaaaa";
//$info->saveXML($plik);
//echo "12";

//?>


