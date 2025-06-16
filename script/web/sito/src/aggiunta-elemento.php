<?php
require './repository.php';
if (isset($_POST["cNome"]) && isset($_POST["cCogn"])) {
    $nome = $_POST["cNome"];
    $cogn = $_POST["cCogn"];
    $repo->add_element($nome, $cogn);
    http_response_code(200);
}else{
    http_response_code(400);
}
?>