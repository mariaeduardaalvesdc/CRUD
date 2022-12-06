<?php
include "includes\header.html";
?>

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            <h3> CADASTRO DE CLIENTES </h3>
            <form class="mb-5" method="post" action="recebercadastro.php" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label"> Nome </label>
                  <input type="text" class="form-control" name="nome" id="name" placeholder="Insira o nome">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">E-mail </label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Insira o e-mail">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label"> Telefone </label>
                  <input type="text" class="form-control" name="telefone" id="telefone"  placeholder="Insira o telefone">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label"> CPF </label>
                  <input type="text" class="form-control" name="cpf" id="cpf"  placeholder="Insira o CPF">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label"> RG </label>
                  <input type="text" class="form-control" name="rg" id="rg"  placeholder="Insira o RG">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label"> Rua </label>
                  <input type="text" class="form-control" name="rua" id="rua"  placeholder="Insira a rua">
                </div>
                <div class="col-md-4 form-group mb-3">
                  <label for="" class="col-form-label"> Bairro </label>
                  <input type="text" class="form-control" name="bairro" id="bairro"  placeholder="Insira o bairro">
                </div>
                <div class="col-md-4 form-group mb-3">
                  <label for="" class="col-form-label"> Nº </label>
                  <input type="text" class="form-control" name="num" id="num"  placeholder="Insira o Nº">
                </div>
                <div class="col-md-4 form-group mb-3">
                  <label for="" class="col-form-label"> Cidade </label>
                  <input type="text" class="form-control" name="cidade" id="cidade"  placeholder="Insira a cidade">
                </div>

              </div>
              

            
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Cadastrar" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Cadastro concluido com sucesso!
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>



<?php
include "includes/footer.html";
?>