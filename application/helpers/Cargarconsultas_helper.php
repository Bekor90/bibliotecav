<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

function getAreas()
{
	$ci =& get_instance();
	$query= $ci->db->get('areas');
	return $query->result();
}

function getPalabras()
{
	$cis =& get_instance();
	$query= $cis->db->get('palabraclave');
	return $query->result();
}

function getAutores()
{
	$ins =& get_instance();
	$query= $ins->db->get('autores');
	return $query->result();
}

?>