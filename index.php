<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina inicial</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

  <div class="bg-withe">
    <div class="container-fluid px-0">
      <header>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
          <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" class="img-fluid" alt="logo" width="45px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar"
            aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="textoNavbar">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">
                  <i class="fas fa-home"></i> Home <span class="sr-only">(Página atual)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">
                  <i class="fas fa-briefcase"></i> Vagas
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">
                  <i class="fas fa-graduation-cap"></i> Capacitação
                </a>
              </li>
            </ul>
            <span class="navbar-text">
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>
            </span>
          </div>
        </nav>
      </header>
      <!-- Fim da Barra Superior-->

      <!--CARROCEL-->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="false">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>

        <!--TELA INICIAL-->
        <div class="carousel-inner" >
          <div class="carousel-item active ">
            
            <img src="assets/img/fundo-branco.png" class="expandir" alt="...">
            
            
            <div class="carousel-caption text-dark" style="bottom:100px">
              <img src="assets/img/logoestoudevolta.png" width="200px" class="" alt="">

              <h5 class=" py-2 py-md-5">Oportunidade</h5>
              <p >Propostas de emprego aqui cadastradas estão visíveis ao 
                usuário, tendo as vagas exclusividade em contratar candidatos 
                Egressos do Sistema Prisional.
              </p>
            
            </div>
          </div>

          <!--TELA APRESENTAÇÃO-->
          <div class="carousel-item">
            <img src="assets/img/fundo-branco.png" class="expandir" alt="...">
            
            <div class="carousel-caption  d-md-block">
              <img src="assets/img/homemespelho.jpeg" class="espelho" alt="">  
              
                <h5 class="text-dark">Vantagem</h5>
                <p class="text-dark">A grande vantagem do "Estou de Volta" é o viés social. 
                  Possibilitando unir interesses que muitas vezes não se encontram pela 
                  ausência de um ambiente de fácil acesso e focado em priorizar as pessoas 
                  pertencentes a esse grupos em situação de desvantagem e fragilidade.
                </p>
              
            </div>
          </div>

          <!--TELA ENTRAR CADASTRAR-->
          <div class="carousel-item">
            <img src="assets/img/fundo-branco.png" class="expandir" alt="...">
            
            
            <div class="carousel-caption text-light" style="bottom:100px">
              
                <img src="assets/img/logoestoudevolta.png" width="200px" alt=""> 
              <br>
                      
              
              
                <a class="btn btn-primary btn-lg tamanhobotao mb-3 mt-5" href="login">Entrar</a>
              
              <br>
                <a class="btn btn-primary btn-lg tamanhobotao" href="cadastro">Cadastrar</a>
             
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</body>

</html>