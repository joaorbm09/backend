<?php 
require_once "connect.php";

$sql = "INSERT INTO  alunos (nome, turma, nascimento, ativo, email) VALUES(:nome, :turma, :nascimento, :ativo, :email)";
try{
$stmt = $conexao->prepare($sql);
$stmt->bindValue(":nome", "Kassyla");
$stmt->bindValue(":turma", "I1D46A" );
$stmt->bindValue(":nascimento", "1989-08-31");
$stmt->bindValue(":ativo", "true");
$stmt->bindValue(":email", "joao.w.matos@edu.senai.br");

$stmt->execute();
echo "aluno inserido com sucesso!";

} catch(PDOException $e) {
    echo "Erro: ". $e->getMessage();

}
?>