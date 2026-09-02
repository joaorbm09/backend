<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Apaga usuario</h1>
    <form action="" method="post">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id"><br>
        <input type="submit" value="Apagar">
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

require_once 'connect.php';

$sql = "DELETE FROM  alunos WHERE id =:id";
$id = 1;
try{
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();
}catch (PDOException $e) {
    echo "Erro: ". $e->getMessage();
}
}
?>
</body>
</html>