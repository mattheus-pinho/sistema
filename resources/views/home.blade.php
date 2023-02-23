<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-bootstrap></x-bootstrap>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>M.info</title>
</head>
<body>

<!--Tags HTML / TRANSFORMAR CARDS EM COMPONENTES BLADE-->
<div class="container-fluid custom-container">

    <section class="hero">
        <div class="container-fluid custom-container">
            <nav class="navbar navbar-expand-lg justify-content-center">
            
            <!--COLOCAR LOGO E FONTE-->
            <a href="#" class="navbar-brand mb-0 ">M.Info</a>

            <li class="navbar-divider"></li>

            <div id="headerNav" class=" navbar justify-content-end">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                    <a class="nav-link" href="#sec-servicos">Serviços</a>
                    </li>
    
                    <li class="nav-item">
                    <a class="nav-link" href="#sec-precos">Tabela de Preços</a>
                    </li>
    
                    <li class="nav-item">
                    <a class="nav-link" href="#sec-orcamento">Orçamento</a>
                    </li>
                </ul>

                <li class="navbar-divider"></li>

                <a class="btn btn-read-more" href="/login" type="submit">Entrar</a>
            </div>
            </nav>
        </div>

        <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container">
            <div class="row justify-content-center text-center">
            <div class="col-md-10 col-lg-6">
                <div class="intocavel">
                    <h1 class="display-5">Atendimento Personalizado para as suas nescessidades</h1>
                    <p class="lead">Nós explique seu problema e daremos a melhor solução</p>
                </div>
                <a class="btn btn-read-more " href="#sec-orcamento" role="button">Fale Aqui</a>
                
            </div>
            </div>
        </div>
        </div>
        
    </section>
    
    <section id="sec-servicos" class="sec-servicos pt-5 pb-5">
        <div class="wrapper">
            <h2 class="text-center mb-5">Serviços</h2>
            <div class="container">
                <div class="row">
                    <!--Card -->
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <img src="imagens/notebook.jpg" />
                            <div class="card-body">
                                <h3>Notebooks</h3>
                                <li class="text-justify">Formatação</li>
                                <li class="text-justify">Limpeza</li>
                                <li class="text-justify">Reparo de Carcaça</li>
                                <li class="text-justify">Upgrade</li>
                                <br>
                                <p class="text-justify">Verificar disponiblidade dos serviços não listado</p>
                            </div>
                            <div class="card-footer">
                                <a type="button" href="#sec-precos" class="btn btn-read-more">Ver Preços</a>
                            </div>
                        </div>
                    </div>

                    <!--Card -->
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <img src="imagens/impressora.jpg" />
                            <div class="card-body">
                                <h3>Impressoras</h3>
                                <li class="text-justify">Intalação</li>
                                <li class="text-justify">configuração em Rede</li>
                                <li class="text-justify">Troca de Toner/Cartucho</li>
                                <li class="text-justify">Limpezas básicas</li>
                                <br>
                                <p class="text-justify">Verificar disponiblidade dos serviços não listado</p>
                            </div>
                            <div class="card-footer">
                                <a type="button" href="#sec-precos" class="btn btn-read-more">Ver Preços</a>
                            </div>
                        </div>
                    </div>

                    <!--Card -->
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <img src="imagens/computador.jpg" />
                            <div class="card-body">
                                <h3>Computadores</h3>
                                <li class="text-justify">Formatação</li>
                                <li class="text-justify">Limpeza</li>
                                <li class="text-justify">Upgrade</li>
                                <li class="text-justify">Montagem</li>
                                <br>
                                <p class="text-justify">Verificar disponiblidade dos serviços não listado</p>
                            </div>
                            <div class="card-footer">
                                <a type="button" href="#sec-precos" class="btn btn-read-more">Ver Preços</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="sec-precos" class="sec-precos pt-5 pb-5">
        <div class="wrapper">
            <h2 class="text-center mb-5">Preços Tabelados</h2>
            <div class="container">
                <div class="row">
                    <!--Card Formatação-->
                    <div class="col-md-4">
                        <div class="pricing__item">
                            <h3 class="pricing__title">Formatação sem Backup</h3>
                            <div class="pricing__price"><span class="pricing__currency">$</span>70.00</div>
                            <p class="pricing__sentence">Formatação rápida de acordo com o gosto do cliente</p>
                            <ul class="pricing__feature-list">
                                <li class="pricing__feature">Deixe sua máquina zerada da forma como preferir</li>
                            </ul>
                            <a class="btn btn-read-more" href="#sec-orcamento">Agende</a>
                        </div>
                    </div>
                    <!--Card Limpeza-->
                    <div class="col-md-4">
                    <div class="pricing__item">
                        <h3 class="pricing__title">Limpeza de Computador</h3>
                        <div class="pricing__price"><span class="pricing__currency">$</span>50.00</div>
                        <p class="pricing__sentence">Small business solution</p>
                        <ul class="pricing__feature-list">
                            <li class="pricing__feature">Unlimited calls</li>
                            <li class="pricing__feature">Free hosting</li>
                            <li class="pricing__feature">40MB of storage space</li>
                        </ul>
                        <a class="btn btn-read-more" href="#sec-orcamento">Agende</a>
                    </div>
                </div>
                <!--Card montagem-->
                <div class="col-md-4">
                    <div class="pricing__item">
                        <h3 class="pricing__title">Montagem de Computador</h3>
                        <div class="pricing__price"><span class="pricing__currency">$</span>90.00</div>
                        <p class="pricing__sentence">Montagem de maquinas com configuração personalizada</p>
                        <ul class="pricing__feature-list">
                            <li class="pricing__feature">Unlimited calls</li>
                            <li class="pricing__feature">Free hosting</li>
                            <li class="pricing__feature">40MB of storage space</li>
                        </ul>
                        <a class="btn btn-read-more" href="#sec-orcamento">Agende</a>
                    </div>
                </div>
                    
            </div>
            <!--Segunda linhda de cards-->
            <div class="row">
                <!--Card Formatação-->
                    <div class="col-md-4">
                        <div class="pricing__item">
                            <h3 class="pricing__title">Formatação Com Backup</h3>
                            <div class="pricing__price"><span class="pricing__currency">$</span>70.00</div>
                            <p class="pricing__sentence">Salvamos suas Informações</p>
                            <ul class="pricing__feature-list">
                                <li class="pricing__feature">Alteração de valor apenas acima de 500 Gigas</li>
                                <li class="pricing__feature">1 Mês de garantia no backup</li>
                            </ul>
                            <a class="btn btn-read-more" href="#sec-orcamento">Agende</a>
                        </div>
                    </div>
                <!--Card Limpeza-->
                <div class="col-md-4">
                    <div class="pricing__item">
                        <h3 class="pricing__title">Limpeza de Notebook</h3>
                        <div class="pricing__price"><span class="pricing__currency">$</span>70.00</div>
                        <p class="pricing__sentence">Mantenha seu equipamento limpo e funcional</p>
                        <ul class="pricing__feature-list">
                            <li class="pricing__feature">Evite que seu notebook diminua a vida util ou te deixe na mão quando mais precisar</li>
                        </ul>
                        <a class="btn btn-read-more" href="#sec-orcamento">Agende</a>
                    </div>
                </div>
                <!--Card montagem-->
                <div class="col-md-4">
                <div class="pricing__item">
                    <h3 class="pricing__title">Diagnostico</h3>
                    <div class="pricing__price"><span class="pricing__currency">$</span>30.00</div>
                    <p class="pricing__sentence">Não sabe qual o problema do equipamento? Venha fazer um diagnostico</p>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Realizamos os testes nescessários</li>
                        <li class="pricing__feature">Receba um relatório da saúde do equipamento e um orçamento personalizado</li>
                    </ul>
                    <a class="btn btn-read-more" href="#sec-orcamento">Agende</a>
                </div>
            </div>
                
                </div>
            </div>
        </div>
    </section>
    
    <section id="sec-orcamento" class="sec-orecamento">
        <div class="container">
        <h1 class="h4 mb-5 text-center">Faça aqui sua solicitação de Orçamento</h1>
        <div class="row justify-content-center">
                <div class="contact-form">
                <div class="contact-form-box__right">
                    <h3 class="m-b-15">Formulário</h3>
                    <hr>
                    <form method="post" action="/orcar">
                        @csrf
                    <div class="lab-grid mb-4">
                        <div class="lab-grid-cell lab-grid-cell--mb-2x w-third--d w-half--t w-full--m">
                        <div class="floating-label-wrap">
                            <input type="text" class="form-control" id="field-1" placeholder="Nome Completo / Empresa" required>
                        </div>
                        <!-- .floating-label-wrap --> 
                        </div>
                        <!-- .lab-grid-cell lab-grid-cell--mb-2x -->
                        
                        <div class="lab-grid-cell lab-grid-cell--mb-2x w-third--d w-half--t w-full--m">
                        <div class="floating-label-wrap">
                            <input type="email" class="form-control" id="field-2" placeholder="Email">
                        </div>
                        <!-- .floating-label-wrap --> 
                        </div>
                        
                        <!-- .lab-grid-cell lab-grid-cell--mb-2x -->
                        
                        <div class="lab-grid-cell lab-grid-cell--mb-2x w-third--d w-half--t w-full--m">
                        <div class="floating-label-wrap">
                            <input type="tel" class="form-control" id="field-4" placeholder="Telefone (Whatsapp)" required>
                        </div>
                        <!-- .floating-label-wrap --> 
                        </div>
                        <!-- .lab-grid-cell lab-grid-cell--mb-2x -->
                        
                        <div class="lab-grid-cell lab-grid-cell--mb-2x w-third--d w-half--t w-full--m">
                            <div class="floating-label-wrap">
                                <select aria-label="Orçamento" class="form-control" id="field-3" placeholder="">
                                    <!--Opções de serviços-->
                                    <option selected value="orcamento">Orçamento</option>
                                    <option value="formatacao-sem-backup">Formatação sem Backup</option>
                                    <option value="formatacao-com-backup">Formatação com Backup</option>
                                    <option value="limpeza-de-computador">Limpeza de Computador</option>
                                    <option value="limpeza-de-notebook">Limpeza de Notebook</option>
                                    <option value="montagem-de-computador">Montagem de Computador</option>
                                    <option value="diagnostico">Diagnostico</option>
                                </select>
                            </div>
                            <!-- .floating-label-wrap --> 
                        </div>
                        <!-- .lab-grid-cell lab-grid-cell--mb-2x -->           
                        <div class="lab-grid-cell lab-grid-cell--mb-2x w-full">
                        <div class="floating-label-wrap">
                            <textarea class="form-control" id="field-7" placeholder="Como podemos ajudar?" row="15" required></textarea>
                        </div>
                        <!-- .floating-label-wrap --> 
                        </div>
                        <!-- .lab-grid-cell lab-grid-cell--mb-2x --> 
                    </div>
                    <!-- .lab-grid -->
                    <button type="submit" class="btn btn-read-more btn-lg btn-block">Enviar</button>
                    </form>
                </div>
        </div>
        </div>
    </section>
    
    <section id="contact">
        <div class="container custom-container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Entre em contato!</h2>
            <hr class="my-4">
            <p class="mb-5">Pronto para iniciar seu próximo projeto conosco?
                Ligue, envie um e-mail ou preencha o formulário acima
                e retornaremos o mais breve possível!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>(65) 9 9298-6594</p>
            </div>
            <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 fab fa-wpforms"></i>
            <p><a href="#sec-orcamento">Formulário</a></p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>m.info@gmail.com
            </p>
            </div>
            
        </div>
        </div>
        <hr>
        <footer>
                <div class="container">
                <p>&copy; M.Info 2023. All Rights Reserved.</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                    <a href="#p">Privacy</a>
                    </li>
                    <li class="list-inline-item">
                    <a href="#t">Terms</a>
                    </li>
                </ul>
                </div>
            </footer>
    </section>
