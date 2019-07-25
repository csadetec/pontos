<?php

class Pontos_model extends CI_Model {

    public function insert($dados) {
        $this->db->insert('d_pontos', $dados);
        return $this->db->insert_id();

    }
/**/

    public function update($id, $dados) {
        if ($id && $dados):
            $this->db->set($dados);
            $this->db->where('id_ponto', $id);
            return $this->db->update('d_pontos');
        else:
            return false;
        endif;
    }

    public function select($id_usuario = null) {

        if($id_usuario):

          $this->db->select('*');
          $this->db->from('d_pontos');
          $this->db->where('id_usuario', $id_usuario);
          $this->db->order_by('data','desc');
          $query = $this->db->get();

          if ($query->num_rows() > 0):
              return $query->result();
          else:
              return null;
          endif;
        endif;
    }

    public function select_id($id = null) {

        if($id):
          $this->db->select('*');
          $this->db->from('d_pontos');
          $this->db->where('id_ponto',$id);
          $query = $this->db->get();

          if ($query->num_rows() == 1):
              return $query->row();
          else:
              return null;
          endif;
        else:
          return false;
        endif;
      }
      public function sum_diferenca_horas($id_usuario = null) {

        if($id_usuario):
          $this->db->select('sum(diferenca_horas) as soma_horas');
          $this->db->from('d_pontos');
          $this->db->where('id_usuario',$id_usuario);
          $query = $this->db->get();

          if ($query->num_rows() == 1):
              return $query->row();
          else:
              return null;
          endif;
        else:
          return false;
        endif;
      }
      /**/

}
