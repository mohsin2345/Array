<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "crudoperation";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection Successful<br>";
}

// Replace 'name' with the actual column name you want to check
$sql = "DELETE FROM `crud` WHERE `name`='faizan'";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result){
    echo "Delete successfully";
}
else{
    $err =mysqli_error($conn);
    echo "Not Delete sucessfully due to this error ---> $err";
}

// mysqli_close($conn); // Close the connection
?>