</div>

<!--Estilo CSS / MINIFICAR E REMOVER-->
<style>
    .custom-container{
        --bs-gutter-x: 0rem;
    }

    /*FOOTER*/
    
    p{
        font-weight: 600;
    }

    footer {
        padding: 25px 0;
        text-align: center;
    }
    
    footer p {
        font-size: 13px;
        margin: 0;
    }
    
    footer ul {
        margin-bottom: 0;
    }
    
    footer ul li a {
        font-size: 12px;
    }
    
    footer ul li a:hover, footer ul li a:focus, footer ul li a:active, footer ul li a.active {
        text-decoration: none;
    }

    /*FIM DO FOOTER*/

    @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap");
    .form-control {
        border: 0;
        border-bottom: 1px solid #e7e7e7;
        border-radius: 0;
        font-size: 14px;
        font-weight: bold;
        padding: 15px 10px;
        margin-bottom: 7px; 
    }
    .login-wrapper .form-control::-webkit-input-placeholder {
        color: #b0adad; 
    }
    .login-wrapper .form-control::-moz-placeholder {
        color: #b0adad; 
    }
    .login-wrapper .form-control:-ms-input-placeholder {
        color: #b0adad; 
    }
    .login-wrapper .form-control::-ms-input-placeholder {
        color: #b0adad; 
    }
    .login-wrapper .form-control::placeholder {
        color: #b0adad; }
    p{
        font-size: 14px;
    }
    .section-100 {
        padding-top: 100px;
        padding-bottom: 100px;
    }
    .m-b-15 {
        margin-bottom: 15px;
    }
    .m-r-5 {
        margin-right: 5px;
    }
    .light-grey {
        color: #cbcbcb;
    }
    .contact-form {
        background: #fff;
        box-shadow: 0 23px 73px -17px rgba(0, 0, 0, 0.16);
        display: flex;
        flex-wrap: wrap;
    }
    @media (min-width: 993px) {
        .contact-form {
            flex-wrap: nowrap;
        }
    }
    .contact-form-box__left {
        background: #4b65ee; /* fallback for old browsers */
        background-image: url("../images/bg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: #fff;
        padding: 30px 30px 80px 30px;
        width: 100%;
        border-radius: 5px;
        position: relative;
    }
    @media (min-width: 993px) {
        .contact-form-box__left {
            width: 350px;
            transform: scale(1.05);
        }
    }
    .contact-form-box__left_footer {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 30px;
        text-align: center;
    }
    .contact-form-box__left_footer a {
        margin-right: 2px;
        padding: 8px;
        color: #4b65ee;
    }
    .contact-form-box__left_footer a:hover {
        color: #fff;
    }
    .contact-form-box__right {
        padding: 30px;
        width: 100%;
    }
    /*@media (min-width: 993px) {
        .contact-form-box__right {
        padding: 60px;
        width: calc(100% - 350px);
        }
    }*/
    .btn-primary {
        background: #4b65ee;
        border-color: #4b65ee;
    }
    .btn-primary:hover {
        background: #006fbc;
        border-color: #006fbc;
    }
    /* Making the label break the flow */
    .floating-label {
        position: absolute;
        top: 0;
        left: 0;
        user-select: none;
        z-index: 1500;
    }
    /* Hide the browser-specific focus styles */
    .floating-label-field {
        color: rgba(44, 62, 80, .75);
        border-width: 0;
        z-index: 2000;
    }
    .floating-label-field:focus {
        outline: 0;
        box-shadow: 0;
    }
    .floating-label-field::placeholder {
        color: rgba(44, 62, 80, .5);
    }
    /* Make the label and field look identical on every browser */
    .floating-label, .floating-label-field {
        font: inherit;
        line-height: 1;
        display: block;
        width: 100%;
    }
    .floating-label-field, .floating-label-wrap {
        position: relative;
    }
    /* Input Style #1 */
    .floating-label-field--s1 {
        transition: border-color .25s ease-in-out;
        color: rgb(71 71 71);
        border-bottom: 1px solid rgb(75 101 238);
        background-color: transparent;
    }
    .floating-label-field--s1 + .floating-label {
        transition: transform .25s, opacity .25s ease-in-out;
        transform-origin: 0 0;
        opacity: .5;
    }
    .floating-label-field--s1:focus, .floating-label-field--s1:not(:placeholder-shown) {
        border-color: rgb(75 101 238);
    }
    .floating-label-field--s1:focus + .floating-label, .floating-label-field--s1:not(:placeholder-shown) + .floating-label {
        transform: translate(.25em, -30%) scale(.8);
        opacity: .25;
    }
    .floating-label-field--s1:valid:not(:placeholder-shown) {
        border-color: rgb(39 131 77 / 85%);
    }
    .floating-label-field--s1:invalid {
        border-color: rgb(199 9 36 / 85%);
    }
    /* Input Style #2 */
    .floating-label-field--s2 {
        transition: background-color .25s ease-in-out;
        border: 2px solid #fff;
        border-radius: 5px;
        background-color: #fff;
    }
    .floating-label-field--s2 + .floating-label {
        visibility: hidden;
        transition: transform .25s, visibility .5s, opacity .5s ease-in-out;
        opacity: 0;
    }
    .floating-label-field--s2:focus + .floating-label, .floating-label-field--s2:not(:placeholder-shown) + .floating-label {
        visibility: visible;
        transform: translateY(-80%);
        opacity: .5;
    }
    .floating-label-field--s2:valid:not(:placeholder-shown) {
        border-color: #adefc8;
        background-color: #adefc8;
    }
    .floating-label-field--s2:invalid {
        border-color: #ffe0e3;
        background-color: #ffe0e3;
    }
    .floating-label-field--s3 {
        padding: 1.5em;
        transition: border-color .25s ease-in-out;
        color: rgba(255, 255, 255, .75);
        border: 1px solid rgba(255, 255, 255, .1);
        border-radius: 5px;
        background-color: transparent;
    }
    .floating-label-field--s3 + .floating-label {
        position: absolute;
        top: .75em;
        left: .75em;
        display: inline-block;
        width: auto;
        margin: 0;
        padding: .75em;
        transition: transform .25s, opacity .25s, padding .25s ease-in-out;
        transform-origin: 0 0;
        color: rgba(255, 255, 255, .5);
    }
    .floating-label-field--s3:focus, .floating-label-field--s3:not(:placeholder-shown) {
        border-color: rgba(255, 255, 255, .1);
    }
    .floating-label-field--s3:focus + .floating-label, .floating-label-field--s3:not(:placeholder-shown) + .floating-label {
        z-index: 2500;
        padding: .75em;
        transform: translate(0, -2em) scale(.9);
        color: rgba(255, 255, 255, .25);
        background-color: #2c3e50;
    }
    /* Common Styles */
    /* Identical inputs on all browsers */
    .floating-label-field--s1:not(textarea), .floating-label-field--s2:not(textarea), .floating-label-field--s3:not(textarea) {
        max-height: 4em;
    }
    .floating-label-field--s1, .floating-label-field--s1 + .floating-label, .floating-label-field--s2, .floating-label-field--s2 + .floating-label {
        padding: 1.5em;
    }
    .floating-label-field--s1 + .floating-label, .floating-label-field--s2 + .floating-label {
        z-index: 1500;
    }
    .floating-label-field--s1::placeholder, .floating-label-field--s3::placeholder {
        color: transparent;
    }
            
            /* Sonam */
    .pricing__item {
        margin: 1.5em;
        padding: 2em;
        border-radius: 10px;
        background: #ffffff;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05), 0 15px 30px -10px rgba(0,0,0,0.3);
        transition: background 0.3s;
    }

    .pricing__item:hover {
        cursor: pointer;
    }

    .pricing__title {
        font-size: 2em;
        width: 100%;
        margin: 0 0 0.25em;
        padding: 0 0 0.5em;
        border-bottom: 3px solid rgb(27, 26, 28);
    }

    .pricing__price {
        color: #E06060;
        font-size: 1.75em;
        padding: 1em 0 0.75em;
    }

    .pricing__sentence {
        font-weight: bold;
    }

    .pricing__feature-list {
        margin: 0;
        padding: 1em 1.25em 2em;
    }

    .pricing__action {
        font-weight: bold;
        margin-top: auto;
        padding: 0.75em 2em;
        border-radius: 5px;
        background: #E06060;
        transition: background 0.3s;
    }

    .pricing--sonam .pricing__action:hover,
    .pricing--sonam .pricing__action:focus {
        background: #BD3C3C;
    }    

    /*fim tabela de preços*/

    .row-custom{
        min-height: 100vh;
    }

    .btn-read-more{
        padding: 13px 30px;
        background-color: #000;
        border-radius: 0;
        font-size: 20px;
        font-weight: bold;
        color: #fff; 
    }

    .btn-read-more:hover{
        border: 1px solid #000;
        background-color: transparent;
        color: #000;
    }

    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
    /*----  Main Style  ----*/
    
    .row{
        margin: 50px auto;
    }
    #cards-section .container{
        padding-top: 40px; 
    }
    #cards-section a{
        text-decoration: none;
        outline: none;
    }
    #cards-section .card {
        border-radius: 8px;
    }
    #cards-section .card .text-container{
        padding: 6px 28px;
        text-align: center;
    }
    #cards-section .card{
        background: #989898;
        -webkit-transition: all 0.3s ease-in;
        -moz-transition: all 0.3s ease-in;
        -ms-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
        box-shadow: 0px 5px 13px rgba(0, 0, 0, 0.40);
        border-radius: 7px;
        overflow: hidden;
        height: 192px;
        margin-top: 90px;
    }
    #cards-section .card:hover{
        box-shadow: 0px 9px 18px rgba(0, 0, 0, 0.50);
        -webkit-transition: all 0.3s ease-in;
        -moz-transition: all 0.3s ease-in;
        -ms-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
        height: 460px;
        margin-top: 0px;
        cursor: pointer;
    }
    #cards-section .card .image-container{
        text-align: center;
        padding: 20px;
    }
    #cards-section .card .image-container img{
        -webkit-transition:all 0.5s ease-in; 
        -moz-transition:all 0.5s ease-in; 
        -o-transition:all 0.5s ease-in;
        -ms-transition:all 0.5s ease-in; 
        transition: all 0.5s ease-in;
        height: 150px;
        width: 150px;
        border-radius: 150px;
        display: inline-block;
        position: relative;
        overflow: hidden;

        z-index:99;
    }
    #cards-section .card p{
        font-size: 16px;
        color: #424242;
        font-family: "Lato";
        margin: 6px 0px 0px 0px;
        line-height: 25px;
    }
    #cards-section .card span{
        font-size: 16px;
        color: #00acc1;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        margin-top: 0px;
        margin-bottom: 0px;
    }
    #cards-section .card h6{
        margin: 0px 0px;
        font-size: 28px;
        font-weight: 900;
        font-family: 'Lato', sans-serif;
        color: #424242;
        line-height: 26px;
    }

    .image-container{
        position: relative;
    }
    .image-container:after {
        position: absolute;
        content: "";
        opacity: 0.7;
    }
    #cards-section .card:hover .image-container:after{
        -webkit-transition:all 0.5s ease-in; 
        -moz-transition:all 0.5s ease-in; 
        -o-transition:all 0.5s ease-in;
        -ms-transition:all 0.5s ease-in; 
        transition: all 0.5s ease-in;  
        width: 120%;
        top: -90px;
        height: 210px;
        border-radius: 50%;
        background-color: rgba(0,172,193,0.3);
        z-index:1;
        left: -10%;
    }
    .social-media{
        margin-top: 5px;
        padding: 7px 0px 0px 0px;
        text-align: center;
    }
    .social-media ul {
        left: 0;
        margin-left: 0px;
        padding-left: 0px;
    }
    .social-media li {
        text-align: center;
        list-style: none;
        display: inline-block;
        left: 0;
        width: 48px;
    }
    .social-media li a {
        font-size: 21px;
        color: #424242 !important;
        outline: none;
    }
    /*----------MEDIA QUERIES RESPONSIVE----------*/
    @media (min-width: 320px) and (max-width: 479px){
    .card{
        margin: 50px 0px;
    }
    }
    @media (min-width: 480px) and (max-width: 599px){
    .card{
        margin: 50px 0px;
    }
    #cards-section .card:hover{
        height: 400px;
    }
    }
    @media (min-width: 600px) and (max-width: 767px){
    .card{
        margin: 50px 0px;
    }
    #cards-section .card:hover{
        height: 400px;
    }
    }
    @media (min-width: 768px) and (max-width: 1023px){
    .card{
        margin: 50px 0px;
    }
    #cards-section .card:hover{
        height: 400px;
    }
    }

    /*##########You dont need this##########*/
    #cards-section .card-complete .text-container{
        padding: 6px 28px;
        text-align: center;
    }
    #cards-section .card-complete{
        box-shadow: 0px 9px 18px rgba(0, 0, 0, 0.50);
        -webkit-transition: all 0.3s ease-in;
        -moz-transition: all 0.3s ease-in;
        -ms-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
        height: 460px;
        margin-top: 0px;
        cursor: pointer;
    }
    #cards-section .card-complete .image-container{
        text-align: center;
        padding: 20px;
    }
    #cards-section .card-complete .image-container img{
        -webkit-transition:all 0.5s ease-in; 
        -moz-transition:all 0.5s ease-in; 
        -o-transition:all 0.5s ease-in;
        -ms-transition:all 0.5s ease-in; 
        transition: all 0.5s ease-in;
        height: 150px;
        width: 150px;
        border-radius: 150px;
        display: inline-block;
        position: relative;
        overflow: hidden;

        z-index:99;
    }
    #cards-section .card-complete p{
        font-size: 16px;
        color: #424242;
        font-family: "Lato";
        margin: 6px 0px 0px 0px;
        line-height: 25px;
    }
    #cards-section .card-complete span{
        font-size: 16px;
        color: #00acc1;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        margin-top: 0px;
        margin-bottom: 0px;
    }
    #cards-section .card-complete h6{
        margin: 0px 0px;
        font-size: 28px;
        font-weight: 900;
        font-family: 'Lato', sans-serif;
        color: #424242;
        line-height: 26px;
    }
    #cards-section .card-complete{
        border-radius: 8px;
        overflow: hidden;
    }
    .image-container{
        position: relative;
    }
    .image-container:after {
        position: absolute;
        content: "";
        opacity: 0.7;
    }
    #cards-section .card-complete .image-container:after{
        -webkit-transition:all 0.5s ease-in; 
        -moz-transition:all 0.5s ease-in; 
        -o-transition:all 0.5s ease-in;
        -ms-transition:all 0.5s ease-in; 
        transition: all 0.5s ease-in;
        width: 120%;
        top: -90px;
        height: 210px;
        border-radius: 50%;
        background-color: rgba(0,172,193,0.3);
        z-index:0;
        left: -10%;
    }
    /*----------MEDIA QUERIES RESPONSIVE----------*/
    @media (min-width: 320px) and (max-width: 479px){
    .card-complete{
        margin: 50px 0px;
    }
    }
    @media (min-width: 480px) and (max-width: 599px){
    .card-complete{
        margin: 50px 0px;
    }
    #cards-section .card-complete{
        height: 400px;
    }
    }
    @media (min-width: 600px) and (max-width: 767px){
    .card-complete{
        margin: 50px 0px;
    }
    #cards-section .card-complete{
        height: 400px;
    }
    }
    @media (min-width: 768px) and (max-width: 1023px){
    .card-complete{
        margin: 50px 0px;
    }
    #cards-section .card-complete{
        height: 400px;
    }
    }

    /*Background*/
    html,body{
        margin: 0%;padding: 0%;border: 0px;
        background: rgb(219,214,214);
        background: linear-gradient(17deg, rgba(219,214,214,1) 48%, rgba(144,152,171,1) 100%);
    }

    /* Resets */
    hr {
        margin-left: 0;
        max-width: 40px;
    }

    /* Jumbotron (hero) */
    .jumbotron {
        position: relative;
        background: url(imagens/fundoLogin.jpg) no-repeat bottom center/cover;
    }

    .intocavel{
        -webkit-user-select: none; /* Safari */
        -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none; /* Padrão */
    }

    .jumbotron:before {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /*Escurece o conteudo do container*/
        /*background: rgba(0, 0, 0, 0.5);*/
    }
    .jumbotron .container {
        padding: 75px 0;
    }
    .jumbotron h1,
    .jumbotron .lead {
        color: #fff;
    }

    /* Bustom button */
    .btn-primary {
        background: #1096fc;
        border: 0;
    }
    .btn-primary:hover {
        cursor: pointer;
        background: #0384e5;
    }

</style>

<!--Script de Rolagem / MINIFICAR E REMOVER-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var links = document.querySelectorAll('a[href*="#"]:not([href="#"])');
    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("click", function(e) {
        var target = document.querySelector(this.hash);
        if (target) {
            e.preventDefault();
            var targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
            window.scrollTo({
            top: targetPosition,
            behavior: "smooth"
            });
        }
        });
    }
    });
</script>
</body>
</html>