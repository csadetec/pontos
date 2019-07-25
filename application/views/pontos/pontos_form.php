<div class="col-md-5" id="alert_teste">
  <h2>Testes js</h2>
</div>


<div class="col-md-7">
  <div class="row">
    <?php
    $form = @$query == false ? 'pontos/cadastrar/' : 'pontos/editar/' . @$query->id_ponto;

    echo form_open($form, array('class' => 'form-horizontal', 'role' => 'form', 'id'=>'form-pontos'));

    ?>
    <div class="form-group col-md-10">
      <?php
        $data = @$query == false ? date('Y-m-d') : $query->data;
        echo form_label('DATA', 'data');
        echo form_input(array('name' => 'data','type'=>'date', 'id' => 'data',
            'class' => 'form-control', 'required'=>'true'), set_value('data', $data));
      ?>
    </div><!-- col-md-10-->
    <div class="form-group col-md-10">
      <?php
        $entrada = @$query == false ? $this->session->userdata('entrada') : $query->entrada;
        echo form_label('ENTRADA', 'entrada');
        echo form_input(array('type'=>'time','name' => 'entrada', 'id' => 'entrada',
            'class' => 'form-control', 'required'=>'true'), set_value('entrada', $entrada));
      ?>
    </div><!-- col-md-10-->
    <div class="form-group col-md-10">
      <?php
        $saida = @$query == false ? $this->session->userdata('saida') : $query->saida;
        echo form_label('SAÍDA', 'saida');
        echo form_input(array('type'=>'time', 'name' => 'saida', 'id' => 'saida',
            'class' => 'form-control', 'required'=>'true'), set_value('saida', $saida));
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
        //echo form_label('DIFERANÇA HORAS', 'diferena_horas');
        echo form_input(array('type'=>'hidden','name' => 'diferenca_horas', 'id' => 'diferenca_horas',
            'class' => 'form-control', 'required'=>'true'), set_value('diferenca_horas', @$query->diferenca_horas));
      ?>
</div><!-- col-md-10-->

<div class="col-md-2" id="alert_diferenca">

</div>
<div class="form-group col-md-10">
      <?php
        echo form_label('OBS', 'obs');
        echo form_textarea(array('name' => 'obs', 'id' => 'obs',
            'class' => 'form-control'), set_value('obs', @$query->obs));
      ?>
</div><!-- col-md-10-->
<div class="form-group col-md-6">
    <?php
    $btn_nome = @$query == false ? 'Cadastrar' : 'Salvar';
    echo form_submit('', $btn_nome, array('class' => 'btn btn-primary', 'id'=>'btn_salvar'));

    echo anchor('pontos/listar', 'Cancelar', array('class' => 'btn btn-default'));
    ?>
</div>
  </div>  
</div>



<?php
//echo form_hidden('s', 's');
echo form_close();



?>
