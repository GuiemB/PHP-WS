<?php

$jmperezperez = array(true);
echo "PHP Array<br>";
echo var_dump($jmperezperez)."<br>";
echo print_r($jmperezperez)."<br>";

$jmperezperez_json = json_encode($jmperezperez);
echo "JSON Array format<br>";
echo var_dump($jmperezperez_json)."<br>";
echo print_r($jmperezperez_json)."<br>";

$jmperezperez_2 = array(true, false, false);
echo "<br>PHP Array<br>";
echo var_dump($jmperezperez_2)."<br>";
echo print_r($jmperezperez_2)."<br>";

$jmperezperez_json_2 = json_encode($jmperezperez_2);
echo "JSON Array format<br>";
echo var_dump($jmperezperez_json_2)."<br>";
echo print_r($jmperezperez_json_2)."<br>";


$jmperezperez_json_3   = json_decode($jmperezperez_json_2);
echo $jmperezperez_json_3[0]

$element_3  = json_decode($element_3, true);
echo "jmperezperez" .$result_arr_ass["jmperezperez"]. "<br>";
echo "thelinmichael" .$result_arr_ass["thelinmichael"]. "<br>";
echo "wizzler" .$result_arr_ass["wizzler"]. "<br>";

curl_setopt($ch, CURLOPT_HTTPHEADER)

try {

  $Cat1->oneYearOlder();
}
catch (Exception $e) {
    echo "Exception message is: " . $e->getMessage() . "<br>";
}















?>
