<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('json_model');
	}

	public function index()
	{
		// $onecontact = array(
		// 	'ten'=>"Canh",
		// 	'sdt'=>"123"
		// );
		// $twocontact = array(
		// 	'ten'=>"Canh",
		// 	'sdt'=>"123"
		// );
		// $contact = array();
		// array_push($contact, $onecontact);
		// array_push($contact, $twocontact);
		// $array_encode = json_encode($contact);
		// echo "<pre>";
		// var_dump($array_encode);
		// echo "<pre>";
		// $array_decode = json_decode($array_encode);
		// echo "<pre>";
		// var_dump($array_decode);
		// echo "<pre>";

		// $this->load->model('json_model');
		// $this->json_model->insertData('contact', $array_encode);		
		$ketqua = $this->json_model->showData();
		$ketqua = json_decode($ketqua);
		$ketqua = array('arrketqua' => $ketqua);
		$this->load->view('showData', $ketqua);
	}
	public function xoa_json($sdt)
	{
		$dulieu = $this->json_model->showData();
		$dulieu = json_decode($dulieu);
		foreach ($dulieu as $key => $value) {
			if($value->sdt == $sdt){
				unset($dulieu[$key]);
			}
		}
		$dulieu = json_encode($dulieu);
		echo $dulieu = $this->json_model->updateData($dulieu);
	}
	public function do_add()
	{
		$ten = $this->input->post('ten');
		$sdt = $this->input->post('sdt');
		$dulieu = $this->json_model->showData();
		$dulieu = json_decode($dulieu,true);
		$con = array(
			'ten' => $ten,
			'sdt' => $sdt
		);
		array_push($dulieu,$con);
		$dulieu = json_encode($dulieu);
		$this->json_model->updateData($dulieu);
	}

	
}

/* End of file json.php */
/* Location: ./application/controllers/json.php */