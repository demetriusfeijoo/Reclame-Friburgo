    <section class="main nova-reclamacao" role="main">

      <h1 class="container">Nova Reclamação</h1>

      <div class="container">

        <div class="alert alert-success">Sua reclamação foi cadastrada com sucesso.</div>
        <div class="alert alert-danger">
        Ops! Ocorreu algum erro e a sua reclamação não pôde ser enviada. 
        Por favor, verifique os campos abaixo e tente novamente. 
        Caso o problema persista, entre em <a href="<?php echo site_url('contato'); ?>" title="Entre em contato com a nossa equipe" hreflang="pt-br" class="alert-link">contato conosco</a>.
        </div>

        <?php echo form_open('', array('class' => 'form-horizontal reclamacao-form', "role" => 'form' )); ?>

          <div class="panel panel-primary col-sm-offset-2">
            
            <div class="panel-heading">
                <h3 class="panel-title">
                    Identifique-se 
                    <small>
                        Ainda não possui uma conta? 
                        <a href="<?php echo site_url('cadastre-se'); ?>" title="Crie sua conta no reclame aqui. É super fácil!" class="cadastre-se">Cadastre-se</a>
                    </small>
                </h3>
            </div>

            <div class="panel-body">
                <div class="form-group">
                <label class="col-sm-2 control-label" for="email">Email</label>
                <div class="col-sm-5">
                    <input type="email" autofocus class="form-control" id="email" name="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="senha">Senha</label>
                <div class="col-sm-5">
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                </div>
              </div>
            </div>

          </div>

          <div class="form-group">
            <label for="titulo" class="col-sm-2 control-label">Título*</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
            </div>
          </div>

          <div class="form-group">
            <label for="bairro" class="col-sm-2 control-label">Bairro*</label>
            <div class="col-sm-2">
                <select class="form-control" id="bairro" name="bairro">
                  <option>Mury</option>
                  <option>Braunes</option>
                  <option>Theodoro</option>
                  <option>Olaria</option>
                  <option>Conego</option>
                </select>
            </div>
          </div>         

        <div class="form-group">
            <label for="foto" class="col-sm-2 control-label">Foto</label>
            <div class="col-sm-10">
                <input type="file" id="foto" name="foto">
                <p class="help-block">Formatos aceitos: jpg e png. </p>
            </div>
        </div>

          <div class="form-group">
            <label for="descricao" class="col-sm-2 control-label">Descrição*</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição" rows="3"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Criar</button>
            </div>
          </div>

          <?php echo form_close(); ?>

      </div>

    </section>