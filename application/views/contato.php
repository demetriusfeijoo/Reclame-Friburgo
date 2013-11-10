    <section class="main contato" role="main">

      <h1 class="container">Contato</h1>

      <div class="container">

        <div class="alert alert-success">Seu contato foi enviado com sucesso.</div>
        <div class="alert alert-danger">
        Ops! Ocorreu algum erro ao enviar o seu contato. 
        Por favor, verifique os campos abaixo e tente novamente. 
        Caso o problema persista, você pode estar entrando em contato através desse <a href="mailto:email@email.com.br" title="Enviar e-mail" hreflang="pt-br" class="alert-link">e-mail</a>.
        </div>

        <?php echo form_open('', array('class' => 'form-horizontal contato-form', "role" => 'form' )); ?>

          <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" autofocus class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <label for="assunto" class="col-sm-2 control-label">Assunto</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="assunto" name="assunto" placeholder="Assunto">
            </div>
          </div>

          <div class="form-group">
            <label for="mensagem" class="col-sm-2 control-label">Mensagem</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Mensagem" rows="3"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>
          </div>

          <?php echo form_close(); ?>

      </div>

    </section>