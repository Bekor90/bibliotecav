<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_palabras extends CI_model {

	public function palabrasClave()
	{
		$query = $this->db->query("SELECT nombre FROM palabraclave");
		return $query->result();
	}

	function guardarPalabra($data)
	{	
		$datos = array(
			'nombre' => $data
			);

		$this->db->insert('palabraclave', $datos);			
	}

	function udpdatePalabra($data, $idPalabra)
	{

		$this->db->where('id_palabra', $idPalabra);
        return $this->db->update('palabraclave', $data);	
    }

    function deletePalabra($idPalabra)
    {
    	$this->db->where('id_palabra', $idPalabra);
        return $this->db->delete('palabraclave');	
    }


	public function findIdPalabra($palabra)
	{
		$this->db->select('id_palabra');
		$this->db->from('palabraclave');
		$this->db->where('nombre', $palabra);
		$id = $this->db->get();

		if ($id->num_rows()>0) {
			
			return $id->result();
		}
	}

	function findNombrePalabra($idpalabra)
	{
		$this->db->select('nombre');
		$this->db->from('palabraclave');
		$this->db->where('id_palabra', $idpalabra);
		$nombre = $this->db->get();

		if ($nombre->num_rows()>0) {
			
			return $nombre->result();
		}
		else
		{
			return FALSE;
		}
	}
	
	function findPalabras($inicio = FALSE, $limite = FALSE)
	{
	    if ($inicio !== FALSE && $limite !== FALSE) 
		{
			$this->db->limit($limite, $inicio);
		}

		$Consulta = $this->db->get("palabraclave");
		return $Consulta->result();
	}

}