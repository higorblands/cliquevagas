<?php
require('persistency/db.php');
$email = pg_escape_string($_POST['email']);
$pesquisa = pg_escape_string($_POST['pesquisa']);
    if (isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['pesquisa']) && $_POST['pesquisa'] != "" ) {
        $sql = "INSERT INTO favbusca (email, buscaFavorita) VALUES ('" . $email . "', '" . $pesquisa . "')" ;
        $resultado = banco($sql);
     if($resultado){
        header("Location: ../pesquisa_salva.html");
        //$sql = "UPDATE IF EXISTS email='" . $email . "' AND buscaFavorita='" . $pesquisa . "'";      
        }else {
            echo "<p>Erro !</p>"; //
                }
}
?>