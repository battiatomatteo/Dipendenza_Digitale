<?php
    $host="localhost";
    $username="root";
    $password="";
    $db_nome="questionario";
    // connessione al server
    $conn = new mysqli($host, $username, $password, $db_nome);
    if ($conn->connect_errno) {
        exit("ERRORE n.$conn->connect_errno: impossibile connetteri al server: $conn->connect_error");
    }
?>