<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_autores extends CI_model {

	/* function autores()
	{
		$query = $this->db->query("SELECT apellido FROM autores");
		return $query->result();
	}*/

	function guardarAutor($nombre, $apellido, $correo, $acronimo)
	{	
		$datos = array(
			'nombre' => $nombre,
			'apellido' => $apellido,
			'correo' => $correo,
			'acronimo' => $acronimo
			);

		$this->db->insert('autores', $datos);	
		
	}

	function udpdateAutor($data, $idAutor)
	{

		$this->db->where('id_autor', $idAutor);
        return $this->db->update('autores', $data);	
    }

    function deleteAutor($idAutor)
    {
    	$this->db->where('id_autor', $idAutor);
        return $this->db->delete('autores');	
    }

	 function findIdAutor($apellido)
	{

		$this->db->select('id_autor');
		$this->db->from('autores');
		$this->db->where('apellido', $apellido);
		$id = $this->db->get();

		if ($id->num_rows()>0) {
			
			return $id->result();
		}
	}

	function findApellidoAutor($idAutor)
	{
		$this->db->select('apellido');
		$this->db->from('autores');
		$this->db->where('id_autor', $idAutor);
		$apellido = $this->db->get();

		if ($apellido->num_rows()>0) {
			
			return $apellido->result();
		}
		else
		{
			return FALSE;
		}

	}

	function findIdAutores($idAutor)
	{
		
		$this->db->select('nombre, apellido, correo, acronimo');
		$this->db->from('autores');
		$this->db->where('id_autor', $idAutor);
		$autores = $this->db->get();

		if ($autores->num_rows()>0) {
			
			return $autores->result();
		}
		else
		{
			return FALSE;
		}
	}

	function findAutores($inicio = FALSE, $limite = FALSE)
	{
		if ($inicio !== FALSE && $limite !== FALSE) 
		{
			$this->db->limit($limite, $inicio);
		}

		$Consulta = $this->db->get("autores");
		return $Consulta->result();
	}

}