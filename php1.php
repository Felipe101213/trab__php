<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cep = $_POST["cep"];
    $logradouro = $_POST["logradouro"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];

    // Aqui você pode realizar o cadastro no banco de dados ou realizar outras operações necessárias.
    // Por exemplo, você pode utilizar um ORM como Eloquent (Laravel) ou PDO para interagir com o banco de dados.
    
    // Exemplo simples de exibição dos dados cadastrados:
    echo "CEP: $cep <br>";
    echo "Logradouro: $logradouro <br>";
    echo "Bairro: $bairro <br>";
    echo "Cidade: $cidade <br>";
    echo "Estado: $estado <br>";
}
?>
