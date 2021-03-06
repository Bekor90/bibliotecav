<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Main';
$route['BuscarG'] = 'Main/busquedaG';
$route['BuscarA'] = 'Main/busquedaA';
$route['Ingresar'] = 'Auth/login';
$route['OlvidePassword'] = 'Auth/forgot_password';
$route['Salir'] = 'Auth/logout';
$route['Inicio'] = 'Main/inicio';
$route['RegistrarCatalogacion'] = 'Main/registroCatalogacion';
$route['GuardarCatalogacion'] = 'Main/guardarCatalogacion';
$route['VerEditarCatalogacion'] = 'Main/tablaEditarCatalogacion';
$route['PaginaEditarCatalogacion/(:num)'] = 'Main/tablaEditarCatalogacion/';
$route['FormEditarCatalogacion/(:num)'] = 'Main/cargarDatosCatalogacion';
$route['EditarCatalogacion'] = 'Main/updateCatalogacion';
$route['VerEliminarCatalogacion'] = 'Main/tablaEliminarCatalogacion';
$route['PaginaEliminarCatalogacion/(:num)'] = 'Main/tablaEliminarCatalogacion/';
$route['EliminarCatalogacion/(:num)'] = 'Main/deleteCatalogacion';
$route['RegistrarArea'] = 'Main/registroArea';
$route['GuardarArea'] = 'Main/saveArea';
$route['VerEditarArea'] = 'Main/tablaEditarAreas';
$route['PaginaEditarArea/(:num)'] = 'Main/tablaEditarAreas/';
$route['FormEditarArea/(:num)'] = 'Main/cargarDatosAreas';
$route['EditarArea'] = 'Main/updateArea';
$route['VerEliminarArea'] = 'Main/tablaEliminarAreas';
$route['PaginaEliminarArea/(:num)'] = 'Main/tablaEliminarArea/';
$route['EliminarArea/(:num)'] = 'Main/deleteAreas';
$route['RegistrarAutor'] = 'Main/registroAutor';
$route['GuardarAutor'] = 'Main/saveAutor';
$route['VerEditarAutores'] = 'Main/tablaEditarAutores';
$route['FormEditarAutor/(:num)'] = 'Main/cargarDatosAutores';
$route['EditarAutor'] = 'Main/updateAutor';
$route['PaginaEditarAutores/(:num)'] = 'Main/tablaEditarAutores/';
$route['VerEliminarAutores'] = 'Main/tablaEliminarAutores';
$route['PaginaEliminarAutores/(:num)'] = 'Main/tablaEliminarAutores/';
$route['EliminarAutores/(:num)'] = 'Main/deleteAutores';
$route['RegistrarPalabra'] = 'Main/registroPalabra';
$route['VerEditarPalabra'] = 'Main/tablaEditarPalabras';
$route['PaginaEditarPalabra/(:num)'] = 'Main/tablaEditarPalabras/';
$route['FormEditarPalabra/(:num)'] = 'Main/cargarDatosPalabras';
$route['EditarPalabra'] = 'Main/updatePalabra';
$route['VerEliminarPalabra'] = 'Main/tablaEliminarPalabras';
$route['PaginaEliminarPalabra/(:num)'] = 'Main/tablaEliminarPalabras/';
$route['EliminarPalabra/(:num)'] = 'Main/deletePalabra';
$route['GuardarPalabra'] = 'Main/savePalabra';
$route['RegistrarUsuario'] = 'Auth/create_user';
$route['404_override'] = 'error';
$route['translate_uri_dashes'] = FALSE;
