<?php
require_once("header.php");
require_once("functions/functions_carros.php");
?>

<div class="row">
    <div class="col-md-5">
        <div id="carroselAdicionarVeiculo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner shadow-sm rounded">
                <div class="carousel-item active">
                    <img src="images/carrossel-images/Financiamento.png" class="d-block w-100 mx-auto" alt="primeira-imagem">
                </div>
                <div class="carousel-item">
                    <img src="images/carrossel-images/Garantia.png" class="d-block w-100 mx-auto" alt="segunda-imagem">
                </div>
                <div class="carousel-item">
                    <img src="images/carrossel-images/Marketing.png" class="d-block w-100 mx-auto" alt="terceira-imagem">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carroselAdicionarVeiculo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carroselAdicionarVeiculo" data-bs-slide="next">
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
    <div class="col opcionais">
        <h2 class="opcionais-text">Opcionais</h2>
        <div class="container border rounded p-2">
            <div class="col d-flex justify-content-between">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label p-0 m-0" for="inlineCheckbox1">Air-bag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label m-0 p-0" for="inlineCheckbox2">Trava
                        Elétrica</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label m-0 p-0" for="inlineCheckbox3">Sensor
                        de
                        ré</label>
                </div>
            </div>
            <div class="col d-flex justify-content-between mt-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label p-0 m-0" for="inlineCheckbox1">Alarme</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label p-0 m-0" for="inlineCheckbox2">Vidro
                        Elétrico</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label m-0 p-0" for="inlineCheckbox3">Câmera
                        de
                        ré</label>
                </div>
            </div>
            <div class="col d-flex justify-content-between mt-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label m-0 p-0" for="inlineCheckbox1">Ar-condicionado</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label m-0 p-0" for="inlineCheckbox2">Som</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label m-0 p-0" for="inlineCheckbox3">Direção
                        Hidráulica</label>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
require_once("footer.php")
?>