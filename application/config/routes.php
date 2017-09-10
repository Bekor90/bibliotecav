<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'main';
$route['BuscarG'] = 'main/busquedaG';
$route['BuscarA'] = 'main/busquedaA';
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
