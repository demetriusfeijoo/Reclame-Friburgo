    <section class="main cadastro-usuario" role="main">

      <div class="container">

        <div class="alert alert-success">
          Cadastro efetuado com sucesso. 
          <a href="<?php echo site_url('nova-reclamacao'); ?>" hreflang="pt-br" title="Fazer uma nova reclamação" class="alert-link" >Fazer uma reclamação</a>
        </div>
        <div class="alert alert-danger">
        Ops! Ocorreu algum erro e seu cadastro não pôde ser realizado. 
        Por favor, verifique os campos abaixo e tente novamente. 
        Caso o problema persista, entre em <a href="<?php echo site_url('contato'); ?>" title="Entre em contato com a nossa equipe" hreflang="pt-br" class="alert-link">contato conosco</a>.
        </div>

        <?php echo form_open('', array('class' => 'form-horizontal cadastro-usuario-form', "role" => 'form' )); ?>

          <div class="panel panel-primary col-sm-offset-2">
            
            <div class="panel-heading">
                <h1 class="panel-title">
                    Cadastre-se
                </h1>
            </div>

            <div class="panel-body">
                <div class="form-group">
                <label class="col-sm-2 control-label" for="email">Email*</label>
                <div class="col-sm-5">
                    <input type="email" autofocus class="form-control" id="email" name="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="senha">Senha*</label>
                <div class="col-sm-5">
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Criar</button>
              </div>
            </div>

          </div>

          <?php echo form_close(); ?>

      </div>

    </section>