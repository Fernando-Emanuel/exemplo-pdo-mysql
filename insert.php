<?php
require_once './vendor/autoload.php';

use ExemploPDOMySQL\MySQLConnection; //PDO;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bd = new MySQLConnection(); //new PDO('mysql:host=localhost;dbname=biblioteca', 'root', '');
    $comando = $bd->prepare('INSERT INTO generos(nome) VALUES (:nome)');
    $comando->execute([':nome' => $_POST['nome']]);
    header('Location:index.php');
}
$_title = 'Novo Gênero';

?>

<?php include('./includes/header.php'); ?>

            <h1>Novo Gênero</h1>
            <form action="insert.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" />
                </div>
                <br />
                <a class="btn btn-secondary" href="index.php">Voltar</a>
                <button class="btn btn-success" type="submit">Salvar</button>
            </form>

<?php include('.includes/footer.php'); ?>