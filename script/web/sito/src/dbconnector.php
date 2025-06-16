<?php

$conn = new mysqli('database', 'usersito', 'prova', 'sito');

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

?>