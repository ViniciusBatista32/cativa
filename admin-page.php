<!DOCTYPE html>
<html lang="pt-br">
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Admin</title>

    <!-- Bootstrap CSS -->

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- FA Icons -->
        <script src="https://kit.fontawesome.com/d6a1c148cd.js" crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="style/admin.css">


</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-sm-3  admin-side shadow-sm h-100">
                <img src="images/carros/img1.jpeg" class="perfilfoto mb-2 mt-5" alt="">
                <ul class="m-0">
                    <li class="mt-5">
                        <button type="button"class="btn-adicionar-carro" data-bs-toggle="modal" data-bs-target="#adicionarCarro"><i
                                class="fas fa-car inline-icon"></i>Adicionar Veículo</button>
                    </li>
                    <li class="mt-4">
                        <a href="admin-status.php"><i class="fas fa-info-circle inline-icon"></i>Informações</a>
                    </li>
                </ul>

                <div class="botaovoltar">
                    <a href="index.php"><i class="fas fa-sign-out-alt logout"></i></a>
                </div>
            </div>
            <div class="col h-100">

                <p class="text-center estoque-escrita">CARROS EM ESTOQUE</p>

                <div class="container w-100 h-75 p-5 mr-0 rounded">

                    <div class="row justify-content-center mb-3 rounded p-2 align-middle">

                        <div class="col linha-carro-admin">
                            <img src="images/carros/img1.jpeg" class="rounded">
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            KIA Cerato 1.6
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            AAA-0000
                        </div>
                        <div class="col text-end mx-auto my-1">
                            <button class="editar" id="editarCarro" data-bs-toggle="modal"
                                data-bs-target="#editarVeiculos"><i class="far fa-edit inline-icon"></i></button>
                            <button class="excluir" id="exluirCarro" data-bs-toggle="modal"
                                data-bs-target="#excluirCarro"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3 rounded p-2 align-middle">
                        <div class="col linha-carro-admin">
                            <img src="images/carros/img1.jpeg" class="rounded">
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            KIA Cerato 1.6
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            AAA-0000
                        </div>
                        <div class="col text-end mx-auto my-1">
                            <a class="editar" id="editarCarro"><i class="far fa-edit inline-icon"></i></a>
                            <a class="excluir" id="exluirCarro"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3 rounded p-2 align-middle">
                        <div class="col linha-carro-admin">
                            <img src="images/carros/img1.jpeg" class="rounded">
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            KIA Cerato 1.6
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            AAA-0000
                        </div>
                        <div class="col text-end mx-auto my-1">
                            <a class="editar" id="editarCarro"><i class="far fa-edit inline-icon"></i></a>
                            <a class="excluir" id="exluirCarro"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3 rounded p-2 align-middle">
                        <div class="col linha-carro-admin">
                            <img src="images/carros/img1.jpeg" class="rounded">
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            KIA Cerato 1.6
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            AAA-0000
                        </div>
                        <div class="col text-end mx-auto my-1">
                            <a class="editar" id="editarCarro"><i class="far fa-edit inline-icon"></i></a>
                            <a class="excluir" id="exluirCarro"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3 rounded p-2 align-middle">
                        <div class="col linha-carro-admin">
                            <img src="images/carros/img1.jpeg" class="rounded">
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            KIA Cerato 1.6
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            AAA-0000
                        </div>
                        <div class="col text-end mx-auto my-1">
                            <a class="editar" id="editarCarro"><i class="far fa-edit inline-icon"></i></a>
                            <a class="excluir" id="exluirCarro"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3 rounded p-2 align-middle">
                        <div class="col linha-carro-admin">
                            <img src="images/carros/img1.jpeg" class="rounded">
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            KIA Cerato 1.6
                        </div>
                        <div class="col mx-auto my-2 text-center">
                            AAA-0000
                        </div>
                        <div class="col text-end mx-auto my-1">
                            <a class="editar" id="editarCarro"><i class="far fa-edit inline-icon"></i></a>
                            <a class="excluir" id="exluirCarro"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>

                    <ul class="pagination mt-5 pagination-sm justify-content-center p-0">
                        <li class=""><a class="page-link" href="">1</a></li>
                        <li class=""><a class="page-link" href="">2</a></li>
                        <li class=""><a class="page-link" href="">3</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Modal Inserir Veículo -->
        <div class="modal fade" id="adicionarCarro" tabindex="-1" aria-labelledby="adicionarCarroLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar Carro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid justify-content-center">
                            <form class="formInserirCarro" action="">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div id="carroselAdicionarVeiculo" class="carousel slide"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner shadow-sm rounded">
                                                <div class="carousel-item active">
                                                    <img src="images/carrossel-images/Financiamento.png"
                                                        class="d-block w-100 mx-auto" alt="primeira-imagem">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="images/carrossel-images/Garantia.png"
                                                        class="d-block w-100 mx-auto" alt="segunda-imagem">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="images/carrossel-images/Marketing.png"
                                                        class="d-block w-100 mx-auto" alt="terceira-imagem">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carroselAdicionarVeiculo" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carroselAdicionarVeiculo" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="marca">Marca:</label>
                                                <select name="marca" class="form-select form-control">
                                                    <option selected="">Escolher...</option>
                                                    <option value="Volkswagen">Volkswagen</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="modelo">Modelo:</label>
                                                <select type="text" name="modelo" class="form-select form-control">
                                                    <option selected="">Escolher...</option>
                                                    <option value="">Polo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label for="anoModelo">Ano do Modelo:</label>
                                                <select name="anoModelo" class="form-select form-control">
                                                    <option selected="">Escolher...</option>
                                                    <option value="1">2000</option>
                                                    <option value="2">2001</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="finalPlaca">Final da Placa:</label>
                                                <select name="finalPlaca" class="form-select form-control">
                                                    <option selected="">Escolher...</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="km">Km:</label>
                                                <input type="text" id="km" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label for="cor">Cor:</label>
                                                <input type="text" name="cor" class="form-control" placeholder="Cor">
                                            </div>
                                            <div class="col">
                                                <label for="motorizacao">Motorização:</label>
                                                <select name="motorizacao" class="form-select form-control">
                                                    <option selected="">Escolher...</option>
                                                    <option value="1">1.0</option>
                                                    <option value="2">1.4</option>
                                                    <option value="3">1.6</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="unicoDono">Único dono:</label>
                                                <select name="unicoDono" class="form-select form-control">
                                                    <option selected="">Escolher...</option>
                                                    <option value="1">Sim</option>
                                                    <option value="2">Não</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="container text-center my-4">
                                            <div
                                                class="row mx-auto my-auto justify-content-center rounded p-0 quatroItensCarrossel">
                                                <div id="multiImagemCarrossel" class="carousel slide rounded p-0 .a"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner rounded p-0 .a" role="listbox">
                                                        <div class="carousel-item active a">
                                                            <div class="col-md-3">
                                                                <div class="card">
                                                                    <div class="card-img">
                                                                        <img src="images/Carros/img1.jpeg"
                                                                            class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item a">
                                                            <div class="col-md-3">
                                                                <div class="card rounded">
                                                                    <div class="card-img">
                                                                        <img src="images/Carros/img1.jpeg"
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item a">
                                                            <div class="col-md-3">
                                                                <div class="card rounded">
                                                                    <div class="card-img">
                                                                        <img src="images/Carros/img1.jpeg"
                                                                            class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item a">
                                                            <div class="col-md-3">
                                                                <div class="card">
                                                                    <div class="card-img">
                                                                        <img src="images/Carros/img1.jpeg"
                                                                            class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item a">
                                                            <div class="col-md-3">
                                                                <div class="card">
                                                                    <div class="card-img">
                                                                        <img src="images/Carros/img1.jpeg"
                                                                            class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item a">
                                                            <div class="col-md-3">
                                                                <div class="card">
                                                                    <div class="card-img">
                                                                        <img src="images/Carros/img1.jpeg"
                                                                            class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev bg-transparent w-aut"
                                                        href="#multiImagemCarrossel" role="button" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                    </a>
                                                    <a class="carousel-control-next bg-transparent w-aut"
                                                        href="#multiImagemCarrossel" role="button" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col opcionais">
                                        <h2 class="opcionais-text">Opcionais</h2>
                                        <div class="container border rounded p-2">
                                            <div class="col d-flex justify-content-between">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        value="option1">
                                                    <label class="form-check-label p-0 m-0"
                                                        for="inlineCheckbox1">Air-bag</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                        value="option2">
                                                    <label class="form-check-label m-0 p-0" for="inlineCheckbox2">Trava
                                                        Elétrica</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                        value="option3">
                                                    <label class="form-check-label m-0 p-0" for="inlineCheckbox3">Sensor
                                                        de
                                                        ré</label>
                                                </div>
                                            </div>
                                            <div class="col d-flex justify-content-between mt-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        value="option1">
                                                    <label class="form-check-label p-0 m-0"
                                                        for="inlineCheckbox1">Alarme</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                        value="option2">
                                                    <label class="form-check-label p-0 m-0" for="inlineCheckbox2">Vidro
                                                        Elétrico</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                        value="option3">
                                                    <label class="form-check-label m-0 p-0" for="inlineCheckbox3">Câmera
                                                        de
                                                        ré</label>
                                                </div>
                                            </div>
                                            <div class="col d-flex justify-content-between mt-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        value="option1">
                                                    <label class="form-check-label m-0 p-0"
                                                        for="inlineCheckbox1">Ar-condicionado</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                        value="option2">
                                                    <label class="form-check-label m-0 p-0"
                                                        for="inlineCheckbox2">Som</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                        value="option3">
                                                    <label class="form-check-label m-0 p-0"
                                                        for="inlineCheckbox3">Direção
                                                        Hidráulica</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn">Publicar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Editar Veículo -->
  
            <div class="modal fade" id="editarVeiculos" tabindex="-1" aria-labelledby="editarVeiculosLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar carro</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid justify-content-center">
                                <form class="formInserirCarro" action="">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div id="carroselAdicionarVeiculo" class="carousel slide"
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner shadow-sm rounded">
                                                    <div class="carousel-item active">
                                                        <img src="images/carrossel-images/Financiamento.png"
                                                            class="d-block w-100 mx-auto" alt="primeira-imagem">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/carrossel-images/Garantia.png"
                                                            class="d-block w-100 mx-auto" alt="segunda-imagem">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/carrossel-images/Marketing.png"
                                                            class="d-block w-100 mx-auto" alt="terceira-imagem">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carroselAdicionarVeiculo" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carroselAdicionarVeiculo" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="marca">Marca:</label>
                                                    <select name="marca" class="form-select form-control">
                                                        <option selected="">Escolher...</option>
                                                        <option value="Volkswagen">Volkswagen</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="modelo">Modelo:</label>
                                                    <select type="text" name="modelo" class="form-select form-control">
                                                        <option selected="">Escolher...</option>
                                                        <option value="">Polo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label for="anoModelo">Ano do Modelo:</label>
                                                    <select name="anoModelo" class="form-select form-control">
                                                        <option selected="">Escolher...</option>
                                                        <option value="1">2000</option>
                                                        <option value="2">2001</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="finalPlaca">Final da Placa:</label>
                                                    <select name="finalPlaca" class="form-select form-control">
                                                        <option selected="">Escolher...</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="km">Km:</label>
                                                    <input type="text" id="km" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label for="cor">Cor:</label>
                                                    <input type="text" name="cor" class="form-control" placeholder="Cor">
                                                </div>
                                                <div class="col">
                                                    <label for="motorizacao">Motorização:</label>
                                                    <select name="motorizacao" class="form-select form-control">
                                                        <option selected="">Escolher...</option>
                                                        <option value="1">1.0</option>
                                                        <option value="2">1.4</option>
                                                        <option value="3">1.6</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="unicoDono">Único dono:</label>
                                                    <select name="unicoDono" class="form-select form-control">
                                                        <option selected="">Escolher...</option>
                                                        <option value="1">Sim</option>
                                                        <option value="2">Não</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="container text-center my-4">
                                                <div
                                                    class="row mx-auto my-auto justify-content-center rounded p-0 quatroItensCarrossel">
                                                    <div id="multiImagemCarrossel" class="carousel slide rounded p-0 .a"
                                                        data-bs-ride="carousel">
                                                        <div class="carousel-inner rounded p-0 .a" role="listbox">
                                                            <div class="carousel-item active a">
                                                                <div class="col-md-3">
                                                                    <div class="card">
                                                                        <div class="card-img">
                                                                            <img src="images/Carros/img1.jpeg"
                                                                                class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item a">
                                                                <div class="col-md-3">
                                                                    <div class="card rounded">
                                                                        <div class="card-img">
                                                                            <img src="images/Carros/img1.jpeg"
                                                                                class="img-fluid rounded">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item a">
                                                                <div class="col-md-3">
                                                                    <div class="card rounded">
                                                                        <div class="card-img">
                                                                            <img src="images/Carros/img1.jpeg"
                                                                                class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item a">
                                                                <div class="col-md-3">
                                                                    <div class="card">
                                                                        <div class="card-img">
                                                                            <img src="images/Carros/img1.jpeg"
                                                                                class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item a">
                                                                <div class="col-md-3">
                                                                    <div class="card">
                                                                        <div class="card-img">
                                                                            <img src="images/Carros/img1.jpeg"
                                                                                class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item a">
                                                                <div class="col-md-3">
                                                                    <div class="card">
                                                                        <div class="card-img">
                                                                            <img src="images/Carros/img1.jpeg"
                                                                                class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev bg-transparent w-aut"
                                                            href="#multiImagemCarrossel" role="button" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                        </a>
                                                        <a class="carousel-control-next bg-transparent w-aut"
                                                            href="#multiImagemCarrossel" role="button" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col opcionais">
                                            <h2 class="opcionais-text">Opcionais</h2>
                                            <div class="container border rounded p-2">
                                                <div class="col d-flex justify-content-between">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                            value="option1">
                                                        <label class="form-check-label p-0 m-0"
                                                            for="inlineCheckbox1">Air-bag</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                            value="option2">
                                                        <label class="form-check-label m-0 p-0" for="inlineCheckbox2">Trava
                                                            Elétrica</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                            value="option3">
                                                        <label class="form-check-label m-0 p-0" for="inlineCheckbox3">Sensor
                                                            de
                                                            ré</label>
                                                    </div>
                                                </div>
                                                <div class="col d-flex justify-content-between mt-3">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                            value="option1">
                                                        <label class="form-check-label p-0 m-0"
                                                            for="inlineCheckbox1">Alarme</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                            value="option2">
                                                        <label class="form-check-label p-0 m-0" for="inlineCheckbox2">Vidro
                                                            Elétrico</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                            value="option3">
                                                        <label class="form-check-label m-0 p-0" for="inlineCheckbox3">Câmera
                                                            de
                                                            ré</label>
                                                    </div>
                                                </div>
                                                <div class="col d-flex justify-content-between mt-3">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                            value="option1">
                                                        <label class="form-check-label m-0 p-0"
                                                            for="inlineCheckbox1">Ar-condicionado</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                            value="option2">
                                                        <label class="form-check-label m-0 p-0"
                                                            for="inlineCheckbox2">Som</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                            value="option3">
                                                        <label class="form-check-label m-0 p-0"
                                                            for="inlineCheckbox3">Direção
                                                            Hidráulica</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-5">
                                        <button type="submit" class="btn">Alterar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Modal Excluir Veículo -->
        <div class="modal fade" id="excluirCarro" tabindex="-1" aria-labelledby="excluirCarroLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body d-flex flex-column text-center">
                    
                        <i class="fas fa-exclamation-triangle avisoExclusao"></i>
                        <div class="p mt-4">Tem certeza que deseja excluir o veículo?</div>

                </div>
                <div class="d-flex justify-content-around mb-3">
                  <button type="submit" class="btn">Sim</button>
                  <button type="submit" class="btn" data-bs-dismiss="modal">Não</button>
                </div>
              </div>
            </div>
          </div>
        
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="scripts/jquery.mask.js"></script>
<script src="scripts/mask.js"></script>
<script src="scripts/carousel.js"></script>

</html>