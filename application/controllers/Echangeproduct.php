<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echangeproduct extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
       
        if(!$this->session->has_userdata('email'))
		{
			redirect('welcome/login');  
		}
		$this->load->model('Model');
    }
    public function index()
	{
		$data = array();
		$data['listeObjet'] = $this->Model->listeObjet();
		$data['listeObjetaechanger'] = $this->Model->listeObjetaechanger();
		$data['listeCategorie'] = $this->Model->listeCategorie();
		$data['email'] = $this->session->userdata('email');
		$data['mdp'] = $this->session->userdata('mdp');
		$data['idUtil'] = $this->session->userdata('idUtil');
        $data['content'] = 'page/echange';
		$this->load->view('index',$data);
	}

    // public function index()
	// {
	// 	$data = array();
	// 	$data['content'] = 'page/echange';
	// 	$this->load->view('index',$data);
	// }
}