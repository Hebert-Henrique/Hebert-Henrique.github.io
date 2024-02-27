<?php

if (isset($_POST["submit"])) {

  include_once("config.php");

  $nome = $_POST["name"];
  $email = $_POST["email"];
  $senha = $_POST["password"];




  $result = mysqli_query($conexao, "INSERT INTO usuario(nome , email , senha)VALUES('$nome','$email','$senha')");
}





?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Cadastro Samuca Do Corte</title>
</head>

<body>
  <main id="container">
    <form id="login_form" action="cadastro.php" method="post">
      <!-- FORM HEADER -->
      <div id="form_header">
        <h1>Cadastro</h1>
        <i id="mode_icon" class="fa-solid fa-moon"></i>
      </div>

      <!-- SOCIAL MEDIA LINKS -->
      <div id="social_media">
        <!-- FACEBOOK -->
        <a href="#">
          <img src="./images/face.png" alt="" />
        </a>

        <!-- GOOGLE -->
        <a href="#">
          <img src="./images/g2.png" alt="Google logo" />
        </a>

        <!-- GITHUB -->
        <a href="#">
          <img src="./images/git.png" alt="" />
        </a>
      </div>

      <!-- INPUTS -->
      <div id="inputs">
        <!-- NAME -->
        <div class="input-box">
          <label for="nome">
            Nome
            <div class="input-field">
              <i class="fa-solid fa-user"></i>
              <input type="text" id="name" name="name" />
            </div>
          </label>
        </div>

        <!-- EMAIL -->
        <div class="input-box">
          <label for="email">
            E-mail
            <div class="input-field">
              <i class="fa-solid fa-envelope"></i>
              <input type="email" id="email" name="email" />
            </div>
          </label>
        </div>

        <!-- PASSWORD -->
        <div class="input-box">
          <label for="password">
            Senha
            <div class="input-field">
              <i class="fa-solid fa-key"></i>
              <input type="password" id="password" name="password" />
            </div>
          </label>

          <!-- FORGOT PASSWORD -->
          <div id="forgot_password">
            <a href="#"> Esqueceu a senha? </a><br>
            <a href="login.php"> Fazer Login </a>
          </div>
        </div>
      </div>

      <!-- LOGIN BUTTON -->
      <button type="submit" id="login_button" name="submit">Cadastrar</button>
    </form>
  </main>
  <link rel="stylesheet" href="css/stylecad.css">
  <!-- JAVASCRIPT -->
  <script type="text/javascript" src="./js/scriptcad.js"></script>
</body>

</html>