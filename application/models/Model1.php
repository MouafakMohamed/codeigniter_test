<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model1 extends CI_Model {

   public function get($table){
         $db1 = $this->load->database('db1', TRUE);
         $query = $db1->get($table);
         return $query->result() ;  
     }
   public function update($user,$id,$table,$data)
   {
    $db1 = $this->load->database('db1', TRUE);
    $db1->where($user, $id);
    $query = $db1->update($table,$data);
   }
   public function get_by($table,$user,$id)
   {
    $db1 = $this->load->database('db1', TRUE);
    $db1->where($user, $id);
    $query = $db1->get($table);
    return $query->result() ;
   }
   public function like2($table,$user,$user1,$id)
   {
    $db1 = $this->load->database('db1', TRUE);
    $db1->like($user, $id);
    $db1->or_like($user1, $id);
    $query = $db1->get($table);
    return $query->result() ;
   }
   public function add($table,$data)
   {
    $db1 = $this->load->database('db1', TRUE);
    $query = $db1->insert($table,$data);
   }
   public function delete($table,$user,$id)
   {
    $db1 = $this->load->database('db1', TRUE);
    $db1->where($user, $id);
    $query = $db1->delete($table);
   }
     public function get_by_number($num,$table) 
	 { 
    $db1 = $this->load->database('db1', TRUE);
		$db1->limit($num);
		$db1->order_by('id','desc');
		$query = $db1->get($table);
		return $query->result() ;
	 }
	public function get_by_limit($id,$num,$table)
	{
      $db1 = $this->load->database('db1', TRUE);
             $db1->limit($num,$id);
		$query = $db1->get($table);
		return $query->result() ;
	}

    public function get_by2($table,$user,$id,$user1,$id1)
   {
    $db1 = $this->load->database('db1', TRUE);
    $db1->where($user, $id);
    $db1->where($user1, $id1);
    $query = $db1->get($table);
    return $query->result() ;
   }

   public function get_by3($table,$user,$id,$user1,$id1,$user2,$id2)
   {
    $db1 = $this->load->database('db1', TRUE);
    $db1->where($user, $id);
    $db1->where($user1, $id1);
    $db1->where($user2, $id2);
    $query = $db1->get($table);
    return $query->result() ;
   }
}
?>
