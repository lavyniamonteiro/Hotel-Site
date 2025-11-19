<?php

include('../../phpScripts/conf/conexao.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
    $numero = $_POST['numero'];
    $tipo = $_POST['tipo'];
    $preco = $_POST['preco'];
    $status = $_POST['status'];
    $descricao = $_POST['descricao'];

    
    $sql = "INSERT INTO quartos (numero, tipo, preco, status, descricao) 
            VALUES ('$numero', '$tipo', '$preco', '$status', '$descricao')";

    if($conexao->query($sql) === TRUE){
        echo "Quarto cadastrado com sucesso!";
    } else{
        echo "ERRO: " . $conexao->error;
    }
}

?>
 
 <form method="POST">
    <label>Número: </label><br>
    <input type="text" name="numero" required><br>

    <label>Tipo:</label><br>
    <input type="text" name="tipo" required><br>
    
    <label>Preço: </label><br>
    <input type="number"step="0.01" name="preco" required><br>
    
    <label>Status: </label><br>
    <select name="status">
        <option value="disponível">Disponível</option>
        <option value="ocupado">Ocupado</option>
        <option value="manutenção">Manutenção</option>
    </select><br>
    
    <label>Descrição:</label><br>
    <textarea name="descricao" placeholder="Descreva as características do quarto..."></textarea><br>

    <button type="submit">Cadastrar</button>

    </form>