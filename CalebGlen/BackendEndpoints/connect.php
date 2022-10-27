<?php

$con = new mysqli('localhost', 'caleb', 'WishWash77&2345', 'clay_countydb');

if ($con) {
} else {
    die(mysqli_error($con));
}
