<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pontos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("America/Sao_Paulo");
        setlocale(LC_ALL, 'pt_BR');
        $this->load->model('pontos_model');
        //$this->load->helper(array('form', 'date', 'url', 'funcoes_helper'));
        $this->load->library(array('table', 'form_validation'));
        verifica_login();
      //  if($_SERVER['SERVER_NAME'] == 'localhost')$this->output->enable_profiler(TRUE);
       
    }

    public function index() {

    }

    public function listar() {

        $query = $this->pontos_model->select($this->session->userdata('id_usuario'));
        $q_soma = $this->pontos_model->sum_diferenca_horas($this->session->userdata('id_usuario'));
        $q_soma = $this->segundos_to_horas($q_soma->soma_horas);


        /**
        echo '<pre>';
        print_r($q_soma);
        echo '</pre>';
        /**/
        $soma_horas =0;
        
        if($query):
            foreach($query as $q):
           
                $q->diferenca_horas = $this->segundos_to_horas($q->diferenca_horas);

            endforeach;
        
        endif;
        /**
        echo '<pre>';
        print_r($query);
        echo '</pre>';
        /**/
        $dados = array(
            'titulo' => 'Pontos',
            'h2' => 'Lista dos Horários batidos',
            'page' => 'pontos/pontos_listar',
           'query' => $query,
            'q_soma' => $q_soma,
        );

        $this->load->view('load', $dados);
    /**/
    }
    
    public function segundos_to_horas($s = 0){
      //      $s = $s<0 ? $s*(-1):$s;
       // if($s = 0):

            $sinal = "";
            if($s < 0):
                $s*=(-1);
                $sinal = "-";
            endif;
            $horas = $s/3600;
            $horas = intval($horas);
            if($horas < 1):
                $horas = "00";
            elseif($horas >= 1 && $horas < 10):
                $horas = "0".$horas;
            endif;
            
            $minutos = $s%3600;
            $minutos = $minutos/60;
            $minutos = intval($minutos);
            if($minutos < 10):
                $minutos = "0".$minutos;
            endif;

            return $sinal.$horas.":".$minutos;
     //   endif;

    }
    /**/

    public function cadastrar() {

        $this->form_validation->set_rules('data', 'DATA', 'trim|required');
        $this->form_validation->set_rules('entrada', 'HORAS | ENTRADA', 'trim|required');
        $this->form_validation->set_rules('saida', 'HORAS | SAÍDA', 'trim|required');

        //verifica validacao
        if ($this->form_validation->run() == false):
            if (validation_errors()):
                set_msg(validation_errors(), 'danger');
            endif;

        else:
            $post = $this->input->post();
            
          
            $post['id_usuario'] = $this->session->userdata('id_usuario');
            /*
            echo '<pre>';
            print_r($post);
            echo '</pre>';
            /**/  
/**/
            if ($this->pontos_model->insert($post)):
                set_msg('cadastrado com Sucesso!', 'success');
                redirect('pontos/listar');
            else:
                set_msg('Falha ao cadastrar !!!', 'danger');
            endif;
            /**/
        endif;

        $dados = array(
            'titulo' => 'Cadastrar Ponto',
            'h2' => 'Cadastrar ponto',
            'page' => 'pontos/pontos_form',

        );

        $this->load->view('load', $dados);

    }

    public function editar($id = null) {
        if($id == null) redirect('impressoras/listar');

        $query = $this->pontos_model->select_id($id);
        if(!$query):
          set_msg('Não encontrada','warning');
          redirect('pontos/listar');
        endif;


        $this->form_validation->set_rules('data', 'DATA', 'trim|required');
        $this->form_validation->set_rules('entrada', 'HORAS | ENTRADA', 'trim|required');
        $this->form_validation->set_rules('saida', 'HORAS | SAÍDA', 'trim|required');


        //verifica validacao
        if ($this->form_validation->run() == false):
            if (validation_errors()):
                set_msg(validation_errors(), 'danger');
            endif;

        else:
            $post = $this->input->post();
            //print_r($post);

            if ($this->pontos_model->update($id, $post)):
                set_msg('Editado com Sucesso!', 'success');
                redirect('pontos/listar');
            else:
                set_msg('Falha ao Editar !!!', 'danger');
            endif;

        endif;

        $dados = array(
            'titulo' => 'Editar Ponto '.date_format(date_create($query->data),"d/m/Y"),
            'h2' => 'Editar Ponto '.'<b>'.date_format(date_create($query->data),"d/m/Y").'</b>',
            'page' => 'pontos/pontos_form',
            'query' => $query,
            'navbar' =>'pontos/pontos_navbar'

        );

        $this->load->view('load', $dados);

    }

}
