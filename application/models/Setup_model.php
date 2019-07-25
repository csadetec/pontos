<?php

class Setup_model extends CI_Model {

   
    public function select($tabela = null, $dados = null) {

        $this->db->select('*');
        $this->db->from($tabela);
        if ($dados):
            $this->db->where($dados);
            $query = $this->db->get();

            if ($query->num_rows() == 1):
                return $query->row();
            else:
                return null;
            endif;
        else:
            $query = $this->db->get();

            if ($query->num_rows()>= 0):
                return $query->result();
            else:
                return null;
            endif;
        endif;

        /* */
    }

}
