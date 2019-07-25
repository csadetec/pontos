<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$aviso = null;
if (!function_exists('set_msg')):

    function set_msg($aviso = null, $class = null) {
        //seta uma mensagem via session para ser lida posteriormente
        $CI = & get_instance();


        $CI->session->set_userdata('aviso', $aviso);
        $CI->session->set_userdata('class', 'alert alert-' . $class);
    }

endif;

if (!function_exists('get_msg')):

    //retorna uma mensagem definida pela função set_msg
    function get_msg($destroy = true) {
        $CI = & get_instance();

        $retorno = $CI->session->userdata();
        if ($destroy):
            $CI->session->unset_userdata('aviso');
            $CI->session->unset_userdata('class');

        endif;
        return $retorno;
    }

endif;


if (!function_exists('verifica_login')):

    function verifica_login() {
        $CI = & get_instance();

        if ($CI->session->userdata('logged') != TRUE):
            set_msg('Acesso Restrito! Faça Login para continuar. ', 'warning');
            redirect('login');
        endif;
    }

endif;

if (!function_exists('verifica_login_adm')):

    function verifica_login_adm() {
        $CI = & get_instance();

        if ($CI->session->userdata('admin') != 1):
            set_msg('Acesso Restrito! Aqui não JOAO. ', 'warning');
            redirect('login');
        endif;
    }



endif;
