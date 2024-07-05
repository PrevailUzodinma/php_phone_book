<?php
include("db/conn.php");
$mysqli;

// SQL command to retrieve all data in the database
$sql = "SELECT * from contacts";

// store the result in a variable
$result = $mysqli->query($sql);
// if there are existing rows in the database, display each row
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        foreach($row as $key => $value) {
            echo $key.":". " ".$value." ";
    }
    echo "<br>";
    echo "<br>";
}
}
