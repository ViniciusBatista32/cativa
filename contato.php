<?php
require_once("header.php")
?>

<link rel="stylesheet" href="./style/contato.css">

<h1 class="text-center mb-5 title" id="">Entre em contato conosco!</h1>
<p class="text-center description-financing m-5">Estaremos te esperando com o melhor atendimento possível.</p>

<div class="container contato">
    <div class="row">
        <div class="col">

            <h1 class="text-center mb-5 mt-5">Ligue para nós!</h1>

            <!-- Whatsapp -->

            <div class="row whatsapp-place p-4 m-0">
                <div class="col text-center">
                    <i class="fab fa-whatsapp icone-whatsapp"></i>
                </div>
                <div class="col text-center">
                    <h5 class="title-footer">
                        <div class="quadradofofinho"></div> Whatsapp
                    </h5>
                    <p class="paragraph-footer mt-2 mb-4">Nos envie uma mensagem pelo whatsapp!</p>
                </div>
                <div class="col">
                    <h4 class="">(11) 98834-0261</h4>
                    <h4 class="">(11) 98334-0201</h4>
                </div>
            </div>

            <!-- Telefone -->
            <div class="row telefone-place p-4 mt-5 m-0">
                <div class="col text-center">
                    <i class="fas fa-phone-alt icone-telefone"></i>
                </div>
                <div class="col text-center">
                    <h5 class="title-footer">
                        <div class="quadradofofinho"></div> Telefone Fixo
                    </h5>
                    <p class="paragraph-footer mt-2 mb-4">Ligue agora mesmo e tire as suas dúvidas!</p>
                </div>
                <div class="col">
                    <h4 class="">(11) 4587-6813</h4>
                </div>
            </div>
        </div>
        <div class="col-md-auto">
            <img id="contactImage" src="images/imagem-contato.png" class="contato-imagem img-responsive">
        </div>
    </div>
</div>

<h1 class="text-center mb-5 mt-3">Ou então nos envie uma mensagem!</h1>

<form action="">
    <div class="container email p-4">
        <div class="row">

            <div class="col">
                <div class="form-group mt-3">
                    <label for="nomecontato">Nome:</label>
                    <input type="text" class="form-control" id="nomecontato" required>
                </div>
                <div class="form-group mt-5">
                    <label for="emailcontato">Email:</label>
                    <input type="email" class="form-control" id="emailcontato" required>
                </div>
                <div class="form-group mt-5">
                    <label for="telefonecontato">Telefone Celular:</label>
                    <input type="text" class="form-control" id="telefonecontato" required>
                </div>
            </div>

            <div class="col">
                <div class="form-group mt-3">
                    <label for="mensagemcontato">Mensagem:</label>
                    <textarea type="textarea" class="form-control" id="mensagemcontato" rows="7" required></textarea>
                </div>
                <div class="form-group text-center mt-3">
                    <button type="submit" class="btn-card mt-4">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="scripts/jquery.mask.js"></script>
<script src="scripts/mask.js"></script>



<?php
require_once("footer.php")
?>