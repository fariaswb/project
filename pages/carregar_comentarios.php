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


$sql = "SELECT nickname, comentario FROM comentarios ORDER BY id DESC";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute();
    $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    foreach ($comentarios as $comentario) {
        $nickname = $comentario["nickname"];
        $comentario = $comentario["comentario"];

        echo "<p><strong>$nickname:</strong> $comentario</p>";
    }
} catch (PDOException $e) {
    echo "Erro ao carregar os comentários: " . $e->getMessage();
}
?>