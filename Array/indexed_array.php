<?php
// Create an indexed array
$colors = array("Red", "Green", "Blue", "Yellow");

echo "Colors array: ";
print_r($colors);
echo "<br>";

echo "First color: " . $colors[0] . "<br>";  
echo "Second color: " . $colors[1] . "<br>"; 

echo "All colors:<br>";
foreach ($colors as $color) {
    echo $color . "<br>";
}

$colors[] = "Purple"; 
echo "Updated colors array: ";
print_r($colors);
?>
