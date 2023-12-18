<html>
<img src="agradecimento.svg">
</html> 

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('conexao-doacoes.php');

if (isset($_POST['numerocartao'])) {
    $numeroCartao = $_POST['numerocartao'];
    $nomeCartao = $_POST['nomecartao'];
    $cvv = $_POST['cvv'];
    $mesVenc = $_POST['mesvenc'];
    $anoVenc = $_POST['anovenc'];

    $query = "INSERT INTO pagamentos (id_pagamento, numeroCartao, nomeCartao, cvv, mesVenc, anoVenc) VALUES (default, '$numeroCartao', '$nomeCartao', '$cvv', '$mesVenc', '$anoVenc')";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->execute();
        $stmt->close();
    } else {
        echo "Falha na preparação da declaração SQL" . $stmt->error;
    }
}
?>