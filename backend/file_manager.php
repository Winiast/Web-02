<?php

    function create() {
        echo "<script>alert('SUBMIT - CREATE')</script>";

        $fp = fopen('../bd/pessoas.txt', 'a');

        if ($fp) {
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $ender = $_POST['ender'];
            $tel = $_POST['tel'];

            

            $dados = $nome . "#" . $ender . "#" . $tel . "\n";

            fwrite($fp, $cpf . "\n");
            fwrite($fp, $dados);

            fclose($fp);
        }



    }

    function read() {

        $pessoas = array();
        $fp = fopen('../bd/pessoas.txt', 'r');

        if ($fp) {

            while(!feof($fp)) {
                $arr = array();
                $cpf = fgets($fp);
                $dados = fgets($fp);
                if(!empty($dados)) {
                    $arr = explode("#", $dados);
                    $pessoas[$cpf] = $arr;
                }
            }

            fclose($fp);
            return $pessoas;
        }
    }

?>