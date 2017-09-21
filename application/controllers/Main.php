<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{
	 public function __construct()
        {
            parent::__construct();        
            $this->load->helper(array('consultas'));
            $this->load->model('Tbl_documentos');
            $this->load->model('Tbl_areas');
            $this->load->model('Tbl_palabras');
            $this->load->model('Tbl_autores');
            $this->load->model('Tbl_documentoArea');  
            $this->load->model('Tbl_documentoAutor');
            $this->load->model('Tbl_documentoPalabra');
        }


	public function index()
	{
		$data = array('result' => '', 'resultAvanzada' =>'', 'tabpane' =>'');	
		$this->load->view('home', $data );	
	}

	//vistas 

	public function inicio()
	{
		if ($this->ion_auth->logged_in())
		{
			//pendiente pasar nombre de usuario
			$titulo = array('titulo' => 'Bienvenido');
			$this->load->view('headers/headertemplate');
			$this->load->view('headers/menutemplate', $titulo);
			$this->load->view('secciontemplate');
			$this->load->view('cierretemplate');			
			$this->load->view('footer/footertemplate');	
		}
	else{
			redirect('Ingresar');
	}
		
		
	}

	public function registroCatalogacion()
	{

		$titulo = array('titulo' => 'Registrar Catalogacion');
		$this->load->view('headers/headertemplate');
		$this->load->view('headers/menutemplate', $titulo);
		$this->load->view('secciontemplate');
		$this->load->view('registrarCatalogacion');
		$this->load->view('cierretemplate');			
		$this->load->view('footer/footertemplate');
	}

	public function registroArea()
	{
		$titulo = array('titulo' => 'Registrar Area');
		$this->load->view('headers/headertemplate');
		$this->load->view('headers/menutemplate', $titulo);
		$this->load->view('secciontemplate');
		$this->load->view('registrarArea');
		$this->load->view('cierretemplate');			
		$this->load->view('footer/footertemplate');
	}

	public function registroAutor()
	{	 
		$titulo = array('titulo' => 'Registrar Autor');
		$this->load->view('headers/headertemplate');
		$this->load->view('headers/menutemplate', $titulo);
		$this->load->view('secciontemplate');
		$this->load->view('registrarArea');
		$this->load->view('cierretemplate');			
		$this->load->view('footer/footertemplate');
	}

	public function registroPalabra()
	{
		$titulo = array('titulo' => 'Registrar Palabra');
		$this->load->view('headers/headertemplate');
		$this->load->view('headers/menutemplate', $titulo);
		$this->load->view('secciontemplate');
		$this->load->view('registrarArea');
		$this->load->view('cierretemplate');			
		$this->load->view('footer/footertemplate');
	}

	public function tablaEditarCatalogacion()
	{
		$limit = 8;	
		$inicio  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;	
		$result = $this->Tbl_documentos->findDocumentos($inicio, $limit);
		$totalRows = $this->Tbl_documentos->findDocumentos();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'PaginaEditarCatalogacion/';
		$config['uri_segment'] = 2;
		$config['total_rows'] = count($totalRows);
		$config['per_page'] = $limit;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 5;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Siguiente';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config);

		$data = array( 
			'result' =>$result,
			'views' => 'tablaCatalogacion',
			'propiedad' => 'btn btn-info btn-lg',
			'nombreboton' => 'Editar',
			'funcion' => 'FormEditarCatalogacion'
			);

		 $inputname = array();
		 $inputsubmit = array();
		$this->load->view('template', $data, $inputname, $inputsubmit);
	}

	public function tablaEliminarCatalogacion()
	{
		$limit = 8;	
		$inicio  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;	
		$result = $this->Tbl_documentos->findDocumentos($inicio, $limit);
		$totalRows = $this->Tbl_documentos->findDocumentos();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'PaginaEliminarCatalogacion/';
		$config['uri_segment'] = 2;
		$config['total_rows'] = count($totalRows);
		$config['per_page'] = $limit;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 5;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Siguiente';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config);
		$data = array( 
			'result' =>$result,
			'views' => 'tablaCatalogacion',
			'propiedad' => 'btn btn-danger btn-lg',
			'nombreboton' => 'Eliminar',
			'funcion' => 'EliminarCatalogacion'
			);

		 $inputname = array();
		 $inputsubmit = array();
		$this->load->view('template', $data, $inputname, $inputsubmit);
	}

	public function tablaEditarAreas()
	{
		$limit = 8;	
		$inicio  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;	
		$result = $this->Tbl_areas->findAreas($inicio, $limit);
		$totalRows = $this->Tbl_areas->findAreas();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'PaginaEditarArea/';
		$config['uri_segment'] = 2;
		$config['total_rows'] = count($totalRows);
		$config['per_page'] = $limit;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 5;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Siguiente';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config);
		$data = array( 
			'result' =>$result,
			'views' => 'tablaAreas',
			'propiedad' => 'btn btn-info btn-lg',
			'nombreboton' => 'Editar',
			'funcion' => 'FormEditarArea'
			);

	 $inputname = array();
	 $inputsubmit = array();
	$this->load->view('template', $data, $inputname, $inputsubmit);
	}

	public function tablaEliminarAreas()
	{
		$limit = 8;	
		$inicio  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;	
		$result = $this->Tbl_areas->findAreas($inicio, $limit);
		$totalRows = $this->Tbl_areas->findAreas();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'PaginaEliminarCatalogacion/';
		$config['uri_segment'] = 2;
		$config['total_rows'] = count($totalRows);
		$config['per_page'] = $limit;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 5;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Siguiente';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config);
		$data = array( 
			'result' =>$result,
			'views' => 'tablaAreas',
			'propiedad' => 'btn btn-danger btn-lg',
			'nombreboton' => 'Eliminar',
			'funcion' => 'EliminarArea'
			);

		 $inputname = array();
		 $inputsubmit = array();
		$this->load->view('template', $data, $inputname, $inputsubmit);
	}

	public function tablaEditarAutores()
	{
		$limit = 8;	
		$inicio  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;	
		$result = $this->Tbl_autores->findAutores($inicio, $limit);
		$totalRows = $this->Tbl_autores->findAutores();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'PaginaEditarAutores/';
		$config['uri_segment'] = 2;
		$config['total_rows'] = count($totalRows);
		$config['per_page'] = $limit;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 5;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Siguiente';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config);
		$data = array( 
			'result' =>$result,
			'views' => 'tablaAutores',			
			'propiedad' => 'btn btn-info btn-lg',
			'nombreboton' => 'Editar',
			'funcion' => 'FormEditarAutor'
			);

	 $inputname = array();
	 $inputsubmit = array();
	$this->load->view('template', $data, $inputname, $inputsubmit);
	}

	public function tablaEliminarAutores()
	{
		$limit = 8;	
		$inicio  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;	
		$result = $this->Tbl_autores->findAutores($inicio, $limit);
		$totalRows = $this->Tbl_autores->findAutores();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'PaginaEliminarAutores/';
		$config['uri_segment'] = 2;
		$config['total_rows'] = count($totalRows);
		$config['per_page'] = $limit;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 5;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Siguiente';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config);
		$data = array( 
			'result' =>$result,
			'views' => 'tablaAutores',
			'propiedad' => 'btn btn-danger btn-lg',
			'nombreboton' => 'Eliminar',
			'funcion' => 'EliminarAutores'
			);

		 $inputname = array();
		 $inputsubmit = array();
		$this->load->view('template', $data, $inputname, $inputsubmit);
	}

	public function tablaEditarPalabras()
	{
		$limit = 8;	
		$inicio  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;	//valido envio de parametros por url de lo contrario el valor por defecto del inicio es 0
		$result = $this->Tbl_palabras->findPalabras($inicio, $limit); //envio inicio y limit de registros
		$totalRows = $this->Tbl_palabras->findPalabras(); //traer todos los registros
		$this->load->library('pagination');		//cargo libreria de paginación

		//configuracion de paginación
		$config['base_url'] = base_url().'PaginaEliminarAutores/';
		$config['uri_segment'] = 2;
		$config['total_rows'] = count($totalRows); 
		$config['per_page'] = $limit;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 5;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Siguiente';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config); //inicializar paginación
		$data = array( 
			'result' =>$result,   		          //registros del modelo de palabrasclave
			'views' => 'tablaPalabras',	           //nombre de la vista 
			'propiedad' => 'btn btn-info btn-lg', //atributos del boton
			'nombreboton' => 'Editar',			  //nombre del boton
			'funcion' => 'FormEditarPalabra'	  //funcion a enviar los datos
			);

		 $inputname = array();
		 $inputsubmit = array();
		$this->load->view('template', $data, $inputname, $inputsubmit);
	}

	public function tablaEliminarPalabras()
	{
		$limit = 8;	
		$inicio  = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;	//valido envio de parametros por url de lo contrario el valor por defecto del inicio es 0
		$result = $this->Tbl_palabras->findPalabras($inicio, $limit); //envio inicio y limit de registros
		$totalRows = $this->Tbl_palabras->findPalabras(); //traer todos los registros
		$this->load->library('pagination');		//cargo libreria de paginación

		//configuracion de paginación
		$config['base_url'] = base_url().'PaginaEliminarAutores/';
		$config['uri_segment'] = 2;
		$config['total_rows'] = count($totalRows); 
		$config['per_page'] = $limit;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 5;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Siguiente';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config); //inicializar paginación
		$data = array( 
			'result' =>$result,
			'views' => 'tablaPalabras',
			'propiedad' => 'btn btn-danger btn-lg',
			'nombreboton' => 'Eliminar',
			'funcion' => 'EliminarPalabra'
			);
		 $inputname = array();
		 $inputsubmit = array();
		$this->load->view('template', $data, $inputname, $inputsubmit);
	}


	public function cargarDatosCatalogacion()
	{
		$id = $this->uri->segment(2);
		$result = $this->Tbl_documentos->obtenerDocumentos($id);
		$idArea = $this->Tbl_documentoArea->findDocumentoArea($id);
		$idArea = $idArea[0]->id_area;	 
		$nameArea = $this->Tbl_areas->findNombreAreas($idArea);
		$idPalabra = $this->Tbl_documentoPalabra->findDocumentoPalabra($id);
		$idPalabra = $idPalabra[0]->id_palabra;	 
		$namePalabra = $this->Tbl_palabras->findNombrePalabra($idPalabra);
		$idAutor = $this->Tbl_documentoAutor->findDocumentoAutor($id);
		$idAutor = $idAutor[0]->id_autor;	 
		$apellidoAutor = $this->Tbl_autores->findApellidoAutor($idAutor);

		if ($result != FALSE) 
		{		
			foreach ($result as $row) {
				$tipo_material = $row->tipo_material;
				$titulo_principal = $row->titulo_principal;
				$titulo_secundario = $row->titulo_secundario;
				$fecha_creacion = $row->fecha_creacion;
				$fecha_catalogacion = $row->fecha_catalogacion;
				$editorial = $row->editorial;
				$idioma = $row->idioma;
				$formato = $row->formato;
				$descripcion = $row->descripcion;
			}

			$data = array( 
				'views' => 'editarCatalogacion',
				'id' => $id,
				'tipo_material' =>$tipo_material,
				'titulo_principal' =>$titulo_principal,
				'titulo_secundario' =>$titulo_secundario,
				'fecha_creacion' =>$fecha_creacion,
				'fecha_catalogacion' =>$fecha_catalogacion,
				'editorial' =>$editorial,
				'idioma' =>$idioma,
				'formato' =>$formato,
				'descripcion' =>$descripcion,
				'nombre_area' => $nameArea[0]->nombre,
				'nombre_palabra' => $namePalabra[0]->nombre,
				'apellido_autor' => $apellidoAutor[0]->apellido
				);
		}
		else
		{
			return FALSE;
		}
			 $inputname = array();
			 $inputsubmit = array();
			$this->load->view('template', $data, $inputname, $inputsubmit);
	}

	public function cargarDatosAreas()
	{
		$id = $this->uri->segment(2);
		$result = $this->Tbl_areas->findNombreAreas($id);
		if ($result != FALSE) 
		{
			foreach ($result as $row) {
				$nombreArea = $row->nombre;
			}

			$data = array( 
				'views' => 'editarArea',
				'id' => $id,
				'nombre' =>$nombreArea
				);
		}
		else
		{
			return FALSE;
		}
		 $inputname = array();
		 $inputsubmit = array();
		$this->load->view('template', $data, $inputname, $inputsubmit);
	}

	public function cargarDatosAutores()
	{
		$id = $this->uri->segment(2);
		$result = $this->Tbl_autores->findIdAutores($id);
		if ($result != FALSE) 
		{
			foreach ($result as $row) {
				$nombreAutor = $row->nombre;
				$apellidoAutor = $row->apellido;
				$acronimo = $row->acronimo;
				$correo = $row->correo;

			}

			$data = array( 
				'views' => 'editarAutor',
				'id' => $id,
				'nombre' => $nombreAutor,
				'apellido' => $apellidoAutor,
				'acronimo' => $acronimo,
				'correo' => $correo
				);
		}
		else
		{
			return FALSE;
		}
		 $inputname = array();
		 $inputsubmit = array();
		$this->load->view('template', $data, $inputname, $inputsubmit);
	}

	public function cargarDatosPalabras()
	{
		$id = $this->uri->segment(2);
		$result = $this->Tbl_palabras->findNombrePalabra($id);
		if ($result != FALSE) 
		{
			foreach ($result as $row) {
				$nombrePalabra = $row->nombre;
			}

			$data = array( 
				'views' => 'editarPalabra',
				'id' => $id,
				'nombre' =>$nombrePalabra
				);
		}
		else
		{
			return FALSE;
		}
		 $inputname = array();
		 $inputsubmit = array();
		$this->load->view('template', $data, $inputname, $inputsubmit);
	}


	//búsquedas

	public function busquedaG()
	{
		$data = array();
		$query = $this->input->post('palabra', TRUE);

		 if ($query) {     //valido que si enviaron palabra
		 	$result = $this->Tbl_documentos->busquedaGeneral($query);  //ejecuto el query con la palabra
		 	if($result != FALSE)
		 	{
				$data = array('result' =>$result, 'resultAvanzada' =>'');
		 	}
		 	else
		 	{
		 		$data = array('result' => '', 'resultAvanzada' =>'');
		 	}
		 }
		 else{
		 	$data = array('result' => '', 'resultAvanzada' =>'');
		 }


		$this->load->view('headers/header');
		$this->load->view('home', $data );		
		$this->load->view('footer/footer');	
	}

	public function busquedaA()
	{

		$titulo = $this->input->post('titulo', TRUE);
		$autor = $this->input->post('autor', TRUE);
		$palabraClav = $this->input->post('palabraClav', TRUE);
		$area = $this->input->post('area', TRUE);
		$fechaPublicacion = $this->input->post('fechaPublicacion', TRUE);
		$idioma = $this->input->post('idioma', TRUE);
		$formato = $this->input->post('formato', TRUE);
		$busqTitulo = $this->input->post('configuracion', TRUE);

		if(!empty($titulo))
		{
			$titulo = strtolower($titulo); // Primero Convertimos la cadena a miniscula metodo srtolower 
			$titulo = str_replace(","," ",$titulo);  // reemplazo las comas por espacios
			$titulo= str_replace("."," ",$titulo);  // reemplazo los puntos por espacios
		}
		if(!empty($busqTitulo))
		{
			$busqTitulo = strtolower($busqTitulo); // Primero Convertimos la cadena a miniscula metodo srtolower 
			$busqTitulo = str_replace(","," ",$busqTitulo);  // reemplazo las comas por espacios
			$busqTitulo= str_replace("."," ",$busqTitulo);  // reemplazo los puntos por espacios
		}
		if(!empty($autor))
		{
			$autor = strtolower($autor); // Primero Convertimos la cadena a miniscula metodo srtolower 
			$autor= str_replace(","," ",$autor);  // reemplazo los puntos por espacios
			$autor= str_replace("."," ",$autor);  // reemplazo los puntos por espacios
		}
		if(!empty($area))
		{
			$area = strtolower($area); // Primero Convertimos la cadena a miniscula metodo srtolower
			$area= str_replace(","," ",$area);  // reemplazo los puntos por espacios
			$area= str_replace("."," ",$area);  // reemplazo los puntos por espacios
		}
		if(!empty($palabraClav))
		{
			$palabraClav = strtolower($palabraClav); // Primero Convertimos la cadena a miniscula metodo srtolower 
			$palabraClav= str_replace(","," ",$palabraClav);  // reemplazo los puntos por espacios
			$palabraClav= str_replace("."," ",$palabraClav);  // reemplazo los puntos por espacios
		}
		if(!empty($idioma))
		{
			$idioma = strtolower($idioma); // Primero Convertimos la cadena a miniscula metodo srtolower
			$idioma= str_replace(","," ",$idioma);  // reemplazo los puntos por espacios
			$idioma= str_replace("."," ",$idioma);  // reemplazo los puntos por espacios
		}
		if(!empty($formato))
		{
			$formato = strtolower($formato); // Primero Convertimos la cadena a miniscula metodo srtolower 
			$formato= str_replace(","," ",$formato);  // reemplazo los puntos por espacios
			$formato= str_replace("."," ",$formato);  // reemplazo los puntos por espacios
		}

		if(!empty($fechaPublicacion))
		{
			$fechaPublicacion= str_replace(","," ",$fechaPublicacion);  // reemplazo los puntos por espacios
			$fechaPublicacion= str_replace("."," ",$fechaPublicacion);  // reemplazo los puntos por espacios
		}

		$resultAvanzada = $this->Tbl_documentos->busquedaAvanzada($titulo, $autor, $palabraClav, $area, $fechaPublicacion, $idioma, $formato, $busqTitulo); 
		
		if($resultAvanzada != FALSE)
		 	{
				$data = array('result' =>'', 'resultAvanzada' =>$resultAvanzada);
		 	}
		 	else
		 	{
		 		$data = array('result' =>'', 'resultAvanzada' => '', 'tabpane' =>'');
		 	}
		$this->load->view('headers/header');
		$this->load->view('home', $data);
		$this->load->view('footer/footer');
	}

	public function findAreas()
	{
		$query = $this->Tbl_areas->findAreas();
		$data = array(
			'areas' => $query); 

		//$this->load->view('headers/header');
		//$this->load->view('home', $data);
		//$this->load->view('footer/footer');	
	}

	public function findPalabrasClave()
	{
		$palabrasClave = $this->Tbl_palabras->palabrasClave();

		$data = array(
			'palabras' => $palabrasClave); 
		//$this->load->view('template', $data);
	}

	public function guardarCatalogacion()
	{
		$this->load->library('form_validation');
				
    	// reglas de validacion
	    $this->form_validation->set_rules('tipoMaterial', 'tipomaterial', 'trim|required|alpha|min_length[2]|max_length[30]');
	    $this->form_validation->set_rules('titulo_principal', 'titulo_principal', 'trim|required|min_length[2]|max_length[200]');
	     $this->form_validation->set_rules('tituloSecundario', 'tituloSecundario', 'trim|required|min_length[2]|max_length[100]');
	    $this->form_validation->set_rules('editorial', 'editorial', 'trim|required|min_length[2]|max_length[50]');
	    $this->form_validation->set_rules('descripcion', 'descripcion', 'trim|required|min_length[2]|max_length[200]');
	    $this->form_validation->set_message('required','El campo es obligatorio'); 
        $this->form_validation->set_message('alpha','El campo deben tener solo por letras');
        $this->form_validation->set_message('min_length[3]','El campo debe tener mas de 3 caracteres'); 
             
	    
	    if ($this->form_validation->run() == FALSE) {
	        // no pasa validacion
	        
	    }
	    else {

	    	$dataDocumento = array(
			'tipo_material' => $this->input->post('tipoMaterial', TRUE),
			'titulo_principal' => $this->input->post('tituloPrincipal', TRUE),
			'titulo_secundario' => $this->input->post('tituloSecundario', TRUE),
			'editorial' => $this->input->post('editorial', TRUE),
			'fecha_catalogacion' => $this->input->post('fechaCatalogacion', TRUE),
			'fecha_creacion' => $this->input->post('fechaCreacion', TRUE),
			'idioma' => $this->input->post('idioma', TRUE),						
			'derechos_autor' => $this->input->post('autores', TRUE),			
			'formato' => $this->input->post('formato', TRUE),
			'descripcion' => $this->input->post('descripcion', TRUE)
		);

			$area = $this->input->post('area', TRUE);
			$palabraClav = $this->input->post('palabras', TRUE);

	        // validacion exitosa
	       $this->Tbl_documentos->guardarDocumento($dataDocumento);	//inserto documento
		   $idDocumento = $this->Tbl_documentos->UltimoidDocumento();  // ultimo id de documento
		   $this->Tbl_areas->guardarArea($area);					//inserto area
		   $idArea = $this->Tbl_areas->UltimoidArea();		// ultimo id de area			
		   $this->Tbl_documentoArea->guardarDocumentoArea($idDocumento, $idArea);//guardo id documento y area $personas[$dni];
			$idAutor = $this->Tbl_autores->findIdAutor($dataDocumento['derechos_autor']); //obtengo id de autor
			//sacar datos de funcion result()
			foreach ($idAutor as $row) {
			$idautor = $row->id_autor;
			}				
			
		  $this->Tbl_documentoAutor->guardarDocumentoAutor($idDocumento, $idautor);//guardo id documento, aut
		  $idpalabra = $this->Tbl_palabras->findIdPalabra($palabraClav);

		  //sacar datos de funcion result()
		  foreach ($idpalabra as $row) {
    		$idpalabra = $row->id_palabra;
			}
		 // echo $idDocumento;
		  $this->Tbl_documentoPalabra->guardarDocumentoPalabra($idDocumento, $idpalabra);

	    }
		 
		redirect('RegistrarCatalogacion');
	}

	public function saveArea()
	{
         $this->load->library('form_validation');
		  // reglas de validacion
	    $this->form_validation->set_rules('nombreArea', 'Nombrearea', 'required|strip_tags|min_length[2]|max_length[50]');
	    $this->form_validation->set_message('required', 'Debe completar este campo');
	    $this->form_validation->set_message('min_length[3]','El campo debe tener mas de 3 caracteres');
	    $this->form_validation->set_message('max_length[50]','El campo debe tener menos de 50 caracteres');
	  
	     if ($this->form_validation->run() == FALSE) 
	     {
	     	 // no pasa validacion
	       echo validation_errors (); 	  
	       
	    }
	    else 
	    {	
	    	$area = $this->input->post('nombreArea', TRUE);	     
		     $this->Tbl_areas->guardarArea($area);   
		     redirect('RegistrarArea'); 	
		}
		
	}
	public function saveAutor()
	{
		$this->load->library('form_validation');
		 $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha|min_length[2]|max_length[50]');
		 $this->form_validation->set_rules('apellido', 'apellido', 'trim|required|alpha|min_length[2]|max_length[50]');
		 $this->form_validation->set_rules('correo', 'correo', 'trim|required|alpha|min_length[2]|valid_email');
		 $this->form_validation->set_rules('acronimo', 'acronimo', 'trim|required|alpha|min_length[2]|max_length[30]');

		 $this->form_validation->set_message('valid_email','El campo debe ser un email correcto');
		 $this->form_validation->set_message('alpha','El campo deben tener solo por letras');
		 $this->form_validation->set_message('required', 'Debe completar este campo');

		 if ($this->form_validation->run() == FALSE) {
		 	 echo validation_errors (); 	 		 	
		 }
		 else 
		 {	
		 	$nombre = $this->input->post('nombre', TRUE);
			$apellido = $this->input->post('apellido', TRUE);
			$correo = $this->input->post('correo', TRUE);
			$acronimo = $this->input->post('acronimo', TRUE);	
			$this->Tbl_autores->guardarAutor($nombre, $apellido, $correo, $acronimo);
			redirect('RegistrarAutor');
		}

		
	}

	public function savePalabra()
	{
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('palabraClave', 'palabraClave', 'trim|required|alpha|min_length[3]|max_length[50]');
		$this->form_validation->set_message('required', 'Debe completar este campo');
		$this->form_validation->set_message('alpha','El campo deben tener solo por letras');
	    $this->form_validation->set_message('min_length[3]','El campo debe tener mas de 3 caracteres');
	    $this->form_validation->set_message('max_length[50]','El campo debe tener menos de 50 caracteres');
	  
	     if ($this->form_validation->run() == FALSE) {
	        // no pasa validacion
	    	echo validation_errors (); 
	    }
	    else {
			$palabra = $this->input->post('palabraClave', TRUE);
			$this->Tbl_palabras->guardarPalabra($palabra);
			redirect('RegistrarPalabra');
		}		
		
	}

	public function updateCatalogacion()
	{
		$dataDocumento = array(
			
			'tipo_material' => $this->input->post('tipoMaterial', TRUE),
			'titulo_principal' => $this->input->post('tituloPrincipal', TRUE),
			'titulo_secundario' => $this->input->post('tituloSecundario', TRUE),
			'editorial' => $this->input->post('editorial', TRUE),
			'fecha_catalogacion' => $this->input->post('fechaCatalogacion', TRUE),
			'fecha_creacion' => $this->input->post('fechaCreacion', TRUE),
			'idioma' => $this->input->post('idioma', TRUE),						
			'derechos_autor' => $this->input->post('autores', TRUE),			
			'formato' => $this->input->post('formato', TRUE),
			'descripcion' => $this->input->post('descripcion', TRUE)
		);

			$idDocumento = $this->input->post('id', TRUE);
			$area = $this->input->post('area', TRUE);
			$palabraClav = $this->input->post('palabras', TRUE);

			$this->form_validation->set_rules('tipoMaterial', 'tipoMaterial', 'trim|required|alpha|min_length[2]|maxlength[30]');
	    	$this->form_validation->set_rules('titulo_principal', 'titulo_principal', 'trim|required|min_length[2]|maxlength[200]');
	     	$this->form_validation->set_rules('tituloSecundario', 'tituloSecundario', 'trim|required|min_length[2]|maxlength[100]');
	    	$this->form_validation->set_rules('editorial', 'editorial', 'trim|required|min_length[2]|maxlength[50]');
	    	$this->form_validation->set_rules('descripcion', 'descripcion', 'trim|required|min_length[2]|maxlength[200]');
	    	$this->form_validation->set_message('required','El campo es obligatorio'); 
        	$this->form_validation->set_message('alpha','El campo deben tener solo por letras');
        	$this->form_validation->set_message('min_length[3]','El campo debe tener mas de 3 caracteres'); 
             
	
		 if ($this->form_validation->run() == FALSE) {
	        // no pasa validacion
	        
	    }
	    else {
		    $this->Tbl_documentos->udpdateDocumento($dataDocumento, $idDocumento);	//inserto documento
		    $idArea = $this->Tbl_areas->findIdAreas($area);	 //busco id por nombre
		    $idArea= $idArea[0]->id_area;		
	  		$this->Tbl_documentoArea->updateDocumenArea($idDocumento, $idArea); 
			$idAutor = $this->Tbl_autores->findIdAutor($dataDocumento['derechos_autor']); //obtengo array de id de autor
    		$idautor = $idAutor[0]->id_autor;	//obtengo id de autor		
		    $this->Tbl_documentoAutor->updateDocumenAutor($idDocumento, $idautor);//actualizo id documento, autor
		    $idpalabra = $this->Tbl_palabras->findIdPalabra($palabraClav); //obtengo array de id de palabra
    	    $idpalabra = $idpalabra[0]->id_palabra; //obtengo id de palabra	
		    $this->Tbl_documentoPalabra->updateDocumenPalabra($idDocumento, $idpalabra);
		}				 
		redirect('VerEditarCatalogacion');		
	}

	public function updateArea()
	{
		$dataArea = array(
			'nombre' => $this->input->post('nombreArea', TRUE)
			);
		$idArea = $this->input->post('id', TRUE);

		 $this->form_validation->set_rules('nombreArea', 'nombreArea', 'trim|required|alpha|min_length[2]|maxlength[50]');
	     $this->form_validation->set_message('required', 'Debe completar este campo');
	     $this->form_validation->set_message('alpha','El campo deben tener solo por letras');
	     $this->form_validation->set_message('min_length[3]','El campo debe tener mas de 3 caracteres');
	      $this->form_validation->set_message('maxlength[50]','El campo debe tener menos de 50 caracteres');
	  
	    if ($this->form_validation->run() == FALSE) {
	        // no pasa validacion	
	    }
	    else {
		
			$this->Tbl_areas->udpdateArea($dataArea, $idArea);	//actualizo datos
		}
				 
		redirect('VerEditarArea');	
	}

	public function updateAutor()
	{
		$dataAutor = array(
			'nombre' => $this->input->post('nombre', TRUE),
			'apellido' => $this->input->post('apellido', TRUE),
			'correo' => $this->input->post('correo', TRUE),
			'acronimo' => $this->input->post('acronimo', TRUE)
			);
		$idAutor = $this->input->post('id', TRUE);

		 $this->form_validation->set_rules('nombre', 'nombre', 'trim|required|alpha|min_length[2]|maxlength[50]');
		 $this->form_validation->set_rules('apellido', 'apellido', 'trim|required|alpha|min_length[2]|maxlength[50]');
		 $this->form_validation->set_rules('correo', 'correo', 'trim|required|alpha|min_length[2]|valid_email');
		 $this->form_validation->set_rules('acronimo', 'acronimo', 'trim|required|alpha|min_length[2]|maxlength[30]');
		 $this->form_validation->set_message('valid_email','El campo debe ser un email correcto');
		 $this->form_validation->set_message('alpha','El campo deben tener solo por letras');
		 $this->form_validation->set_message('required', 'Debe completar este campo');

		 if ($this->form_validation->run() == FALSE) {
		 	
		 }
		 else 
		 {	
			$this->Tbl_autores->udpdateAutor($dataAutor, $idAutor);	//actualizo datos
		}
				 
		redirect('VerEditarAutores');	
	}

	public function updatePalabra()
	{
		$dataPalabra = array(
			'nombre' => $this->input->post('palabraClave', TRUE)
			);
		$idPalabra = $this->input->post('id', TRUE);

		$this->form_validation->set_rules('palabraClave', 'palabraClave', 'trim|required|alpha|min_length[2]|maxlength[50]');
		$this->form_validation->set_message('required', 'Debe completar este campo');
		$this->form_validation->set_message('alpha','El campo deben tener solo por letras');
	    $this->form_validation->set_message('min_length[3]','El campo debe tener mas de 3 caracteres');
	    $this->form_validation->set_message('maxlength[50]','El campo debe tener menos de 50 caracteres');
	  
	     if ($this->form_validation->run() == FALSE) {
	        // no pasa validacion
	    
	    }
	    else {

			$this->Tbl_palabras->udpdatePalabra($dataPalabra, $idPalabra);	//actualizo datos
		 }				 
		redirect('VerEditarPalabra');	
	}


	public function deleteCatalogacion()
	{
		$id = $this->uri->segment(2);

		if ($id) 
		{ 
			$this->Tbl_documentos->deleteDocumento($id);	//actualizo datos
		}
		else
		{
		 	$data = FALSE;
		 }				 
		redirect('VerEliminarCatalogacion');		
	}
	public function deleteAreas()
	{
		$id = $this->uri->segment(2);

		if ($id) 
		{ 
			$this->Tbl_areas->deleteArea($id);	//actualizo datos
		}
		else
		{
		 	$data = FALSE;
		 }				 
		redirect('VerEliminarArea');		
	}

	public function deleteAutores()
	{
		$id = $this->uri->segment(2);

		if ($id) 
		{ 
			$this->Tbl_autores->deleteAutor($id);	//actualizo datos
		}
		else
		{
		 	$data = FALSE;
		 }				 
		redirect('VerEliminarAutores');		
	}

	public function deletePalabra()
	{
		$id = $this->uri->segment(2);

		if ($id) 
		{ 
			$this->Tbl_palabras->deletePalabra($id);	//actualizo datos
		}
		else
		{
		 	$data = FALSE;
		 }				 
		redirect('VerEliminarPalabra');		
	}
	
}
