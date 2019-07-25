<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="shortcut icon" href="<?php echo base_url('arquivos/imagens/logo_sic.png') ?>" type="image/x-icon" /-->
        <link rel="shortcut icon" href="http://www.epsa.com.br/vector/arquivos/plugdados/mobile
              /favicon-escola-profissionalizante-santo-agostinho-epsa.png" type="image/x-icon">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
        
        <link href="<?php echo base_url('arquivos/css/estilo.css?version=1') ?>" rel="stylesheet" type="text/css"/> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       

    </head>
    <body>
        <?php
         // $navbar = isset($navbar)?$navbar:'navbar';
          $this->load->view('navbar');
         ?>
        <div class="container">
            <header class="page-header">
                <h2><?php echo $h2; ?></h2>
            </header>

                <?php
                if ($msg = get_msg()):
                    ?>
                    <div class = "<?php echo @$msg['class'] ?>" role = "alert">
                        <?php echo @$msg['aviso']; ?>
                    </div>
                    <?php
                endif;
                ?>

                <?php $this->load->view($page);?>

            <footer>
                <p class="text-muted">RL &copy <?php echo date('Y')?></p>
            </footer>


        </div><!-- container -->
<!--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="./arquivos/js/jquery.hideseek.min.js"></script>
-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src= "<?php echo base_url("arquivos/js/pontos.js?version=2") ?>"></script>

    </body>
</html>
