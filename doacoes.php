<html>

<head>
    <meta http-equiv="refresh" content="1; URL='doacoes-pag.html'">

</head>

</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('conexao-doacoes.php');

if (isset($_POST['custom'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email_login'];
    $dataNasc = $_POST['data'];
    $digiteV = $_POST['custom'];

    $query = "INSERT INTO Doacoes (id_doacoes, nome, dataNasc, email, totaldoacoes) VALUES (default, '$nome', '$dataNasc','$email', '$digiteV')";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->execute();
        $stmt->close();
        echo "<h1>Aguarde, você será redirecionado a tela de pagamento! <br> For Your Voice agradece!</h1>";
    } else {
        echo "Falha na preparação da declaração SQL" . $stmt->error;
    }
}
?>