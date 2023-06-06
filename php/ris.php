<?php
require_once("../config/connessione.php");
if (isset($_POST["invio"])) {
    $user = $_POST["user"];
    $d1 = $_POST["d1"];
    $d2 = $_POST["d2"];
    $d3 = $_POST["d3"];
    $d4 = $_POST["d4"];
    $d5 = $_POST["d5"];
    $d6 = $_POST["d6"];

    $ins = "INSERT INTO risposte (username, domanda_1 , domanda_2 , domanda_3 , domanda_4 , domanda_5 , domanda_6 ) 
    VALUES ('$user','$d1', '$d2', '$d3', '$d4', '$d5', '$d6');";

    if ($conn->query($ins)) {
        session_start();
        $_SESSION["user"] = $user;
        header("location: grafici.php");
    } else {
        echo "L'invio dati non è andato a buon fine : $conn->error ";
    }
}
?>