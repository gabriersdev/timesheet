<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php require '../padroes/head-login.php'; ?>
</head>
  <body>

    <!-- <div class="overlay">
      <div class="lds-ring overlay"><div></div><div></div><div></div><div></div></div>
    </div> -->

    <main>
      <section class="container login">
        <div class="login-form">
          <form action="" method="post" data-formulario="login">
            <h2 class="text-center">Login&nbsp;<span class="text-muted"><b>Ponto Eletrônico</b></span></h2>       
              <div class="form-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" class="form-control" placeholder="Seu e-mail" required="required" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="password">Senha</label>
                <div class="input-group mb-3">
                  <input type="password" id="password" class="form-control" placeholder="Sua senha" required="required">
                  <button type="button" class="input-group-text icon" id="basic-addon2"><i class="bi bi-eye-slash-fill" id="icon-view"></i></button>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" id="submit" class="btn btn-primary btn-block">Acessar</button>
              </div>
              <div class="clearfix">
              </div> 
              <div class="form-group feedback-message text-center error" id="feedback-message-error"></div>
              <div class="form-group feedback-message text-center warning" id="feedback-message-warning"></div>
              <div class="form-group feedback-message text-center success" id="feedback-message-success"></div>
          </form>
        </div>
      </section>
    </main>

    <script type="module" src="../assets/js/scripts/login-scripts.js" defer></script>
    <?php include '../padroes/footer.php' ?>

  </body>
</html>