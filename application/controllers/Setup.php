<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'date', 'url', 'funcoes_helper'));
        $this->load->library(array('table', 'form_validation', 'session'));

        $this->load->model('setup_model');

        // $this->output->enable_profiler(TRUE);
    }

    public function index() {

    }

    public function login() {

        $this->form_validation->set_rules('usuario', 'USUÁRIO', 'trim|required|ucfirst');
        $this->form_validation->set_rules('password', 'PASSWORD', 'required');

        if ($this->form_validation->run() == false):
            if (validation_errors()):
                set_msg(validation_errors(), 'danger');
            endif;


        else:
            $post = $this->input->post();
            // var_dump($post);
            if ($q = $this->setup_model->select('d_usuarios', array('usuario' => $post['usuario']))):
                if ($this->setup_model->select('d_usuarios', $post)):

                    $this->session->set_userdata('logged', true);
                    $this->session->set_userdata('usuario', $post['usuario']);
                    $this->session->set_userdata('id_usuario', $q->id_usuario);
                    $this->session->set_userdata('nome', $q->nome);
                    $this->session->set_userdata('jornada_diaria', $q->jornada_diaria);
                    $this->session->set_userdata('entrada', $q->entrada);
                    $this->session->set_userdata('saida', $q->saida);

                    $this->session->set_userdata('admin', $q->admin);
                    redirect('pontos/listar');
                //print_r($_SESSION);
                else:
                    set_msg('Senha Incorreta!', 'danger');
                endif;

            else:
                set_msg('Usário não Cadastrado.', 'danger');
            endif;


        endif;

        $dados = array(
            'titulo' => 'Login do Sistema'
        );


        $this->load->view('setup/login', $dados);
    }

    public function sair() {


        set_msg('Obrigado! pela Visita.', 'info');
        $this->session->unset_userdata('logged');
        $this->session->unset_userdata('usuario');
        redirect('login');
    }

}
