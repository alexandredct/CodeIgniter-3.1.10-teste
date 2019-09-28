<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$dados_header = array();
		$dados_header['css'] = array(
			link_tag(CSSPATH . 'home.css')
		);
		$this->load->view('template/header', $dados_header);

		$this->load->view('home/index');

		$dados_footer = array();
		$dados_footer['js'] = array();
		$this->load->view('template/footer', $dados_footer);
	}
}
