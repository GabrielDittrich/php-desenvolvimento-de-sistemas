<?php require_once 'funcoes.php';

// se tentarmos acessar esta página via GET
if (form_nao_enviado()) {
    // redireciona para a 'index' enviando o codigo de erro 0
    header('location:index.php?code=0');
    exit();
}
if (form_em_branco()) { // se houver campos em branco no form
    // redireciona para a 'index' enviando o codigo de erro 2
    header('location:index.php?code=2');
    exit();
}

$usuario   = $_POST['usuario'];
$senha     = $_POST['senha'];

require_once 'conexao.php';

$conn = conectar_banco();

$query = "SELECT * FROM tb_usuarios WHERE usuario LIkE ? AND senha LIkE ?";

$stmt = mysqli_prepare($conn, $query);

if (!$stmt) {
    header('location:index.php?code=3'); // erro ao preparar consulta
    exit();
}

mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);

if (!mysqli_execute($stmt)) {
    header('location:index.php?code=4'); // erro ao executar comando
    exit();
}

// obriga o statement a registrar o numero da linha afetada pelo comando sql executado
mysqli_stmt_store_result($stmt);

// armazena o numero de linha afetadas pelo statement
$linhas = mysqli_stmt_num_rows($stmt);

// linhas menor ou igual a zero significa que o usuario ou senha estão invalidos 
if($linha <=0){
    header('location:index.php?code=1'); // usuario ou senha invalidos
    exit();
}

session_start();
$_SESSION['usuario'] = $usuario;
$_SESSION['senha']   = $senha;

header('location:home.php');
?>
