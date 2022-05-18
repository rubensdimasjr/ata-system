<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Visualização do Documento</title>
</head>
<link rel="stylesheet" href="./assets/css/view.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<script type="text/javascript" src="./assets/js/jquery.js"></script>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-6 col-sm-12 mb-sm-3">
        <div class="conteudo">
          <img src="./assets/images/header.PNG" alt="Header" width="100%">
          <div class="meio">
            <div class="container aqui">
            </div>
          </div>
          <img src="./assets/images/footer.PNG" alt="Footer" width="100%">
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 my-3 h-auto text-center">
        <ul class="nav nav-pills justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="#">Salvar</a>
          </li>
          <li class="nav-item">
            <form action="./document.php" method="post">
              <input type="submit" class="nav-link active" value="Baixar">
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!--   <script type="text/javascript" src="./assets/js/getItemStorage.js"></script> -->
</body>

</html>