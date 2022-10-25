<?php

$con=new mysqli('localhost', 'caleb', '', 'clay_countydb');

if ($con) {
} else {
    die(mysqli_error($con));
}

?>
