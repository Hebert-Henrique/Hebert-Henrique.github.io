<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Barberia do Samuca</title>
    <link rel="stylesheet" href="./css/login.css" />
  </head>
  <body>
    <div class="container-login">
      <div class="img-box">
        <img src="images/back-form.svg" alt="" />
      </div>
      <div class="content-box">
        <div class="form-box">
          <h2>Login</h2>
          <form action="testLogin.php" method="post">
            <div class="input-box">
              <span>Email</span>
              <input type="email" placeholder="@email.com" name="email"/>
            </div>
            <div class="input-box">
              <span>Senha</span>
              <input type="password" placeholder="password" name="senha" />
            </div>
            <div class="remember">
              <label> <input type="checkbox" />remember me </label>
              <a href="#">Esqueceu a Senha ?</a>
            </div>
            <div class="input-box">
              <input type="submit" value="Entrar" name="submit"/>
            </div>
            <div class="input-box">
              <p>Não tem uma conta ?<a href="cadastro.php">Inscrever-se</a></p>
            </div>
          </form>
          <h3>Logar Com</h3>
          <ul class="ul">
            <li><img src="images/facebook.png" alt="" /></li>
            <li><img src="images/google.png" alt="" /></li>
            <li><img src="images/apple.png" alt="" /></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
