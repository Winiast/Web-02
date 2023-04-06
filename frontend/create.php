<?php

    include_once '../backend/html_build.php';
    include_once '../backend/file_manager.php';

    if( !empty($_POST['form_submit']) ) {

        create();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sistema de Gerenciamento de Pessoas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-secondary">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                <span class="ms-3 fs-5">Sistema de Gerenciamento de Pessoas</span>
            </a>
    </nav>
    <form class="form" method="post" action="create.php">
        <input TYPE="hidden" NAME="form_submit" VALUE="OK">
        <div class="container my-4">
            <h2>CREATE</h2>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input
                            id="cpf"
                            type="text"
                            class="form-control"
                            name="cpf"
                        />
                        <label for="cpf">Cpf</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input
                            id="nome"
                            type="text"
                            class="form-control"
                            name="nome"
                        />
                        <label for="nome">Nome</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input
                            id="ender"
                            type="text"
                            class="form-control"
                            name="ender"
                        />
                        <label for="nome">Endereço</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input
                            id="tel"
                            type="text"
                            class="form-control"
                            name="tel"
                        />
                        <label for="nome">Telefone</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </form>
    <script>
  $(document).ready(function(){
    $('#cpf').mask('000.000.000-00');
  });

  $(document).ready(function(){
    $('#nome').mask('Z', {
      translation: {
        'Z': {
          pattern: /[a-zA-Z ]/, // permite apenas letras maiúsculas e minúsculas e espaços
          recursive: true // permite a inserção de vários caracteres
        }
      }
    });
  });

  $(document).ready(function(){
    $('#ender').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {
      translation: {
        'A': {
          pattern: /[A-Za-z0-9À-ú\s]/,
          recursive: true
        }
      }
    });
  });

   $(document).ready(function(){
    $('#tel').mask('(00) 0000-0000');
  });
</script>
</body>
</html>
