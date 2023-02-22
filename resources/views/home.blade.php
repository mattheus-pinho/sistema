<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-bootstrap></x-bootstrap>
    <title>M.info</title>
</head>
<body>
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
                                    <p class="text-justify">Nature writing often draws heavily on scientific information and facts about the natural world; at the same time, it is frequently written in the first person and incorporates personal observations of and philosophical reflections upon nature.</p>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-read-more">Ver Preços</button>
                                </div>
                            </div>
                        </div>

                        <!--Card -->
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <img src="imagens/impressora.jpg" />
                                <div class="card-body">
                                    <h3>Impressoras</h3>
                                    <p class="text-justify">Nature writing often draws heavily on scientific information and facts about the natural world; at the same time, it is frequently written in the first person and incorporates personal observations of and philosophical reflections upon nature.</p>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-read-more">Ver Preços</button>
                                </div>
                            </div>
                        </div>

                        <!--Card -->
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <img src="imagens/notebook.jpg" />
                                <div class="card-body">
                                    <h3>Notebooks</h3>
                                    <p class="text-justify">Nature writing often draws heavily on scientific information and facts about the natural world; at the same time, it is frequently written in the first person and incorporates personal observations of and philosophical reflections upon nature.</p>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-read-more">Ver Preços</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <section id="sec-precos" class="sec-precos pt-5 pb-5">
            <div class="wrapper">
                <h2 class="text-center mb-5">Serviços</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pricing__item">
                                <h3 class="pricing__title">Starter</h3>
                                <div class="pricing__price"><span class="pricing__currency">$</span>9.90</div>
                                <p class="pricing__sentence">Small business solution</p>
                                <ul class="pricing__feature-list">
                                    <li class="pricing__feature">Unlimited calls</li>
                                    <li class="pricing__feature">Free hosting</li>
                                    <li class="pricing__feature">40MB of storage space</li>
                                </ul>
                                <button class="pricing__action">Buy Now</button>
                            </div>
                        </div>
                      
                      
                    </div>
                </div>
            </div>
        </section>
      
        <section id="sec-orcamento" class="sec-orecamento">
          <div class="container">
            <h1 class="h4 mb-5 text-center">SEÇÃO</h1>
            <div class="row justify-content-center">
              <div class="col-md-4">
                
              </div>
            </div>
          </div>
        </section>
      
    </div>

    <!--Estilo CSS / REMOVER DAQUI-->
    <style>
        
        /* Sonam */
.pricing__item {
	margin: 1.5em;
	padding: 2em;
	cursor: pointer;
	border-radius: 10px;
	background: #dec;
	box-shadow: 0 5px 20px rgba(0,0,0,0.05), 0 15px 30px -10px rgba(0,0,0,0.3);
	transition: background 0.3s;
}

.pricing__item:hover {
	background: #dfd;
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
            background-color: #fff;
            padding: 13px 30px;
            border-radius: 0;
            font-size: 16px;
            font-weight: bold;
            color: #000; 
        }

        .btn-read-more:hover{
            cursor: pointer;
            background-color: #fff; 
            border: 1px solid #fff;
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
            background: rgb(232,247,238);
            background: linear-gradient(144deg, rgba(232,247,238,1) 19%, rgba(144,152,171,1) 100%);
        }

        .custom-container{
            --bs-gutter-x: 0rem;
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

    <!--Script de Rolagem / MINIFICAR E REMOVER DAQUI-->
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