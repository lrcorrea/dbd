<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$dados['titulo'] = ("Douglas Basso Duarte - Advocacia");
		$dados['enviou'] = false;
        $this->load->view('home', $dados);
	}

	function send(){

		// $config = Array(
		//   'protocol' => 'smtp',
		//   'smtp_host' => 'ssl://smtp.googlemail.com',
		//   'smtp_port' => 465,
		//   'smtp_user' => 'xxx@gmail.com', // change it to yours
		//   'smtp_pass' => 'xxx', // change it to yours
		//   'mailtype' => 'html',
		//   'charset' => 'iso-8859-1',
		//   'wordwrap' => TRUE
		// );
		
		$data['nome']     = $this->input->post('name');
		$data['email']    = $this->input->post('email');
		$data['fone']    = $this->input->post('phone');
		$mensagem         = $this->input->post('msg');
		
		$this->load->library('email');
		$this->email->from("lucasrodriguescorrea@gmail.com","Douglas Basso Duarte");
		$this->email->to('lucasrodriguescorrea@gmail.com');
		$this->email->subject('Contato encaminhado pelo Website');
		$this->email->message("Nome: " . $data['nome'] . 
							  "\n\n Email: " . $data['email'] . 
							  "\n\n Fone: " . $data['fone'] .
							  "\n\n Mensagem: " .$mensagem);
		
		$this->email->send();
		// $dados['title'] = "Showtime - Contato";
		
		// $dados['meta'] = "<meta name='description' content='' />";
		$dados['titulo'] = ("Douglas Basso Duarte - Advocacia");
		$dados['enviou'] = true;

		
		$this->load->view('home', $dados);
		
		
	}
}
