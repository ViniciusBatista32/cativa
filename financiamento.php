<?php
require_once("scripts/header.php")
?>

<h1 class="text-center mb-5 title" id="">Financiamento</h1>
<p class="text-center description-financing">Bem-vindo ao financiamento! Siga os passos descritos a seguir para ter o
  seu retorno!</p>


<form action="" class="w-50 mx-auto">
  <div class="form-group mt-5">
    <label for="nome">Nome Completo:</label>
    <input type="text" class="form-control" id="nome" required>
  </div>
  <div class="form-group mt-5">
    <label for="Email">Email:</label>
    <input type="email" class="form-control" id="Email" required>
  </div>
  <div class="form-group mt-5">
    <label for="datanasc">Data de Nascimento:</label>
    <input type="date" class="form-control" id="datanasc" required>
  </div>
  <div class="form-group">
    <div class="row mt-5">
      <div class="col">
        <label for="cpf">CPF:</label>
        <input type="text" class="form-control" id="cpf" required>
      </div>
      <div class="col">
        <label for="telefone">Telefone Celular:</label>
        <input type="text" class="form-control" id="telefone" required>
      </div>
    </div>
  </div>
  <div class="form-group mt-5">
    <p>Possui CNH?</p>
  </div>
  <div class="form-check mt-2">
    <input class="form-check-input" type="radio" name="verificacaoCNH" id="possuiCNH" required>
    <label class="form-check-label" for="possuiCNH">
      Sim
    </label>
  </div>
  <div class="form-check mt-2">
    <input class="form-check-input" type="radio" name="verificacaoCNH" id="naopossuiCNH">
    <label class="form-check-label" for="naopossuiCNH">
      Não
    </label>
  </div>
  <div class="form-group">
    <button type="submit" class="btn-card mt-4">Enviar</button>
  </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="scripts/jquery.mask.js"></script>
<script src="scripts/mask.js"></script>



<?php
require_once("scripts/footer.php")
?>