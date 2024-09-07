<?php  

class Result_model extends CI_model
{
	function getdata($table, $id='')
	{
		if ($id=='') {
			// get all data
			$this->db->order_by('id', 'DESC');
			return $this->db->get($table)->result_array();
		} else {
			// get data by id
			$this->db->where('id', $id);
			return $this->db->get($table)->row();
		}
	}

	function getdata_by_name($table, $name, $value)
	{
		// get data by field name
		$this->db->where($name, $value);
		return $this->db->get($table)->result_array();
	}

	// updatedata_by_id - to update data
	function updatedata_by_id($table, $id, $data)
	{
		// note - $data is must be array data
		$this->db->where('id', $id);
		return $this->db->update($table, $data);
	}

	// add_data - to insert data 
	function add_data($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	// delete - to delete data
	function delete($table, $id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($table);
	}

}