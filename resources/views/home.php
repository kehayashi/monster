<!doctype html>
<html>
<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-107917397-1');
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', '107917397-1', 'auto');
      ga('send', 'pageview');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meu 1º Imóvel</title>

    <link rel="icon" type="image/png" href="img/favicon_16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="img/favicon_32x32.png" sizes="32x32" />

    <meta name="description" content="Planeje a compra do seu primeiro imóvel" />

    <meta property="og:url" content="index.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Meu Primeiro Imóvel" />
    <meta property="og:description" content="Planeje a compra do seu primeiro imóvel" />
    <meta property="og:image" content="img/marca_header.png" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="index.html">
    <meta name="twitter:title" content="Meu Primeiro Imóvel">
    <meta name="twitter:description" content="Planeje a compra do seu primeiro imóvel">
    <meta name="twitter:image" content="img/marca_header.png">


    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/app.css">

    <!-- Fonts inclusion -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i,600,600i|Lato:400,400i" rel="stylesheet">

	<script src="js/jquery.1.12.4.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/knockout-3.4.2.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.maphilight.min.js"></script>
    <script type="text/javascript" src="js/monsterViewModel.js"></script>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <img class="brand-header" src="img/marca_header.svg" data-bind="click: reload">
                <h1><span class="text-highlighted">Planeje</span> a compra do seu <span class="text-highlighted">primeiro imóvel</span></h1>
            </div>
        </div>
    </div>
</header>

