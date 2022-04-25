<?php 
require_once("conexao.php");
require_once("config_front.php");

 ?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
  <link rel="icon" type="image/x-icon" href="img/totus_icon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $nome_sistema; ?></title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="img/totus_banner.png" alt="" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="img/logo.svg" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Entrar</p>
              <form action="autenticar.php" method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">Usuário</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Email ou CPF" required>
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="***********" required>
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                </form>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="forgot-password-link">Esqueceu a senha?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p>ESQUECEU A SENHA?</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-md-9">
		      	<div class="form-group">
			    	<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Email ou CPF" >
		        </div>
		    </div>
      		<div class="col-md-3">
      			<input name="recuperar" id="recuperar" class="btn btn-block login-btn-2 mb-4" type="button" value="RECUPERAR">
      		</div>
      	</div>
      </div>
    </div>
  </div>
</div>