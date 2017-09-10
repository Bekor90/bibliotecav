<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_documentos extends CI_model {

	 /* @see https://codeigniter.com/user_guide/general/urls.html
	 */



	public function guardarDocumento($data)
	{	
		$this->db->insert('documentos', $data);	
		
	}

	function udpdateDocumento($data, $idDocumento)
	{

		$this->db->where('id_documento', $idDocumento);
        return $this->db->update('documentos', $data);	
    }

    function deleteDocumento($idDocumento)
    {
    	$this->db->where('id_documento', $idDocumento);
        return $this->db->delete('documentos');	
    }

	function UltimoidDocumento()
	{
		return $this->db->insert_id();
	}

	function findDocumentos($inicio = FALSE, $limite = FALSE)
	{
		if ($inicio !== FALSE && $limite !== FALSE) 
		{
			$this->db->limit($limite, $inicio);
		}

		$Consulta = $this->db->get("documentos");
		return $Consulta->result();
	}

	function obtenerDocumentos($id)
	{
		$this->db->where('id_documento', $id);
		$query = $this->db->get('documentos');

		if ($query->num_rows() > 0) {
			
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}


	public function busquedaGeneral($ConsultaGeneral)
	{
		
	$palabraMinuscula = strtolower($ConsultaGeneral);  //dejo palabra en miniscula
	$Cadena = str_replace(","," ",$ConsultaGeneral);  // reemplazo las comas por espacios
	$Cadena= str_replace("."," ",$ConsultaGeneral);  // reemplazo los puntos por espacios
	$CadenaFinalArray = explode(" ",$Cadena);       // se separa la cadena cada vez que encuentra un espacio
	$numeroPalabras = count($CadenaFinalArray);   //  cuento las palabras que se almacenaron en el arreglo

	$ArregloConsultasAutor = array();
	$ArregloConsultasDocumento = array();
	$ArregloConsultasAutorAreas = array();

	//RECORDATORIO USAR LIKE PARA TRAER DATOS.
	$cadena1 = "WHERE ";
	$cadena2 = "WHERE ";
	$cadena3 = "WHERE ";
	$cadena4 = "WHERE ";

	for($i=0; $i < $numeroPalabras; $i++)
	{
		$cadena1 .= "titulo_principal LIKE '%$CadenaFinalArray[$i]%' 
					OR titulo_secundario LIKE '%$CadenaFinalArray[$i]%'
					OR derechos_autor LIKE '%$CadenaFinalArray[$i]%'
					OR descripcion LIKE '%$CadenaFinalArray[$i]%' OR ";
					
		$cadena2 .= "areas.nombre LIKE '%$CadenaFinalArray[$i]%' OR ";
		
		$cadena3 .= "autores.nombre LIKE '%$CadenaFinalArray[$i]%' 
					OR autores.apellido LIKE '%$CadenaFinalArray[$i]%'
				    OR autores.acronimo LIKE '%$CadenaFinalArray[$i]%' OR ";
					
		$cadena4 .= "palabraclave.nombre LIKE '%$CadenaFinalArray[$i]%' OR ";
	}

	$cadena1 = substr ($cadena1, 0, -3);	// SE UTILIZA PARA ELIMINAR EL ULTIMO "OR "DE LA CADENA
	$cadena2 = substr ($cadena2, 0, -3);
	$cadena3 = substr ($cadena3, 0, -3);
	$cadena4 = substr ($cadena4, 0, -3);

	$query = $this->db->query("SELECT titulo_principal, descripcion
							 FROM  documentos 
							 WHERE id_documento IN( 
							SELECT id_documento 
							 FROM documentos
							".$cadena1."
						UNION
						    SELECT id_documento 
							FROM documento_area		
							WHERE id_area IN ( SELECT id_area
												FROM areas ".$cadena2.")
						 UNION	
								SELECT id_documento 
								FROM documento_autor		
								WHERE id_autor IN ( SELECT id_autor 
													FROM autores ".$cadena3.")
													
							UNION		
							        SELECT id_documento 
										FROM documento_palabra		
										WHERE id_palabra IN ( SELECT id_palabra 
										FROM palabraclave ".$cadena4."))");

		if ($query->num_rows()>0) {

			return $query->result();
		}
		else{
				return FALSE;
		}
	
	}

	public function busquedaAvanzada($titulo, $autor, $palabra, $area, $fechapublicacion, $idioma, $formato, $busqTitulo){

	$Fecha = getdate(); 
	$Anio = $Fecha["year"]; 
	$Mes = $Fecha["mon"]; 
    $Dia = $Fecha["mday"];
    $Cadena=$titulo;
	
	if($busqTitulo == 'Alguna de estas palabras')
	{
	   $Cadena = explode(" ",$titulo);
	}
	
	if($fechapublicacion == 'Ultimo mes')
	{
		   $Mes = $Mes - 1;  
		   $Dato1ano = $Menos1."-".$Mes."-".$Dia; 
	}
	if($fechapublicacion == 'Hace 6 meses')
	{
		$Mes = $Mes - 6;
		$Dato1ano = $Menos1."-".$Mes."-".$Dia; 
	}
	if($fechapublicacion == 'Hace un año')
	{
		$Menos1 = $Anio - 1;
	    $Dato1ano = $Menos1."-".$Mes."-".$Dia; 
	}
	if($fechapublicacion == 'Hace 2 años')
	{
		 $Menos2 = $Anio - 2;
		$Dato1ano = $Menos2."-".$Mes."-".$Dia;
	}
	if($fechapublicacion == 'Hace 5 años')
	{
		$Menos5 = $Anio - 5;
		$Dato1ano = $Menos5."-".$Mes."-".$Dia; 
	
	}	
	
	$Fecha = Date('Y/m/d');  //se obtiene fecha actual
	$Anio = date("Y"); 
	$Mes = date("m");
	$Dia = date("d");
	
	$Mesfinal = $Mes - 1; // calculando el ultimo mes
	$fecha = "$Anio/"."0"."$Mesfinal/"."$Dia";

	/*$consulta = $this->db->query("SELECT titulo_principal, descripcion
											FROM documentos
											WHERE titulo_principal LIKE '%$titulo%'
											AND
											id_documento   IN (SELECT id_documento 
											FROM documento_autor		
											WHERE id_autor IN ( SELECT id_autor 
											FROM autores
											WHERE autores.nombre LIKE '%$autor%' 
											OR   autores.apellido LIKE '%$autor%'
											OR autores.acronimo LIKE '%$autor%'))
											AND
											id_documento IN  (SELECT id_documento 
											FROM documento_area		
											WHERE id_area IN ( SELECT id_area 
											FROM areas
											WHERE areas.nombre LIKE '%$area%'))
											AND
											id_documento IN  (SELECT id_documento 
											FROM documentos		
											WHERE idioma LIKE  '%$idioma%'
                                            AND  formato LIKE '%$formato%')");




     $consulta = $this->db->query("SELECT DISTINCT documentos.titulo_principal, documentos.descripcion, autores.nombre, areas.nombre
										FROM documentos  
										INNER JOIN documento_area ON documentos.id_documento = documento_area.id_documento
										INNER JOIN areas ON areas.id_area = documento_area.id_area
										INNER JOIN documento_autor ON documentos.id_documento = documento_autor.id_documento
										INNER JOIN autores ON autores.id_autor = documento_autor.id_autor
										INNER JOIN documento_palabra ON  documentos.id_documento = documento_palabra.id_documento
										INNER JOIN palabraclave ON palabraclave.id_palabra = documento_palabra.id_palabra
										WHERE palabraclave.nombre LIKE '%$palabra%' OR areas.nombre LIKE '%$palabra%' OR autores.nombre LIKE '%$palabra%'
										OR autores.apellido LIKE '%$palabra%' OR autores.acronimo LIKE '%$palabra%'");*/

	$this->db->distinct();
	$this->db->select('documentos.titulo_principal,documentos.descripcion,autores.nombre,areas.nombre AS nombre_areas');
	$this->db->from('documentos');
	$this->db->join('documento_area', 'documentos.id_documento = documento_area.id_documento');
	$this->db->join('areas', 'areas.id_area = documento_area.id_area');
	$this->db->join('documento_autor', 'documentos.id_documento = documento_autor.id_documento');
	$this->db->join('autores', 'autores.id_autor = documento_autor.id_autor');
	$this->db->join('documento_palabra', 'documentos.id_documento = documento_palabra.id_documento');
	$this->db->join('palabraclave', 'palabraclave.id_palabra = documento_palabra.id_palabra');
	$consulta = $this->db->get();

     //print_r($query);
	if ($consulta->num_rows()>0) 
		{
			return $consulta->result();
		}
	else{
			return FALSE;
		}

    }

}
