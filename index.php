<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ata de Reunião</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- Style Index -->
  <link rel="stylesheet" href="./assets/css/index.css">

  <script src="https://kit.fontawesome.com/cf4fb9e680.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./assets/js/jquery.js"></script>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="row">
        <div class="col-lg-6 col-sm-12 justify-content-center d-flex titulo ">
          <h1 class="fw-bold">SISTEMA DE EMISSÃO DE ATAS</h1>
        </div>
        <div class="col-lg-6 col-sm-12 text-center">
          <img src="./assets/images/Horizontal-Colorida.png" width="75%" class="img-fluid" alt="Logo">
        </div>
      </div>
      <div class="col-lg-8 col-sm-12 mb-sm-3">
        <div class="card mx-auto">
          <div class="card-header">
            <h3 class="text-center fw-bold text-white">Formulário de Dados</h3>
          </div>
          <div class="card-body">
            <form id="form1" method="post" action="./document.php">
              <div class="mb-3 position-relative">
                <label for="campo" class="form-label">Itens para Pauta</label>
                <input type="text" class="form-control campo" placeholder="Ex: Elaboração para plano de ensino..." />
                <div class="invalid-tooltip">
                  O campo não pode estar vazio!
                </div>
              </div>

              <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-success botao">
                  Adicionar
                </button>
              </div>
              <div class="mb-3 lista">
              </div>
              <div class="mb-3">
                <label for="detalhes" id="detalhes" class="form-label">Detalhes</label>
                <textarea class="form-control" name="detalhes" id="detalhes" cols="20" rows="10" required></textarea>
              </div>
              <div class="card-footer my-2">
                <div class="d-flex justify-content-end">
                  <input class="btn btn-primary botaoContinuar" type="submit" value="Continuar">
                </div>
              </div>
              <div class="mb-3 position-relative">
                <label for="campo" class="form-label">Membros da Ata</label>
                <input type="text" class="form-control campo" placeholder="Ex: Professor..." disabled>
                <div class="invalid-tooltip">
                  O campo não pode estar vazio!
                </div>
              </div>
              <div class="mb-3 d-flex justify-content-start">
                <button class="btn btn-success botao" disabled>
                  <i class="fa-solid fa-user-plus"></i>
                </button>
              </div>
              <div class="mb-3 lista">
              </div>
              <div class="card-footer mt-2">
                <div class="d-flex justify-content-center">
                  <input class="btn btn-primary" id="visualizar" type="submit" value="Baixar" disabled>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="./assets/js/addItem.js"></script>
  <script src="./assets/js/controleForm.js"></script>
</body>

</html>