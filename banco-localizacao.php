<?php
    function insereLocalizacao($conexao, $sala, $bloco, $andar, $descricao) {
        $query = "insert into localizacao (sala, bloco, andar, descricao) values ('{$sala}', '{$bloco}', '{$andar}', '{$descricao}')";
        return mysqli_query($conexao, $query);
    }
?>