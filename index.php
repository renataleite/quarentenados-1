<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quarentenados</title>
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Baloo+2:400,700|Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
</head>

<body>
    <div class="container" id="app">
        <div class="top">
            <img class="main-logo" src="imgs/quarentenados-logo.png" />
            <ul class="menu">
                <li><a href="http://">Supermercados</a></li>
                <li><a href="http://">Farmácias</a></li>
                <li><a href="http://">Pedir comida</a></li>
                <li><a href="http://">Informações</a></li>
            </ul>
        </div>

        <div class="info row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="neumorphism p-3 h-100 w-100 d-inline-block">
                            <div class="size24">7654</div>
                            Casos suspeitos
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="neumorphism p-3 h-100 w-100 d-inline-block">
                            <div class="size24">654</div>
                            Casos Confimados
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="neumorphism p-3 h-100 w-100 d-inline-block">
                            <div class="size24">54</div>
                            Vítimas
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-rightÍ">
                <div class="clock">{{time}}</div>
                <span>{{date}}</span>
            </div>
            <div class="col-md-3">
                <div class="neumorphism news">
                    <img src="imgs/24-h.png" alt="img">
                    <div>
                        <a href="http://">
                            <strong>Ajuda</strong> <br> Sente tosse, febre ou falta de ar? Ligue <strong>SNS24 808 24 24 24</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="highlight">
            <h2>Destaques</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="neumorphism box mb-3" style="background-image: url(imgs/investment-company.png)">
                    </div>
                    <a target="_blank" href="https://medium.com/@igor_73854/a-crise-do-coronavirus-vai-quebrar-minha-empresa-e-agora-como-se-transformar-em-4-passos-20c30ebb7d3b" class="description size24">
                        A crise do coronavirus vai quebrar minha empresa, e agora? Como se transformar em 4 passos.
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="neumorphism box mb-3" style="background-image: url(imgs/corona-o-que-voce-precisa-saber.png)">
                    </div>
                    <a target="_blank" href="https://www.publico.pt/2020/03/27/sociedade/noticia/precisa-saber-hoje-coronavirus-1909913" class="description size24">
                        O que você precisa de saber hoje sobre o coronavírus
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="neumorphism box mb-3" style="background-image: url(imgs/corona-news.png)">
                    </div>
                    <a target="_blank" href="https://covid19.min-saude.pt/ponto-de-situacao-atual-em-portugal/" class="description size24">
                        Ponto de Situação Atual em Portugal
                    </a>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Notícias</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="neumorphism news">
                        <img src="imgs/remote-job.png" alt="img">
                        <div>
                            <a @click="loadModal($event)" href="https://medium.com/aliados-the-challenges-consulting/covid-19-o-que-podem-fazer-as-empresas-perante-este-desafio-8c9710015da9">
                                <strong>Negócios</strong>
                                <div class="text">Covid-19, o que podem fazer as empresas diante deste desafio?</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="neumorphism news">
                        <img src="imgs/remote-job.png" alt="img">
                        <div>
                            <a @click="loadModal($event)" href="https://medium.com/aliados-the-challenges-consulting/covid-19-o-que-podem-fazer-as-empresas-perante-este-desafio-8c9710015da9">
                                <br><strong>Negócios</strong> <br>Covid-19, o que podem fazer as empresas diante deste desafio?
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="neumorphism news">
                        <img src="imgs/remote-job.png" alt="img">
                        <div>
                            <a @click="loadModal($event)" href="https://medium.com/aliados-the-challenges-consulting/covid-19-o-que-podem-fazer-as-empresas-perante-este-desafio-8c9710015da9">
                                <br><strong>Negócios</strong> <br>Covid-19, o que podem fazer as empresas diante deste desafio?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="business">
            <h2 class="mt-5">Mapa da disseminação</h2>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.bing.com/covid" frameborder="0" style="width: 100%; height: 600px" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="promotions">
            <h2 class="mt-5">Videos</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="neumorphism">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" style="border-radius: 15px; " src="https://www.youtube.com/embed/4yIR2rxwV-0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <p class="description size24">
                        Mudanças de hábitos dos brasileiros nos primeiros dias de Coronavírus
                    </p>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="neumorphism">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" style="border-radius: 15px; " src="https://www.youtube.com/embed/4yIR2rxwV-0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <p class="description size24">
                        Mudanças de hábitos dos brasileiros nos primeiros dias de Coronavírus
                    </p>
                </div>
            </div>
        </div>

        <div class="health">

        </div>

        <div class="food">

        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">{{news.title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe style="border:none; width:100%; height:400px" :src="news.externalLink"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>