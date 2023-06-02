<?php

$gradof =  intval($_POST["grad_of"]);
$nome = $_POST["nome"];
$prefixo = $_POST["prefixo"];
$patrimonio = $_POST["patrimonio"];
$areaAtuacao = $_POST["areaAtuacao"];
$operacao = $_POST["operacao"];
$dataInicial = $_POST["dataInicial"];
$dataFinal = $_POST["dataFinal"];

switch ($gradof) {
    case 1: 
        $gradof = "Oficial";
        break;
    case 2:

        $gradof = "Subtenente";
        break;
    case 3:

        $gradof = "Sargento";
        break;
    case 4:

        $gradof = "Cabo";
        break;
    case 5:

        $gradof = "Soldado";
        break;

    }

    switch ($operacao) {
        case 1:
            
            $operacao = "Turista Seguro";
            break;
        case 2:
    
            $operacao = "Porto Seguro";
            break;
        case 3:
    
            $operacao = "Diresp";
            break;
        case 4:
    
            $operacao = "PJES";
            break;
        case 5:
    
            $operacao = "Pernambuco Seguro";
            break;
    
        }

header("Location: ../tela/telaViatura.php?grad_of=".$gradof."&nome=".$nome."&prefixo=".$prefixo."&patrimonio=".$patrimonio."&area=".$areaAtuacao."&operacao=".$operacao);
die();




//echo $stringData = $_POST["dataInicial"]->format('Y-m-d H:i:s');
//echo $stringData = $_POST["dataFinal"]->format('Y-m-d H:i:s');

?>