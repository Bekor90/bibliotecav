<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

	 /* @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('error');
	}
}
