<!doctype html>
<html lang="en">
  <head>
    <title>Rocket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container"> 
            <a class="navbar-brand" href="#"><img src="https://skylab.rocketseat.com.br/static/2e4935f77639107e6b0d81392e181718.svg"></a>
       
        </div>
    </nav>
    <div class="title">
        <h1>Uma viagem incrível pelo espaço</h1>
    </div>
    <div class="image">
        <div class="container">
            <div class="row">
              <div class="col">
                  <img id="venus" src="img/venus.svg">
                </div>
              <div class="col">
                <img id="rocket" src="img/rocket.svg">
              </div>
              <div class="col">
                  <img id="terra" src="img/planet-earth.svg">
                </div>
            </div>
          </div>
    </div>

    
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="conteudo">
              <p> O que você vai querer ser quando crescer? 
                  Quem quando era criança nunca ouviu isso?
                  E a repostas são variadas, mas sempre tem uma que marca, como, quero ser astronauta.
                  Ver a visão da terra fora dela, estrelas, galaxias, planetas e até mesmo andar na Lua.
                  Rocket te proporciona seu desejo de criança. Entre em contato com a gente para mais informaçoes.
                  E não decepcione sua criança interior.
                </p>
              </div>
            <div class="imagem2">
              <img id="astronauta" src="img/2240706.svg">  
            </div>
          </div>
          <div class="col">
            
              <form id="formulario" action="script.php" method="POST">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="nome" class="form-control" id="nome" name="nome" > 
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email"> 
                </div>
                <div class="form-group">
                  <label for="mensagem">Mensagem</label>
                  <input type="mensagem" class="form-control" id="mensagem" name="mensagem"> 
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
              </form>
            
          </div>
        </div>
      </div>
    

    






    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
      <div class="container text-center">
        <small>Copyright &copy; Lívia Karoline</small>
      </div> 
    </footer>
    
    
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>