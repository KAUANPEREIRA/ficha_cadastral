
<?php include('inc/dados.php')?>
<?php include('funcoes/index.php')?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <style>
        <?php include('css/style.css');?>
    </style>
 
</head>

<body>
    <div class="container">
    
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?= $nome?> </strong></p>
            <p>Idade: <strong><?= $idade?></strong></p>
            <p>Sexo: <strong><?= $sexo?></strong></p>
            <p>Salário Mensal:<strong> R$ <?= converterSalario($salario);?></strong></strong></p>
            <p>Salário Anual: <strong> R$  <?= converterSalario($salario * 12);?></strong></p>
            <p>Status de Emprego: <strong><?= $estaEmpregado?></strong></p>
            <p>Habilidades: <strong><?= implode(',',$habilidades)?></strong></p>
        </div>
    </div>
</body>

</html>