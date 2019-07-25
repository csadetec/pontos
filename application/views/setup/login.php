<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--  <link rel="shortcut icon" href="<?php echo base_url('arquivos/imagens/logo_sic.png') ?>" type="image/x-icon" /-->
        <link rel="shortcut icon" href="http://www.epsa.com.br/vector/arquivos/plugdados/mobile
              /favicon-escola-profissionalizante-santo-agostinho-epsa.png" type="image/x-icon">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
        <link href="<?php echo base_url('arquivos/css/estilo.css') ?>" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">

                    <?php
                    if ($msg = get_msg()):
                        ?>
                        <div class = "<?php echo @$msg['class'] ?>" role = "alert">
                            <?php echo @$msg['aviso']; ?>
                        </div>
                        <?php
                    endif;


                    echo form_open('login');
                    ?>
                    <h2 class="form-signin-heading">Login do Sistema</h2>

                    <div class="form-group">
                        <?php
                        echo form_label('Usuário', 'usuario', array('class' => 'sr-only'));
                        echo form_input(array('name' => 'usuario', 'id' => 'usuario',
                            'class' => 'form-control', 'required' => 'true'), set_value('usuario', ''));
                        ?>    
                    </div>
                    <div class="form-group">
                        <?php
                        echo form_label('Password', 'password', array('class' => 'sr-only'));
                        echo form_input(array('type' => 'password', 'name' => 'password', 'id' => 'password',
                            'class' => 'form-control', 'required' => 'true'), set_value('', ''));
                        ?>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>



        </div> <!-- /container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    </body>
</html>
