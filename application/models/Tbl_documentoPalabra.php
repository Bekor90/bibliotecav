<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_documentoPalabra extends CI_model {

	
	function guardarDocumentoPalabra($idDocumento, $idpalabra)
	{	
		$idDocPalabra = array( 
				'id_documento' => $idDocumento,
				'id_palabra' => $idpalabra
				);

		$this->db->insert('documento_palabra', $idDocPalabra);	
	}


	function findDocumentoPalabra($idDocumento)
	{		
		$this->db->where('id_documento', $idDocumento);
		$query = $this->db->get('documento_palabra');

		if ($query->num_rows() > 0) {
			
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

	function updateDocumenPalabra($idDoc, $idPalabra)
	{
		$idDocPalabra = array( 
				'id_documento' => $idDoc,
				'id_palabra' => $idPalabra
				);

		return $this->db->update('documento_palabra', $idDocPalabra);	
	}

}