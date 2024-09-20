<?php
 echo "Wellcome to associative arrays in php";

 $favcol = array ('mohsin'=> 'black' ,'fahad' => 'white', 'usman' => 'green');

 foreach ($favcol as $key => $value)
 {
    echo "<br>favourite colour of $key is $value";
 }

?>