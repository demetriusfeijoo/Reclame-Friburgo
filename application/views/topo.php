    <header>

      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1 class="brand"><a class="navbar-brand" href="<?php echo site_url(); ?>">Project name</a></h1>
          </div>
          <nav class="nav navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav">
              <li class="<?php echo !uri_string() ? 'active' : '' ?>"><a href="<?php echo site_url(); ?>" title="Vá para a página inicial" hreflang="pt-br">Início</a></li>
              <li class="<?php echo strpos(uri_string(), 'sobre')  !== false ? 'active' : '' ?>"><a href="<?php echo site_url('sobre'); ?>" title="Sobre o Reclame Friburgo" hreflang="pt-br">Sobre</a></li>
              <li class="<?php echo strpos(uri_string(), 'contato')  !== false ? 'active' : '' ?>"><a href="<?php echo site_url('contato'); ?>" title="Entre em contato com a nossa equipe" hreflang="pt-br">Contato</a></li>
            </ul>
            <a href="<?php echo site_url('nova-reclamacao'); ?>" title="Faça agora sua reclamação" hreflang="pt-br" class="new-thread btn btn-success" role="button">Fazer uma reclamação</a>
          </nav><!--/.navbar-collapse -->
        </div>
      </div>
    </header>