<?php

$host = "localhost"; 
$dbname = "carregar_comentarios"; 
$user = "root"; 
$password = ""; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $nickname = $_POST["nickname"];
    $comment = $_POST["comment"];

 
    $sql = "INSERT INTO comentarios (nickname, comentario) VALUES (:nickname, :comentario)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":nickname", $nickname);
    $stmt->bindParam(":comentario", $comment);

    try {
        $stmt->execute();
        echo "Comentário enviado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao enviar o comentário: " . $e->getMessage();
    }
}
?>
