<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Hair Dresser Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <!-- header -->
    <section class="header">
      <img src="./images/logo_barber-removebg-preview.png" alt="" id="  " />
      <a href="./images/logo_barber-removebg-preview.png" class="logo"
        >Barbearia Do Samuca
      </a>

      <nav class="navbar">
        <div id="close-navbar" class="fas fa-times"></div>
        <a href="#home">Início</a>
        <a href="#about">Sobre Nós</a>
        <a href="#services">Serviços</a>
        <a href="#pricing">Preços</a>
        <a href="#blog">Tipos</a>
        <a href="#visit">Livro de Visitas</a>
        <a href="#review">Avaliações</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header -->

    <!-- home -->

    <section class="home" id="home">
      <div class="content">
        <span>Bem_Vindo</span>
        <h3>Nós deixamos <br />seu cabelo<br />na régua</h3>
      </div>
    </section>
    <!-- home -->

    <!-- about us -->

    <section class="about" id="about">
      <h1 class="heading">Sobre Nós</h1>

      <div class="row">
        <div class="image">
          <img src="images/background.jpg" alt="" />
        </div>

        <div class="content">
          <h3 class="title">Sómos um grupo de Barbeiros</h3>
          <p>
            No conforto de seus lares transformam-se artesãos da estética
            masculina, os barbeiros que optaram por estabelecer suas barbearias
            em casa personificam uma abordagem íntima e personalizada para o
            cuidado com a barba e o visual masculino. Com uma atmosfera
            acolhedora e atenção individualizada, esses profissionais não apenas
            moldam barbas e cabelos, mas também cultivam uma experiência única
            para seus clientes. Cada corte e barba tornam-se uma expressão
            artística, refletindo a habilidade e paixão desses barbeiros que
            transformam o ato de aparar em uma jornada de autenticidade e
            autoconfiança.
          </p>
          <p>
            Ao optar por esse formato de barbearia, eles não apenas ganham a
            vida, mas também estabelecem conexões duradouras, construindo uma
            comunidade de homens que valorizam a qualidade do serviço e o toque
            pessoal que só uma barbearia caseira pode oferecer.
          </p>

          <div class="icons-container">
            <div class="icons">
              <img src="images/about-icon-1.png" alt="" />
              <h3>Ferramentas profissionais</h3>
            </div>
            <div class="icons">
              <img src="images/about-icon-2.png" alt="" />
              <h3>Produtos de qualidade</h3>
            </div>
            <div class="icons">
              <img src="images/about-icon-3.png" alt="" />
              <h3>Pigmentação de cabelo</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- about us end -->

    <!-- services -->

    <section class="services" id="services">
      <h1 class="heading">Serviços premium</h1>

      <div class="box-container">
        <div class="box">
          <img src="images/cabelo 1.jpeg" alt="" />
          <div class="content">
            <h3>Estilos de cabelo</h3>
          </div>
        </div>

        <div class="box">
          <img src="images/cabelo 2.jpg" alt="" />
          <div class="content">
            <h3>Pigmentação de cabelo</h3>
          </div>
        </div>

        <div class="box">
          <img src="images/cabelo 3.jpg "alt="" />
          <div class="content">
            <h3>Cortes de cabelo masculino</h3>
          </div>
        </div>

        <div class="box">
          <img src="images/services-4.jpg" alt="" />
          <div class="content">
            <h3>Barbearia</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- services end -->

    <!-- styles -->

    

    <!-- styles end-->

    <!-- pricing -->

    <section class="pricing" id="pricing">
      <h1 class="heading">Ofertas e preços</h1>

      <div class="box-container">
        <div class="box">
          <h3 class="title">Básico</h3>
          <div class="price">
            <span class="currency">R$</span>
            <span class="amount">20</span>
          </div>
          <ul>
            <li><i class="fas fa-check"></i> Cortes simples</li>
            <li><i class="fas fa-check"></i> Sobracelha</li>
            <li><i class="fas fa-check"></i> Navalhado</li>
          </ul>
          <a href="#"><button>Saiba mais</button></a>
        </div>

        <div class="box">
          <h3 class="title">Padrão</h3>
          <div class="price">
            <span class="currency">R$</span>
            <span class="amount">35</span>
          </div>
          <ul>
            <li><i class="fas fa-check"></i>Corte</li>
            <li><i class="fas fa-check"></i>Pigmentação</li>
            <li><i class="fas fa-check"></i>Navalhado</li>
            <li><i class="fas fa-check"></i>Sobracelha</li>
          </ul>
          <a href="#"><button>Saiba Mais</button></a>
        </div>

        <div class="box">
          <h3 class="title">premium</h3>
          <div class="price">
            <span class="currency">R$</span>
            <span class="amount">60</span>
          </div>
          <ul>
            <li><i class="fas fa-check"></i>Corte</li>
            <li><i class="fas fa-check"></i>Platinado</li>
            <li><i class="fas fa-check"></i>Sobracelha</li>
            <li><i class="fas fa-check"></i>Barba</li>
          </ul>
          <a href="#"><button>Saiba Mais</button></a>
        </div>
      </div>
    </section>

    <!-- pricing end -->

    <!-- blog -->

    <section class="blogs" id="blog">
      <h1 class="heading">Nossos cortes</h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/cabelo 3.jpeg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Corte pigmentado</a>
            <span>by Samuca do Corte</span>
            <p>
              O corte de cabelo pigmentado representa uma revolução na indústria
              da beleza, adicionando uma dimensão vibrante e expressiva à
              tradicional prática de cortar os fios. Essa técnica inovadora
              combina habilmente a arte do corte de cabelo com a aplicação
              estratégica de pigmentos, resultando em estilos únicos que
              transcendem as fronteiras convencionais.
            </p>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/cabelo 2.jpg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Corte platinado</a>
            <span>by Samuca do Corte</span>
            <p>
              O corte platinado emerge como uma tendência arrojada e moderna na
              cena da moda capilar, capturando a essência da ousadia e da
              sofisticação. Esse estilo destaca-se pela coloração intensa, onde
              os cabelos são transformados em um tom deslumbrante de platina,
              conferindo uma aura de elegância e contemporaneidade.
            </p>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/navalhado.jpg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Corte Navalhado</a>
            <span>by Samuca do corte</span>
            <p>
              O corte navalhado representa uma abordagem audaciosa e refinada no
              universo da hairstyling, elevando a experiência do corte de cabelo
              a um patamar de precisão e elegância. Nessa técnica, a navalha é
              habilmente utilizada para esculpir os fios, criando bordas afiadas
              e transições suaves que conferem uma estética moderna e polida.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- blog end-->

    <!-- visit -->

    <section class="visit" id="visit">
      <h1 class="heading">Entre em contato</h1>

      <div class="row">
        <form action="" method="post">
          <h3>Deixe seu Feed-back sobre seu corte</h3>
          <div class="inputBox">
            <input type="text" placeholder="nome" name="nome" />
          </div>
          <div class="inputBox">
            <input type="email" placeholder="email" name="email" />
          </div>
          <div class="inputBox">
            <input type="text" placeholder="assunto" name="assunto" />
          </div>
          <div class="inputBox">
            <input type="text" placeholder="mensagem" name="mensagem" />
          </div>

          <input type="submit" value="envie sua mensagem" class="btn" />
        </form>

        <div class="image">
          <img src="images/contact2.png " alt="" />
        </div>
      </div>
    </section>

    <!-- visit end-->

    <!-- footer -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Redes Sociais</h3>
          <p>
            Especialista em pigmentação -Atendimento por ordem de chegada
            -Aberto de segunda a sábado
          </p>
          <div class="share">
            <a
              href="https://www.instagram.com/samuca_do_corte/"
              class="fab fa-instagram"
            ></a>
            <a
              href="https://api.whatsapp.com/message/ZMPJ4K32MC5JJ1?autoload=1&app_absent=0"
              class="fab fa-whatsapp"
            ></a>
          </div>
        </div>

        <div class="box">
          <h3>Fale Conosco</h3>
          <p>77 9 8167-0967</p>
        </div>

        <div class="box">
          <h3>Endereço</h3>
          <p>
            Rua Casa Nova, 169,<br />
            Sao Paulo, Barreiras BA <br />
            47808-178, Brasil
          </p>
        </div>
        
      </div>

      <div class="credit">
        Criado Por <span>hs_hebert</span> | all rights reserved!
      </div>
    </section>

    <!-- footer end-->

    <script src="js/script.js"></script>
  </body>
</html>
