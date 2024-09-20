<?php
 echo "wellcome to multi demensional array in php<br>";

 $multidem= array(
    array(2,3,5),
    array(2,4,3),
    array(2,7,5)

 );

//  echo var_dump($multidem);

for ($i=0;$i < count($multidem); $i++) {
   for ($k=0; $k < count($multidem[$i]); $k++){
      echo $multidem[$i][$k];
      echo "  ";
   }
   echo "<br>";
}




?>