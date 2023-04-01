<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php require '../padroes/head.php'; ?>
</head>
<body>

  <?php require '../padroes/no-script.php'; ?>
  <?php require '../padroes/header.php'; ?>

  <main class="principal">
    <div class="container">
      <div class="card">
        <span class="tag-destaque"></span>
        <div class="card-header" data-conteudo="dados-dia">
          <h5 class="text-primary bold">Segunda-feira</h5>
          <h5 class="text-dark-emphasis">18 de março de 2023</h5>
        </div><br>
        <div class="card-body" data-conteudo="horarios-hoje">
        </div>
      </div>

      <br>

      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="text-muted">Últimos registros</h5>
          <a href="" data-link="ultimos-registros" type="button" class="btn btn-outline-secondary">Ver todos</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Data</th>
                  <th scope="col">Entrada</th>
                  <th scope="col">Saída</th>
                  <th scope="col">Tempo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" colspan="2">
                    <div class="input-group">
                      <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" checked disabled>
                      </div>
                      <input type="text" class="form-control" value="Sábado, 17/03/2023" disabled>
                    </div>
                  </td>
                  <td>08:00</td>
                  <td>17:30</td>
                  <td>08:30:00</td>
                </tr>
                <tr>
                  <td scope="row" colspan="2">
                    <div class="input-group">
                      <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" checked disabled>
                      </div>
                      <input type="text" class="form-control" value="Sexta-feira, 16/03/2023" disabled>
                    </div>
                  </td>
                  <td>08:00</td>
                  <td>17:30</td>
                  <td>08:30:00</td>
                </tr>
                <tr>
                  <td scope="row" colspan="2">
                    <div class="input-group">
                      <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" checked disabled>
                      </div>
                      <input type="text" class="form-control" value="Sexta-feira, 16/03/2023" disabled>
                    </div>
                  </td>
                  <td>08:00</td>
                  <td>17:30</td>
                  <td>08:30:00</td>
                </tr>
                <tr>
                  <td scope="row" colspan="2">
                    <div class="input-group">
                      <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" checked disabled>
                      </div>
                      <input type="text" class="form-control" value="Sexta-feira, 16/03/2023" disabled>
                    </div>
                  </td>
                  <td>08:00</td>
                  <td>17:30</td>
                  <td>08:30:00</td>
                </tr>
                <tr>
                  <td scope="row" colspan="2">
                    <div class="input-group">
                      <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" checked disabled>
                      </div>
                      <input type="text" class="form-control" value="Sexta-feira, 16/03/2023" disabled>
                    </div>
                  </td>
                  <td>08:00</td>
                  <td>17:30</td>
                  <td>08:30:00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <br>

      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <div>
            <h5 class="text-dark-emphasis">Horários</h5>
            <p>Os horários dos próximos dias</p>
          </div>
          <a href="" data-link="horarios" type="button" class="btn btn-outline-secondary">Ver todos</a>
        </div>
        <div class="card-body" data-conteudo="horarios-proximos-dias">
        </div>
      </div>

      </div>
    </div>
  </main>
  
  <script type="module" src="../assets/js/scripts/inicio.js" defer></script>
  <?php include '../padroes/footer.php' ?>

</body>
</html>