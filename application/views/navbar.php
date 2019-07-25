
<nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation" >
    <div class="container " >
        <div class="navbar-header  ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo anchor('pontos/listar', 'Detec', 'class="navbar-brand"') ?>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><?php echo anchor('pontos/listar', 'PONTOS') ?></li>
                <li><?php echo anchor('pontos/listar', 'LISTAR') ?></li>
                <li><?php echo anchor('pontos/cadastrar', 'CADASTRAR') ?></li>
                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> &nbsp; <?php echo $this->session->userdata('nome')  ?>  <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><?php echo anchor('sair', '<span class="glyphicon glyphicon-off"></span>',array('title'=>'SAIR')); ?></li>
                                      <li>
                                          <?php
                                          $backup = anchor('database/backup', '<span class="glyphicon glyphicon-save"  ></span> ', array('title' => 'Realizar Backup'));
                                          echo $this->session->userdata('admin') == 1 ? $backup : '';
                                          ?>
                                      </li>
                                    </ul>
                                </li>




            </ul>
        </div>
    </div>
</nav>
