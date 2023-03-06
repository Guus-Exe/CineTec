<!DOCTYPE html>     
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineTec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style-fil.css">
</head>
<body>
    <header>   
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../img/logo.png" alt="Logo" width="40%" height="40%" class="d-inline-block align-text-top me-2" style="margin-left: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto ">
                <li class="nav-item">
                  <a class="nav-link" href="./index.html">
                    <i class="bi bi-house-fill me-1"></i>
                    Filmes
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/ingressos.html">
                    <i class="bi bi-person-fill me-1"></i>
                    Ingressos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./contato.html">
                    <i class="bi bi-envelope-fill me-1"></i>
                    Contato
                  </a>
                </li>
      
              </ul>
              <div class="d-flex">
                <a class="btn btn-outline-light me-2" href="./cadastro.html">Login</a>
              </div>
              <div class="d-flex">
                <a class="btn btn-outline-light me-2" href="./cadastro.html">Cadastrar</a>
              </div>
      
            </div>
          </div>
        </nav>
      </header>
      
<main>
  <div class="container">
      <div class="content">
@yield('content')
        <div id="carouselExampleIndicators" class="carousel slide mx-auto" style="max-width: 70vw">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/img1.png" class="d-block w-100" alt="Filmes em Cartaz">
          </div>
          <div class="carousel-item">
            <img src="./img/img2.png" class="d-block w-100" alt="Filmes em Cartaz">
          </div>
          <div class="carousel-item">
            <img src="./img/img3.png" class="d-block w-100" alt="Filmes em Cartaz">
          </div>
          <div class="carousel-item">
            <img src="./img/img4.png" class="d-block w-100" alt="Filmes em Cartaz">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="container">
      <h1 class="text-center mb-5" >Filmes em Cartaz</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 card-sm">
            <img src="./img/img5.png" class="card-img-top" alt="Filme 1">
            <div class="card-body">
              <h5 class="card-title">Pequena Sereia</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus velit eros, nec molestie odio molestie eu. Donec quis purus eget nisi lacinia lacinia.</p>
              <a href="./ingressos.html" class="btn btn-primary">Escolher lugar</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 card-sm">
            <img src="./img/img6.png" class="card-img-top" alt="Filme 2">
            <div class="card-body">
              <h5 class="card-title">Avatar 2</h5>
              <p class="card-text">Fusce laoreet, ex ac pretium convallis, tellus nisl vulputate mauris, id bibendum velit velit a dolor. Curabitur eleifend ex sit amet sapien bibendum aliquet. Proin eget dictum velit.</p>
              <a href="./ingressos.html" class="btn btn-primary">Escolher lugar</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 card-sm">
            <img src="./img/img7.png" class="card-img-top" alt="Filme 3">
            <div class="card-body">
              <h5 class="card-title">Megan</h5>
              <p class="card-text">Suspendisse potenti. Nulla facilisi. Sed rhoncus massa quis consectetur lacinia. Etiam vitae bibendum nulla. Curabitur aliquam nisi lectus, sit amet maximus mauris egestas in.</p>
              <a href="./ingressos.html" class="btn btn-primary">Escolher lugar</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 card-sm">
            <img src="./img/img8.png" class="card-img-top" alt="Filme 3">
            <div class="card-body">
              <h5 class="card-title">Gato de Botas 2,</h5>
              <p class="card-text">Suspendisse potenti. Nulla facilisi. Sed rhoncus massa quis consectetur lacinia. Etiam vitae bibendum nulla. Curabitur aliquam nisi lectus, sit amet maximus mauris egestas in.</p>
              <a href="./ingressos.html" class="btn btn-primary">Escolher lugar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  
  
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" style="background-color: #2f2f2f;">
      <p class="col-md-4 mb-0" style="color: #FFFFFF;">&copy; 2023 Gustavo Assunção, Inc</p>
      
      <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="./img/logo.png" alt="Logo" width="80vw" height="50vh" style="margin-left: 20px;">
        </a>
        
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="./index.html" class="nav-link px-2" >Filmes</a></li>
          <li class="nav-item"><a href="./ingressos.html" class="nav-link px-2" >Ingressos</a></li>
          <li class="nav-item"><a href="./contato.html" class="nav-link px-2" >Contato</a></li>
          <li class="nav-item"><a href="./cadastro.html" class="nav-link px-2" >Login/Cadastrar</a></li>
        </ul>
      </footer>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>