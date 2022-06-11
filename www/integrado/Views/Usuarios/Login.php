<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Safe Trade Place </title>

    <script type="text/javascript" src="../functions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="../../estilo.css" rel="stylesheet" type="text/css">

</head>
</head>

<body>

    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!-- esquerda,vazia por hora -->
            </div>
            <div class="col-6">
                <form>
                    <div class="form-group">
                        <label for="cnpj_cli">CNPJ</label>
                        <input type="email" class="form-control" id="cnpj_cli" aria-describedby="emailHelp" placeholder="Seu cnpj">
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu cnpj, com ninguém.</small>
                    </div>
                    <div class="form-group">
                        <label for="password_cli">Senha</label>
                        <input type="password" class="form-control" id="password_cli" placeholder="Senha">
                    </div>
                    <div class="form-group form-check">
                        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                        <!-- <label class="form-check-label" for="exampleCheck1">Clique em mim</label> -->
                    </div>
                    <button type="button" class="btn btn-primary">Entrar</button>
                </form>
            </div>
            <div class="col">
                <!-- direita vazia por hora -->
            </div>
        </div>

    </div>
</body>

</html>