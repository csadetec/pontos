<?php

echo form_open('pontos/editar/'.$query->id_ponto, array('class' => 'form-horizontal', 'role' => 'form'));

?>
<div class="form-group col-md-10">
      <?php
        echo form_label('DATA', 'data');
        echo form_input(array('name' => 'data','type'=>'date', 'id' => 'data',
            'class' => 'form-control', 'required'=>'true'), set_value('data',$query->data));
      ?>
</div><!-- col-md-10-->
<div class="form-group col-md-10">
      <?php
        echo form_label('ENTRADA', 'entrada');
        echo form_input(array('type'=>'time','name' => 'entrada', 'id' => 'entrada',
            'class' => 'form-control', 'required'=>'true'), set_value('entrada', $query->entrada));
      ?>
</div><!-- col-md-10-->
<div class="form-group col-md-10">
      <?php
        echo form_label('SAÍDA', 'saida');
        echo form_input(array('type'=>'time', 'name' => 'saida', 'id' => 'saida',
            'class' => 'form-control', 'required'=>'true'), set_value('saida', $query->saida));
      ?>
</div><!-- col-md-10-->
<div class="form-group col-md-10">
      <?php
        //echo form_label('JORNADA', 'jornada_diaria');
        echo form_input(array('type'=>'hidden', 'name' => '', 'id' => 'jornada_diaria',
            'class' => 'form-control', 'required'=>'true'), set_value('jornada_diaria', $this->session->userdata('jornada_diaria')));
      ?>
</div><!-- col-md-10-->
<div class="form-group col-md-10">
      <?php
        echo form_label('DIFERANÇA MAIS', 'diferenca_mais');
        echo form_input(array('type'=>'time','name' => '', 'id' => 'diferenca_mais',
            'class' => 'form-control', 'required'=>'true', 'disabled'=>'disabled'), set_value('diferenca_mais', ''));
      ?>
</div><!-- col-md-10-->
<div class="form-group col-md-10">
      <?php
        echo form_label('DIFERANÇA MENOS', 'diferenca_menos');
        echo form_input(array('type'=>'time','name' => '', 'id' => 'diferenca_menos',
            'class' => 'form-control', 'required'=>'true', 'disabled'=>'disabled'), set_value('diferenca_menos', ''));
      ?>
</div><!-- col-md-10-->
<div class="form-group col-md-10">
      <?php
        //echo form_hidden('name', 'value');
        echo form_input(array('type'=>'hidden','name' => 'diferenca_horas', 'id' => 'diferenca_horas',
            'class' => 'form-control', 'required'=>'true'), set_value('diferenca_horas', $query->diferenca_horas));
      ?>
</div><!-- col-md-10-->
<div class="col-md-2" id="alert_diferenca">

</div>
<div class="form-group col-md-10">
      <?php
        echo form_label('OBS', 'obs');
        echo form_textarea(array('name' => 'obs', 'id' => 'obs',
            'class' => 'form-control'), set_value('obs', $query->obs));
      ?>
</div><!-- col-md-10-->
<div class="form-group col-md-6">
    <?php
    echo form_submit('', 'Salvar', array('class' => 'btn btn-primary', 'id'=>'btn_salvar'));

    echo anchor('pontos/listar', 'Cancelar', array('class' => 'btn btn-default'));
    ?>
</div>

