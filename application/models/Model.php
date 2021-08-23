<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

   public function get($table){
         $this->db->order_by("id", "asc");
         $query = $this->db->get($table);
         return $query->result() ;  
     }
    public function get1(){
         $db1 = $this->load->database('db1', TRUE);
         $query = $db1->get('entrer');
         return $query->result() ;  
     }
   public function update($user,$id,$table,$data)
   {
    $this->db->where($user, $id);
    $query = $this->db->update($table,$data);
   }
   public function get_by($table,$user,$id)
   {
    
    $this->db->where($user, $id);
             $this->db->order_by('id','desc');
    $query = $this->db->get($table);
    return $query->result() ;
   }
   public function like2($table,$user,$user1,$id)
   {
    $this->db->like($user, $id);
    $this->db->or_like($user1, $id);
    $this->db->order_by('id','desc');
    $query = $this->db->get($table);
    return $query->result() ;
   }
   public function add($table,$data)
   {
    $query = $this->db->insert($table,$data);
   }
   public function delete($table,$user,$id)
   {

    $this->db->where($user, $id);
    $query = $this->db->delete($table);
   }
     public function get_by_number($num,$table) 
	 { 
		$this->db->limit($num);
		$this->db->order_by('id','desc');
		$query = $this->db->get($table);
		return $query->result() ;
	 }
	public function get_by_limit($id,$num,$table)
	{
        $this->db->limit($num,$id);
        $this->db->order_by('id','desc');
		$query = $this->db->get($table);
		return $query->result() ;
	}

    public function get_by2($table,$user,$id,$user1,$id1)
   {
    $this->db->where($user, $id);
    $this->db->where($user1, $id1);
    $this->db->order_by('id','desc');
    $query = $this->db->get($table);
    return $query->result() ;
   }

   public function get_by3($table,$user,$id,$user1,$id1,$user2,$id2)
   {
    $this->db->where($user, $id);
    $this->db->where($user1, $id1);
    $this->db->where($user2, $id2);
    $this->db->order_by('id','desc');
    $query = $this->db->get($table);
    return $query->result() ;
   }
}
?>
