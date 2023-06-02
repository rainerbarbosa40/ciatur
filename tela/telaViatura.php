<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Viatura</title>
    <link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
	rel="stylesheet">
<style>
    div{
        background-color: #4682B4;
        width: max-content;
        padding: 15px;
        border-radius: 20px;
    }
h1{
font-size: 22px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
background: url('../imagens/ciatur.jpg');
background-repeat: no-repeat;
background-position: right;
background-size: 60px;
color: #E0FFFF;
background-color: #000080;
border-radius: 8px;
font-style: italic;
padding-left: 5px;
}
h2{
background-color: #000080;
color: tomato;
font-size: 20px;
font-style: italic;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
body {
  background-color: #E0FFFF;  
  position: relative;
  margin-left: 15px;
}
button{
    background-color: cornflowerblue;
    margin-top: 10px;
    border-radius: 35px;
}

table{
background-color: #000080;
color: aliceblue;
border: 8px;
border-color: black;
border-radius: 8px;
}
</style>


</head>
<body>
    <h1>Relatório de Serviço</h1>
    <div>
    <table>
        <tr>
            <td>
    <?php 
    echo "viatura registrada: <strong>".$_GET['prefixo']."</strong> <br/>";
    echo "<h2><strong> Operação ".$_GET['operacao']."</strong></h2>";
    echo "Graduado/Oficial: " . $_GET['grad_of'] ."<br/>";
    echo "Nome: " . $_GET['nome']."<br/>";
    echo "Prefixo: " . $_GET['prefixo']."<br/>";
    echo "Patrimônio: " . $_GET['patrimonio']."<br/>";
    echo "Área de Atuação: " . $_GET['area'];
    ?>
    </td>
    </tr>
    </table>
</div>
    <button>Editar</button><button>Deletar</button><br><br>
    <label>Adicionar B.O.E</label><br>

    <textarea id="areaTexto" name="areaTexto">
    </textarea><br>

    <button>Adicionar B.O.E</button><br><br>
    <label>Comentário</label><br>
    <textarea id="areaComentario" name="areaComentario">
 
    </textarea><br>

    <button>Adicionar comentário</button><br><br>
    <a href="">Relatórios</a>


    <script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>