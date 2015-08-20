<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		//Alternative to isset in codeigniter!!!  
		if(!$this->session->userdata('number')){
			$this->session->set_userdata('number',rand(1,100));
		}
		$this->load->view('index');
	}

	public function check_session() {

		if($this->input->post('guess') < $this->session->userdata['number']){
			
			$this->session->set_flashdata('wrong','Too Low');
			
		}
		else if($this->input->post('guess') > $this->session->userdata['number']) {
			
			$this->session->set_flashdata('wrong','Too High');
		}
		else { 
			
			$this->session->set_flashdata('correct','Correct!!');
		}	
		redirect('/');
	}

	public function reset() {
		$this->session->unset_userdata('number');
		redirect('/');
	}





}

//end of main controller