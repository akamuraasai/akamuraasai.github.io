
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="icon" href="../../favicon.ico">-->

    <title>Form Request</title>

    <!-- Bootstrap core CSS -->
    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://v4-alpha.getbootstrap.com/examples/cover/cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#inicio">Inicio</a>
                <a class="nav-link" href="#dev-tools">Dev Tools</a>
                <a class="nav-link" href="#network">Network</a>
                <a class="nav-link" href="#facebook">Facebook</a>
                <a class="nav-link" href="#limpando">Limpando</a>
                <a class="nav-link" href="#log">Preservando o Log</a>
                <a class="nav-link" href="#request">O Request</a>
                <a class="nav-link" href="#senha">A Senha</a>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Mini-tutorial de Form Request.</h1>
            <p class="lead">Neste pequeno tutorial irei explicar como fazer para analisar os requests e descobrir que sua senha é passada pelo browser "limpa" usando apenas o DevTools do Chrome.</p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Mini-tutorial de exibição de request, by <a href="https://fb.com/akamuraasai">Akamura Asai</a>.</p>
            </div>
          </div>

        </div>

      </div>
        
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover" id="Inicio">
                    <p class="lead">Abra uma nova aba no Chrome.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <a href="#" class="thumbnail" class="col-xs-12 col-md-12">
                                <img src="http://i.imgur.com/QDSnj3m.png" alt="nova-aba" class="col-xs-12 col-md-12">
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover" id="dev-tools">
                    <p class="lead">Pressione F12 para abrir o Dev Tools.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <a href="#" class="thumbnail" class="col-xs-12 col-md-12">
                                <img src="http://i.imgur.com/fjnwqlB.png" alt="dev-tools" class="col-xs-12 col-md-12">
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover" id="network">
                    <p class="lead">Abra a aba Network.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <a href="#" class="thumbnail" class="col-xs-12 col-md-12">
                                <img src="http://i.imgur.com/72DkcwR.png" alt="network" class="col-xs-12 col-md-12">
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover" id="facebook">
                    <p class="lead">Acesse o site do Facebook.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <a href="#" class="thumbnail" class="col-xs-12 col-md-12">
                                <img src="http://i.imgur.com/W1Fz4ai.png" alt="facebook" class="col-xs-12 col-md-12">
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover" id="limpando">
                    <p class="lead">Limpe o log de requests clicando no botão indicado na imagem.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <a href="#" class="thumbnail" class="col-xs-12 col-md-12">
                                <img src="http://i.imgur.com/W1Fz4ai.png" alt="limpando" class="col-xs-12 col-md-12">
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover" id="log">
                    <p class="lead">Marque a flag para que o log de requests seja preservado.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <a href="#" class="thumbnail" class="col-xs-12 col-md-12">
                                <img src="http://i.imgur.com/v1PZh4i.png" alt="log" class="col-xs-12 col-md-12">
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover" id="request">
                    <p class="lead">Encontre o request responsavel pelo login (está marcado na imagem).</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <a href="#" class="thumbnail" class="col-xs-12 col-md-12">
                                <img src="http://i.imgur.com/7Nubwij.png" alt="request" class="col-xs-12 col-md-12">
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover" id="senha">
                    <p class="lead">Clique nele e desça até o grupo Form Data, seus dados de acesso estarão lá.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <a href="http://i.imgur.com/2rB9j26.png" class="thumbnail" data-toggle="lightbox" class="col-xs-12 col-md-12">
                                <img src="http://i.imgur.com/2rB9j26.png" alt="senha" class="col-xs-12 col-md-12">
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>