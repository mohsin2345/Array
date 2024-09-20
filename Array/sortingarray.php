<?php
// $arr = array("mohsin","zaki","asif");
// $arr = array("1","2","3","4");
$arr = array("name" => "Mohsin", "state" => "Karachi", "designation" => "PHP Developer");
ksort($arr);

foreach ($arr as $key => $val) {
    echo $key . ": " . $val . "<br>";
}
?>
