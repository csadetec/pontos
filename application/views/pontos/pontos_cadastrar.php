<div class="col-md-5" id="alert_teste">
  <h2>Testes js</h2>
</div>


<div class="col-md-7">
  <div class="row">
    <?php
    //$form = $query == false ? 'salas/cadastrar/' : 'salas/editar/' . @$query->id_sala;

    echo form_open('pontos/cadastrar/', array('class' => 'form-horizontal', 'role' => 'form'));

    ?>
    <div class="form-group col-md-10">
      <?php
        echo form_label('DATA', 'data');
        echo form_input(array('name' => 'data','type'=>'date', 'id' => 'data',
            'class' => 'form-control', 'required'=>'true'), set_value('data',date('Y-m-d')));
      ?>
    </div><!-- col-md-10-->
    <div class="form-group col-md-10">
      <?php
        echo form_label('ENTRADA', 'entrada');
        echo form_input(array('type'=>'time','name' => 'entrada', 'id' => 'entrada',
            'class' => 'form-control', 'required'=>'true'), set_value('entrada', $this->session->userdata('entrada')));
      ?>
    </div><!-- col-md-10-->
    <div class="form-group col-md-10">
      <?php
        echo form_label('SAÍDA', 'saida');
        echo form_input(array('type'=>'time', 'name' => 'saida', 'id' => 'saida',
            'class' => 'form-control', 'required'=>'true'), set_value('saida', $this->session->userdata('saida')));
      ?>
    </div><!-- col-md-10-->
  <div class="form-group col-md-10">
      <?php
        //echo form_hidden('name', 'value');
        echo form_label('JORNADA', 'jornada');
        echo form_input(array('type'=>'time','name' => 'jornada', 'id' => 'jornada',
            'class' => 'form-control', 'required'=>'true','disabled'=>'disabled'), set_value('jornada', $this->session->userdata('jornada_diaria')));
      ?>
</div><!-- col-md-10-->
    

<div class="form-group col-md-10">
      <?php
        echo form_label('DIFERANÇA MAIS', 'diferenca_mais');
        echo form_input(array('type'=>'time','name' => '', 'id' => 'diferenca_mais',
            'class' => 'form-control', 'required'=>'true','disabled'=>'disabled'), set_value('diferenca_mais', ''));
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
            'class' => 'form-control', 'required'=>'true'), set_value('diferenca_horas', ''));
      ?>
</div><!-- col-md-10-->

<div class="col-md-2" id="alert_diferenca">

</div>
<div class="form-group col-md-10">
      <?php
        echo form_label('OBS', 'obs');
        echo form_textarea(array('name' => 'obs', 'id' => 'obs',
            'class' => 'form-control'), set_value('obs', ''));
      ?>
</div><!-- col-md-10-->
<div class="form-group col-md-6">
    <?php
    echo form_submit('', 'cadastrar', array('class' => 'btn btn-primary', 'id'=>'btn_salvar'));

    echo anchor('pontos/listar', 'Cancelar', array('class' => 'btn btn-default'));
    ?>
</div>
  </div>  
</div>



<?php
//echo form_hidden('s', 's');
echo form_close();
?>
