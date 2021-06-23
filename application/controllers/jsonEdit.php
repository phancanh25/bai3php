<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jsonEdit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('json_model');
		$dl = $this->json_model->showData();
		$dl = json_decode($dl,true);
		$dl = array('mangdl' => $dl);
		$this->load->view('jsonEdit_view', $dl);
		// echo "<pre>";
		// var_dump($dl);
		// echo "<pre>";

	}
	public function do_edit()
	{
		$ten = $this->input->post('ten');
		$sdt = $this->input->post('sdt');
		$dl = array();
		for($i = 0;$i<count($ten);$i++){
			$trunggian = array();
			$trunggian['ten'] = $ten[$i];
			$trunggian['sdt'] = $sdt[$i];
			array_push($dl,$trunggian);
		}
		$dl = json_encode($dl);
		$this->load->model('json_model');
		$this->json_model->updateData($dl);

	}
}

/* End of file jsonEdit.php */
/* Location: ./application/controllers/jsonEdit.php */