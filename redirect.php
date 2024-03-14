<?php

include("./connect.php");

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $name = $_POST['name'];
    $phoneNumber = $_POST['phone'];
    $scantype = $_POST['scan'];

    echo "$name $phoneNumber $scantype";
}
