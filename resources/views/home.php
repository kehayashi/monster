<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Planejar Meu 1º Imóvel</title>

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
    <script type="text/javascript">$(function() {
        $('.map').maphilight();
        $('#squidheadlink').mouseover(function(e) {
            $('#squidhead').mouseover();
        }).mouseout(function(e) {
            $('#squidhead').mouseout();
        }).click(function(e) { e.preventDefault(); });
    });</script>

</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <img class="brand-header" src="img/marca_header.svg">
                <h1>O melhor <span class="text-highlighted">planejamento</span> para comprar seu <span class="text-highlighted">primeiro imóvel</span></h1>
            </div>
        </div>
    </div>
</header>

<main>
    <!-- Landing Page -->
    <section id="section-landing-page" data-bind="visible: passo() === 1">
        <div class="container">
            <div class="row text">
                <h2>Em quanto <span class="text-highlighted">tempo</span> eu vou quitar meu imóvel?</h2>
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
                <h2>Qual imóvel eu <span class="text-highlighted">consigo</span> comprar?</h2>
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
                <h2>Saiba como <span class="text-highlighted">planejar</span> a compra do seu <span class="text-highlighted">primeiro imóvel</span></h2>
            </div>
            <div id="section-dados-pessoais">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-2">
                            <h4>Valor da Parcela</h4>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="1" name="valorParcela" data-bind="checked: valorParcela, click: limparValorImovel" />até R$1.000
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="2" name="valorParcela" data-bind="checked: valorParcela, click: limparValorImovel" />até R$1.500
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="3" name="valorParcela" data-bind="checked: valorParcela, click: limparValorImovel" />até R$2.000
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
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center nome-email">
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
    </section>
    <!-- Região -->
    <section id="section-regiao" class="container" data-bind="visible: deveCarregarMapa() || passo() === 3">
        <div class="row text">
            <p>Em qual <span class="text-highlighted">região</span> de Florianópolis você quer morar?</p>
        </div>
        <br>
        <div class="row justify-content-center">
            <div id="mapa" class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <img src="img/map_floripa.svg" alt="mapa-floripa" class="map" usemap="#floripa" />
                <map name="floripa">
                    <area shape="rect" id="Continente" title="Continente" alt="Continente" href="#" coords="0,10,190,585" data-bind="click: setarRegiao.bind($data, 0)" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;F5775B&quot;,&quot;fillOpacity&quot;:0.6}" >
                    <area shape="rect" id="Continente" title="Norte" alt="Norte" href="#" coords="325,25,520,175" data-bind="click: setarRegiao.bind($data, 1)" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;F5775B&quot;,&quot;fillOpacity&quot;:0.6}">
                    <area shape="rect" id="Continente" title="Centro" alt="Centro" href="#" coords="385,355,300,175" data-bind="click: setarRegiao.bind($data, 2)" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;F5775B&quot;,&quot;fillOpacity&quot;:0.6}">
                    <area shape="rect" id="Continente" title="Leste" alt="Leste" href="#" coords="385,355,465,175" data-bind="click: setarRegiao.bind($data, 3)" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;F5775B&quot;,&quot;fillOpacity&quot;:0.6}">
                    <area shape="rect" id="Continente" title="Sul" alt="Sul" href="#" coords="280,535,400,355" data-bind="click: setarRegiao.bind($data, 4)" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;F5775B&quot;,&quot;fillOpacity&quot;:0.6}">
                </map>

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
                    <button id="btnRendaPequena" class="btn" data-bind="click: setarRenda.bind($data, 1000)"></button>
                    <p>até R$1.000,00</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <button id="btnRendaMedia" class="btn" data-bind="click: setarRenda.bind($data, 3000)"></button>
                    <p>até R$3.000,00</p>
                </div>
                <div class="col-xs-12 col-sm-12  col-md-3 col-lg-3">
                    <button id="btnRendaGrande" class="btn" data-bind="click: setarRenda.bind($data, 5000)"></button>
                    <p>até R$5.000,00</p>
                </div>
                <div class="col-xs-12 col-sm-12  col-md-3 col-lg-3">
                    <button id="btnRendaGG" class="btn" data-bind="click: setarRenda.bind($data, 7500)"></button>
                    <p>mais de R$5.000,00</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Resultado -->
    <section id="section-resultado" class="container" data-bind="visible: passo() === 5">
        <div class="row text">
            <p>Veja os <span class="text-highlighted">resultados</span> que combinam com você!</p>
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
                                <img data-bind="visible: casinha5AnosAtivo" class="img" src="img/casinha-branca.png" >
                            </td>
                            <td>
                                <img data-bind="visible: casa5AnosAtivo" class="img" src="img/casinha-branca.png" >
                            </td>
                            <td>
                                <img data-bind="visible: casao5AnosAtivo" class="img" src="img/casinha-branca.png" >
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <img class="img" src="img/ic_1b_adult_white.svg">
                                <p>menos de 10 anos</p>
                            </th>
                            <td>
                                <img data-bind="visible: casinha10AnosAtivo" class="img" src="img/casinha-branca.png" >
                            </td>
                            <td>
                                <img data-bind="visible: casa10AnosAtivo" class="img" src="img/casinha-branca.png" >
                            </td>
                            <td>
                                <img data-bind="visible: casao10AnosAtivo" class="img" src="img/casinha-branca.png" >
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <img class="img" src="img/ic_1c_oldman_white.svg">
                                <p>10 anos ou mais</p>
                            </th>
                            <td>
                                <img data-bind="visible: casinha20AnosAtivo" class="img" src="img/casinha-branca.png" >
                            </td>
                            <td>
                                <img data-bind="visible: casa20AnosAtivo" class="img" src="img/casinha-branca.png" >
                            </td>
                            <td>
                                <img data-bind="visible: casao20AnosAtivo" class="img" src="img/casinha-branca.png" >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-center detalhes">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div>
                    <button class="btn btn-sm" data-bind="click: verDetalhes">DETALHES</button>
                    <ul class="list-unstyled" data-bind="foreach: resultadoDetalhesDistintos">
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
                    <p>&nbsp;</p><p>&nbsp;</p>
                    <h2>Organize sua vida <span class="text-highlighted">financeira</span></h2>
                    <p>Baixe a planilha "Orçamento Familiar" e comece a planejar a compra do seu primeiro imóvel!</p>
                    <p>&nbsp;</p>
                    <a id="baixar" class="btn" href="content/planilha_orcamento_familiar.xlsx" download>BAIXAR PLANILHA</a>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <h4>Meu Primeiro Imóvel</h4>
        <p>Todos os direitos reservados. Outrubro, 2017.</p>
    </div>
