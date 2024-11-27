<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include "../modelo/estudante.php";

    //Captura de dados digitados
    $cpf = $_POST["txtCPF"];    
    $nome = $_POST["txtNome"];    
    $curso = $_POST["txtCurso"];    
    $idade = $_POST["txtIdade"]; 

    //Criando um objeto (criando um estudante)
    $estudante = new Estudante($cpf, $nome, $curso, $idade);

    //$estudante->setNome("Maria dos Santos");
    //echo $estudante->getNome();

    if($estudante->matricular())
    {
       echo "<h1>Matriculado!</h1>";
    }

    else
    {
        echo "<h1>Não matriculado!</h1>";
    }
    
    ?>
</body>
</html>


