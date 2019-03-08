<?php

 class Suportivo extends CI_Controller {

 	function __contructs(){

 		$this->load->model('GambarModel');

	}

 	public function page(){
 		echo "ini coba muncul apa engga";
 	}

 	public function index(){
 		$this->load->view('v-landingpage');
 	}
}
?>
