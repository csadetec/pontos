<h3>Saldo de Horas: <?php echo $q_soma ?></h3>
<?php
if ($query):
    $this->table->set_heading('N°', 'DATA', 'ENTRADA', 'SAÍDA', 'DIFERENÇA', 'OBS','EDITAR');
    foreach ($query as $c => $q):
        $date=date_create($q->data);
        //echo date_format($date,"d/m/y");
        $this->table->add_row($c + 1, date_format($date, 'd/m/y') ,$q->entrada, $q->saida, $q->diferenca_horas, $q->obs,//);
            anchor('pontos/editar/'.$q->id_ponto, '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>'));

    endforeach;
    $template = array(
        'table_open' => '<table border="0" cellpadding="4" cellspacing="0" class="table table-striped">',
    );
    $this->table->set_template($template);
    echo $this->table->generate();
else:
    ?>
    <div class = "alert alert-warning" role = "alert">
        Nada encontrado!
    </div>
<?php
endif;
/**/
?>
</div>
