  <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title> TELA DE LOGIN </title>
        <style>
            .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #383838;
}

a{
  text-decoration: none;
}
            </style>
    </head>
    <body>
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5"> TELA DE LOGIN </h2>
       
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="autenticar_login.php" method="post">

          <div class="text-center">
          <img src="img\anita.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="login" aria-describedby="login" placeholder="LOGIN" name="login">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="SENHA" name="senha">
            </div>
            <div class="text-center"><button type="submit" name="action" class="btn btn-color px-5 mb-5 w-100"> Acessar</button></div> </button></div>
           
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
    </body>
    </html>