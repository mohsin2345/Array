<?php

$user = array("name" => "John", "age" => 25, "city" => "New York");


echo "Original user array: ";
print_r($user);
echo "<br>";


$user["age"] = 30; 

echo "Updated user array: ";
print_r($user);
?>
