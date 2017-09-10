<?php 
class student_model extends CI_model{
	private $table= "students";
	public function create($data){
		$this->db->insert($this->table,$data);
		return TRUE;
		}
	public function read($condition=null){
	// $this->db->select('*');
	// $this->db->from($this->table);

	if(isset($condition))
		{
		$this->db->where($condition);
		}

	$query=$this->db->get($this->table);
	return $query->result_array();
	//this-db->join('table2',table1.key=table2.fk,'inner');
	//if(isset($condition))
	//this->db->order_by(field_name);
	}
	public function update($info){
		
		$this->db->where('idno',$info['idno']);
		$this->db->update($this->table,$info);
		
	}
	public function delete_student($condition){	
		$this->db->where($condition);
		$this->db->delete($this->table);
		return TRUE;	
	}


}


?>