<main>
    <!-- Landing Page -->
    <section id="section-landing-page" data-bind="visible: passo() === 1">
        <div class="container">
            <div class="row text">
                <h2>Descubra em quanto <span class="text-highlighted">tempo</span> você vai quitar seu imóvel</h2>
            </div>
            <div id="section-idade">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <img class="icon" src="img/ic_1a_baby.svg">
                            <p>menos de 5 anos</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <img class="icon" src="img/ic_1b_adult.svg">
                            <p>menos de 10 anos</p>
                        </div>
                        <div class="col-xs-12 col-sm-12  col-md-12 col-lg-4">
                            <img class="icon" src="img/ic_1c_oldman.svg">
                            <p>10 anos ou mais</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text">
                <h2>Saiba quais imóveis <span class="text-highlighted">cabem no seu bolso</span></h2>
            </div>
            <div id="section-tipo-imovel">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <img class="icon" src="img/ic_2a_smallhouse.svg">
                            <p>1 dormitório</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <img class="icon" src="img/ic_2b_mediumhouse.svg">
                            <p>2 dormitórios</p>
                        </div>
                        <div class="col-xs-12 col-sm-12  col-md-12 col-lg-4">
                            <img class="icon" src="img/ic_2c_bighouse.svg">
                            <p>3+ dormitórios</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text">
                <h2>Vamos lá? Comece agora a <span class="text-highlighted">planejar</span> a compra do seu <span class="text-highlighted">primeiro imóvel!</span></h2>
            </div>
            <div id="section-dados-pessoais">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-2">
                            <h4>Valor da Parcela</h4>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="1" name="valorParcela" data-bind="checked: valorParcela, click: limparValorImovel" />até R$1.500
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="2" name="valorParcela" data-bind="checked: valorParcela, click: limparValorImovel" />até R$2.000
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="3" name="valorParcela" data-bind="checked: valorParcela, click: limparValorImovel" />até R$2.500
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="4" name="valorParcela" data-bind="checked: valorParcela, click: limparValorImovel" />até R$3.000
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <div id="ou"><h4>ou</h4></div>
                        </div>
                        <div class="col-xs-12 col-sm-12  col-md-4 col-lg-3">
                            <h4>Valor do Imóvel</h4>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="1" name="valorImovel" data-bind="checked: valorImovel, click: limparValorParcela" />até R$200 mil
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="2" name="valorImovel" data-bind="checked: valorImovel, click: limparValorParcela" />até R$400 mil
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="3" name="valorImovel" data-bind="checked: valorImovel, click: limparValorParcela" />até R$500 mil
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="4" name="valorImovel" data-bind="checked: valorImovel, click: limparValorParcela" />até R$1 milhão
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center nome-email">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" id="nome" class="form-control" required pattern="^([a-zA-ZáéíóúàâêôãõüçÁÉÍÓÚÀÂÊÔÃÕÜÇ ]|\n){2,50} ([a-zA-ZáéíóúàâêôãõüçÁÉÍÓÚÀÂÊÔÃÕÜÇ ]|\n){2,50}$" placeholder="Nome Completo" data-bind="textInput: nome">
                            <span id="helpBlock" class="help-block" data-bind="visible: temErroNoNome">Informe um nome válido. Ex: Nome Sobrenome</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" required pattern="^[A-Za-z0-9](([_.-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([.-]?[a-zA-Z0-9]+)*)([.][A-Za-z]{2,4})$" placeholder="exemplo@email.com" data-bind="textInput: email">
                            <span id="helpBlock" class="help-block" data-bind="visible: temErroNoEmail">Informe um e-mail válido. Ex: exemplo@email.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <button class="btn btn-lg" data-bind="click: iniciarCadastro, enable: deveIniciarORegistro">CRIAR<br />PLANEJAMENTO</button>
        </div>
    </section>
    <!-- Tipo de Familía -->
    <section id="section-tipo-de-familia" class="container"  data-bind="visible: passo() === 2">
        <div class="row text">
            <p>Qual seu <span class="text-highlighted">plano familiar</span> para os próximos anos?</p>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <button id="btnFamiliaPequena" class="btn" data-bind="click: setarTipoDeFamilia.bind($data, 1)"> </button>
                    <p>solteiro</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" >
                    <button id="btnFamiliaMedia" class="btn" data-bind="click: setarTipoDeFamilia.bind($data, 2)"></button>
                    <p>casal</p>
                </div>
                <div class="col-xs-12 col-sm-12  col-md-3 col-lg-3">
                    <button id="btnFamiliaGrande" class="btn" data-bind="click: setarTipoDeFamilia.bind($data, 3)"></button>
                    <p>com 1 filho</p>
                </div>
                <div class="col-xs-12 col-sm-12  col-md-3 col-lg-3">
                    <button id="btnFamiliaGG" class="btn" data-bind="click: setarTipoDeFamilia.bind($data, 4)"></button>
                    <p>com 2 filhos ou mais</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="progress">
                    <div class="progress-bar progress-bar-warning  progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        <span class="sr-only">25% Completo</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Região -->
    <section id="section-regiao" class="container" data-bind="visible: deveCarregarMapa() || passo() === 3">
        <div class="row text">
            <p>Em qual <span class="text-highlighted">região</span> de Florianópolis você quer morar?</p>
        </div>
        <br>
        <div class="row justify-content-center">
            <div id="mapa" class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <svg id="map_floripa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 882 752.16">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #f5775b;
                      }

                      .cls-2, .cls-4, .cls-6 {
                        fill: none;
                      }

                      .cls-2 {
                        stroke: #f5775b;
                      }

                      .cls-2, .cls-4 {
                        stroke-miterlimit: 10;
                        stroke-width: 4px;
                      }

                      .cls-3 {
                        fill: #fff;
                      }

                      .cls-4 {
                        stroke: #fff;
                      }

                      .cls-5 {
                        fill: #727272;
                      }

                      .cls-6 {
                        stroke: #727272;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-width: 12px;
                      }
                    </style>
                  </defs>
                  <title>map_floripa</title>
                  <g id="bt_centro" data-bind="click: setarRegiao.bind($data, 2)">
                    <circle class="cls-1" cx="482.6" cy="321.96" r="8.38"/>
                    <circle class="cls-2" cx="482.6" cy="321.96" r="16.62"/>
                  </g>
                  <g id="bt_leste" data-bind="click: setarRegiao.bind($data, 3)">
                    <circle class="cls-1" cx="585.6" cy="305.34" r="8.38"/>
                    <circle class="cls-2" cx="585.6" cy="305.34" r="16.62"/>
                  </g>
                  <g id="bt_sul" data-bind="click: setarRegiao.bind($data, 4)">
                    <circle class="cls-1" cx="462.89" cy="534.17" r="8.38"/>
                    <circle class="cls-2" cx="462.89" cy="534.17" r="16.62"/>
                  </g>
                  <g id="bt_continente" data-bind="click: setarRegiao.bind($data, 0)">
                    <circle class="cls-1" cx="143.07" cy="305.34" r="8.38"/>
                    <circle class="cls-2" cx="143.07" cy="305.34" r="16.62"/>
                  </g>
                  <g id="bt_norte" data-bind="click: setarRegiao.bind($data, 1)">
                    <circle class="cls-1" cx="580.97" cy="151.51" r="8.38"/>
                    <circle class="cls-2" cx="580.97" cy="151.51" r="16.62"/>
                  </g>
                  <g id="hover_shapes">
                    <g id="norte" href="#" data-bind="click: setarRegiao.bind($data, 1)">
                      <polygon id="shape" class="cls-1" points="707.83 120.21 628.45 32.6 459.5 129.06 475.54 240.88 626.95 240.88 707.83 120.21"/>
                      <g id="text">
                        <g>
                          <path class="cls-1" d="M763.29,149V180a2,2,0,0,1-2.21,2.21h-4.75a2.59,2.59,0,0,1-2.5-1.82L744.52,160a29,29,0,0,1-2-4.94H742a36.12,36.12,0,0,1,.29,5v22.08h-5.9V151.25a2,2,0,0,1,2.26-2.21h4.66a2.39,2.39,0,0,1,1.51.43,3.62,3.62,0,0,1,1,1.39l9,19.73q.14.34,1,2.26t1.3,3h.58q-.24-3-.24-5.38V149Z"/>
                          <path class="cls-1" d="M780.86,158q6.34,0,9,2.83t2.62,9.6q0,6.77-2.62,9.58t-9,2.81q-6.38,0-9-2.81t-2.64-9.58q0-6.77,2.64-9.6T780.86,158Zm0,4.66q-3.27,0-4.42,1.61t-1.15,6.17q0,4.51,1.15,6.12t4.42,1.61q3.17,0,4.34-1.61t1.18-6.12q0-4.56-1.18-6.17T780.86,162.62Z"/>
                          <path class="cls-1" d="M813.83,158l-.62,5.47h-1.68q-2.5,0-7.78,2.11v16.61H797.9V158.64h4.56l.53,3.46q5-4.13,9.7-4.13Z"/>
                          <path class="cls-1" d="M825.55,162.86v12a2.91,2.91,0,0,0,.62,2.14,3.17,3.17,0,0,0,2.21.6h3.22l.62,4.32a19.9,19.9,0,0,1-6,.82,6.15,6.15,0,0,1-4.73-1.78,7.18,7.18,0,0,1-1.66-5.09v-13h-4.27v-4l4.22-.24v-6.77h5.81v6.77h6.91v4.22Z"/>
                          <path class="cls-1" d="M851.66,172.85h-9.6q.33,3.07,1.73,4.1a7.79,7.79,0,0,0,4.56,1,72.89,72.89,0,0,0,8.45-.58l.53,3.74q-3.31,1.58-9.7,1.58t-9.07-2.83q-2.69-2.83-2.69-9.55t2.64-9.62q2.64-2.76,8.74-2.76,5.62,0,8.16,2a7.38,7.38,0,0,1,2.54,6.12Q857.95,172.85,851.66,172.85Zm-9.7-4.08H850q2.11,0,2.11-2.74a3.18,3.18,0,0,0-1-2.69,6.3,6.3,0,0,0-3.65-.77q-3.07,0-4.25,1.27T842,168.77Z"/>
                        </g>
                      </g>
                      <g id="point">
                        <circle class="cls-3" cx="580.97" cy="151.51" r="8.38"/>
                        <circle class="cls-4" cx="580.97" cy="151.51" r="16.62"/>
                      </g>
                    </g>
                    <g id="leste" href="#" data-bind="click: setarRegiao.bind($data, 3)">
                      <polygon id="shape-2" data-name="shape" class="cls-1" points="571.9 395.02 577.33 383.66 619.7 336.23 631.94 305.66 622.43 247.72 628.4 238.83 551.08 238.83 510.01 374.14 571.9 395.02"/>
                      <g id="text-2" data-name="text">
                        <g>
                          <path class="cls-1" d="M678.6,288.84v25.39a2.91,2.91,0,0,0,.62,2.14,3.17,3.17,0,0,0,2.21.6H693l.24,4.66q-4.71.43-13.15.43-7.44,0-7.44-6.86V288.84Z"/>
                          <path class="cls-1" d="M712,312.65h-9.6q.33,3.07,1.73,4.1a7.79,7.79,0,0,0,4.56,1,72.89,72.89,0,0,0,8.45-.58l.53,3.74q-3.31,1.58-9.7,1.58t-9.07-2.83q-2.69-2.83-2.69-9.55t2.64-9.62q2.64-2.76,8.74-2.76,5.62,0,8.16,2a7.38,7.38,0,0,1,2.54,6.12Q718.3,312.65,712,312.65Zm-9.7-4.08h8.06q2.11,0,2.11-2.74a3.18,3.18,0,0,0-1-2.69,6.3,6.3,0,0,0-3.65-.77q-3.07,0-4.25,1.27T702.31,308.57Z"/>
                          <path class="cls-1" d="M734.09,313l-6.19-1.68a8,8,0,0,1-4.3-2.45,7.15,7.15,0,0,1-1.22-4.46q0-3.79,2.16-5.23t7.44-1.44a71.88,71.88,0,0,1,10.42.86l-.43,4q-6-.19-9-.19a16.11,16.11,0,0,0-4.08.31q-.91.31-.91,1.7a2.57,2.57,0,0,0,.07.62l.12.48a.68.68,0,0,0,.26.36l.31.26a1.56,1.56,0,0,0,.48.24l.53.19.67.19.77.19,6.34,1.73a9,9,0,0,1,4.32,2.33,6.54,6.54,0,0,1,1.3,4.44q0,4.13-2.35,5.54t-8.16,1.42a59.34,59.34,0,0,1-9.84-.77l.38-4.08q2.5.19,8,.19a18.94,18.94,0,0,0,5.06-.43,1.75,1.75,0,0,0,1.27-1.82,2.68,2.68,0,0,0,0-.53,1.75,1.75,0,0,0-.14-.43,3.21,3.21,0,0,0-.19-.34,1,1,0,0,0-.34-.29l-.38-.22a4.36,4.36,0,0,0-.5-.19l-.53-.17-.65-.19Z"/>
                          <path class="cls-1" d="M756.21,302.67v12a2.91,2.91,0,0,0,.62,2.14,3.17,3.17,0,0,0,2.21.6h3.22l.62,4.32a19.9,19.9,0,0,1-6,.82,6.15,6.15,0,0,1-4.73-1.78,7.18,7.18,0,0,1-1.66-5.09v-13h-4.27v-4l4.22-.24v-6.77h5.81v6.77h6.91v4.22Z"/>
                          <path class="cls-1" d="M782.33,312.65h-9.6q.33,3.07,1.73,4.1a7.79,7.79,0,0,0,4.56,1,72.89,72.89,0,0,0,8.45-.58L788,321q-3.31,1.58-9.7,1.58t-9.07-2.83q-2.69-2.83-2.69-9.55t2.64-9.62q2.64-2.76,8.74-2.76,5.62,0,8.16,2a7.38,7.38,0,0,1,2.54,6.12Q788.62,312.65,782.33,312.65Zm-9.7-4.08h8.06q2.11,0,2.11-2.74a3.18,3.18,0,0,0-1-2.69,6.3,6.3,0,0,0-3.65-.77q-3.07,0-4.25,1.27T772.63,308.57Z"/>
                        </g>
                      </g>
                      <g id="point-2" data-name="point">
                        <circle class="cls-3" cx="585.6" cy="305.34" r="8.38"/>
                        <circle class="cls-4" cx="585.6" cy="305.34" r="16.62"/>
                      </g>
                    </g>
                    <g id="centro" href="#" data-bind="click: setarRegiao.bind($data, 2)">
                      <polygon id="shape-3" data-name="shape" class="cls-1" points="553.29 238.83 475.14 238.83 478.93 265.25 430.18 316.76 430.18 336.42 471.22 371.14 471.22 384.1 512.13 374.41 553.29 238.83"/>
                      <g id="text-3" data-name="text">
                        <g>
                          <path class="cls-1" d="M319.09,248.44l.53,4.51a34.72,34.72,0,0,1-10.18,1.25q-7.44,0-10.46-3.84t-3-13.3q0-9.46,3-13.3t10.46-3.84a37.5,37.5,0,0,1,9.5,1.06l-.58,4.56q-4.18-.34-8.93-.34-4.13,0-5.64,2.52t-1.51,9.34q0,6.82,1.51,9.34t5.64,2.52A75.73,75.73,0,0,0,319.09,248.44Z"/>
                          <path class="cls-1" d="M339.15,244.32h-9.6q.33,3.07,1.73,4.1a7.79,7.79,0,0,0,4.56,1,72.89,72.89,0,0,0,8.45-.58l.53,3.74q-3.31,1.58-9.7,1.58T326,251.37q-2.69-2.83-2.69-9.55T326,232.2q2.64-2.76,8.74-2.76,5.62,0,8.16,2a7.38,7.38,0,0,1,2.54,6.12Q345.44,244.32,339.15,244.32Zm-9.7-4.08h8.06q2.11,0,2.11-2.74a3.18,3.18,0,0,0-1-2.69A6.3,6.3,0,0,0,335,234q-3.07,0-4.25,1.27T329.46,240.24Z"/>
                          <path class="cls-1" d="M355.62,230.11l.38,3.46q5.47-4.13,10.18-4.13a6.5,6.5,0,0,1,4.8,1.68,6.56,6.56,0,0,1,1.68,4.85v17.66H366.8V237.74a4.71,4.71,0,0,0-.53-2.66,2.35,2.35,0,0,0-2-.7,9.06,9.06,0,0,0-3.34.67,36.26,36.26,0,0,0-4.39,2.21v16.37h-5.86V230.11Z"/>
                          <path class="cls-1" d="M386.86,234.33v12a2.91,2.91,0,0,0,.62,2.14,3.17,3.17,0,0,0,2.21.6h3.22l.62,4.32a19.9,19.9,0,0,1-6,.82,6.15,6.15,0,0,1-4.73-1.78,7.18,7.18,0,0,1-1.66-5.09v-13h-4.27v-4l4.22-.24v-6.77h5.81v6.77h6.91v4.22Z"/>
                          <path class="cls-1" d="M414.18,229.44l-.62,5.47h-1.68q-2.5,0-7.78,2.11v16.61h-5.86V230.11h4.56l.53,3.46q5-4.13,9.7-4.13Z"/>
                          <path class="cls-1" d="M428.29,229.44q6.34,0,9,2.83t2.62,9.6q0,6.77-2.62,9.58t-9,2.81q-6.38,0-9-2.81t-2.64-9.58q0-6.77,2.64-9.6T428.29,229.44Zm0,4.66q-3.27,0-4.42,1.61t-1.15,6.17q0,4.51,1.15,6.12t4.42,1.61q3.17,0,4.34-1.61t1.18-6.12q0-4.56-1.18-6.17T428.29,234.09Z"/>
                        </g>
                      </g>
                      <g id="point-3" data-name="point">
                        <circle class="cls-3" cx="482.6" cy="321.96" r="8.38"/>
                        <circle class="cls-4" cx="482.6" cy="321.96" r="16.62"/>
                      </g>
                    </g>
                    <g id="sul" href="#" data-bind="click: setarRegiao.bind($data, 4)">
                      <polygon id="shape-4" data-name="shape" class="cls-1" points="573.31 390.86 511.97 370.16 471.51 379.74 471.51 390.28 447.18 390.28 413.44 450.76 437.27 474.9 402.49 552.74 422.77 594.41 406.75 656.45 426.98 669.67 460.78 654.42 470.71 599.23 494.14 581.79 525.24 601.53 551.69 560.34 505.92 531.86 573.31 390.86"/>
                      <g id="text-4" data-name="text">
                        <g>
                          <path class="cls-1" d="M582.62,512.69,576,510.58a9.23,9.23,0,0,1-5.14-3.48,10.94,10.94,0,0,1-1.54-6.12q0-5.42,2.52-7.15t8.86-1.73a42.57,42.57,0,0,1,10.42,1.1l-.38,4.27q-5.47-.19-9.84-.19a9.92,9.92,0,0,0-4.42.65q-1.1.65-1.1,3.14a4.21,4.21,0,0,0,.79,2.9,7,7,0,0,0,2.9,1.51l6.38,2a9.41,9.41,0,0,1,5.3,3.53,11.08,11.08,0,0,1,1.51,6.12q0,5.47-2.59,7.37t-9.17,1.9a54.68,54.68,0,0,1-10.75-1.06l.38-4.42q8.4.19,10.51.19,3.31,0,4.42-.77t1.1-3.26a4.39,4.39,0,0,0-.74-2.93A6.32,6.32,0,0,0,582.62,512.69Z"/>
                          <path class="cls-1" d="M618.86,502.28V525.8h-4.61l-.43-3.17q-5,3.79-9.84,3.79-6.53,0-6.53-6.53V502.28h5.86v15.89a3.88,3.88,0,0,0,.58,2.59,3,3,0,0,0,2.3.72q2.4,0,6.86-2.59V502.28Z"/>
                          <path class="cls-1" d="M631.29,492.2v26.26a2.61,2.61,0,0,0,.65,2.06,3,3,0,0,0,2.14.67h2l.67,4.32a11.66,11.66,0,0,1-5,.82,6.31,6.31,0,0,1-4.63-1.68,6.38,6.38,0,0,1-1.7-4.75V492.2Z"/>
                        </g>
                      </g>
                      <g id="point-4" data-name="point">
                        <circle class="cls-3" cx="462.89" cy="534.17" r="8.38"/>
                        <circle class="cls-4" cx="462.89" cy="534.17" r="16.62"/>
                      </g>
                    </g>
                    <g id="continente" href="#" data-bind="click: setarRegiao.bind($data, 0)">
                      <polygon id="shape-5" data-name="shape" class="cls-1" points="97.93 11.66 205.93 110.16 179.43 184.16 213.93 271.16 264.93 312.16 264.93 338.16 247.73 355.16 197.93 346.16 171.93 386.16 197.93 517.16 183.93 577.16 146.93 644.16 44.93 722.16 97.93 11.66"/>
                      <g id="point-5" data-name="point">
                        <circle class="cls-3" cx="143.07" cy="305.34" r="8.38"/>
                        <circle class="cls-4" cx="143.07" cy="305.34" r="16.62"/>
                      </g>
                      <g id="text-5" data-name="text">
                        <g>
                          <path class="cls-1" d="M240.19,237l.4,3.38a26,26,0,0,1-7.63.94q-5.58,0-7.85-2.88t-2.27-10q0-7.09,2.27-10t7.85-2.88a28.11,28.11,0,0,1,7.13.79l-.43,3.42q-3.13-.25-6.7-.25-3.1,0-4.23,1.89t-1.13,7q0,5.11,1.13,7t4.23,1.89A56.79,56.79,0,0,0,240.19,237Z"/>
                          <path class="cls-1" d="M252.14,222.74q4.75,0,6.71,2.12t2,7.2q0,5.08-2,7.18t-6.71,2.11q-4.79,0-6.77-2.11t-2-7.18q0-5.08,2-7.2T252.14,222.74Zm0,3.49q-2.45,0-3.31,1.21t-.86,4.63q0,3.38.86,4.59t3.31,1.21q2.38,0,3.26-1.21t.88-4.59q0-3.42-.88-4.63T252.14,226.23Z"/>
                          <path class="cls-1" d="M268.59,223.24l.29,2.59q4.1-3.1,7.63-3.1a4.87,4.87,0,0,1,3.6,1.26,4.92,4.92,0,0,1,1.26,3.64v13.25H277V229a3.54,3.54,0,0,0-.4-2,1.76,1.76,0,0,0-1.48-.52,6.8,6.8,0,0,0-2.5.5,27.11,27.11,0,0,0-3.29,1.66v12.28h-4.39V223.24Z"/>
                          <path class="cls-1" d="M292,226.41v9a2.18,2.18,0,0,0,.47,1.6,2.38,2.38,0,0,0,1.66.45h2.41l.47,3.24a14.94,14.94,0,0,1-4.54.61,4.61,4.61,0,0,1-3.55-1.33,5.39,5.39,0,0,1-1.24-3.82v-9.72h-3.2v-3l3.17-.18v-5.08H292v5.08h5.18v3.17Z"/>
                          <path class="cls-1" d="M301.85,215.57h2a1.11,1.11,0,0,1,1.26,1.26v2a1.11,1.11,0,0,1-1.26,1.26h-2a1.11,1.11,0,0,1-1.26-1.26v-2A1.11,1.11,0,0,1,301.85,215.57Zm3.2,25.31H300.7V223.24h4.36Z"/>
                          <path class="cls-1" d="M313.77,223.24l.29,2.59q4.1-3.1,7.63-3.1a4.87,4.87,0,0,1,3.6,1.26,4.92,4.92,0,0,1,1.26,3.64v13.25h-4.39V229a3.54,3.54,0,0,0-.4-2,1.76,1.76,0,0,0-1.48-.52,6.8,6.8,0,0,0-2.5.5,27.11,27.11,0,0,0-3.29,1.66v12.28H310.1V223.24Z"/>
                          <path class="cls-1" d="M342.39,233.9h-7.2a4.27,4.27,0,0,0,1.3,3.08,5.85,5.85,0,0,0,3.42.77,54.6,54.6,0,0,0,6.34-.43l.4,2.81a17.43,17.43,0,0,1-7.27,1.19q-4.79,0-6.8-2.12t-2-7.16q0-5.15,2-7.22t6.55-2.07q4.21,0,6.12,1.53a5.53,5.53,0,0,1,1.91,4.59Q347.11,233.9,342.39,233.9Zm-7.27-3.06h6q1.58,0,1.58-2.05a2.38,2.38,0,0,0-.76-2,4.72,4.72,0,0,0-2.74-.58,4.25,4.25,0,0,0-3.19,1Q335.19,228.1,335.12,230.84Z"/>
                          <path class="cls-1" d="M354.74,223.24l.29,2.59q4.1-3.1,7.63-3.1a4.87,4.87,0,0,1,3.6,1.26,4.92,4.92,0,0,1,1.26,3.64v13.25h-4.39V229a3.54,3.54,0,0,0-.4-2,1.76,1.76,0,0,0-1.48-.52,6.8,6.8,0,0,0-2.5.5,27.11,27.11,0,0,0-3.29,1.66v12.28h-4.39V223.24Z"/>
                          <path class="cls-1" d="M378.17,226.41v9a2.18,2.18,0,0,0,.47,1.6,2.38,2.38,0,0,0,1.66.45h2.41l.47,3.24a14.94,14.94,0,0,1-4.54.61,4.61,4.61,0,0,1-3.55-1.33,5.39,5.39,0,0,1-1.24-3.82v-9.72h-3.2v-3l3.17-.18v-5.08h4.36v5.08h5.18v3.17Z"/>
                          <path class="cls-1" d="M397.76,233.9h-7.2a4.27,4.27,0,0,0,1.3,3.08,5.85,5.85,0,0,0,3.42.77,54.6,54.6,0,0,0,6.34-.43l.4,2.81a17.43,17.43,0,0,1-7.27,1.19q-4.79,0-6.8-2.12t-2-7.16q0-5.15,2-7.22t6.55-2.07q4.21,0,6.12,1.53a5.53,5.53,0,0,1,1.91,4.59Q402.47,233.9,397.76,233.9Zm-7.27-3.06h6q1.58,0,1.58-2.05a2.38,2.38,0,0,0-.76-2,4.72,4.72,0,0,0-2.74-.58,4.25,4.25,0,0,0-3.19,1Q390.56,228.1,390.49,230.84Z"/>
                        </g>
                      </g>
                    </g>
                  </g>
                  <g id="ponte">
                    <path class="cls-5" d="M427.5,324.54h-3v-6.16q1.5.09,3,.09a2.68,2.68,0,1,0,0-5.35c-20.57,0-37.3-14.17-37.3-31.59V273a2.68,2.68,0,0,0-5.35,0v8.57c0,17.42-16.73,31.59-37.3,31.59s-37.3-14.17-37.3-31.59V273a2.68,2.68,0,1,0-5.35,0v8.57c0,17.42-16.73,31.59-37.3,31.59a2.68,2.68,0,0,0,0,5.35q1.53,0,3-.09v6.16h-3a2.68,2.68,0,0,0,0,5.35H427.5a2.68,2.68,0,1,0,0-5.35Zm-8.39,0H413v-8.25a47.46,47.46,0,0,0,6.07,1.47Zm-11.42,0h-6.07V310.88a44.12,44.12,0,0,0,6.07,3.36v10.3Zm-11.42-17.88v17.88H390.2V299.43a37.88,37.88,0,0,0,6.07,7.23Zm-11.42-7.23v25.11h-6.07V306.66A37.88,37.88,0,0,0,384.85,299.43Zm-17.49,14.81a44.09,44.09,0,0,0,6.07-3.36v13.66h-6.07v-10.3ZM362,324.54h-6.07v-6.79a47.46,47.46,0,0,0,6.07-1.47v8.25Zm-11.42-6.16v6.16h-6.07v-6.16q1.5.09,3,.09T350.59,318.38Zm-17.49-2.09a47.46,47.46,0,0,0,6.07,1.47v6.79H333.1v-8.25Zm-5.35,8.25h-6.07V310.88a44.12,44.12,0,0,0,6.07,3.36v10.3Zm-11.42-17.88v17.88h-6.07V299.43a37.88,37.88,0,0,0,6.07,7.23Zm-11.42-7.23v25.11h-6.07V306.66A37.88,37.88,0,0,0,304.9,299.43Zm-11.42,25.11h-6.07v-10.3a44.09,44.09,0,0,0,6.07-3.36v13.66ZM276,317.75a47.46,47.46,0,0,0,6.07-1.47v8.25H276Z"/>
                    <path class="cls-5" d="M427.5,341.32a2.68,2.68,0,1,0,0-5.35H267.61a2.68,2.68,0,0,0,0,5.35h37.3v6.07h-.18a5.54,5.54,0,0,0-5.53,5.53v5.89H267.61a2.68,2.68,0,0,0,0,5.35H427.5a2.68,2.68,0,1,0,0-5.35H395.91v-5.89a5.54,5.54,0,0,0-5.53-5.53h-.18v-6.07Zm-123,11.6a.18.18,0,0,1,.18-.18h5.71a.18.18,0,0,1,.18.18v5.89h-6.07Zm86,0v5.89h-6.07v-5.89a.18.18,0,0,1,.18-.18h5.71A.18.18,0,0,1,390.56,352.91Zm-5.71-5.53h-.18a5.54,5.54,0,0,0-5.53,5.53v5.89H316v-5.89a5.54,5.54,0,0,0-5.53-5.53h-.18v-6.07h74.59Z"/>
                    <path class="cls-5" d="M376.1,370.22H324.71a2.68,2.68,0,1,0,0,5.35H376.1a2.68,2.68,0,0,0,0-5.35Z"/>
                    <path class="cls-5" d="M313.29,370.22H290.45a2.68,2.68,0,1,0,0,5.35h22.84a2.68,2.68,0,0,0,0-5.35Z"/>
                    <path class="cls-5" d="M393.24,370.22h-5.71a2.68,2.68,0,0,0,0,5.35h5.71a2.68,2.68,0,0,0,0-5.35Z"/>
                    <path class="cls-5" d="M370.39,381.65H341.84a2.68,2.68,0,1,0,0,5.35h28.55a2.68,2.68,0,0,0,0-5.35Z"/>
                    <path class="cls-5" d="M330.42,381.65h-5.71a2.68,2.68,0,1,0,0,5.35h5.71a2.68,2.68,0,0,0,0-5.35Z"/>
                  </g>
                  <g id="continente_stroke">
                    <path class="cls-6" d="M97.48,17.64c.25-3.29,2.44-4.16,4.88-1.94l99.13,90.41a9.77,9.77,0,0,1,2.41,9.69l-22.45,62.7a18.48,18.48,0,0,0,.19,11.23l30.08,75.85a27,27,0,0,0,6.89,9.34l41.65,33.48a14.22,14.22,0,0,1,4.68,9.76v14a16.55,16.55,0,0,1-4.27,10.22L252,350.94a13,13,0,0,1-10.17,3.15l-38-6.87a9.8,9.8,0,0,0-9.17,4L175.2,381.13A17,17,0,0,0,173.1,392l23.66,119.23a33.2,33.2,0,0,1-.2,11.73l-11.27,48.31a52.17,52.17,0,0,1-4.26,11.1l-31.2,56.5a34.2,34.2,0,0,1-7.67,8.9L49.7,718.52c-2.62,2-4.57,1-4.32-2.34Z"/>
                  </g>
                  <g id="ilha_stroke">
                    <polygon class="cls-6" points="471.78 392.46 471.78 369.49 431.87 335.74 431.87 316.62 479.29 266.52 459.56 129.06 628.42 32.66 707.76 120.22 621.12 249.49 630.38 305.94 618.45 335.74 577.17 381.95 505.62 531.66 550.62 559.66 524.62 600.16 494.03 580.75 471 597.9 461.24 652.16 428 667.16 408.12 654.16 423.87 593.16 403.92 552.19 438.12 475.66 414.69 451.92 447.87 392.46 471.78 392.46"/>
                  </g>
                </svg>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="progress">
                    <div class="progress-bar progress-bar-warning  progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                        <span class="sr-only">50% Completo</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Renda -->
    <section id="section-renda" class="container" data-bind="visible: passo() === 4">
        <div class="row text">
            <p>Qual a sua <span class="text-highlighted">renda familiar?</span></p>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <button id="btnRendaPequena" class="btn" data-bind="click: setarRenda.bind($data, 3000)"></button>
                    <p>até R$3.000,00</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <button id="btnRendaMedia" class="btn" data-bind="click: setarRenda.bind($data, 5000)"></button>
                    <p>até R$5000,00</p>
                </div>
                <div class="col-xs-12 col-sm-12  col-md-3 col-lg-3">
                    <button id="btnRendaGrande" class="btn" data-bind="click: setarRenda.bind($data, 8000)"></button>
                    <p>até R$8.000,00</p>
                </div>
                <div class="col-xs-12 col-sm-12  col-md-3 col-lg-3">
                    <button id="btnRendaGG" class="btn" data-bind="click: setarRenda.bind($data, 10000)"></button>
                    <p>mais de R$8.000,00</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="progress">
                    <div class="progress-bar progress-bar-warning  progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                        <span class="sr-only">75% Completo</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Resultado -->
    <section id="section-resultado" class="container" data-bind="visible: passo() === 5">
        <div class="row text">
            <p>Perfil do imóvel <span class="text-highlighted">desejado!</span></p>
        </div>
        <div class="row justify-content-center detalhes">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div>
                    <ul class="list-unstyled" data-bind="foreach: opcoesSelecionadas">
                        <li>
                            <b data-bind="text: $data"></b>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row text">
            <p><span class="text-highlighted">Simulações</span> efetudas!</p>
            <br />
        </div>
        <div class="row justify-content-center detalhes">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div>
                    <ul class="list-unstyled" data-bind="foreach: simulacoes">
                        <li>
                            <b data-bind="text: $data"></b>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row text">
            <p>Veja os <span class="text-highlighted">resultados</span> para sua busca!</p>
            <br />
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 table-responsive">
                <table class="table table-hover">
                    <colgroup span="4"></colgroup>
                    <thead>
                        <tr>
                            <!--<th>Tempo vs. Tamanho do Imóvel</th>-->
                            <th></th>
                            <th>
                                <img class="img" src="img/ic_2a_smallhouse_white.svg">
                                <p>1 dormitório</p>
                            </th>
                            <th>
                                <img class="img" src="img/ic_2b_mediumhouse_white.svg">
                                <p>2 dormitórios</p>
                            </th>
                            <th>
                                <img class="img" src="img/ic_2c_bighouse_white.svg">
                                <p>3+ dormitório</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <img class="img" src="img/ic_1a_baby_white.svg">
                                <p>menos de 5 anos</p>
                            </th>
                            <td>
                                <img data-bind="visible: casinha5AnosAtivo" class="img" src="img/ic_good_plan.svg" >
                                <img data-bind="visible: casinha5AnosAtivo() === false" class="img" src="img/ic_bad_plan.svg" >
                            </td>
                            <td>
                                <img data-bind="visible: casa5AnosAtivo" class="img" src="img/ic_good_plan.svg" >
                                <img data-bind="visible: casa5AnosAtivo() === false" class="img" src="img/ic_bad_plan.svg" >
                            </td>
                            <td>
                                <img data-bind="visible: casao5AnosAtivo" class="img" src="img/ic_good_plan.svg" >
                                <img data-bind="visible: casao5AnosAtivo() === false" class="img" src="img/ic_bad_plan.svg" >
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <img class="img" src="img/ic_1b_adult_white.svg">
                                <p>menos de 10 anos</p>
                            </th>
                            <td>
                                <img data-bind="visible: casinha10AnosAtivo" class="img" src="img/ic_good_plan.svg" >
                                <img data-bind="visible: casinha10AnosAtivo() === false" class="img" src="img/ic_bad_plan.svg" >
                            </td>
                            <td>
                                <img data-bind="visible: casa10AnosAtivo" class="img" src="img/ic_good_plan.svg" >
                                <img data-bind="visible: casa10AnosAtivo() === false" class="img" src="img/ic_bad_plan.svg" >
                            </td>
                            <td>
                                <img data-bind="visible: casao10AnosAtivo" class="img" src="img/ic_good_plan.svg" >
                                <img data-bind="visible: casao10AnosAtivo() === false" class="img" src="img/ic_bad_plan.svg" >
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <img class="img" src="img/ic_1c_oldman_white.svg">
                                <p>10 anos ou mais</p>
                            </th>
                            <td>
                                <img data-bind="visible: casinha20AnosAtivo" class="img" src="img/ic_good_plan.svg" >
                                <img data-bind="visible: casinha20AnosAtivo() === false" class="img" src="img/ic_bad_plan.svg" >
                            </td>
                            <td>
                                <img data-bind="visible: casa20AnosAtivo" class="img" src="img/ic_good_plan.svg" >
                                <img data-bind="visible: casa20AnosAtivo() === false" class="img" src="img/ic_bad_plan.svg" >
                            </td>
                            <td>
                                <img data-bind="visible: casao20AnosAtivo" class="img" src="img/ic_good_plan.svg" >
                                <img data-bind="visible: casao20AnosAtivo() === false" class="img" src="img/ic_bad_plan.svg" >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row text">
            <p>Entenda os <span class="text-highlighted">resultados</span> que não combinam com você!</p>
            <br />
        </div>
        <div class="row justify-content-center detalhes">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div>
                    <ul class="list-unstyled" data-bind="foreach: resultadoDetalhes">
                        <li>
                            <b data-bind="text: $data"></b>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div>
                    <br>
                    <h2>Organize sua vida <span class="text-highlighted">financeira</span></h2>
                    <p>Baixe a planilha "Orçamento Familiar" e comece a planejar a compra do seu primeiro imóvel!</p>
                    <p>&nbsp;</p>
                    <a id="baixar" class="btn" href="content/planilha_orcamento_familiar.xlsx" download>BAIXAR PLANILHA</a>
                </div>
                <div>
                    <button class="btn btn-xs" data-bind="click: reload">Refazer simulação</button>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <h4>Meu Primeiro Imóvel</h4>
        <p>Todos os direitos reservados. Outubro, 2017.</p>
    </div>
</footer>

</body>

<script type="text/javascript">
    var viewModel = new monsterViewModel();
    ko.applyBindings(viewModel);
</script>
</html>
