<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-bootstrap></x-bootstrap>
    <title>Recepção | Bem Vindo</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 col-md-7 intro-section">
            <div class="brand-wrapper">
                <!--Colocar logo-->
              <a href="/" class="h1">M.Info</a>
            </div>
            <div class="intro-content-wrapper">
              <h1 class="intro-title">Bem Vindo!</h1>
              <p class="intro-text">As Informações para acessar o painel de cliente estão diponiveis na ordem serviço entregues na contratação do serviço.</p>
              <a href="#!" class="btn btn-read-more">Exemplo</a>
            </div>
            <div class="intro-section-footer">
              <nav class="footer-nav">
                <!--Colocar links de redirecionamento-->
                <a href="#!">Whatsapp</a>
                <a href="#!">Instagram</a>
              </nav>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 form-section">
            <form action="/cliente" method="post">
                @csrf
                <div class="login-wrapper">
                    <h2 class="login-title">Entre</h2>
                      <div class="form-group">
                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="telefone">
                      </div>
                      <div class="form-group mb-3">
                        <input type="text" name="os" id="os" class="form-control" placeholder="Número de os">
                      </div>
                      <div class="d-flex justify-content-between align-items-center mb-5">
                        <input name="login" id="login" class="btn login-btn" type="submit" value="Login">
                      </div>
                    <p class="login-wrapper-footer-text">Acesso de Funcionários: <a style="color:#0d6efd;" type="button" data-bs-toggle="modal" data-bs-target="#modal-funcionario">Aqui</a></p>
                  </div>
            </form>
          </div>
        </div>
      </div>

      <!--Modal form funcionario-->
      <div class="modal fade" id="modal-funcionario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Acesso de funcionarios</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="login-wrapper">
                    <h2 class="login-title">Entre</h2>
                    <form action="/autenticarFuncionario" method="post">
                      @csrf
                      <div class="form-group">
                        <input type="mail" name="email" id="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group mb-3">
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Password">
                      </div>
                      <div class="d-flex justify-content-between align-items-center mb-5">
                        <input name="login" id="login" class="btn login-btn" type="submit" value="Login">
                      </div>
                    </form>           
                  </div>
            </div>
          </div>
        </div>
      </div>
<style>
    

    body {
      background-color: #fff;
      font-family: 'Karla', sans-serif; 
    }
    .intro-section {
      background-image: url(imagens/fundoLogin.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      padding: 75px 95px;
      min-height: 100vh;
      display: -webkit-box;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
              flex-direction: column;
      color: #ffffff; 
    }
    @media (max-width: 991px) {
        .intro-section {
        padding-left: 50px;
        padding-rigth: 50px; } }
    @media (max-width: 767px) {
        .intro-section {
        padding: 28px; } }
    @media (max-width: 575px) {
        .intro-section {
        min-height: auto; } }

    .brand-wrapper .logo {
      height: 35px;
    }
    @media (max-width: 767px) {
    .brand-wrapper {
        margin-bottom: 35px; } }

    .intro-content-wrapper {
      width: 410px;
      max-width: 100%;
      margin-top: auto;
      margin-bottom: auto; 
    }
    .intro-content-wrapper .intro-title {
        font-size: 40px;
        font-weight: bold;
        margin-bottom: 17px; }
    .intro-content-wrapper .intro-text {
        font-size: 19px;
        line-height: 1.37; }
    .intro-content-wrapper .btn-read-more {
        background-color: #fff;
        padding: 13px 30px;
        border-radius: 0;
        font-size: 16px;
        font-weight: bold;
        color: #000; }
        .intro-content-wrapper .btn-read-more:hover {
        background-color: transparent;
        border: 1px solid #fff;
        color: #fff; }

    @media (max-width: 767px) {
    .intro-section-footer {
        margin-top: 35px; } }

    .intro-section-footer .footer-nav a {
      font-size: 20px;
      font-weight: bold;
      color: inherit; 
    }
    @media (max-width: 767px) {
        .intro-section-footer .footer-nav a {
        font-size: 14px; } }
    .intro-section-footer .footer-nav a + a {
        margin-left: 30px; }

    .form-section {
      display: -webkit-box;
      display: flex;
      -webkit-box-align: center;
              align-items: center;
      -webkit-box-pack: center;
              justify-content: center; 
            }
    @media (max-width: 767px) {
        .form-section {
        padding: 35px; } }

    .login-wrapper {
      width: 300px;
      max-width: 100%;
     }
    @media (max-width: 575px) {
        .login-wrapper {
        width: 100%; } }
    .login-wrapper .form-control {
        border: 0;
        border-bottom: 1px solid #e7e7e7;
        border-radius: 0;
        font-size: 14px;
        font-weight: bold;
        padding: 15px 10px;
        margin-bottom: 7px; }
        .login-wrapper .form-control::-webkit-input-placeholder {
        color: #b0adad; }
        .login-wrapper .form-control::-moz-placeholder {
        color: #b0adad; }
        .login-wrapper .form-control:-ms-input-placeholder {
        color: #b0adad; }
        .login-wrapper .form-control::-ms-input-placeholder {
        color: #b0adad; }
        .login-wrapper .form-control::placeholder {
        color: #b0adad; }

    .login-title {
      font-family: "LogoFonte";  
      font-size: 30px;
      font-weight: bold;
      margin-bottom: 30px;
     }

    .login-btn {
      padding: 13px 30px;
      background-color: #000;
      border-radius: 0;
      font-size: 20px;
      font-weight: bold;
      color: #fff; 
    }
    .login-btn:hover {
        border: 1px solid #000;
        background-color: transparent;
        color: #000; }

    .forgot-password-link {
      font-size: 14px;
      color: #080808;
      text-decoration: underline; 
    }

    .social-login-title {
      font-size: 15px;
      color: #919aa3;
      display: -webkit-box;
      display: flex;
      margin-bottom: 23px; 
    }
    .social-login-title::before, .social-login-title::after {
        content: "";
        background-image: -webkit-gradient(linear, left top, left bottom, from(#f4f4f4), to(#f4f4f4));
        background-image: linear-gradient(#f4f4f4, #f4f4f4);
        -webkit-box-flex: 1;
                flex-grow: 1;
        background-size: calc(100% - 20px) 1px;
        background-repeat: no-repeat; }
    .social-login-title::before {
        background-position: center left; }
    .social-login-title::after {
        background-position: center right; }

    .social-login-links {
      text-align: center;
      margin-bottom: 32px; 
    }

    .social-login-link img {
      width: 40px;
      height: 40px;
      -o-object-fit: contain;
          object-fit: contain; 
    }

    .social-login-link + .socia-login-link {
      margin-left: 16px; 
    }

    .login-wrapper-footer-text {
      font-size: 14px;
      text-align: center; 
    }


</style>

</body>
</html>