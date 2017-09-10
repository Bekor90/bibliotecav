<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_documentoAutor extends CI_model {

	
	function guardarDocumentoAutor($idDocumento, $idautor)
	{	
		$datosId = array( 
				'id_documento' => $idDocumento,
				'id_autor' => $idautor
				);

		$this->db->insert('documento_autor', $datosId);	
		
	}

	 function findDocumentoAutor($idDocumento)
	{
		$this->db->where('id_documento', $idDocumento);
		$query = $this->db->get('documento_autor');

		if ($query->num_rows() > 0) {
			
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

	function updateDocumenAutor($idDoc, $idAutor)
	{
		$idDocAutor = array( 
				'id_documento' => $idDoc,
				'id_autor' => $idAutor
				);

		return $this->db->update('documento_autor', $idDocAutor);	
	}

}