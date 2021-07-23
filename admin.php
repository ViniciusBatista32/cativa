<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Bootstrap CSS -->

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- FA Icons -->
        <script src="https://kit.fontawesome.com/d6a1c148cd.js" crossorigin="anonymous"></script>

        <!-- CSS -->

        <link rel="stylesheet" href="style/admin.css">
</head>

<body>
    <a href="index.php" class="voltar"><i class="fas fa-arrow-circle-left"></i></a>
    <div class="row m-0 p-0 w-100 h-100">
        <div class="col-sm-5 marketing p-0">
            <div class="container text-center">
                <img src="images/logo-cativa.png" class="imagem-marketing-logo img-responsive text-center">
                <h3 class="mb-3">Nós da Cativa Veículos,</h3>
                <p class="p-0 m-0">separamos sempre os melhores carros</p>
                <p>para você e sua família.</p>
                <img src="images/imagem-admin1.jpg" class="imagem-marketing img-responsive">
            </div>
        </div>
        <div class="col-sm-7 form-login">
            <form action="" class="w-50 mx-auto">
                <h4 class="text-center mt-5">Cativa Veículos</h4>
                <div class="form-group">
                <p class="escrita mt-5">Log In</p>
                </div>
                <div class="form-group mt-5">
                    <label for="nome">Usuário:</label>
                    <input type="text" class="form-control" id="nome" required>
                </div>
                <div class="form-group mt-5">
                    <label for="nome">Senha:</label>
                    <input type="password" class="form-control" id="nome" required>
                </div>
                <div class="form-group mt-5 text-center">
                <button type="submit" class="btn-card mt-4">Acessar</button>
                </div>
                <div class="form-group escrita-baixa text-center mt-5">
                         O login é apenas para administradores.
                </div>
                
            </form>
        </div>
    </div>
</body>

</html>