</footer>

</body>

<script type="text/javascript">
    var viewModel = function () {
        self = this;
                           //[continente, norte, centro, leste, sul ]
        var casinhaValores = [100000, 100000, 200000, 200000, 100000];
        var casaValores =    [200000, 200000, 400000, 400000, 200000];
        var casaoValores =   [300000, 300000, 600000, 600000, 300000];

        self.deveCarregarMapa = ko.observable(true);
        self.passo = ko.observable(1);
        self.id = ko.observable(0);
        self.valorParcela = ko.observable('');
        self.valorImovel = ko.observable('');
        self.nome = ko.observable('');
        self.email = ko.observable('');
        self.tipoDeFamilia = ko.observable(1);
        self.renda = ko.observable(0);
        self.regiao = ko.observable(0);
        self.temErroNoNome = ko.observable(false);
        self.temErroNoEmail = ko.observable(false);
        self.resultadoDetalhesDistintos = ko.observableArray([]);
        self.resultadoDetalhes = ko.observableArray([]);
        self.dummyObservable = ko.observable();

        self.deveIniciarORegistro = ko.computed(function(){
            return (self.valorParcela() !== '' || self.valorImovel() !== '') &&
                    self.nome() !== '' &&
                    self.email() !== '';
        }, this);
        self.valorR$Parcela = ko.computed(function(){
            var valor = 0;
            switch (self.valorParcela()){
                case '1':
                    valor = 1000;
                    break;
                case '2':
                    valor = 1500;
                    break;
                case '3':
                    valor = 2000;
                    break;
                default:
                    valor = 0;
                    break;
            }
            return valor;
        }, this);
        self.valorR$Imovel = ko.computed(function(){
            var valor = 0;
            switch (self.valorImovel()){
                case '1':
                    valor = 200000;
                    break;
                case '2':
                    valor = 400000;
                    break;
                case '3':
                    valor = 500000;
                    break;
                default:
                    valor = 0;
                    break;
            }
            return valor;
        }, this);
        self.valorImovel5Anos = ko.computed(function(){
            var parcela = self.valorR$Parcela();
            var jurosParcela = parcela * 0.060;
            parcela = parcela - jurosParcela;
            var valorImovel5Anos = parcela * 60;
            return valorImovel5Anos;
        }, this);
        self.valorImovel10Anos = ko.computed(function(){
            var parcela = self.valorR$Parcela();
            var jurosParcela = parcela * 0.080;
            parcela = parcela - jurosParcela;
            var valorImovel10Anos = parcela * 120;
            return valorImovel10Anos;
        }, this);
        self.valorImovel20Anos = ko.computed(function(){
            var parcela = self.valorR$Parcela();
            var jurosParcela = parcela * 0.120
            parcela = parcela - jurosParcela;
            var valorImovel20Anos = parcela * 240;
            return valorImovel20Anos;
        }, this);
        self.valorParcela5Anos = ko.computed(function(){
            var imovel = self.valorR$Imovel();
            var parcela =  imovel / 60;
            var jurosParcela = parcela * 0.060;
            parcela = parcela + jurosParcela;
            return parcela;
        }, this);
        self.valorParcela10Anos = ko.computed(function(){
            var imovel = self.valorR$Imovel();
            var parcela =  imovel / 120;
            var jurosParcela = parcela * 0.080;
            parcela = parcela + jurosParcela;
            return parcela;
        }, this);
        self.valorParcela20Anos = ko.computed(function(){
            var imovel = self.valorR$Imovel();
            var parcela =  imovel / 240;
            var jurosParcela = parcela * 0.120
            parcela = parcela + jurosParcela;
            return parcela;
        }, this);
        self.casinha5AnosAtivo = ko.computed(function(){
            self.dummyObservable();
            if (self.tipoDeFamilia() > 1){
                return false;
            }
            if (!compararRenda(self.valorR$Parcela(), self.valorParcela5Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor das parcelas em 5 anos, para casas pequenas, é maior do que 30% da renda informada.')
                return false;
            }
            var valor = casinhaValores[self.regiao()];
            if (!compararValores(valor, self.valorR$Parcela(), self.valorImovel5Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor do imóvel em 5 anos, para casas pequenas, é menor do que a média da região.')
                return false;
            }
            return true;
        }, this);
        self.casa5AnosAtivo = ko.computed(function(){
            self.dummyObservable();
            if (self.tipoDeFamilia() > 3){
                return false;
            }
            if (!compararRenda(self.valorR$Parcela(), self.valorParcela5Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor das parcelas em 5 anos, para casas médias ou grandes, é maior do que 30% da renda informada.')
                return false;
            }
            var valor = casaValores[self.regiao()];
            if (!compararValores(valor, self.valorR$Parcela(), self.valorImovel5Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor do imóvel em 5 anos, para casas médias ou grandes, é menor do que a média da região.')
                return false;
            }
            return true;
        }, this);
        self.casao5AnosAtivo = ko.computed(function(){
            self.dummyObservable();
            if (self.tipoDeFamilia() < 3){
                return false;
            }
            if (!compararRenda(self.valorR$Parcela(), self.valorParcela10Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor das parcelas em 5 anos, para casas muito grandes, é maior do que 30% da renda informada.')
                return false;
            }
            var valor = casaoValores[self.regiao()];
            if (!compararValores(valor, self.valorR$Parcela(), self.valorImovel5Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor do imóvel em 5 anos, para casas muito grandes, é menor do que a média da região.')
                return false;
            }
            return true;
        }, this);
        self.casinha10AnosAtivo = ko.computed(function(){
            self.dummyObservable();
            if (self.tipoDeFamilia() > 1){
                return false;
            }
            if (!compararRenda(self.valorR$Parcela(), self.valorParcela10Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor das parcelas em 10 anos, para casas pequenas, é maior do que 30% da renda informada.')
                return false;
            }
            var valor = casinhaValores[self.regiao()];
            if (!compararValores(valor, self.valorR$Parcela(), self.valorImovel10Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor do imóvel em 5 anos, para casas pequenas, é menor do que a média da região.')
                return false;
            }
            return true;
        }, this);
        self.casa10AnosAtivo = ko.computed(function(){
            self.dummyObservable();
            if (self.tipoDeFamilia() > 3){
                return false;
            }
            if (!compararRenda(self.valorR$Parcela(), self.valorParcela10Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor das parcelas em 10 anos, para casas médias ou grandes, é maior do que 30% da renda informada.')
                return false;
            }
            var valor = casaValores[self.regiao()];
            if (!compararValores(valor, self.valorR$Parcela(), self.valorImovel10Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor do imóvel em 5 anos, para casas médias ou grandes, é menor do que a média da região.')
                return false;
            }
            return true;
        }, this);
        self.casao10AnosAtivo = ko.computed(function(){
            self.dummyObservable();
            if (self.tipoDeFamilia() < 3){
                return false;
            }
            if (!compararRenda(self.valorR$Parcela(), self.valorParcela10Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor das parcelas em 10 anos, para casas muito grandes, é maior do que 30% da renda informada.')
                return false;
            }
            var valor = casaoValores[self.regiao()];
            if (!compararValores(valor, self.valorR$Parcela(), self.valorImovel10Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor do imóvel em 5 anos, para casas muito grandes, é menor do que a média da região.')
                return false;
            }
            return true;
        }, this);
        self.casinha20AnosAtivo = ko.computed(function(){
            self.dummyObservable();
            if (self.tipoDeFamilia() > 1){
                return false;
            }
            if (!compararRenda(self.valorR$Parcela(), self.valorParcela20Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor das parcelas em 20 anos, para casas pequenas, é maior do que 30% da renda informada.')
                return false;
            }
            var valor = casinhaValores[self.regiao()];
            if (!compararValores(valor, self.valorR$Parcela(), self.valorImovel20Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor do imóvel em 20 anos, para casas pequenas, é menor do que a média da região.')
                return false;
            }
            return true;
        }, this);
        self.casa20AnosAtivo = ko.computed(function(){
            self.dummyObservable();
            if (self.tipoDeFamilia() > 3){
                return false;
            }
            if (!compararRenda(self.valorR$Parcela(), self.valorParcela20Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor das parcelas em 20 anos, para casas médias ou grandes, é maior do que 30% da renda informada.')
                return false;
            }
            var valor = casaValores[self.regiao()];
            if (!compararValores(valor, self.valorR$Parcela(), self.valorImovel20Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor do imóvel em 5 anos, para casas médias ou grandes, é menor do que a média da região.')
                return false;
            }
            return true;
        }, this);
        self.casao20AnosAtivo = ko.computed(function(){
            self.dummyObservable();
            if (self.tipoDeFamilia() < 3){
                return false;
            }
            if (!compararRenda(self.valorR$Parcela(), self.valorParcela20Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor das parcelas em 20 anos, para casas muito grandes, é maior do que 30% da renda informada.')
                return false;
            }
            var valor = casaoValores[self.regiao()];
            if (!compararValores(valor, self.valorR$Parcela(), self.valorImovel20Anos(), self.valorR$Imovel())){
                self.resultadoDetalhes.push('O valor do imóvel em 5 anos, para casas muito grandes, é menor do que a média da região.')
                return false;
            }
            return true;
        }, this);

        self.limparValorImovel = function(){
            self.valorImovel('');
            return true;
        };
        self.limparValorParcela = function(){
            self.valorParcela('');
            return true;
        };
        self.iniciarCadastro = function(valor){
            ehNomeValido();
            ehEmailValido();
            if(!self.temErroNoNome() && !self.temErroNoEmail()) {
                //cadastrar();
                proximoPasso()
            }
        };
        self.setarTipoDeFamilia = function(tipo){
            var tipoDeFamilia = parseInt(tipo);
            self.tipoDeFamilia(tipoDeFamilia);
            //salvarTipoDeFamilia();
            proximoPasso();
        };
        self.setarRegiao = function(regiao){
            var regiaoDesejada = parseInt(regiao);
            self.regiao(regiao);
            //salvarRegiao();
            proximoPasso();
        };
        self.setarRenda = function(valor){
            var rendaInformada = parseFloat(valor);
            self.renda(rendaInformada);
            //salvarRenda();
            proximoPasso();
        };
        self.verDetalhes = function(valor){
            self.resultadoDetalhesDistintos([]);
            self.resultadoDetalhes([]);

            if (self.tipoDeFamilia() > 1){
                self.resultadoDetalhes.push("Você já é um casal, recomendamos uma casa média ou grande.")
            }
            if (self.tipoDeFamilia() > 3){
                self.resultadoDetalhes.push("Você tem uma família bem grande, recomendamos uma casa grande.")
            }
            if (self.tipoDeFamilia() < 3){
                self.resultadoDetalhes.push("Você tem uma família pequena ou é solteiro, recomendamos uma casa média ou pequena.")
            }
            self.dummyObservable.notifySubscribers();

            var detalhes = self.resultadoDetalhes();
            detalhes = detalhes.filter(function(item, pos) {
                return detalhes.indexOf(item) == pos;
            })
            self.resultadoDetalhesDistintos(detalhes);
        };

        function proximoPasso(){
            var passo = self.passo() + 1;
            self.passo(passo);
        };
        function passoAnterior(){
            var passo = self.passo() - 1;
            self.passo(passo);
        };
        function ehNomeValido(){
            self.temErroNoNome(false);
	        er = /^([a-zA-ZáéíóúàâêôãõüçÁÉÍÓÚÀÂÊÔÃÕÜÇ ]|\n){2,50} ([a-zA-ZáéíóúàâêôãõüçÁÉÍÓÚÀÂÊÔÃÕÜÇ ]|\n){2,50}$/;
	        if(!er.exec(self.nome())){
                self.temErroNoNome(true);
            }
        }
        function ehEmailValido(){
            self.temErroNoEmail(false);
	        er = /^[A-Za-z0-9](([_.-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([.-]?[a-zA-Z0-9]+)*)([.][A-Za-z]{2,4})$/;
	        if(!er.exec(self.email())){
                self.temErroNoEmail(true);
            }
        }
        function cadastrar(){
            var params = {valorParcela: self.valorR$Parcela(), valorImovel: self.valorR$Imovel(), nome: self.nome(), email: self.email()}
            var url = "http://www.meuprimeiroimovel.com.br/cadastrar.php";
            $.post(url, params)
                .done(function(result) {
                    self.id(result.id);
                    alert('success');
                    proximoPasso();
                })
                .fail(function() {
                    alert('error');
                });
        }
        function salvarTipoDeFamilia(){
            var params = {id: self.id(), tipoFamilia: self.tipoDeFamilia()}
            var url = "http://www.meuprimeiroimovel.com.br/salvartipodefamilia.php";
            $.post(url, params)
                .done(function() {
                    alert('success');
                    proximoPasso();
                })
                .fail(function() {
                    alert('error');
                });
        }
        function salvarRegiao(){
            var params = {id: self.id(), regiao: self.regiao()}
            var url = "http://www.meuprimeiroimovel.com.br/salvarregiao.php";
            $.post(url, params)
                .done(function() {
                    alert('success');
                    proximoPasso();
                })
                .fail(function() {
                    alert('error');
                });
        }
        function salvarRenda(){
            var params = {id: self.id(), renda: self.renda()}
            var url = "http://www.meuprimeiroimovel.com.br/salvarrenda.php";
            $.post(url, params)
                .done(function() {
                    alert('success');
                    proximoPasso();
                })
                .fail(function() {
                    alert('error');
                });
        }
        function compararValores(valorMedio, valorParcela, valorPeriodo, valorImovel){
            if (valorParcela !== 0){
                if (valorPeriodo < valorMedio){
                    return false;
                }
            }
            if (valorImovel !== 0){
                if (valorImovel < valorMedio){
                    return false;
                }
            }
            return true;
        }
        function compararRenda(valorParcela, valorParcelaPeriodo, valorImovel){
            var trintaPorCento = self.renda() * 0.30;
            if (valorParcela !== 0){
                if (valorParcela > trintaPorCento){
                    return false;
                }
            }
            if (valorImovel !== 0){
                if (valorParcelaPeriodo > trintaPorCento){
                    return false;
                }
            }
            return true;
        }

        $( document ).ready(function() {
            self.deveCarregarMapa(false);
        });
    }

    ko.applyBindings(new viewModel());
</script>
</html>
