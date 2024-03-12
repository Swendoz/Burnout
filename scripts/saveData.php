<?php

require '../database/db_conn.php';


function saveData($name, $mail, $score)
{
    global $conn;

    $sql = "INSERT INTO survey (mail, name, score) VALUES ('$mail', '$name', '$score')";
    $result = $conn->query($sql);

    return $result;
}

$name = $_POST['name'];
$mail = $_POST['mail'];
$score = $_POST['score'];

if (saveData($name, $mail, $score)) {
    echo 'Save data success!';
} else {
    echo 'Save data failed!';
    echo $conn->error;
}
