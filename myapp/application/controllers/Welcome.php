<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $data['heading'] = "This is integrated with Vue.js!";
    $data['greetings'] = array(
      'english' => 'Hello!',
      'spanish' => '¡Hola!',
      'german' => 'Guten tag!',
    );

		$this->load->view('header');
		$this->load->view('components/app-counter');
    $this->load->view('welcome', $data);
		$this->load->view('footer');
	}
}
