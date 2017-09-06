<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_documentoArea extends CI_model {

	
	function guardarDocumentoArea($idDoc, $idArea)
	{	
		$idDocArea = array( 
				'id_documento' => $idDoc,
				'id_area' => $idArea
				);

		$this->db->insert('documento_area', $idDocArea);	
		
	}

 	function findDocumentoArea($idDocumento)
	{

		$this->db->where('id_documento', $idDocumento);
		$query = $this->db->get('documento_area');

		if ($query->num_rows() > 0) {
			
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

	function updateDocumenArea($idDoc, $idArea)
	{
		$idDocArea = array( 
				'id_documento' => $idDoc,
				'id_area' => $idArea
				);

		return $this->db->update('documento_area', $idDocArea);	
	}

}