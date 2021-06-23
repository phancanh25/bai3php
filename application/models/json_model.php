<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertData($ten, $data)
	{
		$mangdl = array(
			'ten' => $ten,
			'data' => $data
		);
		$this->db->insert('json', $mangdl);
		return $this->db->insert_id();
	}
	public function showData()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('json');
		$dulieu = $dulieu->result_array();
		foreach ($dulieu as $value) {
			$kq = $value['data'];
		}
		return $kq;
	}
	public function updateData($data)
	{
		$this->db->where('ten', 'contact');
		$dulieu = array(
			'ten' => 'contact',
			'data' => $data
		);
		return $this->db->update('json', $dulieu);
	}
}

/* End of file json_model.php */
/* Location: ./application/models/json_model.php */