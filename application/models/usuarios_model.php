<?php

Class Usuarios_model extends CI_Model {

	public function salva($usuario) {
		$this->db->insert("usuario", $usuario);

	}

	public function BuscaPorEmailESenha($email, $senha){
		  $this->db->where("email",$email);
	      $this->db->where("senha",$senha);
		 $usuario = $this->db->get("usuario")->row_array();

		return $usuario;

	}

	public function busca($id) {

		$this->db->where("id",$id);
		return $this->db->get("usuario")->row_array();
	}
}



?>